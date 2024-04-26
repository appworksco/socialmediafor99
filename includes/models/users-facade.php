<?php

class UsersFacade extends DBConnection
{

    function fetchUsers()
    {
        $sql = $this->connect()->prepare("SELECT * FROM users_tbl");
        $sql->execute();
        return $sql;
    }

    public function verifyEmailAndPassword($email, $password)
    {
        $sql = $this->connect()->prepare("SELECT email, password FROM users_tbl WHERE email = ? AND password = ?");
        $sql->execute([$email, $password]);
        $count = $sql->rowCount();
        return $count;
    }

    public function verifyEmail($email)
    {
        $sql = $this->connect()->prepare("SELECT email FROM users_tbl WHERE email = ?");
        $sql->execute([$email]);
        $count = $sql->rowCount();
        return $count;
    }

    public function login($email, $password)
    {
        $sql = $this->connect()->prepare("SELECT * FROM users_tbl WHERE email = ? AND password = ?");
        $sql->execute([$email, $password]);
        return $sql;
    }

    function register($payerId, $userType, $firstName, $lastName, $email, $password)
    {
        $sql = $this->connect()->prepare("INSERT INTO users_tbl (payer_id, user_type, first_name, last_name, email, password)VALUES (?, ?, ?, ?, ?, ?)");
        $sql->execute([$payerId, $userType, $firstName, $lastName, $email, $password]);
        return $sql;
    }

    function read()
    {
        $sql = $this->connect()->prepare("SELECT * FROM simply_table");
        $sql->execute();
        return $sql;
    }

    function update($data, $id)
    {
        $sql = $this->connect()->prepare("UPDATE simply_table SET data = '$data' WHERE id = '$id'");
        $sql->execute();
        return $sql;
    }

    function delete($id)
    {
        $sql = $this->connect()->prepare("DELETE FROM simple_table WHERE id = '$id'");
        $sql->execute();
        return $sql;
    }
}
