<?php
if(isset($_POST['btn'])){
    $username=$_POST['user_name'];
    $email=$_POST['e_mail'];
    $password=$_POST['pass_word'];

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
</head>
<body>

<h2>Username: <?php if(isset($username)){
    echo $username;
}
?></h2>
<h2>Email:<?php if(isset($email)){
    echo $email;
}

?></h2>
<h2>Password:<?php if(isset($password)){
    echo $password;
} 
?></h2>

<form action="" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="user_name"><br>

    <label for="email">Email</label><br>
    <input type="email" name="e_mail"><br>

    <label for="password">Password</label><br>
    <input type="password" name="pass_word"><br>
    <br>

    <input type="submit" value="Submit Data" name="btn">

</form>
    
</body>
</html>