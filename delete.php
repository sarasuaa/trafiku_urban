<?php
include_once 'userRepository.php';
$id = $_GET['id'];
$strep = new userRepository();
$strep->deleteUsers($id);

header("location:dashboard.php");

?>