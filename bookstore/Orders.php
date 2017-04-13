<?php session_start();
if(isset($_SESSION['CustomerID']))
{
print("Welcome: ");
print($_SESSION['firstName']); 
print(" ");
print($_SESSION['lastName']);
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
    Purpose: This program will display orders and let user click on them to view
    their status.
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

    <title>Check Order Status</title>

    <!-- Link for my external CSS page -->

    <link rel="stylesheet" type="text/css" href="externalsheet.css"/>

    <!-- Link for my Javascript page -->

    <script type="text/javascript" src="externalJava.js"></script>

  </head>
<body>
<h1> Check Order Status </h1>

<!-- This is my navigation bar -->

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


require("dbconn.php");

db_connect();

if(!isset($_SESSION['CustomerID']))
{
print("No orders");
session_destroy();
}
else
{
// Query String that Selects everything from the Orders table

$query="SELECT * FROM Orders WHERE CustomerID= $_SESSION[CustomerID]";

// Variable that will contain the result of the query string
 
$result = mysql_query($query);

// Variable to hold function that will check if any rows have been returned

$num = mysql_numrows($result);

if($num == 0)
{
die('No orders.' . mysql_error());
}
else

//$_SESSION['OrderID'] = mysql_result($result, 0, "OrderID");
// Loop to display Order status

for($i=0;$i<$num;$i++)
{

$orderid= mysql_result($result, $i, "OrderID");
$date= mysql_result($result, $i, "OrderDate");
$shipp= mysql_result($result, $i, "ShippingCost");
$tax= mysql_result($result, $i, "Tax");
$total= mysql_result($result, $i, "Total");

print("<fieldset>");
print("<legend>");
print("Order #: ");
print("<a href='OrderDetails.php?orderID=$orderid'>");
print($orderid);
print("</legend>");
print"</a>";
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
print("</fieldset>");
print("<br/>");


}
}

db_close();
?>

</body>
</html>
