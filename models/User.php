<?php

class User
{
    static public function login($data)
    {
        $username = $data['username'];
        try {
            $query = "SELECT * FROM users WHERE username = :username";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':username' => $username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    static public function register($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO users(first_name, last_name, username, email, password,adress) 
        VALUES (:first_name, :last_name, :username, :email, :password, :adress)');
        $stmt->bindParam(':first_name', $data['first_name']);
        $stmt->bindParam(':last_name', $data['last_name']);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':adress', $data['adress']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }
}
