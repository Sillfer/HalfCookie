<?php
class UsersController
{

    public function auth()
    {
        if (isset($_POST["submit"])) {
            $data["username"] = $_POST["username"];
            $result = User::login($data);
            if ($result->username == $_POST["username"] && password_verify($_POST["password"], $result->password)) {
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $result->username;
                $_SESSION["first_name"] = $result->first_name;
                $_SESSION["last_name"] = $result->last_name;
                $_SESSION["admin"] = $result->admin;
                
                if($result->admin == 1) {
                    // var_dump($_SESSION);
                    // $_SESSION["admin"] = true;
                    Redirect::to('dashboard');
                }else if($result->admin == 0) {
                    Redirect::to("home");
                }
            } else {
                Session::set("error", "Wrong username or password!");
                Redirect::to("login");
            }
        }
    }

    public function registerUser()
    {
        $options = [
            'cost' => 12,   // the default cost is 10
        ];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT, $options);
        $data = array(
            "first_name" => $_POST["first_name"],
            "last_name" => $_POST["last_name"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $password,
            "adress" => $_POST["adress"]
        );
        $result = User::register($data);
        if ($result == 'ok') {
            Session::set("success", "User registered!");
            Redirect::to("login");
        } else {
           echo $result;
        }
    }

    public function logout()
    {
        // Unset all of the session variables.
        unset($_SESSION["logged"]);
        unset($_SESSION["username"]);
        unset($_SESSION["first_name"]);
        unset($_SESSION["last_name"]);
        unset($_SESSION["admin"]);
        Redirect::to("login");
    }
}
