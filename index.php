<html>
<head>
<title>LocalUmmah.org - The #1 Online Muslim Local Community Forum!</title>
</head>
<body>
<h1>Assalamualaikum and welcome to LocalUmmah.org!</h1>
<hr>
<p>Enter a location:</p>

<form name="location" method="get" action="index.php">
    <input type="text" placeholder="Location" name="location" required>
    <input type="submit" name="submitSearch" value="Search">
</form>
<hr>
<form name="post" method="post" action="index.php">
    <input type="submit" name="newPost" value="Make new post">
</form>

<?php
## if this function is called, PHP will display all errors and warnings in full detail
function debuggingMode(){
    ini_set('display_errors', 1);
    ini_set('log_errors',1);
    error_reporting(E_ALL);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}

## uncomment the following line to switch to debugging mode
#debuggingMode();
## uncomment the previous line to switch to debugging mode

## the main action of the controller portion of the program
## currently handles the result of three different HTML forms: submitSearch, newPost, submitPost
if(isset($_GET['submitSearch'])){

    ## if the user is on this page after submitting the submitSearch form
    ## first retrieve the location that the user is searching for
    ## then invoke the relevant code from the model and view portions to complete a search

    $location = $_GET['location'];
    require_once(./model/searchListings.php);
    require_once(./view/searchResults.php);
}
if(isset($_POST['newPost'])){

    ## if the user is on this page after submitting the newPost form
    ## invoke the relevant code from the view portion to generate and display the submitPost form

    require_once(./view/listingForm.php);
}
if(isset($_POST['submitPost'])){

    ## if the user is on this page after submitting the submitPost form
    ## invoke the relevant code from the model and the view to submit a post
    ## then redirect back to the default index.php page

    require_once(./model/postListing.php);
    require_once(./view/postResult.php);
    echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"/>";
}
?>

<hr>

</body>
</html>
