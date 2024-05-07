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

    function create($data)
    {
        $sql = $this->connect()->prepare("INSERT INTO simply_table VALUES (?)");
        $sql->execute([$data]);
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

    // Card Start

    function fetchManagers()
    {
        $sql = $this->connect()->prepare("SELECT * FROM users_tbl WHERE user_type = 2 ORDER BY id DESC");
        $sql->execute();
        return $sql;
    }

    function register($payerId, $userType, $firstName, $lastName, $email, $password)
    {
        $sql = $this->connect()->prepare("INSERT INTO users_tbl (payer_id, user_type, first_name, last_name, email, password) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->execute([$payerId, $userType, $firstName, $lastName, $email, $password]);
        return $sql;
    }

    function addManager($email, $password, $user_type)
    {
        $sql = $this->connect()->prepare("INSERT INTO users_tbl (email, password, user_type) VALUES (?, ?, ?)");
        $sql->execute([$email, $password, $user_type]);
        return $sql;
    }

    public function deleteManager($managerId)
    {
        $sql = $this->connect()->prepare("DELETE FROM users_tbl WHERE id = ?");
        $sql->execute([$managerId]);
        return $sql;
    }

    public function fetchManagerDetails($managerId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM users_tbl WHERE id = ?");
        $sql->execute([$managerId]);
        return $sql->fetch(); // Retrieve only one row since we are fetching details of a single manager
    }

    public function editManager($managerId, $email, $password)
    {

        $sql = $this->connect()->prepare("UPDATE users_tbl SET email = ?, password = ? WHERE id = ?");
        $sql->execute([$email, $password, $managerId]);

        // I-check kung ang query ay nagtagumpay o hindi
        if ($sql->rowCount() > 0) {
            // Kung nagtagumpay, ibalik ang TRUE
            return true;
        } else {
            // Kung hindi, ibalik ang FALSE
            return false;
        }
    }

    function fetchClients()
    {
        $sql = $this->connect()->prepare("SELECT * FROM users_tbl WHERE user_type = 1 ORDER BY id DESC");
        $sql->execute();
        return $sql;
    }

    function addClient($email, $password, $user_type)
    {
        $sql = $this->connect()->prepare("INSERT INTO users_tbl (email, password, user_type) VALUES (?, ?, ?)");
        $sql->execute([$email, $password, $user_type]);
        return $sql;
    }

    public function deleteClient($clientId)
    {
        $sql = $this->connect()->prepare("DELETE FROM users_tbl WHERE id = ?");
        $sql->execute([$clientId]);
        return $sql;
    }

    public function fetchClientDetails($clientId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM users_tbl WHERE id = ?");
        $sql->execute([$clientId]);
        return $sql->fetch(); // Retrieve only one row since we are fetching details of a single manager
    }

    public function editClient($clientId, $email, $password)
    {

        $sql = $this->connect()->prepare("UPDATE users_tbl SET email = ?, password = ? WHERE id = ?");
        $sql->execute([$email, $password, $clientId]);

        // I-check kung ang query ay nagtagumpay o hindi
        if ($sql->rowCount() > 0) {
            // Kung nagtagumpay, ibalik ang TRUE
            return true;
        } else {
            // Kung hindi, ibalik ang FALSE
            return false;
        }
    }
}
