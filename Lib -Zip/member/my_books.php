<?php
	require "../db_connect.php";
	require "../message_display.php";
	require "verify_member.php";
	require "header_member.php";
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="../css/global_styles.css">
		<link rel="stylesheet" type="text/css" href="../css/custom_checkbox_style.css">
		<link rel="stylesheet" type="text/css" href="css/my_books_style.css">
	</head>
	<body>
	
		<?php
			$query = $con->prepare("SELECT book_isbn FROM book_issue_log2 WHERE member = ?;");
			$query->bind_param("s", $_SESSION['username']);
			$query->execute();
			$result = $query->get_result();
			$rows = mysqli_num_rows($result);
			if($rows == 0)
				echo "<h2 align='center'>There Are No Issued Books Yet!</h2>";
			else
			{
				echo "<form class='cd-form' method='POST' action='#'>";
				echo "<center><legend>My Books</legend></center>";
				echo "<div class='success-message' id='success-message'>
						<p id='success'></p>
					</div>";
				echo "<div class='error-message' id='error-message'>
						<p id='error'></p>
					</div>";
				echo"<table width='100%' cellpadding='10' cellspacing='10'>
						<tr>
							
							<th>ISBN<hr></th>
							<th>Title<hr></th>
							<th>Author<hr></th>
							<th>Category<hr></th>
							<th>Due Date<hr></th>
							<th>Status<hr></th>

						</tr>";
				for($i=0; $i<$rows; $i++)
				{
					$isbn = mysqli_fetch_array($result)[0];
					if($isbn != NULL)
					{
						$query = $con->prepare("SELECT title, author, category FROM book WHERE isbn = ?;");
						$query->bind_param("s", $isbn);
						$query->execute();
						$innerRow = mysqli_fetch_array($query->get_result());
						echo "<tr>";
						echo "<td>".$isbn."</td>";
						for($j=0; $j<3; $j++)
							echo "<td>".$innerRow[$j]."</td>";
						$query = $con->prepare("SELECT due_date FROM book_issue_log2 WHERE member = ? AND book_isbn = ?;");
						$query->bind_param("ss", $_SESSION['username'], $isbn);
						$query->execute();
						echo "<td>".mysqli_fetch_array($query->get_result())[0]."</td>";

						$query = $con->prepare("SELECT stat FROM book_issue_log2 WHERE member = ? AND book_isbn = ?;");
						$query->bind_param("ss", $_SESSION['username'], $isbn);
						$query->execute();
						echo "<td>".mysqli_fetch_array($query->get_result())[0]."</td>";
						echo "</tr>";
					}
				}
				echo "</table><br />";
				echo "</form>";
			}
			
			
		?>
		
	</body>
</html>