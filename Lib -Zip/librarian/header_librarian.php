<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
		<link rel="stylesheet" type="text/css" href="css/header_librarian_style.css" />
	</head>
	<body>
		<header>
			<div id="cd-logo">
				<a href="../">
					<img src="img/ic_logo2.svg" alt="Logo" width="100" height="100" />
					<p>Library Management System</p>
				</a>
			</div>
			
			<div class="dropdown">
				<button class="dropbtn"> 
					<p id="librarian-name"> <?php  
					$name=isset($_SESSION['username']) ? $_SESSION['username'] : '';
					echo $name
					 ?></p>
				</button>
				<div class="dropdown-content">
					<a href="../logout.php">Logout</a>
				</div>
			</div>
		</header>
	</body>
</html>