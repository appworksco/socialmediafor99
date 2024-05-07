<?php include realpath(__DIR__ . '/../../includes/layout/header.php') ?>

<?php

$posts = $crudFacade->fetchPosts();

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
                    <h1 class="h3 mb-0 text-gray-800">Posts</h1>
                    <a href="add-post.php" class="btn btn-primary">Add Post</a>
                </div>
                <div class="col-xl-12 col-lg-12 p-0">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $posts->fetch()): ?>
                                        <tr>
                                            <td><?php echo $row['title']; ?></td>
                                            <td>
                                                <a href="view-post?post_id=<?= $row['id'] ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="edit-post?post_id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="delete-post?post_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
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