<?php

include realpath(__DIR__ . '/../../includes/layout/header.php');

$crudFacade = new CRUDFacade;

if (isset($_GET["post_id"])) {
    $postId = $_GET["post_id"];
    $deletePost = $crudFacade->deletePost($postId);
    if ($deletePost) {
        header("Location: post.php?delete_msg=Post has been deleted successfully!");
    }
}

?>