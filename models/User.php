<?php

class User
{
    static public function login($data)
    {
        $username = $data['username'];  // get the username from the data array
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

    // get all users
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE admin = 0');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    //  update user
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, adress = :adress WHERE `user_id` = :user_id');
        $stmt->bindParam(':first_name', $data['first_name']);   // bind the data to the placeholders in the query 
        $stmt->bindParam(':last_name', $data['last_name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':adress', $data['adress']);
        $stmt->bindParam(':user_id', $data['user_id']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;

}
}
