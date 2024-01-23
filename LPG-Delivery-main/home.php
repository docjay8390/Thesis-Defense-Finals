<?php 

 session_name("user_session");
 session_start();
 
 include("config.php");
 if (!isset($_SESSION['valid'])) {
     header("Location: index.php");
     exit();
 }
 
 // rest of your user home page code
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="./styles.css">
    <title>Home</title>
</head>


<style>
    body {
        background-color: black;
        max-width: 190rem;
        min-width: 350px;
    }

    .tank-image {
        transform: rotate(20deg);
        width: 600px;
        filter: drop-shadow(0 0 50px rgba(255, 255, 255, 0.349));
    }

    .big-text {
        font-size: 6rem;
        color: blue;
        font-style: italic;
        text-shadow: 0 0 2px white;
    }

    .texts {
        font-size: 2.5rem;
         color: white;
    }

    @media only screen and (max-width: 768px) {
    .tank-image {
        transform: rotate(20deg);
        height: 300px;
        width: 300px;
        filter: drop-shadow(0 0 50px rgba(255, 255, 255, 0.349));
    }

    .texts {
        font-size: 1rem;
        color: white;
    }


    .big-text {
        font-size: 3rem;
        color: blue;
        font-style: italic;
        text-shadow: 0 0 2px white;
    }


    .luquid {
        display: flex;
        flex-direction: column;
        row-gap: 2rem;
        align-items: center;
        justify-content: space-around;
        padding: 5rem 1rem;
        height: 100%;
    }
}
    .solane {
        height: 270px !important;
    }
    .product {
        height: 100%;
        background: #212529;
        text-align: center;
        padding: 7rem 0 10rem 0;
    }

    .solane-container {
        display: flex;
        flex-direction: column;
        max-width: 250px;
        text-align: center;
        color: white;'
        background-color: red !important;
        border: 1px solid white;
        height: 100%;
        padding: 2rem 0;
    }

    .luquid {
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 5rem 1rem;
        height: 100%;
    }

    .price {
        font-size: 24px;
        max-width: 80px;
        border: solid white 2px;
    }

    .hu {
        display: flex;
        justify-content: center;
    }

    .buys {
        color: white;
        background-color: red;
        text-decoration: none;
        font-size: 26px;
        padding: 5px 10px;
        border: solid white 2px;
    }

    .product-button {
        text-decoration: none;
        color: white;
        font-size: 18px;
    }

    html {
        scroll-behavior: smooth;
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 62.5%;
        font-family: 'Roboto', sans-serif;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }


    .header{
        border-bottom: 1px solid #E2E8F0;
        z-index:4 ;
        position: static;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 3rem 5rem;
        background-color: #212529 !important;
    }

    .hamburger {
        display: none;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: white;
    }

    .nav-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 5;
        
    }

    .nav-item {
        margin-left: 5rem;
    }

    .nav-link{
        font-size: 1.6rem;
        font-weight: 400;
        color: #475569;
    }

    .nav-link:hover{
        color: #482ff7;
    }

    .nav-logo {
        font-size: 2.1rem;
        font-weight: 500;
        color: #482ff7;
    }

    @media only screen and (max-width: 768px) {
        .nav-menu {
            position: fixed;
            left: -100%;
            top: 10rem;
            flex-direction: column;
            background-color: #212529;
            width: 100%;
            text-align: center;
            display: ;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .nav-menu.active {
            left: 0;
        }

        .nav-item {
            margin: 2.5rem 0;
        }

        .hamburger {
            display: block;
            cursor: pointer;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }


    }

        .icon {
            height: 35px;
            cursor: pointer;
            box-shadow: 0 0 10px black;
            border-radius: 5px;
        }

        .footer {
            height: 100%;
            padding: 3rem 1rem 10px 1rem;
            color: white;
            text-align: center;
            background: gray;
        }


        .hero-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 2rem 5rem 2rem;
            background-color: #212529;
            height: 100%;
        }

        /* Mobile */
        @media only screen and (max-width: 768px) {
            .hero-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 3rem 2rem;
                background-color: #212529;
                height: 100%;
        }
        /* Tablet */
    }

        @media only screen and (max-width: 768px) and (max-height: 1024px) {
            .hero-section {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 3rem 2rem;
                background-color: #212529;
                height: 100%;

        }

            @media only screen and (min-width: 768px) and (max-height: 1024px) {
                .hero-section {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 3rem 2rem;
                    background-color: #212529;
                    height: 100%;
            }
        }

            @media only screen and (min-width: 768px) and (max-height: 1366px) {
                .hero-section {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 3rem 2rem;
                    background-color: #212529;
                    height: 100%;
            }
    }
}



</style>


