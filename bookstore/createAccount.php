<?php require("dbconn.php") ?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
    Name: Eric Burgos
    Creation Date: October 14, 2014
    Due Date: October 21, 2014
    Course: CSC242
    Professor: Dr.Frye
    Assignment: #6
    Filename: createAccount.html
    Purpose: This will create a create account site
  -->


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<!-- Title that will go on tab section -->

<title>Create Account</title>
<link rel="stylesheet" type="text/css" href="externalsheet.css"</link>
<script src="externalJava.js" type="text/javascript"></script>
</head>


<body>

<!-- Header for website -->

<h1> Create Account</h1>
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
<div>

<!-- Start of the form and attributes -->

<form method="post" action="printForm.php"
 onreset="return confirm('Are you sure you want to clear all values?');"
onsubmit="return createAccountFormValidate();">

<!-- What will be seen on webpage -->

<p>Fields required are marked by *</p>
<table>
<tr>
   <td>First Name*:</td>
<td><input type="text" id="firstName" name="firstname" required="required" autofocus/></td>
</tr>
<tr>
   <td>Last Name*:</td>
<td><input type="text" id="lastName" name="lastname" required="required"/></td>
</tr>




<tr> 
  <td>Email*:</td>
<td><input type="email" id="email" name="email" required="required"/></td>
</tr>
<tr>  
 <td>Confirm Email*:</td>
<td><input type="email" id="confirmEmail" name="confirmEmail" required="required"/></td>
</tr>
<tr>  
 <td>Phone Number:</td>
<td><input type="tel" id="phoneNumber" name="phoneNumber"/></td>
</tr>


<tr>
   <td>Password*:</td>
<td><input type="password" id="password" name="password" required="required" /></td>
</tr>
<tr>  
 <td>Confirm Password*:</td>
 <td><input type="password" id="confirmPassword" name="confirmPassword" required="required" /></td>
   </tr>
   <tr>
   <td>Address 1*:</td>
   <td><input type="text" id="address1" name="address1" required="required"/><td>
   </tr>  	   
   <tr>    
   <td>Address 2:</td>
   <td><input type="text" id="address2" name="address2" /></td>
   </tr>  
   <tr>
   <td>City*:</td>
   <td><input type="text" id="city" name="city" required="required"/></td>
   </tr>
   <tr>
   <td>State*:&nbsp;</td>

<!-- Drop down -->
<td>
<select id="state" name="state" value="state"/>
<option select="selected" value="select">-Select State-  </option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="NewHampshire">New Hamshire</option>
<option value="NewJersey">New Jersey</option>
<option value="NewMaxico">New Mexico</option>
<option value="NewYork">New York</option>
<option value="NorthCarolina">North Carolina</option>
<option value="NorthDakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="RhodeIsland">Rhode Island</option>
<option value="SouthCarolina">South Carolina</option>
<option value="SouthDakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="WestVirginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
</select></td>
</tr>
<tr>
   <td>Zip*:</td>
<td><input type="text" name="zip" id="zip" size="5" maxlength="5" required="required"/></td>
</tr>
<br>
<tr>
<td><input type="submit" name="submit" value="Submit"/>
<input type="reset" value="Reset"/></td>
</tr>
</fieldset>
</form>
</div>

<noscript><font>This page requires javascript!</font></noscript>
</body> 
</html>
