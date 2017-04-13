<?php require("dbconn.php"); ?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Name: Eric Burgos
    Creation Date: September 10, 2014
    Due Date: September 11, 2014
    Course: CSC242
    Professor: Dr.Frye
    Assignment: #2
    Filename: bookstore.xhtml
    Purpose: This program will display a bookstore website.
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

    <title>Login to Bookstore</title>

    <!-- Link for my external CSS page -->

    <link rel="stylesheet" type="text/css" href="externalsheet.css"/>

    <!-- Link for my Javascript page -->

    <scriptsrc= "externalJava.js" type="text/javascript"></script>

  </head>
<body>
<h1> Login</h1>
<div class="header"> 
<ul>
	<li><a href="bookstore.php">Home</a></li>
        <li><a href="createAccount.php">Create account</a></li>
        <li><a href="loginPage.php">Login</a></li>
        <li><a href="categories.php">Browse Catalog</a></li>
        <li><a href="searchCatForm.php">Search Catalog</a></li>
        <li><a href="">Checkout</a></li>
        <li><a href="Orders.php">Check order status</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
        <li><a href="Logout.php">Logout</a></li>

      </ul>
</div>
<hr>
<form method="post" action="loginPagePhp.php"
onsubmit="return createAccountFormValidate();">
<fieldset id="login">
<legend>Login</legend>

<table width = "100">
<tr>
<td>Email: </td>
<td><input type="email" id="email" name="email" required="required" autofocus/></td><br>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="password" name="password" required="required"/></td><br>
</tr>
</table>
<br>
<tr>
<td><input type="submit" name="submit" value="Login"/>
<input type="button" value="Create Account" onclick="window.location.href='createAccount.php'">
</td>
</tr>

</fieldset>

</form>



</body>
</html>
