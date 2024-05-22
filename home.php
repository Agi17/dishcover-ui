<!DOCTYPE html>


<?php
session_start();
/* // Connection in Database*/

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
}

?>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="home.css" />

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--<title>Dashboard Sidebar Menu</title>-->

    <!-- Script for Slider -->
    <script src="script.js" defer></script>

    <!-- Internal CSS for Slider -->
    <style>
        .container {
            margin: auto;
            max-width: 1200px;
            width: 95%;
        }

        .slider-wrapper {
            position: relative;
        }

        .slider-wrapper .slide-button {
            position: absolute;
            top: 50%;
            outline: none;
            border: none;
            height: 50px;
            width: 50px;
            z-index: 5;
            color: #fff;
            display: flex;
            cursor: pointer;
            font-size: 2.2rem;
            background: #000;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .slider-wrapper .slide-button:hover {
            background: #404040;
        }

        .slider-wrapper .slide-button#prev-slide {
            left: -25px;
            display: none;
            border: 2px solid red;
        }

        .slider-wrapper .slide-button#next-slide {
            right: -25px;
        }

        .slider-wrapper .image-list {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 18px;
            font-size: 0;
            list-style: none;
            margin-bottom: 30px;
            overflow-x: auto;
            scrollbar-width: none;
            height: 200px;
        }

        .slider-wrapper .image-list::-webkit-scrollbar {
            display: none;
        }

        .slider-wrapper .image-list .image-item {
            width: 325px;
            height: 400px;
            object-fit: cover;
        }

        .container .slider-scrollbar {
            height: 24px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .slider-scrollbar .scrollbar-track {
            background: #ccc;
            width: 100%;
            height: 2px;
            display: flex;
            align-items: center;
            border-radius: 4px;
            position: relative;
        }

        .slider-scrollbar:hover .scrollbar-track {
            height: 4px;
        }

        .slider-scrollbar .scrollbar-thumb {
            position: absolute;
            background: #000;
            top: 0;
            bottom: 0;
            width: 50%;
            height: 100%;
            cursor: grab;
            border-radius: inherit;
        }

        .slider-scrollbar .scrollbar-thumb:active {
            cursor: grabbing;
            height: 8px;
            top: -2px;
        }

        .slider-scrollbar .scrollbar-thumb::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -10px;
            bottom: -10px;
        }

        /* Styles for mobile and tablets */
        @media only screen and (max-width: 1023px) {
            .slider-wrapper .slide-button {
                display: none !important;
            }

            .slider-wrapper .image-list {
                gap: 10px;
                margin-bottom: 15px;
                scroll-snap-type: x mandatory;
            }

            .slider-wrapper .image-list .image-item {
                width: 280px;
                height: 380px;
            }

            .slider-scrollbar .scrollbar-thumb {
                width: 20%;
            }
        }
    </style>
</head>

<body>
    <section class="wrapper">
        <nav class="sidebar close">
            <header>
                <div class="image-logo">
                    <img src="assets/homelogo-sm.png" class="logo" id="logo" alt="Dishcover">
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
                                <i class='bx bx-home'></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-map'></i>
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
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>
                </div>
            </div>

        </nav>

        <main class="main-content close">
            <div class="banner">
                <img src="assets/market.png" class="market" alt="Dishcover">
            </div>
            <div>
                <div class="dish-container">
                    <!-- <div class="dish-box"> -->
                    <img src="assets/fish.png" class="fish" alt="Dishcover">
                    <img src="assets/beef.png" class="beef" alt="Dishcover">
                    <img src="assets/chicken.png" class="chicken" alt="Dishcover">
                    <img src="assets/pork.png" class="pork" alt="Dishcover">
                    <img src="assets/vegetables.png" class="vegetables" alt="Dishcover">
                    <!-- <p><i class="fa-brands fa-css3-alt"></i></p> -->
                    <!-- <a href="./subjects/css/">Cascading Style Sheet</a> -->
                </div>
            </div>
            <!-- <div class="dish-box"> -->
            <!-- <p><i class="fa-brands fa-html5"></i></p>
            <a href="./subjects/html/">Hypertext Markup Language</a> -->
            <!-- </div> -->

            <div class="container">
                <div class="slider-wrapper">
                    <button id="prev-slide" class="slide-button material-symbols-rounded">
                        chevron_left
                    </button>
                    <ul class="image-list">
                        <img class="image-item" src="images/img-1.jpg" alt="img-1" />
                        <img class="image-item" src="images/img-2.jpg" alt="img-2" />
                        <img class="image-item" src="images/img-3.jpg" alt="img-3" />
                        <img class="image-item" src="images/img-4.jpg" alt="img-4" />
                        <img class="image-item" src="images/img-5.jpg" alt="img-5" />
                        <img class="image-item" src="images/img-6.jpg" alt="img-6" />
                        <img class="image-item" src="images/img-7.jpg" alt="img-7" />
                        <img class="image-item" src="images/img-8.jpg" alt="img-8" />
                        <img class="image-item" src="images/img-9.jpg" alt="img-9" />
                        <img class="image-item" src="images/img-10.jpg" alt="img-10" />
                    </ul>
                    <button id="next-slide" class="slide-button material-symbols-rounded">
                        chevron_right
                    </button>
                </div>
                <div class="slider-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const body = document.querySelector('body');
            const sidebar = body.querySelector('nav');
            const toggle = body.querySelector(".toggle");
            const searchBtn = body.querySelector(".search-box");
            const modeSwitch = body.querySelector(".toggle-switch");
            const modeText = body.querySelector(".mode-text");
            const content = body.querySelector(".main-content");
            const logo = document.getElementById("logo");

            const updateLogo = () => {
                logo.classList.add('fade-out');
                setTimeout(() => {
                    logo.src = sidebar.classList.contains("close") ? "assets/homelogo-sm.png" : "assets/homelogo.png";
                    logo.classList.remove('fade-out');
                }, 500);
            };

            // Initial logo update
            updateLogo();

            toggle.addEventListener("click", () => {
                sidebar.classList.toggle("close");
                content.classList.toggle("close");
                updateLogo();
                logo.classList.toggle("close");
            });

            searchBtn.addEventListener("click", () => {
                sidebar.classList.remove("close");
                content.classList.remove("close");
                updateLogo();
                logo.classList.remove("close");
            });
        });
    </script>

</body>

</html>