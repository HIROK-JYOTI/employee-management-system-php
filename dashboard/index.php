<?php

require_once "../helpers/auth.php";
require_once "../helpers/session.php";
require_once "../includes/header.php";
?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            Dashboard
        </div>

        <div class="card-body">

            <h3>Welcome,
                <?= htmlspecialchars($_SESSION['user_name']) ?>
            </h3>

            <p>
                You have successfully logged in.
            </p>

            <a href="../auth/logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>

</div>

<?php
require_once "../includes/footer.php";