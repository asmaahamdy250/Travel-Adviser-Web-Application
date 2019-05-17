<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
<title>Admin Page</title>
</head>
	
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tawa_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1 = "SELECT Username FROM user ";
$result1 = $conn->query($sql1);

if(isset($_POST["login"])){     
   while($row1=mysqli_fetch_assoc($result1)) {
        $username1 = $row1['Username'];
		$password1 = $row1['Password'];
      if(($username1 == $_POST['username'] )&&($password1 ==$_POST['pass'])){
	  
       header('Location:../Home Page/Home Page.html');
      } 
	 
   }
      while($row2=mysqli_fetch_assoc($result2)) {
        $username2 = $row2['Username'];
		$password2 = $row2['Password'];
      if(($username2 == $_POST['username'] )&&($password2 ==$_POST['pass'])){
	  
       header('Location:../Asmaa/admin.html');
      } 
	  
		
   }
     echo"invalid username or password";
    
}


?>
<body>
<nav style="height: 50px; background-color: white; font-family:fantasy; font-size:30px; position: fixed; width: 100%;"> TAWA

<button style="float:right; margin-right: 30px;" class="button">Logout</button>
</nav>


	<center>
				
		

<div class="row">
  <div class="left" style="background-color:#0000009c; width: 100%;">
    <center>Admin Panel</center>


    <div style="float: left; display: inline;">
    <h2 style="color: white;"> Current Users</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <br> <br>

    <ul id="myMenu" style="color: white; margin-left: 20px;">

      <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>


        <li> Asmaa Hamdy 
        <a href="#" class="button" style="display: inline; padding:4px;"onclick="window.location.href='registration.html'">
         <img src="img/icons/edit.png" style="width: 20px; height: 17px;" />
       </a>

       <a href="#" class="button" style="display:inline;padding:4px;" onclick="">
        <img src="img/icons/trash.png" style="width: 20px; height: 17px;" />
       </a> 
     </li>

       <br> <br>

      
    
    </ul>

  </div>


    <a href="#" class="button" style="float: right; display: inline; margin-right: 35%; margin-top: 20%;" onclick="window.location.href='add.php'">Add a new user</a>
    

  </div>
</div>
</center>
</body>
</html>
