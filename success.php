<?php

include realpath(__DIR__ . '/includes/layout/header.php');

if (isset($_GET["PayerID"])) {
    $payerId = "Thank you! Your payment is complete.";
    if ($payerId) {
        array_push($success, $payerId);
    }
}

if (isset($_POST["register"])) {
    $payerId = $_POST["payer_id"];
    $userType = 1;
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $verifyEmail= $usersFacade->verifyEmail($email);
    if ($verifyEmail <= 0) {
        $register = $usersFacade->register($payerId, $userType, $firstName, $lastName, $email, $password);
        if ($register) {
            header('Location: login?accountCreated');
        }
    } else {
        array_push($danger, "Email has already been taken!");
    }
}

?>

<section class="login d-flex align-items-center" style="height: 100vh">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <img src="dist/img/logo-pad.png" alt="Logo" style="width: 130px;">
                                </div>
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hello There!</h1>
                                    </div>
                                    <?php include('errors.php') ?>
                                    <form action="success" method="post" class="user">
                                        <input type="hidden" name="payer_id" value="<?= $payerId ?>">
                                        <div class="form-group my-2">
                                            <input type="text" class="form-control form-control-user" placeholder="First Name" name="first_name" required>
                                        </div>
                                        <div class="form-group my-2">
                                            <input type="text" class="form-control form-control-user" placeholder="Last Name" name="last_name" required>
                                        </div>
                                        <div class="form-group my-2">
                                            <input type="email" class="form-control form-control-user" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group my-2">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="register">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>