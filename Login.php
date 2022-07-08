<?php
session_start(); // for the login session before it ends 
	//creates a session passed via a GET or POST request or passed via a cookie.
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link rel="stylesheet" href="styles/style.css">
<!--	 for external sheet-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
<!--for the icon on the top of the tap-->
</head>
<body>

        
    <div class="main-menu">
      
        <img  style="width:140px; height:190px; position: absolute; margin-left: 50px;  "  src="images/icon2.png">

       
  

       <center>
              <h1 id="header" style="margin-top: 100px;">HAAN Library</h1> <p  id="header" > "All palestinian Library"</p>

</center>

           
     
   </div>
<form method="POST" >
    <div class="LoginPanel">
        <p class="LoginTextEmail">Email</p><input name="email" id="emailbox" type="email" placeholder="email please!" >

        
        <p class="LoginTextPassword"  >Password</p><input name="pass" id="emailbox" type="password" placeholder="password please!" >
        <input class="sub"  value="Login" type="submit" name="s1">

        </div> 

</form>

   
  <?php

$con=mysqli_connect("localhost","root","") or die ("Connection Error");

mysqli_select_db($con,'libraryproject') or die("Database Not Found\n");



if(isset($_POST['s1']))
{
	$email=$_POST['email'];
$password=$_POST['pass'];

	$q1="SELECT * from user where '$email'=email and '$password'=password ;";
	$q11=mysqli_query($con,$q1);
	if($a=mysqli_fetch_array($q11)) // for scan if there any data according to the query written above
	{
	
		if($a['usertype']=="admin") // if the user is admin he can change on the data and modify with high privilage
         {
			  $_SESSION['email']=$email; // give the email to the session
			   header("location:Adminindex.php"); // to open the web page 
               $_SESSION['usertype']="admin";
		 }
        else if($a['usertype']=="student")
		{
			$_SESSION['email']=$email;
            header("location:index.php");
            $_SESSION['usertype']="student";
			
		}
        
	}
	else
	{
    header("location:Login.php"); // back to login page 
		
		 	   }
	   
	   
	  
	  
}

?>

</body>
</html>