/**********************************************************************************/
/* Author: Eric burgos                                                            */
/* Creating Date: Septemper 26, 2014                                              */
/* Course: CSC242                                                                 */
/* Professor Name: Dr. Frye                                                       */
/* Filename: externaljava.js                                                      */
/* Purpose: This will contain all of my javascript                                */
/**********************************************************************************/

/************************************************/
/*Function Name: timeOfTheDay                   */
/*Description: This function will output the    */
/*date and time                                 */
/************************************************/

function timeOfTheDay()
{
    // Declaring Variables
    var date = new Date();
    var minute = date.getMinutes();
    var hour = date.getHours();
    var days = date.getDate();
    var months = date.getMonth()+1;
    var year = date.getFullYear();
    
    // Using else if statements to write out the time of day
    document.write ("Good ");
    if (hour > 18)
    {document.write("evening; ");
    } 
    else if (hour > 12)
    {document.write("afternoon; ");
    }
    else 
    {document.write("morning; ");
    }
    document.write("it is ");
    
    // Will write out date
    if(months < 10)
	
    {document.write("0");
    }
    document.write(months);
    document.write("/");
    if(days < 10)
    {document.write("0");
    }
    document.write(days);
    document.write("/");
    document.write(year+" ");
    
    // Writes out time
    
   
    if(hour < 10)
    {document.write("0");
    }
    document.write(hour + ":");
    
    if(minute < 10)
    {document.write("0")
    }
    document.write(minute);


}



/*****************************************************/
/*Function Name: favoriteThings                      */
/*Description: This function will output my          */
/*five favorite things and sort them alphabetically  */
/*****************************************************/

function sortArray()
{
    
    // Declaring array and its content
    
    var favoriteThings = [" Soccer", " Video Games", " Snowboarding", " Food", " Family"];
 
    // Sorts the function

    favoriteThings.sort();

    // Writes out my favorite things sorted 
    
    document.write("Favorite Things: " + favoriteThings[0]);

    // Loop writes commas plus the array
    
    for(var i = 1; i < favoriteThings.length; i++)
    {
	document.write("," + favoriteThings[i]);
    }
    
}

function openWindow()
{
    window.open("http://unixweb.kutztown.edu/~eburg118/bookstore.xhtml");

    
}

/*****************************************************/
/*Function Name: createAccountFormValidate           */
/*Description: This function will validate the create*/
/* account form.                                     */
/*****************************************************/



function createAccountFormValidate()
{

// Verify that "email" and "confirm email" are the same

    if (document.getElementById("email").value != document.getElementById("confirmEmail").value)
    {
	alert("Email address must be the same");
	document.getElementById("email").focus();
	return false;
    }

// Verify that password is at least 8 characters in length

    if (document.getElementById("password").value.length < 8)
    {
        alert("Password must be at least 8 characters");
        document.getElementById("password").focus();
        return false;
    }

// Verify that "password" and "confirm password" are the same

    if (document.getElementById("password").value != document.getElementById("confirmPassword").value)
    {
	alert("Passwords must match");
	document.getElementById("password").focus();
	return false;
    }

// Verify that "state" is picked

    if(document.getElementById("state").value == "select")
    {
	alert("You must choose a state");
	document.getElementById("state").focus();
	return false;
    }

// Verify that "zip" is a number and that its 5 numbers in length

    if(document.getElementById("zip").value.length != 5 || isNaN(document.getElementById("zip").value))
    {
	alert("Please enter a 5-digit zip code");
	document.getElementById("zip").focus();
	return false;
    }
     
	   
    return true; // Submit form if all valid




}