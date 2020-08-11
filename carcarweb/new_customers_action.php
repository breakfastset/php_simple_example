<?php
include 'db_include.php';

$customer_name = $_POST["customer_name"]; 
$dob = $_POST["dob"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$membership = $_POST["membership"];


$sql = "INSERT INTO customer (customer_name, dob, address, contact_number, member_type) VALUES('" .
    $customer_name . "', '" . $dob . "', '" . $address . "', '". $contact . "', '" . $membership . "')";



$resultset = $conn->query($sql);

header("Location: customers_display.php?message=add");
?>
