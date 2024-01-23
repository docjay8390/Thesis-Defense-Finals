<?php 

   session_name("user_session");
   session_start();
   
   include("config.php");
   
   if (isset($_SESSION['valid'])) {
       // Redirect to user home page or any other page
       header("Location: home.php");
       exit();
   }
   
   // rest of your login code
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="./styles.css">
    <title>Sign in</title>
</head>
<body style="height: 100vh !important;">
      <div class="container" style="background-color: #212529 !important; height: 100svh !important;">
        <div class="box form-box" style="background-color: #B7C5E1 !important; box-shadow: 0 0 10px white;
            border: solid 1px black;">
            <?php 
             
              include("config.php");
              if(isset($_POST['submit'])){
                $Email = mysqli_real_escape_string($con,$_POST['Email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM accounts WHERE Email='$Email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['Fullname'] = $row['Fullname'];
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION['Destination'] = $row['Destination'];
                    $_SESSION['Contact'] = $row['Contact'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{

            
            ?>
            <header style="font-size: 2.3rem; text-align: center;">Sign in</header>
            <form action="" method="post">
                <br>
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="email" autocomplete="off" required>
                </div>
                <br>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <br>
                <div class="field">
                    <input style="box-shadow: -3px 5px 10px white;" type="submit" class="btn" name="submit" value="Sign in" required>
                </div>
                <br>
                <div class="links" style="text-align: center;">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>