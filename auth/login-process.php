

<?php

require_once "../config/config.php";
require_once "../config/database.php";
require_once "../helpers/session.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (empty($email) || empty($password)) {

    $_SESSION['error'] = "Email and Password are required.";

    header("Location: login.php");

    exit;
}

$sql = "SELECT * FROM users WHERE email = :email LIMIT 1";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":email", $email);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {

    $_SESSION['error'] = "Invalid Email or Password.";

    header("Location: login.php");

    exit;
}

if (!password_verify($password, $user['password'])) {

    $_SESSION['error'] = "Invalid Email or Password.";

    header("Location: login.php");

    exit;
}

$_SESSION['user_id'] = $user['id'];

$_SESSION['user_name'] = $user['full_name'];

$_SESSION['user_email'] = $user['email'];

$_SESSION['user_role'] = $user['role'];

header("Location: ../dashboard/index.php");

exit;