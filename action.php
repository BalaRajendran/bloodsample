<?php
// $dbname = "epiz_22942406_blood";
// $servername = "sql102.epizy.com";
// $username = "epiz_22942406";
// $password = "MjvnkOauymobsb8";
$dbname = "blood";
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if (isset($_POST["register"])) {
    $options = ['cost' => 12];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
    if ($data = $conn->prepare("INSERT INTO blood (name,phone,city,address,blood,gender,email,password) VALUES(?,?,?,?,?,?,?,?)")) {
        $data->bind_param("ssssssss", $_POST["name"], $_POST["phone"], $_POST["city"], $_POST["address"], $_POST["blood"], $_POST["gender"], $_POST["email"], $password);
        if ($data->execute()) {
            echo "Registration Sucessfull";
        }
        $data->close();
    }
} else if (isset($_POST["login"])) {
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($result = $conn->prepare("SELECT * FROM blood where email=?") or die($conn->connect_errno)) {
        $result->bind_param('s', $email);
        $result->execute();
        $result = $result->get_result();
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION["name"] = $email;
            echo "login";
        } else {
            echo "Passowrd Not matched";
        }
        $conn->close();
    }
} else if (isset($_POST["searchdata"])) {
    $result_array = array();
    if ($result = $conn->prepare("SELECT * FROM blood where blood=?") or die($conn->connect_errno)) {
        $result->bind_param('s', $_POST["searchdata"]);
        $result->execute();
        $result = $result->get_result();
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }else{
        $row1=array('No Data Found');
        array_push($result_array, $row1);
    }
        echo json_encode($result_array);
    }
}
?>