<body>

    <div style="max-width: 190rem;">

        <header class="header">
                <nav class="navbar">
                    <a style="color: red; font-style: italic; font-weight: 700;
                    font-size: 3rem;" href="#" class="nav-logo"><span style="color: blue;">LPG</span> Gasul</a>
                    <ul class="nav-menu">
                        <!-- <li class="nav-item">
                            <a class="product-button" href="#product">Product</a>
                        </li> -->
                        <li class="nav-item">
                            

                            <?php 
                            
                            $id = $_SESSION['id'];
                            $query = mysqli_query($con,"SELECT*FROM accounts WHERE Id=$id");

                            while($result = mysqli_fetch_assoc($query)){
                                $Fullname = $result['Fullname'];
                                $Username = $result['Username'];
                                $Email = $result['Email'];
                                $Destination = $result['Destination'];
                                $Contact = $result['Contact'];
                                $id = $result['Id'];
                            }
                            
                            echo "<a style='color: white; font-size: 18px' href='edit.php?Id=$id'>Change Profile</a>";
                            ?>
                    
                            
                        </li>
                            <li class="nav-item">
                                <a href="logout.php"> <button class="btn">Sign Out</button> </a>
                            </li>
                            
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>
        </header>

            <section class="hero-section">
                    <div>
                        <h1 class="big-text">
                            LPG <span style="color: red;">TANK</span> DELIVERY
                        </h1>
                        <p class="texts">
                        ONLINE LPG TANK DELIVERY. NOW YOU CAN BUY 
                        LPG TANKS <br> THROUGH ONLINE FOR AS LOW AS ₱699.
                    </p>
                    <br>
                    <a href="#product">
                        <button class="btn" style="background-color: red; font-size: 2rem; height: 60px; padding: 0 4rem;
                            border: solid 2px blue;">
                            View Product
                        </button>
                    </a>
                    </div>
                    <div class="">
                        <img class="tank-image" src="./LPG.png" alt="">
                    </div>
            </section>

            <div class="product" id="product">
                <h1 style="font-size: 3rem; color: white;">
                    Product
                </h1>
                <br><br>
                <div class="luquid">

                    <div class="solane-container">
                        <img class="solane" src="./PETRON.png" alt="">
                        <div class="hu">
                            <H3>
                                PETRON
                                <br><br>
                                <p class="price">
                                    ₱899
                                </p>
                                <br>
                                <a class="buys" href="orders.php">BUY</a>
                            </H3>
                        </div>
                    </div>

                    <div class="solane-container">
                        <img class="solane" src="./SOLANE_EUSAFF-removebg-preview.png" alt="">
                        <div class="hu">
                            <H3>
                                SOLANE
                                <br><br>
                                <p class="price">
                                    ₱799
                                </p>
                                <br>
                                <a class="buys" href="orders2.php">BUY</a>
                            </H3>
                        </div>
                    </div>

                    <div class="solane-container">
                        <img class="solane" src="./CALOR-removebg-preview.png" alt="">
                        <div class="hu">
                            <H3>
                                CALOR
                                <br><br>
                                <p class="price">
                                    ₱699
                                </p>
                                <br>
                                <a class="buys" href="orders3.php">BUY</a>
                            </H3>
                        </div>
                    </div>

                </div>
            </div>

            <div id="footer1">
                <div class="cont-tank">
                    <img class="tank-background" src="./Picsart_23-12-15_18-36-15-742.jpg" alt="">
                </div>
                
                <div class="flowG">
                    <h1 class="contact">
                        Contact us
                    </h1>
                        <br>
                    <div>   
                        <img class="icon" style="margin-right: 50px;" src="./instagram.png" alt="">

                        <img class="icon" src="./facebook.png" alt="">  
                    </div>
                    
                    <br>
                    <br>        

                    <div style="display: flex;">
                        <p class="allright">
                            © 2023 Online LPG Tank Delivery. All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</body>
<style>
    @media only screen and (max-width: 768px) {
            .allright {
            font-size: 1.2rem !important;
            font-weight: 400;
            color: white;
            text-align: center;
            text-shadow: 0 0 20px black;
        }
    }

        @media only screen and (max-width: 480px) {
            .allright {
            font-size: 12px;
            font-weight: 400;
            color: white;
            text-align: center;
            text-shadow: 0 0 20px black;
        }
        .tank-image {
            height: 200px;
            width: 200px;
        }
        .flowG{
            padding-top: 80px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .tank-background {
            height: 300px;
            width: 100%;
            max-width: 190rem;
            object-fit: cover;
            opacity: 50%;
        }
    }

    /* tablet */
    @media only screen and (max-width: 820px) and (max-height: 1180px) {
        .hero-section {
            display: flex;
            flex-direction: column;
        }
        .hero-section {
            display: flex;
            flex-direction: column-reverse;
        }
    }

    .contact {
        font-size: 30px;
        color: white;
        text-shadow: 0 0 10px black;
    }
    .allright {
        font-size: 24px;
        font-weight: 400;
        color: white;
        text-shadow: 0 0 20px black;
    }
    .cont-tank {
        position: absolute;
        width: 100%;
        box-shadow: inset 10px 10px 90px black;
        background-color: black;
    }

    .flowG{
        padding-top: 80px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #footer1 {
        border-top: solid 1px white;
        max-width: 190rem;
    }
    .tank-background {
        height: 300px;
        width: 100%;
        max-width: 190rem;
        object-fit: cover;
        opacity: 50%;
    }
</style>
<script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");


        const navLink = document.querySelectorAll(".nav-link");

        navLink.forEach(n => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    }

    

</script>


</html>
