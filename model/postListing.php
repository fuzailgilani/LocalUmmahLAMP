<?php
## invoked by controller after submitPost form is submitted

## set up database connection
require_once('mysqli_connect.php');

## create mySQL insert query with information provided by user
$query = "INSERT INTO listings (listing_content, phone_number, email_address, location, date) VALUES (?, ?, ?, ?, NOW())";

$stmt = mysqli_prepare($dbc, $query);

$listing_content = $_POST['listing'];
$phone_number = $_POST['phone'];
$email_address = $_POST['email'];
$location = $_POST['location'];

mysqli_stmt_bind_param($stmt, "ssss", $listing_content, $phone_number, $email_address, $location);

## execute mySQL statement and store information regarding success of post for use by view
mysqli_stmt_execute($stmt);
$affected_rows = mysqli_stmt_affected_rows($stmt);

##close the mySQL statement and the connection to the database
mysqli_stmt_close($stmt);
require_once('mysqli_disconnect.php');

?>
