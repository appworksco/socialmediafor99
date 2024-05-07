<?php 

include realpath(__DIR__ . '/../../includes/layout/header.php');

$usersFacade = new UsersFacade;

if (isset($_GET["manager_id"])) {
    $managerId = $_GET["manager_id"];
    $deleteManager = $usersFacade->deleteManager($managerId);
    if ($deleteManager) {
        header("Location: manager.php?delete_msg=Manager has been deleted successfully!");
    }
}