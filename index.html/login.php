<?php
$username = $_post['username'];
$password = $_post['password'];

$conn = new mysqli('localhost','root','','test');
if($conn->connection_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into login(username,password)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "login sucess";
    $stmt->close();         
    $stmt->close();
}
?>