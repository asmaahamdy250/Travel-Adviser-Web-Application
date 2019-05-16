33<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<title>FeedBack</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
body
{
background-image:url('download.jfif');
 background-size:cover;	
 scrolling:no;
}
div{
width:90%;
margin-left:5%;
margin-right:5%;
margin-top:5%;
margin-bottom:5%;
border-radius:30px;
background-color:rgba(0,0,0,0.6);
}
table{
<!-- height:80%;
width:90%;
margin-left:5%;
margin-right:5%;
margin-top:5%;
margin-bottom:5%;
border-radius:30px; -->	
background-color:rgba(0,0,0,0.6);

}
.td{
font-size:70;
align:left;
vertical-align:top;	
padding:20px;
color:white;
font-family:Cookie;

}
.mytable
{
float:left;
margin-left:29px;

}
textarea,input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	border-radius:10px;
	border=0 none;
}
.dotted{

  border:none;
  border-top:1px dotted #f00;
  color:#fff;
  background-color:#fff;
  width:100%;
  margin: 0;
}
.mytable1
{
color:white;
font-size:60;
font-family:Parisienne;
margin=0;	
}
font
{
font-size:20;
color:white;
font-family:

}
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
  color:white; 
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}
</style>
</head>
<body>
<?php>
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
if(isset($_POST['btn']))
{
$sql = "INSERT INTO `feedback` (`Comment`,`ID`) values('".$_POST['feedback']."','".uniqid()."')";
$result = $conn->query($sql);

  header('Location:FeedBack Thanks.html');
  
  
}

?>
<div>
<table align="center">
<tr>
<th class="td"colspan="2"> Here you can share your experience:
<hr class="dotted">
</th>
<th>
</th>
</tr >

<tr>
<th class="mytable">
<form method="post" action="Rating &Feedback.php">


<div align='center' class="rating">
<span >☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>

<textarea cols="60" rows="10" name="feedback"> Message </textarea>
<center> <button type="submit" class="btn btn-lg btn-block btn-danger" name="submit"> Submit</button> </center>
</th>
<th >
<center class="mytable1" >We'd &#9829; to help you</center>
<br>
</tr>
</form>
</table>
</div>
</body>
</html>

