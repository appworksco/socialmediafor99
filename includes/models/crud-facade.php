<?php

class CRUDFacade extends DBConnection {

    // Posts
    function fetchPosts()
    {
        $sql = $this->connect()->prepare("SELECT * FROM posts_tbl ORDER BY id DESC");
        $sql->execute();
        return $sql;
    }

    function addPost($title, $body)
    {
        $sql = $this->connect()->prepare("INSERT INTO posts_tbl (title, body) VALUES (?, ?)");
        $sql->execute([$title, $body]);
        return $sql->rowCount(); // Returns the number of affected rows
    }

    function deletePost($postId)
    {
        $sql = $this->connect()->prepare("DELETE FROM posts_tbl WHERE id = ?");
        $sql->execute([$postId]);
        return $sql->rowCount() > 0; // Returns true if any row was deleted
    }

    function fetchPostDetails($postId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM posts_tbl WHERE id = ?");
        $sql->execute([$postId]);
        return $sql->fetch(); // Returns the post details as an associative array
    }

    function editPost($postId, $title, $body)
    {
        $sql = $this->connect()->prepare("UPDATE posts_tbl SET title = ?, body = ? WHERE id = ?");
        $sql->execute([$title, $body, $postId]);
        return $sql->rowCount() > 0; // Returns true if any row was updated
    }

    function fetchSchedules()
    {
        $sql = $this->connect()->prepare("SELECT * FROM schedule ORDER BY id DESC");
        $sql->execute();
        return $sql;
    }

    function addSchedule($name, $place, $date)
    {
        $sql = $this->connect()->prepare("INSERT INTO schedule (name, place, date) VALUES (?, ?, ?)");
        $sql->execute([$name, $place, $date]);
        return $sql->rowCount(); // Returns the number of affected rows
    }

    function editSchedule($scheduleId, $name, $place, $date)
    {
        $sql = $this->connect()->prepare("UPDATE schedule SET name = ?, place = ?, date = ? WHERE id = ?");
        $sql->execute([$name, $place, $date, $scheduleId]);
        return $sql->rowCount() > 0; // Returns true if any row was updated
    }

    function fetchScheduleDetails($scheduleId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM schedule WHERE id = ?");
        $sql->execute([$scheduleId]);
        return $sql->fetch(); // Returns the schedule details as an associative array
    }

    function deleteSchedule($scheduleId)
    {
        $sql = $this->connect()->prepare("DELETE FROM schedule WHERE id = ?");
        $sql->execute([$scheduleId]);
        return $sql->rowCount() > 0; // Returns true if any row was deleted
    }

}

?>