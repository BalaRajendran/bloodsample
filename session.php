<?php
include('config.php');
session_start();
if(isset($_SESSION['user'])){  
    $email= $_SESSION['email'];
    if($result = $conn->prepare("select * from blood where email=?"))
    {
        $result->bind_param('s', $text);
        $result->execute();
        $result = $result->get_result();
        $row = $result->fetch_assoc();
    }
}
?>