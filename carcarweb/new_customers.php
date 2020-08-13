<?php
include 'session_check.php';
?>
<html>
<head>
<title>New Customer Form</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<p>

<h1>New Customer Form</h1>

<!----start of the customer form--->
<form method="post" action="new_customers_action.php">
<table border="0" width=80%>
<tr>
    <td>Name:</td><td><input type="text" name="customer_name" size="25"></td>
</tr>
<tr>
    <td>D.O.B:</td><td><input type="date" name="dob" size="12" value="yyyy-mm-dd"></td>
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