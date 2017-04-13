<?php session_start(); ?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Name: Eric Burgos
    Creation Date: November 12, 2014
    Due Date: November 13, 2014
    Course: CSC242
    Professor: Dr.Frye
    Assignment:
    Filename: printForm.php
    Purpose: This program will create an account in the database
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <!--This will display title of website -->

  <head>

    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="externalsheet.css"/>
    <script src="externalJava.js" type="text/javascript"></script>
  </head>

  <body>
<div class="header">
  <ul>
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


  <!-- Start of php -->

<?php
require("dbconn.php");
db_connect();
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT CustomerID, Email, Passwd, FirstName, LastName FROM Customers
WHERE Email = '$email'
AND Passwd = '$password'";
$result = mysql_query($query);
$num = mysql_numrows($result);
if ($num != 0)
{
$_SESSION['CustomerID'] = mysql_result($result, 0, "CustomerID");
$_SESSION['firstName'] = mysql_result($result, 0, "FirstName");
$_SESSION['lastName'] = mysql_result($result, 0, "LastName");

print("Welcome, ");
print($_SESSION['firstName']);
print("!");

}
else
{
print("Login Failed");
session_destroy();
}
db_close();
?>
