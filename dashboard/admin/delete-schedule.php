<?php 

include realpath(__DIR__ . '/../../includes/layout/header.php');

$scheduleFacade = new CRUDFacade;

if (isset($_GET["schedule_id"])) {
    $scheduleId = $_GET["schedule_id"];
    $deleteSchedule = $scheduleFacade->deleteSchedule($scheduleId);
    if ($deleteSchedule) {
        header("Location: schedule.php?delete_msg=Schedule has been deleted successfully!");
    }
}

?>