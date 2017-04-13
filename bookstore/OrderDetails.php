<?php session_start();
if(isset($_SESSION['CustomerID']))
{
print("Welcome: ");
print($_SESSION['firstName']);
print(" ");
Print($_SESSION['lastName']);
}
else
{
print ("You are not logged in");
}
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Name: Eric Burgos
    Creation Date:
    Due Date:
    Course: CSC242
    Professor: Dr.Frye
    Assignment:
    Filename: Orders.php
    Purpose: This program will display orders and let user click on them to vie\
w
    their status.
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

    <title> Order Details </title>

    <!-- Link for my external CSS page -->

    <link rel="stylesheet" type="text/css" href="externalsheet.css"/>

    <!-- Link for my Javascript page -->

    <script type="text/javascript" src="externalJava.js"></script>

  </head>
<body>
<h1> Order Details </h1>

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
<?php
print("<table border='1'>");
print("<tr>");
print("<td>Quantity</td><td>Total</td>")
?>

<?php

require("dbconn.php");
db_connect();

$query="SELECT * FROM OrderDetails WHERE OrderID= $_GET[orderID]";
$query2="SELECT * FROM Products WHERE ProductID= $_GET[productID]";
$query3="SELECT * FROM Orders WHERE OrderID= $_GET[orderID]";
print("<br/>");
$result=mysql_query($query);
$num = mysql_numrows($result);
$result3=mysql_query($query3);
$num3=mysql_numrows($result3);

if($num == 0 && $num3 == 0)
{
print("No order details available. ");
}
else
for($i=0;$i<$num3;$i++)
{


$date= mysql_result($result3, $i, "OrderDate");
$shipp= mysql_result($result3, $i, "ShippingCost");
$tax= mysql_result($result3, $i, "Tax");
$total= mysql_result($result3, $i, "Total");

print("Order Date: ");
print($date);
print("<br/>");
print("Shipping: ");
print("$");
printf("%1\$.2f", $shipp);
print("<br/>");
print("Tax: ");
print("$");
printf("%1\$.2f", $tax);
print("<br/>");
print("Total: ");
print("$");
printf("%1\$.2f", $total);
}

for($i=0;$i<$num;$i++)
{
$orderid=mysql_result($result, $i, "orderID");
$quantity= mysql_result($result, $i, "Quantity");
$linetotal= mysql_result($result, $i, "LineTotal");

print("<tr>");
print("<td>");
print("$quantity");
print("</td>");
print("<td>");
print("$");
printf("%1\$.2f", $linetotal);
print("</td>");
}
print("</tr>");
print("</table>");


db_close();
?>

</body>
</html>
