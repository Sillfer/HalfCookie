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
                $_SESSION["user_id"] = $result->user_id;
                $_SESSION["admin"] = $result->admin;

                if ($result->admin == 1) {
                    // var_dump($_SESSION);
                    // $_SESSION["admin"] = true;
                    Redirect::to('dashboard');
                } else if ($result->admin == 0) {
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
        if ($result === 'ok') {
            Session::set("success", "User registered!");
            Redirect::to("login");
        } else {
            echo $result;
        }
        if ($result === 'error') {

            Session::set("error", "Username is Already Used");
            Redirect::to("login");
        }
    }


    public function logout()
    {
        // Unset all of the session variables.
        unset($_SESSION["logged"]);
        unset($_SESSION["username"]);
        unset($_SESSION["first_name"]);
        unset($_SESSION["last_name"]);
        unset($_SESSION["user_id"]);
        unset($_SESSION["admin"]);
        Redirect::to("login");
    }

    public function addToWhishlist()
    {

        if (isset($_POST["submit"])) {
            $data = array(
                "user_id" => $_SESSION["user_id"],
                "product_id" => $_POST["product_id"]
            );
            $result = Wishlist::add($data);
            if ($result === "ok") {
                Session::set("success", "product added to wishlist!");
                Redirect::to("allCookies");
            } else {
                Session::set("error", "Product already in wishlist!");
                Redirect::to("allCookies");
            }
        }
    }

    public function getAllWishlist()
    {
        $result = Wishlist::getAll();
        return $result;
    }

    public function getUser()
    {
        $result = User::getAll();
        return $result;
    }

    public function unlike($pid)
    {
        $result = Wishlist::remove($pid);
        if ($result === "ok") {
            Session::set("error", "Product removed from your wishlist");
            Redirect::to("wishlist");
        } else {
            Session::set("error", "Product is not in your wishlist");
            Redirect::to("wishlist");
        }
    }

    // update user
    public function updateUser()
    {

        $data = array(
            "first_name" => $_POST["first_name"],
            "last_name" => $_POST["last_name"],
            "email" => $_POST["email"],
            "adress" => $_POST["adress"],
            "user_id" => $_SESSION["user_id"]
        );
        
        $result = User::update($data);
        if ($result === "ok") {
            Session::set("success", "User updated!");
            Redirect::to("home");
        } else {
            Session::set("error", "User not updated!");
            Redirect::to("allCookies");
        }
    }
}
