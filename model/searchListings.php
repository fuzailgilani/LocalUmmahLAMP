<?php
## invoked by controller after submitSearch form is submitted
## $location is provided by controller

## set up database connection
require_once('mysqli_connect.php');

## set up SQL query using user input from form
$query = "SELECT email_address, phone_number, date, listing_content FROM listings WHERE location=?";
$stmt = mysqli_prepare($dbc, $query);
mysqli_stmt_bind_param($stmt, "s", $location);

## execute statement and store relevant information for use by view
$stmt->execute();
$results = $stmt->get_result();
$numListings = mysqli_num_rows($results);

##close statement and disconnect from database
mysqli_stmt_close($stmt);
require_once('mysqli_disconnect.php');
?>
