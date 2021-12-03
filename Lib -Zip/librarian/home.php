<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="css/home_style.css" />

		<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
  color: #ffffff;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #428594;
}
a {
  text-decoration: none;
}
</style>
	</head>
	<body>
		
<div class="row" id="allTheThings">
<a href="insert_book.php">
  <div class="column">
    <div class="card">
      <h3>Click here to Record a New Book</h3>
    </div>
  </div>
  </a>

  <a href="update_copies.php">
  <div class="column">
    <div class="card">
      <h3>Update Copies of a Book</h3>
    </div>
  </div>
  </a>
  
  <a href="delete_book.php">
  <div class="column">
    <div class="card">
      <h3>Click here Delete Books Records</h3>
    </div>
  </div>
  </a>
  
  <a href="display_books.php">
  <div class="column">
    <div class="card">
      <h3>Display Available Books</h3>
    </div>
  </div>
</div>
</a>

<div class="row" id="allTheThings">
 <a href="pending_book_requests.php">
  <div class="column">
    <div class="card">
      <h3>Manage Book Requests</h3>
    </div>
  </div>
  </a>

  <a href="pending_registrations.php">
  <div class="column">
    <div class="card">
      <h3>Manage Pending Membership</h3>
    </div>
  </div>
  </a>
  
  <a href="update_balance.php">
  <div class="column">
    <div class="card">
      <h3>Manage Returned Books</h3>
    </div>
  </div>
</div>
</a>

	</body>
</html>