<?php
include 'userRepository.php';

$id = $_GET['id']; // Id

$strep = new userRepository();
$reg = $strep->getUserById($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<body>

    <!--------RegjisterForm------>

    <div class="account-page">
        <div class="container1">
            <div class="row1">
               
                <div class="col-2">
                    <div class="form-container">
                            <span><b>Edit</b></span> 
                                                   
                        <form action="" method="post">  
                    
                        <input type="text" id="username" name="username" value="<?php echo $reg['username'] ?>" placeholder="username">
                        <input type="email" id="email" name="email" value="<?php echo $reg['email'] ?>" placeholder="email">
                        <input type="password" id="password" name="password" value="<?php echo $reg['password'] ?>" placeholder="password">
                        <input type="confirm" id="confirm" name="confirm" value="<?php echo $reg['confirm'] ?>" placeholder="confirm">
                        <input type="submit" name="editBtn" value="save" class="editbtn"> 
                        <br>
                        </form>

                        
                    </div>
                   

                </div>
            </div>
        </div>
</div>

<?php

if (isset($_POST['editBtn'])) {
    $id = $reg['Id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    $strep->editUsers($username, $email,$password,$confirm, $id);

    header("location:dashboard.php");
}

?>


