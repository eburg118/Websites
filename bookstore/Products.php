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

    <title>Products</title>

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
<?php print("<fieldset>");
print("<h2>");
print($_GET['CategoryName']);
print("</h2>");
print("<br>");
print("<table border='1'>");
print("<tr>");
print("<td>ID</td><td>Title</td><td>Author</td><td>Price</td>");


?>
<?php
require("dbconn.php");
db_connect();

$query = "SELECT * FROM Products WHERE CategoryID = $_GET[CategoryID]";

$result = mysql_query($query);

$numRows = mysql_numrows($result);

if($numRows == 0)
{
print("No books for this category. Check again Later! "). mysql_error();
}
else

for($i=0;$i<$numRows;$i++)
{
$idd = mysql_result($result, $i, "ProductID");
$id = mysql_result($result, $i, "Title");
$id2 = mysql_result($result, $i, "Author1");
$id3 = mysql_result($result, $i, "Price");

print("<tr>");
print("<td>");
print($idd);
print("</td>");
print("<td>");
print($id);
print("</td>");
print("<td>");
print($id2);
print("</td>");
print("<td>");
print("$");
printf("%1\$.2f", $id3);
print("</td>");
print("</tr>");
}
print("</tr>");
print("</table>");
print("</fieldset>");
?>