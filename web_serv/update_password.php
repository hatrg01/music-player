<?php 
header('Content-type: application/json');
require_once '../config/connection.php';

$user_email = $_POST['verify_email'];
$user_pass = $_POST['verify_pass'];

$sql_update = mysqli_query($con, "UPDATE users SET password='$user_pass' WHERE email='$user_email'");

if($sql_update){
    $response_array['status']='success';
}
else{
    $response_array['status']='fail';
}

echo json_encode($response_array);


?>