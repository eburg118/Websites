<?php require("dbconn.php"); ?>

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
    Filename: searchCat.php
    Purpose: This program will give a search bar that will let user search for a produ\
ct.
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

    <title>Search Catalog</title>

    <!-- Link for my external CSS page -->

    <link rel="stylesheet" type="text/css" href="externalsheet.css"/>

    <!-- Link for my Javascript page -->

    <script type="text/javascript" src="externalJava.js"></script>

  </head>
<body>
<h1> Search Catalog </h1>

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

<form method="post" action="searchCat.php">
<fieldset>
Search: 
<input type="text" name="search" autofocus/>
<input type="Submit" value="Search"/>
</fieldset>
</form>
</body>
</html>
