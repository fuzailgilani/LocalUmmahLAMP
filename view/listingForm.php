<?php
## invoked by controller when newPost form is submitted

## simply echo some HTML to generate a form named "submitPost"
## send the info from form to post request on index.php

echo "<h2>Submit a new post:</h2>";
echo "<form name=\"post\" method=\"post\" action=\"index.php\">";
echo "    <input type=\"text\" placeholder=\"Location of post*\" name=\"location\" required>";
echo "    <input type=\"text\" placeholder=\"Phone number\" name=\"phone\">";
echo "    <input type=\"email\" placeholder=\"Email address*\" name=\"email\" required>";
echo "    <input type=\"text\" placeholder=\"Listing*\" name=\"listing\" required>";
echo "    <input type=\"submit\" name=\"submitPost\" value=\"Submit\">";
echo "</form>";
?>
