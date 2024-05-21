<html>

<head> 
  <link rel="stylesheet" href="login.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title>Registration Form</title>

<?php
/* // Connection in Database*/
session_start();
/* // Connection in Database*/

require 'db_connection.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
    return;
}


if($conn)
{ 
  
  // Registration php function here
  if(isset($_POST['register']))
  {
   $FullName = $_POST['fullname'];
   $Email = $_POST['email'];
   $Password = $_POST['password'];
     if($Email && $Password)
     {       
      $hashPassword = password_hash($Password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO accounts (full_name, email_address, password) VALUES ( '".$FullName."','".$Email."','". $hashPassword."')";
     
      if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Register successfully.")</script>';
        $_SESSION["email"] = $Email;
        header( 'Location: index.php' );
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Something went wrong.")</script>';
      }
     }
     else
     {                  
       echo '<script>alert("Please fill all the fields.")</script>';  
     }
  }
  
  if(isset($_POST['login']))
  {
    // echo '<script>alert("LOGIN BUTTON CLICK")</script>';
     $Email = $_POST['login_email'];
     $Password = $_POST['login_password'];
   
     if($Email && $Password)
     {    
        //  $hashPassword = password_hash($Password, PASSWORD_DEFAULT);
         $sql ="SELECT * FROM accounts WHERE email_address='".$Email."'";
         $result = $conn->query($sql);
         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()) {
            if (!password_verify($Password, $row['password'])) 
            {
              echo '<script>alert("Email or Password is incorrect")</script>';
              exit;
            } 
            else
            {
              $_SESSION['email'] = $Email; 
              header( 'Location: home.php' );
            }
          }
        } else {
          // echo "User doesn't exist.";
          echo '<script>alert("Email or Password is incorrect")</script>';
      } 
          
     }
     else
     {                  
       echo '<script>alert("Please fill all the fields.")</script>';
       //  echo "Please fill all the fields.";
     }
  }
  
  // LOGIN php function here
}
else
{
die("Database Connection Failed!!! Error Message: " .mysqli_connect_error());
}

?>

</head>
  <body>
    <div class= "row main-container" id="card">
      <!-- Login -->
      <div class="col-xs-9 col-sm-7 col-md-5 col-lg-3 card" id="card-front"> 
        <image class="logo" src="./assets/logo.png" alt="logo" />
        <form method="post">
          <div class="mb-3 text-container">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name='login_email' placeholder="Enter your email address">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name='login_password' placeholder="Enter your password">
          </div>
          <div class="forgot-password">         
            <a href="" >Forgot Password?</a>
          </div>
          <button class="btn btn-primary submit-btn" type="submit" name='login' >Sign in</button>
        </form>
        <div class="sign-link">
          <p>Don't have an account yet?</p>
          <button type="button" onclick="openRegister()">Sign up</button>
        </div>
      </div>
      
      <!-- Register  -->
      <div class="col-xs-10 col-sm-7 col-md-5 col-lg-3 card" id="card-back"> 
        <image class="logo" src="./assets/logo.png" alt="logo" />
        <form method="post">
          <div class="mb-3 text-container">
            <label for="FullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name='fullname' placeholder="Enter your full name">
          </div>
          <div class="mb-3 text-container">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name='email' placeholder="Enter your email address">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name='password' placeholder="Enter your password">
          </div>
          <div class="mb-3 text-container">
            <label for="ConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm your password">
          </div>
  
          <button class="btn btn-primary submit-btn sign-up-btn" type="submit" name='register'>Sign up</button>
        </form>
        <div class="sign-link">
          <p>Already have an account?</p>
          <button type="button" class="sign-link" onclick="openLogin()">Sign in</button>
        </div>
      </div>
    </div>
    
     <script>
      
      var loginForm = document.getElementById("card-front");
      var registerForm = document.getElementById("card-back");

      function openRegister(){
        loginForm.style.transform = "rotateY(180deg)";
        registerForm.style.transform = "rotateY(0deg)";              
      }

      function openLogin(){
        registerForm.style.transform = "rotateY(-180deg)";
        loginForm.style.transform = "rotateY(0deg)";
      }

      function redirectTo(){
        window.location.assign = ("index.html")
        card.style.transform = "rotateY(0deg)";
      }
    </script>
		
</body>
</html>