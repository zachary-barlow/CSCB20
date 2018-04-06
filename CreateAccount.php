<?php
   include('config.php');
   session_start();

   $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
   $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $given_id = mysqli_real_escape_string($db,$_POST['given_id']);
   $password = mysqli_real_escape_string($db,$_POST['password']);
   $user_type = mysqli_real_escape_string($db,$_POST['user_type']);

   // Insert the inputted data into the mysql
   $sql = "INSERT INTO users (`id`, `type`,`username`, `password`,`firstname`, `lastname`) VALUES ('$given_id','$user_type','$username','$password','$firstname','$lastname')";
   if ($username != ""){
     mysqli_query($db,$sql);
   }
   $_SESSION['login_user'] = $username;
   $sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password' ";
   $result = mysqli_query($db,$sql);
   $count = mysqli_num_rows($result);

   if($count == 1) {
     $_SESSION['login_user'] = $myusername;
     header("Location: index.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
  ?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="AnonFeedback.css" rel="stylesheet">
</head>
<body>
    <div class="header">
    <h1>CSCB20</h1>
  </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1>Remark Request</h1>
    </div>
    <div class="sub-sec">
      <form action="" method="post" style="padding: 10px;">

        First name:<input type="text" name="firstname"> <br>
        Last name:<input type="text" name="lastname"><br>
        ID:<input type="number" name="given_id"><br>
        username:<input type="text" name="username"><br>
        password: <input type="text" name="password"><br>

        <input type="radio" name="user_type" value=0>Student
        <input type="radio" name="user_type" value=2>TA
        <input type="radio" name="user_type" value=1>Instructor
        <br>
        <input type="submit" name="submit_form" id="submit_form">
      </form>
    </div>
  </div>
</body>
</html>
