<?php
session_start();
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");

if(isset($_SESSION['nurseid']))
{
	echo "<script>window.location='nurseaccount.php';</script>";
}
$err='';
if(isset($_POST['submit']))

{	
	$sql = "SELECT * FROM nurse WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) == 1){
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION['nurseid']= $rslogin['nurseid'] ;
		echo "<script>window.location='nurseaccount.php';</script>";
	}
	else
	{
		$err = "Invalid Login ID or Password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="assets\images\logo2.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">
	<style>
		*{
            font-family: "Geist", sans-serif;
        }

html{
    margin: 0;
    padding: 0;
}

body{
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.main-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url(images/bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.signup-container {
    flex: 1;
    padding: 20px;
    height: 100vh;
    display: flex;
}

.logo-container{
    display: flex;
    justify-content: center;   
}

.logo-img{
    width: 100px;
    height: 70px;
}

.signup-div {
    max-width: 400px;
    margin: auto;
    /* border: 2px solid white; */
	padding: calc(3rem - 20px) calc(4rem - 20px);
    background: #00000000;
    backdrop-filter: blur(25px);
    border-radius: 20px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.6);
}

@media screen and (max-width: 767px) {
    .main-container {
        flex-direction: column-reverse;
        align-items: stretch;
    }

    .signup-container {
        order: 2;
        height: auto;
    }
}

@media screen and (max-width: 375px) {
    .signup-container {
        scale: 0.85;
        display: flex;
        justify-content: center;
    }
}

@media screen and (max-width: 330px) {
    .signup-container{
        scale: 0.75;
        display: flex;
        justify-content: center;
    }
}

@media screen and (max-width: 310px) {
    .signup-container{
        scale: 0.65;
        display: flex;
        justify-content: center;
    }
}

.h1-text{
    font-size: 26px;
    text-align: center;
    margin-bottom: 10px;
    font-weight: 900;
}

.h3-text{
    text-align: center;
    margin: 0;
}

.signup-form{
    margin-top: 40px;
}

label{
    font-weight: 700;
}

label, input{
    display: block;
}

.asterisk-span{
    color: rgb(255 0 0);
    padding-left: 3px;
}

.input-text{
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 30px;
    padding: 10px 140px 10px 20px;
    display: flex;
    align-items: center;
    font-size: 16px;
    cursor: text;
    transition: 0.3s ease-in-out border;
    margin-bottom: 30px;
}

.input-text:focus{
    outline: none;
    border: 1px solid black;
}

.name-label{
    margin-bottom: 5px;
}

.email-label, .password-label{
    margin: 5px 0px;
}

::-webkit-input-placeholder{
    font-size: 14px;
}

.signup-button-div{
    display: flex;
    justify-content: center;
    align-items: center;
}

.signup-button{
    background-color: #202020;
    color: #fff;
    border: none;
    padding: 10px 145px;
    border-radius: 30px;
    font-size: 16px;
    transition: 0.3s cubic-bezier(1, 0.02, 1, 1) all;
    margin-top: 10px;
    font-weight: 800;
}

.signup-button:hover{
    cursor: pointer;
    border: 1px solid #7b7b7b;
    color: #000;
    background-color: #fff;
}

.another-way{
    font-size: 14px;
    display: flex;
    justify-content: center;
}

.login-text-span{
    color: #ae7d12;
    cursor: pointer;
}

.login-text-span:hover{
    text-decoration: underline;
}

.notification-bar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #ff4d4d;
    color: white;
    text-align: center;
    padding: 10px 0;
    font-size: 16px;
    display: none;
    z-index: 9999;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.notification-bar.show {
    display: block;
}
</style>
</head>
<div id="notification-bar" class="notification-bar"></div>
    <div class="main-container">
        <div class="signup-container">
            <div class="signup-div">
                <div class="logo-container">
                    <img src="images/logo.png" alt="Aravind Eye Hospital Logo" class="logo-img">
                </div>
                <div class="signup-h1">
                    <h1 class="h1-text">Aravind Eye Hospitals - EMR</h1>
					<h3 class="h3-text">Nurse Login Portal</h3>
                </div>
                <!-- <div id="error-msg"><?php echo $err; ?></div> -->
                <div class="signup-form">
                    <form action="" method="post" name="frmadminlogin" onsubmit="return validateForm()">
                        <label class="email-label">Login ID<span class="asterisk-span">*</span></label>
                        <input type="text" name="loginid" placeholder="Enter your Login ID" required class="input-text">
                        <label class="password-label">Password<span class="asterisk-span">*</span></label>
                        <input type="password" name="password" placeholder="Enter your Password" required class="input-text">
                        <div class="signup-button-div">
                            <button type="submit" name="submit" class="signup-button">Log In</button>
                        </div>
                    </form>
                    <p class="another-way">
                        <span class="login-text-span">
                            <a href="Forgotpassword.php">Forgot Password?</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
         // PHP error handling
         const errorMessage = "<?php echo $err; ?>";
        if (errorMessage) {
            displayNotification(errorMessage);
        }

        function displayNotification(message) {
            const notificationBar = document.getElementById('notification-bar');
            notificationBar.textContent = message;
            notificationBar.classList.add('show');

            // Hide the notification after 5 seconds
            setTimeout(() => {
                notificationBar.classList.remove('show');
            }, 5000);
        }

        function validateForm() {
            const loginid = document.forms['frmadminlogin']['loginid'].value;
            const password = document.forms['frmadminlogin']['password'].value;

            if (loginid.trim() === "") {
                displayNotification("Login ID is required.");
                return false;
            }
            if (password.trim() === "") {
                displayNotification("Password is required.");
                return false;
            }
            if (password.length < 8) {
                displayNotification("Password must be at least 8 characters long.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
