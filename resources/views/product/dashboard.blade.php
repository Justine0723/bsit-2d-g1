<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Website</title>

    <!-- custom css link -->
    <link rel="stylesheet" href="{{asset('cssfile/Dashboard.css')}}">


    <!-- boxicons link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <!-- remixicons link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

    <!-- google font link -->

    
</head>
<body>
    <header>
        <!-- LOGO ICON -->
        <a href="index.html" class="logo">Cosmetic Products</a>

        <!-- NAV-BAR LIST -->
        <ul class="navlist">
            <li><a href="index.html"><i class="ri-home-2-fill"></i> Home</a></li>
            <li><a href="templates/clothing.html"><i class="ri-shopping-cart-2-fill"></i> Shop Now</a></li>
            <li><a href="templates/profile.html"><i class="ri-account-circle-fill"></i> Profile</a></li>
            <li><a href="greet"><i class="ri-account-circle-fill"></i>Cart</a></li>
            <li><a href="templates/notification.html"><i class="ri-notification-3-fill"></i> Notification</a></li>
        </ul>

        <!-- MENU BOX -->
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- LOGIN-BOX -->
        <div class="login-box">
            <div class="bx bx-x" id="close-icon"></div>
            <h1>LOGIN</h1>
            <div class="login-username-box">
                <label class="lbl">Username</label>
                <input type="text" class="login-user" placeholder="Username">
            </div>
            <div class="login-password-box">
                <label class="lbl">Password</label>
                <input type="password" class="login-password" placeholder="Password">    
            </div>
            <div class="login-btn-box">
                <button class="login-btn">Login</button>
            </div>
            <div class="login-register-box">
                <p>Don't have an Account? <a href="#" class="login-register">Click Here</a></p>
            </div>
        </div>
    </header>

    <!-- HOMEPAGE -->
    <section class="homepage">
        <div class="homepage-text">
            <h1>Justine Butique</h1>
            <a href="#"><i class="ri-information-fill"></i> About</a>
            <a href="#" class="ctaa"><i class="ri-shopping-cart-fill"></i> Shop Now</a>
        </div>
        <div class="homepage-image">
            <img src="images/no_image.png">
        </div>
    </section>

    <!-- STORE SOCIAL MEDIA -->
    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
        <a href="#"><i class="ri-dribbble-line"></i></a>
    </div>
    
    <div class="srcoll-down">
        <a href="#"><i class="ri-arrow-down-s-fill"></i></a>
    </div>

    <!-- scrollreveal effect -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- custom js link -->
    <script src="js/script.js"></script>
</body>
</html>