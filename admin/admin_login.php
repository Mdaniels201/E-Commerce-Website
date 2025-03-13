<?php
include '../components/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel = "stylesheet" href = "../css/admin_styles.css">

    


</head>
<body>
    <! -- admin login form section starts here -->
    <section class="form-container">
        <form action="" method="post">
            <h3>login now</h3>
            <p>default username = <span>admin</span> & password =<span>111</span></p>
            <input type = "text" name = "username" class = "box" maxlength = "20" placeholder = "enter username" 
            oninput="this.value = this.value.replace(/\s/g,'')">
            <input type = "password" name = "password" class = "box" maxlength = "20" placeholder = "enter password" 
            oninput="this.value = this.value.replace(/\s/g,'')">
            <input type="submit" value ="login" name = "login" class = "btn">
        </form>

    </section>





</body>