<?php 
session_start();
if(isset($_SESSION['uid'])){
  header("location:welcome.php");
}
$conn=mysqli_connect("localhost","root","","students");

if(isset($_POST['submit'])){
    
    $uid=$_POST['uid'];
    $pass=$_POST['pass'];
    
    $query="SELECT * FROM `users` WHERE `email` = '$uid' AND `password` = '$pass'";
   $sql =mysqli_query($conn,$query);
  $count = mysqli_num_rows($sql);
  if($count>0){
    $fetch_query="SELECT * FROM `users` WHERE `email` = '$uid' AND `password` = '$pass'";
    $sql =mysqli_query($conn,$fetch_query);
    $rows =mysqli_fetch_assoc($sql);
  $_SESSION['uid']=$rows['users_id'];
  $_SESSION['email']=$rows['email'];
  header("location:welcome.php");
  }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Form</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="shortcut icon" href="1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">
</head>
<body class="bg">
    <div class="center">
        <div class="ear ear--left"></div>
        <div class="ear ear--right"></div>
        <div class="face">
          <div class="eyes">
            <div class="eye eye--left">
              <div class="glow"></div>
            </div>
            <div class="eye eye--right">
              <div class="glow"></div>
            </div>
          </div>
          <div class="nose">
            <svg width="38.161" height="22.03">
              <path d="M2.017 10.987Q-.563 7.513.157 4.754C.877 1.994 2.976.135 6.164.093 16.4-.04 22.293-.022 32.048.093c3.501.042 5.48 2.081 6.02 4.661q.54 2.579-2.051 6.233-8.612 10.979-16.664 11.043-8.053.063-17.336-11.043z" fill="#243946"></path>
            </svg>
            <div class="glow"></div>
          </div>
          <div class="mouth">
            <svg class="smile" viewBox="-2 -2 84 23" width="84" height="23">
              <path d="M0 0c3.76 9.279 9.69 18.98 26.712 19.238 17.022.258 10.72.258 28 0S75.959 9.182 79.987.161" fill="none" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"></path>
            </svg>
            <div class="mouth-hole"></div>
            <div class="tongue breath">
              <div class="tongue-top"></div>
              <div class="line"></div>
              <div class="median"></div>
            </div>
          </div>
        </div>
        <div class="hands">
          <div class="hand hand--left">
            <div class="finger">
              <div class="bone"></div>
              <div class="nail"></div>
            </div>
            <div class="finger">
              <div class="bone"></div>
              <div class="nail"></div>
            </div>
            <div class="finger">
              <div class="bone"></div>
              <div class="nail"></div>
            </div>
          </div>
          <div class="hand hand--right">
            <div class="finger">
              <div class="bone"></div>
              <div class="nail"></div>
            </div>
            <div class="finger">
              <div class="bone"></div>
              <div class="nail"></div>
            </div>
            <div class="finger">
              <div class="bone"></div>
              <div class="nail"></div>
            </div>
          </div>
        </div>
        <form action="" method="post"> 
            <div class="login">
            
          <label>
            <div class="fa fa-phone"></div>
            
            <input class="username"  name="uid" type="text" autocomplete="on" placeholder="Enter Your Email"/>
          </label>
          <label>
            <div class="fa fa-commenting"></div>
            <input class="password"  name="pass" type="text" autocomplete="off" id="password" placeholder="Enter Your Password"/>
          
          </label>
       <input type="submit" name="submit" class="login-button">
          
        </div>
    </form>
       
        <div class="social-buttons">
          <div class="social">
            <div class="fa fa-wechat"></div>
          </div>
          <div class="social">
            <div class="fa fa-weibo"></div>
          </div>
          <div class="social">
            <div class="fa fa-paw"></div>
          </div>
        </div>
        <div class="footer">Uzumaki Naruto</div>
 
      <script src="extra.js"></script>
      
</body>
</html>