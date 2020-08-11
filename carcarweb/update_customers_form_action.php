<?php
include 'db_include.php';

// retrieve details from previous form
$customer_id = $_POST["customer_id"];
$address = $_POST["address"];
$contact_number = $_POST["contact"];
$member_type = $_POST["membership"];


$sql = "UPDATE customer SET address='" . $address . "', contact_number='" . $contact_number . 
        "', member_type= '" . $member_type. "' WHERE customer_id=" . $customer_id;


// execute update statement
$resultset = $conn->query($sql);


// redirect to display page
header("Location: customers_display.php?message=update");
?>
