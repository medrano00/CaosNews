<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($email)){
if (!empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "caos";

// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('ERROR ('. mysqli_connect_errno() .')' . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO users (username, password)
    values ('$email','$password')";
    if ($conn->query($sql)){
        echo "Sample text lol";
    }
    else{
        echo "Error: ". $sql ."<br>".$conn->error;
    }
    $conn->close();
}
}
else{
    echo "El campo no puede permanecer en blanco.";
    die();
}
}
else{
    echo "El campo no puede permanecer en blanco.";
    die();
}
?>