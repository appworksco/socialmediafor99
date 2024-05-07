<?php include realpath(__DIR__ . '/../../includes/layout/header.php') ?>

<?php

$schedule_id = $_GET['schedule_id'];

$scheduleDetails = $crudFacade->fetchScheduleDetails($schedule_id);

if ($scheduleDetails) {
    // Kunin ang detalye ng schedule
    $name = $scheduleDetails['name'];
    $place = $scheduleDetails['place'];
    $date = $scheduleDetails['date'];
}

// I-check kung mayroon nang naka-submit na form para sa pag-edit ng schedule
if (isset($_POST["edit_schedule"])) {
    // Halimbawa, kunin ang mga input mula sa form
    $scheduleId = $_POST['schedule_id']; // ID ng schedule na i-eedit
    $name = $_POST['name'];
    $place = $_POST['place'];
    $date = $_POST['date'];

    // Dito mo itatawag ang function para mag-edit ng schedule
    // Ito ay depende sa iyong implementation sa ScheduleFacade class
    $scheduleFacade->editSchedule($scheduleId, $name, $place, $date);

    // I-redirect ang user sa schedule.php pagkatapos ng pag-edit ng schedule
    header("Location: schedule.php");
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
                                        Edit Schedule
                                    </div>
                                    <div class="card-body">
                                        <form action="edit-schedule.php" method="post">
                                            <input type="hidden" name="schedule_id" value="<?php echo $schedule_id; ?>">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="place" class="form-label">Place</label>
                                                <input type="text" class="form-control" id="place" name="place" value="<?php echo $place; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="edit_schedule">Save Changes</button>
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