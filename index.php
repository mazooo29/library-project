<?php
session_start(); 
	
?>
<?php
if($_SESSION['email'] == "")
header("location:Login.php");
if($_SESSION['usertype'] == "admin")
header("location:AdminIndex.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAAN Library</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style1.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    

</head>
<body background="/images/background2.png">
    
    <div class="main-menu">
      
        <img  style="width:140px; height:190px; position: absolute; margin-left: 20px; margin-top: 5px;"  src="images/icon2.png">
       
       <ul class="menu">
              <center>
               <p  id="header" style="margin-top: 90px" >HAAN Library</p>
</center>
               <li ><a   id="Register" href="Logout.php">LogOut</a></li>
           
       </ul>
   </div>
   

     <div class="books-part">
         <div id="search-div">
         <form method="POST" >    
         <input id="icon-search" name="search"  placeholder="insert the book name/id" type="search"> 
         <input id="searchbtn" type="submit" value="Search" name="Searching">
</form>
         </div>

     <ul>
          

     <?php

   $con= mysqli_connect('localhost','root','') or die('no connection'); 
   mysqli_select_db($con,'libraryproject');
   
  if(isset($_POST['Searching'])){
   $isbn=$_POST['search'];
   $q1="SELECT * from books Where isbn like '$isbn' or bookname like '$isbn';";
   $q11=mysqli_query($con,$q1);

    while($a=mysqli_fetch_array($q11)){
       echo '<div class="books">
       <img class="books-cover" src="images/'.$a[2].'.png">
    </div>';
   }
  }
?>
</ul>  
</div>
</body>
</html>
</body>
</html>