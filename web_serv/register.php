<?php
header('Content-type: application/json');
require_once '../config/connection.php';

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_pass'];

$sql_verify = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
if(mysqli_num_rows($sql_verify)>0){
    $response_array['status']='fail';
}
else{
    $sql_insert = mysqli_query($con,"INSERT INTO users(name,email,password,role) VALUES('$name','$email','$password', 'user')");
    if($sql_insert){
        $response_array['status']='success';
    }
}

echo json_encode($response_array);

?>