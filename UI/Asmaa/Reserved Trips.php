<html >
<head>
<link rel="stylesheet" type="text/css" href="Booking style.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<title> Reserved Trips </title>
<body for id="white" topmargin="60%"> 
<?php
session_start();
$_SESSION['message'] = '';
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

$sql1="SELECT `FlightNumber`, `FlightType`, `LevelOfService`, `AirLines`, `Travel_Date`, `Travel_Destination` FROM `flight` ";
$sql2="SELECT `NumberOfSeats`, `PaymentMethod` FROM `book` ";
$result1 = $conn->query($sql1);
$result2= $conn->query($sql2);
				
	?>			

<form >
<center>


				
				 <table  for id="white"  cellspacing="30%" cellpadding="20%" width="40%">
   
     <tr>
         <td colspan="2">
	       <center><p>Your Reserved Trips</p></center>	       
	     </td>	
      </tr>
	  
     <?php
	 
	 while($row1=mysqli_fetch_assoc($result1))
				{
					?>
				
				 <tr>
         <td>
           <label class="style">Flight Type</label>
	     </td>
         <td>
           <label class="style"><?php echo $row1['FlightType'] ?></label>

         </td>		 
      </tr>
	  
	  <tr>
         <td>
           <label class="style">Airline</label>
	     </td>
		 <td>
		   <label class="style"><?php echo $row1["AirLines"]?></label>	
		 </td>
         	 
      </tr>
	  
		
	  
	  <tr>
         <td>
           <label class="style">Service Level</label>
	     </td>
         <td >
		 <label class="style"><?php echo $row1["LevelOfService"] ?></label>
         </td>		 
      </tr>
				<?php
				}
				?>
				<?php
				while($row2 = $result2->fetch_assoc())
				{
				?>
				
	
				 <tr>
         <td>
           <label class="style">Payment Method</label>
	     </td>
         <td>
	      <label class="style"><?php echo $row2['PaymentMethod']?></label>     
		</td>		 
       </select>
	  </tr>
	  	<tr>
         <td>

		  <label class="style">Number of seats</label>
	     </td>
         <td>
           <label class="style"><?php echo $row2["NumberOfSeats"]?></label>
         </td>		 
      </tr>
	  <?php
	
				}
	 
	  ?>
	  <tr>
		<td colspan="2"> <center>     
			<input  class="btn btn-danger" type="button" value="Cancel The Trip" onclick="window.location.href='Cancel Trip.html'"></input>
			<input class="btn btn-warning" type="button" value="Home" onclick="window.location.href='../Home Page/Home Page.html'" />
		</td>
	
	  </tr>
	  </table>

				

		   
</center>
</form>



</center>
	<script>
	function myFunction()
	{
	  var x = document.getElementById("payment").value;
	  if(x == "Cash")
	  {
	  document.getElementById("Card").disabled=true;
	  }
	  else 
	  {
	  	  document.getElementById("Card").disabled=false;
	  }
	}
	</script>
  



</body>
</html>