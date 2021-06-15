<?php
session_start();

     include("db_conn.php");

     if(isset($_POST['submit'])) {  

          //something was posted
          $user_name = $_POST['user_name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          
         $sql = "INSERT INTO users('id', 'user_name', 'email',' password') 
                 VALUES (null,'$user_name','$email','$password')";
                          print_r(mysqli_query($conn, $sql));
         
     } else{
         echo "kwani ni kesho";
        //  header("Location: index.html");

     }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

     <div id="box">

         <form method="post">
             <div style="font-size: 20px;margin: 10px;">Signup</div>
             <input type="text" name="user_name"><br><br>
             <input type="text" name="password"><br><br>
            <input type="password" name="password"><br><br>

             <input type="submit" value="Signup"><br><br>

             <a href="login.php">Click to login</a><br><br>
        </form>
    </div>
</body>
</html>