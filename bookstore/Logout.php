<?php session_start(); ?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Name: Eric Burgos
    Creation Date: September 10, 2014
    Due Date: September 11, 2014
    Course: CSC242
    Professor: Dr.Frye
    Assignment: 
    Filename: Logout.php
    Purpose: This program will logout account.
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

    <title>Logout</title>

    <!-- Link for my external CSS page -->

    <link rel="stylesheet" type="text/css" href="externalsheet.css"/>

    <!-- Link for my Javascript page -->

    <script type="text/javascript" src="externalJava.js"></script>

  </head>
<body>
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

<?php
 require("dbconn.php");
db_connect();
if(isset($_SESSION['CustomerID']))
{
print("Thank you ");
print($_SESSION['firstName']);
print(", ");
print("please come again!");
}
else
{
print("You are not logged in, ");
print("please login here: ");
print("<input type='button' value='Login' onclick=window.location.href='loginPage.php'>");
print("<br/>");
print("or create an account here: ");
print("<input type='button' value='Create Account' onclick=window.location.href='createAccount.php'>");

}
session_destroy();
 ?>


</body>
</html>
