<?php
session_start(); 
	
?>
<?php
if($_SESSION["usertype"] != "admin")
header("location:Login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
</head>
<body background="/images/background2.png">

        
    <div class="main-menu">
      
        <img  style="width:140px; height:190px; position: absolute; margin-left: 20px; margin-top: 5px;"  src="images/icon2.png">
       
       <ul class="menu">
              <center>
               <p  id="header" style="margin-top: 90px" >HAAN Library</p>
</center>
               <li ><a   id="Login" href="Adminindex.php">Main Page</a></li>
               <li ><a   id="Register" href="Logout.php">LogOut</a></li>
           
       </ul>
   </div>

	

   <form method="POST">
        <div class="LoginPanelAdmin">
            <p class="LoginTextEmail">Email</p><input name="email" id="emailbox" type="email" placeholder="email to create a new account" >
            
            <p class="LoginTextPassword"  >Password</p><input name="pass" id="emailbox"type="password" placeholder="enter password">
            <p class="LoginTextPassword"  >User type</p><input name="type" id="emailbox"type="text" placeholder="account type" >

            <input class="sub" value="ADD User" type="submit" name="useradd">

            </div>
    </form>


    <form method="POST" name="f1">
        <div class="LoginPanelAdmin"> 
            <p class="LoginTextEmail" >book serial</p><input name="ISBN" id="emailbox" type="text" placeholder="Serial of the book" >
            <p class="LoginTextPassword" >Book name</p><input name="BOOKNAME" id="emailbox" type="text" placeholder="book name" >
            <p class="LoginTextPassword"  >&nbsp; &nbsp; Picture name</p>
            <input name="PICSNAME" id="emailbox"type="text" placeholder="picture file name (png extention)">
            <input class="sub" value="ADD BOOK" type="submit" name="bookadd">

            </div>
    </form>



<?php

   $con= mysqli_connect('localhost','root','') or die('no connection'); 
   mysqli_select_db($con,'libraryproject');
   
  
   if(isset($_POST['useradd']))
   {
   $email=$_POST['email'];
   $password=$_POST['pass'];
   if($_POST['type']== "")
   $type="student";
   else 
   $type=$_POST['type'];
    // query to check if the email is in the database 

       $q1="insert into user values ('$email','$password','$type')";
       

      $check1=mysqli_query($con,$q1);   
   
      
   }


   if(isset($_POST['bookadd']))
   {
    $isbn=$_POST['ISBN'];
    $bookname=$_POST['BOOKNAME'];
    $picsname=$_POST['PICSNAME'];
    // query to check if the book is in the database 
    if($_POST['BOOKNAME']== "")
    $bookname="DefaultName";

    if($_POST['PICSNAME']== "")
    $picsname="1";
       $q2="insert into books values ('$isbn','$bookname','$picsname')";
    
       
       $check2=mysqli_query($con,$q2);
   
      
   }
?>

</body>
</html>