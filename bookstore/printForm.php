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
        <li><a href="">Check order status</a></li>
        <li><a href="contactUs.html">Contact Us</a></li>
        <li><a href="Logout.php">Logout</a></li>

      </ul>
</div>
<hr>

  
  <!-- Start of php -->

<?php
require("dbconn.php");
db_connect(); 
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phoneNumber = $_POST['phoneNumber']; 

$query = "SELECT Email FROM Customers
WHERE Email = '$email'";
$result = mysql_query($query);
$num = mysql_numrows($result);
if ($num != 0)
{
print("Account already exists! ");
}
else
{
$query2 = "INSERT INTO Customers (Email, Passwd, FirstName, LastName,
 Address1, Address2, City, State, Zipcode, PhoneNumber)
VALUES('$email', '$password', '$firstname', '$lastname', '$address1', '$address2',
'$city', '$state', '$zip', '$phoneNumber')";
}
$result2 = mysql_query($query2);
if ($result2 == true)
{
print("Account Has Been Created!");
}
else
{
print("Error: ").mysql_error();
}
db_close();

?>


</body>

</html>
