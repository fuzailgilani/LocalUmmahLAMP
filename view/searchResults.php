<?php
## invoked after controller has invoked searchListings.php
## $location is provided by controller

## indicate which location the user has searched for
echo "<hr>";
echo "<h2>Looking for listings in: " . $location . "</h2>";

## indicate how many listings were found
echo $numListings . " listing(s) found";
if ($numListings == 0){

    ## if zero listings were found in location searched, display message to user suggesting s/he make the first post in the area
    echo "*** Feel free to press the button above to post the first listing in " . $location . " ***";
} else {

    ## otherwise, loop through the results returned by SQL statement in code from model and display them
    while($row = mysqli_fetch_array($results)){
        echo "Location: " . $location;
        echo "<br />";
        echo "Date: " . $row[date];
        echo "<br />";
        echo "Email address: " . $row[email_address];
        echo "<br />";
        if(isset($row[phone_number])){
    
            ## check if listing includes phone number
            ## because phone number is not required by the database or the post submission form
            echo "Phone number: " . $row[phone_number];
            echo "<br />";
        }
        echo "<br />";
        echo $row[listing_content];
        echo "<br />";
        echo "<hr>";
    }
}
?>
