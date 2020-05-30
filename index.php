<html>
<head>
    <title> PHP Tests </title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <h3> Create an account on this platform! </h3> 
    <form method="get">
        <label for="fname"> Your first name: </label>
        <input type="text" name="fname" value="<?php $fname;?>">
        <label for="lname"> Your last name: </label>
        <input type="text" name="lname" value="<?php $lname;?>">
        <label for="username"> Your username of choice: </label>
        <input type="text" name="username" value="<?php $username;?>">
        <label for="email"> Your email address: </label>
        <input type="email" name="email" value="<?php $email;?>"> 
        <input type="submit" value="Submit">
    </form>
    <p><?php echo "Your full name is: ".$_GET["fname"]." ".$_GET["lname"];?></p>
    <P><?php echo "Your username is: ".$_GET["username"];?></p>
    <p><?php echo "Your email address is: ".$_GET["email"];?></p>
</body>