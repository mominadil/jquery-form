<?php

include ('connect.php'); // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from name where id = '$id'"); // delete query

if($del)
{
    
    header("location:records.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>