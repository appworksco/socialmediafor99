<?php

include realpath(__DIR__ . '/includes/layout/header.php');

if (isset($_GET["accountCreated"])) {
    $accountCreated = "Your account has been created successfully!";
    if ($accountCreated) {
        array_push($success, $accountCreated);
    }
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $verifyEmailAndPassword = $usersFacade->verifyEmailAndPassword($email, $password);
    if ($verifyEmailAndPassword > 0) {
        $login = $usersFacade->login($email, $password);
        while ($row = $login->fetch(PDO::FETCH_ASSOC)) {
            if ($row['user_type'] == 0) {
                $_SESSION['user_id'] = $row['id'];
                header('Location: dashboard/admin/index');
            } if ($row['user_type'] == 1) {
                $_SESSION['user_id'] = $row['id'];
                header('Location: dashboard/client/index');
            } elseif ($row['user_type'] == 2)  {
                $_SESSION['user_id'] = $row['id'];
                header('Location: dashboard/manager/index');
            }
        }
    } else {
        array_push($danger, "Incorrect username or password!");
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
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php include('errors.php') ?>
                                    <form action="login" method="post" class="user">
                                        <div class="form-group my-2">
                                            <input type="email" class="form-control form-control-user" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group my-2">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
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