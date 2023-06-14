<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Justine</title>

  <!-- custom css link -->
  <link rel="stylesheet" href="{{asset('cssfile/cart.css')}}">
  
</head>

<body>
  <header>
    <!-- LOGO ICON -->
    <a href="Dash" class="logo">Justine Butique</a>

    <!-- NAV-BAR LIST -->
    <ul class="navlist">
      <li><a href="Dash"><i class="ri-home-2-fill"></i> Home</a></li>
      <li><a href="clothing.html"><i class="ri-shopping-cart-2-fill"></i> Shop Now</a></li>
      <li><a href="profile.html"><i class="ri-account-circle-fill"></i> Profile</a></li>
      <li><a href="cart.html"><i class="ri-account-circle-fill"></i>Cart</a></li>
      <li><a href="notification.html"><i class="ri-notification-3-fill"></i> Notification</a></li>
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
  
<!-- MAIN PANEL -->
<div class="main-panel">
  <div class="main-box">

    <div class="main-box-image">
      <img src="../images/no_image.png">
    </div>
  
    <div class="main-box-info">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus iste velit asperiores dolores corporis laborum voluptatem beatae, vitae alias repellendus culpa est nihil commodi, blanditiis numquam neque magnam impedit quod?</p>
    </div>
  
    <div class="main-box-quantity">
      <button class="plus-btn">+</button>
      <input type="number" class="item-qty" placeholder="0">
      <button class="minus-btn">-</button>
    </div>
  </div>
  
  <div class="main-box">

    <div class="main-box-image">
      <img src="../images/no_image.png">
    </div>
  
    <div class="main-box-info">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus iste velit asperiores dolores corporis laborum voluptatem beatae, vitae alias repellendus culpa est nihil commodi, blanditiis numquam neque magnam impedit quod?</p>
    </div>
  
    <div class="main-box-quantity">
      <button class="plus-btn">+</button>
      <input type="number" class="item-qty" placeholder="0">
      <button class="minus-btn">-</button>
    </div>
  </div>

  <div class="main-box">

    <div class="main-box-image">
      <img src="../images/no_image.png">
    </div>
  
    <div class="main-box-info">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus iste velit asperiores dolores corporis laborum voluptatem beatae, vitae alias repellendus culpa est nihil commodi, blanditiis numquam neque magnam impedit quod?</p>
    </div>
  
    <div class="main-box-quantity">
      <button class="plus-btn">+</button>
      <input type="number" class="item-qty" placeholder="0">
      <button class="minus-btn">-</button>
    </div>
  </div>
  
</div>

</body>
</html>