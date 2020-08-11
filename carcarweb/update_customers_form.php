<?php
include 'db_include.php';

$customer_id = $_GET["cust_id"];
$customer_name = "";
$dob = "";
$address = "";
$contact_number = "";
$member_type = "";

$sql = "SELECT customer_id, customer_name, dob, address, contact_number, member_type " . 
    "FROM customer WHERE customer_id=" . $customer_id;

$resultset = $conn->query($sql);

if ($row = $resultset->fetch_assoc()) {
    $customer_name = $row["customer_name"];
    $dob = $row["dob"];
    $address = $row["address"];
    $contact_number = $row["contact_number"];
    $member_type = $row["member_type"];
}
echo "<b>Customer Name</b>: <b>".$customer_name."</b><br/><br/>";
?>

<html>
<head>
<title>Update Customer Form</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<p>

<h1>Update Customer Form</h1>

<!----start of the customer form--->
<form method="post" action="new_customers_action.php">
<table border="0" width=80%>
<tr>
    <td>Name:</td><td><?php echo $customer_name ?></td>
</tr>
<tr>
    <td>D.O.B:</td><td><?php echo $dob ?></td>
</tr>
<tr>
    <td valign="top">Address:</td>
    <td><textarea name="address" id="address" cols="30" rows="4"></textarea></td>
</tr>
<tr>
    <td>Contact:</td><td><input type="text" name="contact"></td>
</tr>
<tr>
    <td>Membership:</td>
    <td>
    <select name="membership" id="membership">
        <option value="Platinum">Platinum</option>
        <option value="Gold">Gold</option>
        <option value="Silver">Silver</option>
        <option value="Classic" SELECTED>Classic</option>
    </select>
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" value="Create Customer">
    <input type="reset" value="Reset">
    </td>
</tr>
</table>
</form>
<!----end of the customer form--->

<?php include "footer.php" ?>