<?php include realpath(__DIR__ . '/../../includes/layout/header.php') ?>

<?php

$post_id = $_GET['post_id'];

$postDetails = $crudFacade->fetchPostDetails($post_id);

if ($postDetails) {
    // Kunin ang mga detalye ng post
    $title = $postDetails['title'];
    $body = $postDetails['body'];
    $created_at = $postDetails['created_at'];
}

?>

<section id="wrapper">
    <?php include realpath(__DIR__ . '/../../includes/layout/sidebar-manager.php') ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Fullname</span>
                            <img class="img-profile rounded-circle" src="../../dist/img/undraw_profile.svg">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="container-fluid">
                <div class="d-flex justify-content-between mb-4">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        View Post
                                    </div>
                                    <div class="card-body">
                                        <h3><?php echo $title; ?></h3>
                                        <p><?php echo $body; ?></p>
                                        <p>Created at: <?php echo $created_at; ?></p>
                                        <a href="post.php" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; socialmediafor99</span>
                </div>
            </div>
        </footer>
    </div>
</section>

<?php include realpath(__DIR__ . '/../../includes/modals/logout-modal.php') ?>
<?php include realpath(__DIR__ . '/../../includes/layout/footer.php') ?>