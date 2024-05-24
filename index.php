<!DOCTYPE html>
<html lang="en">
<?php

session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImperialIsle</title>
    <link rel="icon" type="image/x-icon" href="/Main_PHP Project/Images/ImperialIsle.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar {

    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(206, 206, 206);
    color: rgb(0, 0, 0);
    /* padding: 22px; */
    padding-bottom: 20px;
    padding-top: 18px;
    border-bottom: black;
}

.logo {
    /* font-size: xx-large; */
    font-size: 40px;
    font-family: 'Kaushan Script';
    text-decoration: none;
    color: rgb(0, 0, 0);
    margin-right: 380px;
    padding-left: 30px;
}

.nav-links a {

    margin-left: 90px;
    /* margin-right: 40px; */
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.search-icon{
    margin-left: 60px;
    font-size:22px;
    margin-right: 30px;
    color: rgb(0, 0, 0);
}
.sale_bar{
    background-color: black;
    color: white;
    word-spacing: 18px;
}

.store{
    position: relative;
    display: inline-block;

}
.r {
    font-family: "Arimo";
    position: absolute;
    text-decoration: none;
    color: black;
    bottom: 124px;
    left: 315px;
}


/*This is the css of the custom scroll bar*/

/* width */
::-webkit-scrollbar {
  width: 5px;
}
/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(0, 0, 0); 
  border-radius: 5px;
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #ffffff; 
}





div.gallery {
  margin-left: 110px;
  margin-top: 60px;
  border: 1px solid #ccc;
  float: left;
  width: 285px;
  margin-bottom: 20px;
  animation: mymove 1s infinite;
}
@keyframes mymove {
  100% {border-color: #d9d9d9;}
}

div.gallery:hover {
  border: 1.5px solid #777;
}

div.gallery img {
  width: 283px;
  height: 100%;
}


.t{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 150px;
  margin-bottom: 20px;
}

.tt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 600px;
  margin-bottom: 20px;
}


.footer {
  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem;
  background: #d9d9d9;
  margin-top: 100px;
  color: rgb(0, 0, 0);
  font-weight: 500;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.2rem;
}

    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php" class="logo">ImperialIsle</a>
        <div class="nav-links">
            <a class="five" href="index.php">HOME</a>
            <a class="five" href="male.php">MALE</a>
            <a class="five" href="female.php">FEMALE</a>
            <a class="five" href="kids.php">KIDS</a>
            <a class="five" href="elite.php">ELITE</a>
            <a class="five" href="reviews.php">REVIEWS</a>
            <?php
              $count = 0;
              if(isset($_SESSION['cart']))
              {
                $count = count($_SESSION['cart']);
              }
            ?>
            <a class="five" href="cart_struct.php" style="margin-right: 50px;"><i style="font-size: 21px;" class="fa fa-shopping-cart" style="font-size:22px"> (<?php echo $count;?>) </i></a>
        </div>
    </div>
    <br>
    <div class="store">
    <img style="width: 1300px; margin-left: 200px; margin-top: 90px;" src="/Main_PHP Project/Images/store2.png">
    <i><a class="r" href="#">SHOP NOW</a></i>
    </div>
    <div class="t">
        <center>
          <p>- Style Serenade: Elevating Fashion with Elegance -</p>
        </center>
      </div>

      <div class="gallery">
        <a target="_blank" href="male.php">
          <img src="/Main_PHP Project/Images/h4.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px; padding: 15px;"><b><a style = 'text-decoration:none; font:black;' href="male.php">MALE</a></b></p>
        </center>
        </div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="female.php">
          <img src="/Main_PHP Project/Images/h2.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px; padding: 20px;"><b><a  style = 'text-decoration:none; font:black;' href="female.php">FEMALE</a></b></p>
        </center>
        </div>
      </div>

      <div class="gallery">
        <a target="_blank" href="kids.php">
          <img src="/Main_PHP Project/Images/h3.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px; padding: 15px;"><b><a  style = 'text-decoration:none; font:black;' href="kids.php">KIDS</a></b></p>
        </center>
        </div>
      </div>

      <div class="gallery">
        <a target="_blank" href="elite.php">
          <img src="/Main_PHP Project/Images/h1.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px; padding: 15px;"><b><a  style = 'text-decoration:none; font:black;' href="elite.php">ELITE</a></b></p>
        </center>
        </div>
      </div>


      <div class="tt">
        <center>
          <p>- Locate Us: Your Destination for Discovery and Directions -</p>
        </center>
      </div>
      <center>
        <iframe  style="margin-top: 40px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0009273282344!2d72.83524101161902!3d19.10761525090299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c651c56f9b%3A0xc32173e36e9d804f!2sSVKM&#39;s%20Shri%20Bhagubhai%20Mafatlal%20Polytechnic!5e0!3m2!1sen!2sin!4v1713450958600!5m2!1sen!2sin" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>
     
<center >
    <div class="ttt">
        <img style="width: 35%; margin-top: 100px;" src="/Main_PHP Project/Images/h5.png">
      </div>
</center>



      <div class="footer" style="font-family: 'kaushan Script';"><span id="year"> 2024</span><span> ImperialIsle. All rights reserved.</span></div>

</body>
</html>



