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
<form method="post" action="update_customers_form_action.php">
<input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/>
<table border="0" width=80%>
<tr>
    <td>Name:</td><td><?php echo $customer_name ?></td>
</tr>
<tr>
    <td>D.O.B:</td><td><?php echo $dob ?></td>
</tr>
<tr>
    <td valign="top">Address:</td>
    <td><textarea name="address" id="address" cols="30" rows="4"><?php echo $address ?></textarea></td>
</tr>
<tr>
    <td>Contact:</td><td><input type="text" name="contact" value="<?php echo $contact_number ?>"></td>
</tr>
<tr>
    <td>Membership:</td>
    <td>
    <?php
    $membership_array = array(
        "Platinum", "Gold", "Silver", "Classic"
    );
    // construct the select tag by iterating through the membership_array
    echo '<select name="membership" id="membership">';
    for ($i=0 ; $i < count($membership_array); $i++) {
        echo '<option value="'. $membership_array[$i] . '"';
        if ($member_type == $membership_array[$i]) {
            echo " SELECTED";     // print SELECTED if member is this type
        }
        echo '>' . $membership_array[$i] .'</option>';
    }
    echo "</select>";
    ?>
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" value="Update Details">
    <input type="reset" value="Reset">
    </td>
</tr>
</table>
</form>
<!----end of the customer form--->

<?php include "footer.php" ?>