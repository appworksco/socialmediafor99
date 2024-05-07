<?php include realpath(__DIR__ . '/../../includes/layout/header.php') ?>

<?php

// I-check kung mayroon nang naka-submit na form para sa pagdagdag ng manager
if (isset($_POST["add_manager"])) {
    // Halimbawa, kunin ang mga input mula sa form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = 2;

    // Dito mo itatawag ang function para magdagdag ng manager
    // Ito ay depende sa iyong implementation sa UsersFacade class
    $usersFacade->addManager($email, $password, $user_type);

    // I-redirect ang user sa manager.php pagkatapos ng pag-add ng manager
    header("Location: manager.php");
    exit(); // Siguraduhing tigilan ang execution ng script pagkatapos ng redirect
}

?>

<section id="wrapper">
    <?php include realpath(__DIR__ . '/../../includes/layout/sidebar-admin.php') ?>
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
                                        Add Manager
                                    </div>
                                    <div class="card-body">
                                        <form action="add-manager" method="post">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="add_manager">Add Manager</button>
                                        </form>
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