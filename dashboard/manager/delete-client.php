<?php 

include realpath(__DIR__ . '/../../includes/layout/header.php');

$usersFacade = new UsersFacade;

if (isset($_GET["client_id"])) {
    $clientId = $_GET["client_id"];
    $deleteClient = $usersFacade->deleteClient($clientId);
    if ($deleteClient) {
        header("Location: manager.php?delete_msg=Manager has been deleted successfully!");
    }
}