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


</head>
  <body>
    <div class= "row main-container" id="card">
      <!-- Login -->
      <div class="col-xs-9 col-sm-7 col-md-5 col-lg-3 card" id="card-front"> 
        <image class="logo" src="./assets/logo.png" alt="logo" />
        <form method="post">
          <div class="mb-3 text-container">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <div class="forgot-password">         
            <a href="" >Forgot Password?</a>
          </div>
          <button class="btn btn-primary submit-btn" type="button">Sign in</button>
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
            <input type="text" class="form-control" id="fullname" placeholder="Enter your full name">
          </div>
          <div class="mb-3 text-container">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address">
          </div>
          <div class="mb-3 text-container">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <div class="mb-3 text-container">
            <label for="ConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm your password">
          </div>
  
          <button class="btn btn-primary submit-btn sign-up-btn" type="button">Sign up</button>
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