<!DOCTYPE html>


<?php
session_start();
/* // Connection in Database*/

if (!isset($_SESSION['email'])) {
  header( 'Location: login.php' );
}

?>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="home.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    
                </span>

                <div class="text logo-text">
                  <img src="assets/homelogo.png" class= "logo" alt="Dishcover">
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class= 'bx bx-home' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class= 'bx bx-map' ></i>
                            <span class="text nav-text">Map</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-history'></i>
                            <span class="text nav-text">Shop History</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-list-check'></i>
                            <span class="text nav-text">Vendor List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-user-detail'></i>
                            <span class="text nav-text">About Us</span>
                        </a>
                    </li>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>    
            </div>
        </div>

    </nav>

    <main class="main-content">
        <div class="banner">
            <img src="assets/market.png" class= "market" alt="Dishcover">
        </div>
        <div>
            <div class="dish-container">
              <!-- <div class="dish-box"> -->
                <img src="assets/fish.png" class= "fish" alt="Dishcover">
                <img src="assets/beef.png" class= "beef" alt="Dishcover">
                <img src="assets/chicken.png" class= "chicken" alt="Dishcover">
                <img src="assets/pork.png" class= "pork" alt="Dishcover">
                <img src="assets/vegetables.png" class= "vegetables" alt="Dishcover">
                <!-- <p><i class="fa-brands fa-css3-alt"></i></p> -->
                <!-- <a href="./subjects/css/">Cascading Style Sheet</a> -->
            </div>
        </div>
          <!-- <div class="dish-box"> -->
          
            <!-- <p><i class="fa-brands fa-html5"></i></p>
            <a href="./subjects/html/">Hypertext Markup Language</a> -->


        </div>
      </main>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
});
    </script>

</body>
</html>