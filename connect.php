<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
$conn = new mysqli('localhost','root', '', 'test');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname,lastname,email)values(?,?,?)");
    $stmt -> bind_param("sss",$firstname , $lastname , $email);
    $stmt -> execute();
    echo "Registration Successful";
    $stmt ->close();
    $conn ->close();
}    
?>