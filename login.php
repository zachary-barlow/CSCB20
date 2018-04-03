<?php
  include("config.php");
  session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM users WHERE username = '$myusername' AND password = '$mypassword' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);


      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        //echo "count is one";
         //session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        header("Location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

      // if statements for which page to go to
      /*$sql2 = "SELECT type FROM grades WHERE username=$myusername AND password=$mypassword"
      $cr = mysqli_query($db,$sql);
      $row2 = mysqli_fetch_array($cr,MYSQLI_ASSOC);*/
   }
?>
<html>
   <head>
      <title>Login Page</title>

      <style type = "text/css">
         body {
            background-image: url('./images/login.jpg');
            position: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            color: black;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
            border-radius: 5px 5px;
            width: 85%;
            height: 30px;
         }
         .login_box {
           width: 500px;
           border: solid 1px #333333;
           background: #FFFFFF;
           border-radius: 10px;
         }
         .login-sec {
           position: fixed;
           left: 50%;
           margin-top: 10%;
           transform: translateX(-50%);
         }
         .login {
           background-color: #333333;
           color: #FFFFFF;
           text-align:center;
           padding: 3px;
         }
         input {
           padding: 5px;
         }
         #submit {
           border-radius: 5px;
           width: 150px;
           /*margin-left: 25%;*/
           background: #333333;
           cursor: pointer;
           color: #FFFFFF;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div class="login-sec">
         <div align = "left" class="login_box">
            <div class="login"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input id="submit" type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

         </div>

      </div>

   </body>
</html>
