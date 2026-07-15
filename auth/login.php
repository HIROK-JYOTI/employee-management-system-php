<?php
require_once "../config/config.php";
require_once "../includes/header.php";
?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h4><?= APP_NAME ?></h4>
                    <?php
                    session_start();

                    if (isset($_SESSION['error'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error']; ?>
                        </div>
                    <?php
                        unset($_SESSION['error']);
                    }
                    ?>

                </div>

                <div class="card-body">

                    <form action="login-process.php" method="POST">

                        <div class="mb-3">

                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>

                        </div>

                        <button
                            class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php
require_once "../includes/footer.php";
