<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Registration</title>

<style type="text/css" media="screen">
.error { color: red; }
</style>

</head>

<body>
<h1>Registration Results</h1>

<?php 
// Script 6.2 - handle_reg.php 
/* This script receives seven values from register.html:
email, password confirm, year, terms, color, submit */

// Address error management, if you want.
ini_set('display_errors',1); // Let me learn from my mistakes!

// Flag variable to track success:
$okay = true;

// If there were no errors, print a success message:
if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
}
?>
</body>
</html>