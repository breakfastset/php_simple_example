<?php
session_start();
include 'db_include.php';

$username = $_POST["username"];
$password = $_POST["password"];
// check whether user is in database
// if in database
//     set session
//     redirect to customers_display.php
// else
//     redirect to login_page.php - because login failure
// end if
$sql = "SELECT username FROM login WHERE username='" . $username .
    "' AND password ='" . $password . "'";

$resultset = $conn->query($sql);

if ($row = $resultset->fetch_assoc()) {
    $_SESSION["username"] = $username;
    header("Location: customers_display.php");
} else {
    header("Location: login_page.php?message=error");
}

?>
