<?php
include 'session_check.php';
include 'db_include.php';

$sql = "SELECT customer_id, customer_name, dob, address, contact_number, member_type " . 
    "FROM customer";

$resultset = $conn->query($sql);

$message = "";
if (isset($_GET["message"])) {
    if ($_GET["message"] == "add") {
        $message = "NEW Customer Added!";
    } elseif ($_GET["message"] == "delete") {
        $message = "Customer Record Deleted!";
    } elseif ($_GET["message"] == "update") {
        $message = "Customer Record Updated!";
    }
}

?>
<html>
<head>
<title>Displaying All Customers</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<p>

<h1>Displaying All Customers</h1>

<table border="1" width=80%>
<tr><th>Cust ID</th><th>Name</th><th>D.O.B</th><th>Address</th><th>Contact</th><th>Membership</th>

<?php
if ($resultset->num_rows > 0) {
    while ($row = $resultset->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["customer_id"] . '</td><td>'. $row["customer_name"] .'</td>';
        echo '<td>' . $row["dob"] . '</td><td>' . $row["address"] . '</td>';
        echo '<td>' . $row["contact_number"] . '</td><td>' . $row["member_type"] .'</td>';
        echo '</tr>';
    }
} else {
    echo "<tr><td colspan=6>NO records</d></tr>";
}

?>

</table>

<?php
if ($message  !== "") {
    echo "<h3>" . $message . "</h3>";
}
?>

<?php include "footer.php" ?>