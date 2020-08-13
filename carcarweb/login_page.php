<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script language="javascript">
function prompt_login() {
    alert('Please Login to access other pages!');
}
</script>
</head>
<body>
<p>
<h1>Login Now</h1>
<?php
if (isset($_GET["message"])) {
    if ($_GET["message"]=="error") {
        echo "<h2><red>Login Error</red></h2>";
    } elseif ($_GET["message"]=="login") {
        echo "<script language='javascript'>prompt_login();</script>";
    }
}
?>

<!----start of the customer form--->
<form method="post" action="login_page_action.php">
<table border="0" width=50%>
<tr>
    <td>Username:</td><td><input type="text" name="username" size="25"></td>
</tr>
<tr>
    <td>Password:</td><td><input type="password" name="password" size="25"></td>
</tr>

<tr>
    <td colspan="2" align="center"><input type="submit" value="Login Now">
    <input type="reset" value="Reset">
    </td>
</tr>
</table>
</form>
<!----end of the customer form--->

</body>
</html>