<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="header.css" type="text/css"/>
		<base target="_top">
	</head>
	<title>Header</title>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
			<a class="navbar-brand" href="Home Page.html">TAWA</a>
			<div class="collapse navbar-collapse nav-items" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link links" href="../Log-Reg-UI/registration.php">Sign up <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<label color="white"><?php echo $_SESSION['user'];?></label>
			  </li>
			  <li class="nav-item">
				<a class="nav-link links" href="../Asmaa/Reserved Trips.php">Reserved Trips</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link links" href="../Log-Reg-UI/login.php">logout</a>
			  </li>
			</ul>
		
			</div>
			</nav>
	</body>
</html>