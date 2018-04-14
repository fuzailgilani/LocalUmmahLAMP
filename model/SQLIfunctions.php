<?php
function insert($table, $fields, $values){
    require_once('mysqli_connect.php');

    $query = "INSERT INTO listings (listing_content, phone_number, email_address, location, date) VALUES (?, ?, ?, ?, NOW())";
    $query = "INSERT INTO " . $table . "(";
    $numFields = count($fields);
    $numValues = count($values);
    for($i = 0; $i < $numFields; $i++){
        $query = $query . $fields[$i];
        if($i != $numFields - 1){
            $query = $query . ",";
        } else {
            $query = $query . ")";
        }
        $query = $query . " ";
    }
    $query = $query . " VALUES ("
    for($i = 0; $i < $numValues; $i++){
        $query = $query . "?";
        if($i != $numFields - 1){
            $query = $query . ",";
        } else {
            $query = $query . ")";
        }
        $query = $query . " ";
    }
}
?>
