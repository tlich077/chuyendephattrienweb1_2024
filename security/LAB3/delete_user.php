<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

// if (!empty($_GET['id'])) {
//     $id = $_GET['id'];
//     $userModel->deleteUserById($id);//Delete existing user
// }
// 
// Câu 4
if (!empty($_POST['submit'])) {
    $id = $_GET['id'];
    $userModel->deleteUserById($id);
} // ĐỔI THÀNH FORM
header('location: list_users.php');
?>