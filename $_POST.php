PHP $_POST is a Php Super Global Variable which is used to collect form data after submitting an
HTML form with Method="post". $_POST is also widely used to pass variables.
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['fname'];
if (empty($name)) {
echo "Please Enter your name";
} else {
echo $name;
}
}
?>
</body>
</html>
