<?php

DEFINE ('DB_USER', 'localummah');
DEFINE ('DB_PASSWORD', 'test');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME','localummahlistings');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to mySQL' . "<br />" .
      mysqli_connect_error());

?>
