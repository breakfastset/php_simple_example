<?php
session_start();
if(isset($_SESSION["username"])==false) {
    header("Location: login_page.php?message=login");
}
?>