<?php
## invoked by controller after invoking postListing.php
## $affected_rows is provided by code in postListing.php

## indicate whether an error occurred or not, and inform user that page will be redirected soon
if($affected_rows == 1){
    echo "Listing posted! You will be redirected in 3 seconds...";
} else {
    echo "Error Occurred. You will be redirected in 3 seconds...<br />";
    echo mysqli_error();
}
?>
