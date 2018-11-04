<?php
include('config.php');
session_start();
if(!isset($_SESSION['user'])){  
    header("Location:registration.php");
}
else
{
    $email= $_SESSION['user'];
    
    if($result = $conn->prepare("select * from user where email=?"))
    {
        // Bind the variables to the parameter as strings. 
        $result->bind_param('s', $text);
 
        // Execute the prepared statement.
    $result->execute();

        // Gets a result set from a prepared statement.
    $result = $result->get_result();

        // Fetch the table data.
        $row = $result->fetch_assoc();
    }
    else
    {
        header("Location:index.php");
    }
}
?>