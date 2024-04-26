<?php

class CallScheduleFacade extends DBConnection
{
    function fetchCallSchedule()
    {
        $sql = $this->connect()->prepare("SELECT * FROM call_schedule_tbl");
        $sql->execute();
        return $sql;
    }

    function scheduleCall($name, $email, $dateTime)
    {
        $sql = $this->connect()->prepare("INSERT INTO call_schedule_tbl(name, email, date_time) VALUES (?, ?, ?)");
        $sql->execute([$name, $email, $dateTime]);
        return $sql;
    }
}
