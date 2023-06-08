<?php
    session_start();

    require_once('logic/dbconnection.php');

    $sql =mysqli_query($conn, "SELECT * FROM messages");

    if(isset($_POST['submit']))
{
    // fetch form data
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    // submit form data

    $data=mysqli_query($conn, "INSERT INTO 
    messages(fullname,email,message)VALUES('$fullname','$email',' $message')"); 

}

?>



<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/header.php') ?>
<body>
    <div id="header">
        <div class="container">
            
            <nav>
                <img src="img/logo1.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Software Developer</p><br>
                <h1>Hi, I'm <span>Emmanuel</span></h1>
            </div>
        </div>
    </div>

    <!-- about -->
    <?php require_once('about.php') ?>

    <!-- services -->
    <?php require_once('services.php') ?>

    <!-- portfolio -->
    <?php require_once('portfolio.php') ?>

    <!-- contact -->
    <?php require_once('contact.php') ?>

    <!-- Script -->
    <?php require_once('includes/script.php') ?>
    
</body>
</html>