<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  
  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImperialIsle - Reviews</title>
    <link rel="icon" type="image/x-icon" href="/Main_PHP Project/Images/ImperialIsle.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
}



.navbar {
    display: flex;

   position: fixed; 
  top: 0; 
  width: 100%; 

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

    font-weight: 330;
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
  margin-left: 125px;
  margin-top: 100px;
  border: 1px solid #ccc;
  float: left;
  width: 600px;
  height: 220px;
  animation: mymove 1s infinite;
}
@keyframes mymove {
  100% {border-color: #d9d9d9;}
}

div.gallery:hover {
  border: 1.5px solid #000000;
}

div.gallery img {
  width: 600px;
  height: 100%;
}






.tt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 180px;
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
            <a class="five" href="cart_struct.php" style="margin-right: 50px;"><i style="font-size: 21px;" class="fa fa-shopping-cart" style="font-size:22px"></i></a>
    </div>
    <!-- <div class="search-icon">
        <a href="#" style="color: black;"><i class="fa-regular fa-heart"></i></a>
    </div> -->
</div>
<div class="tt">
      <center>
        <p>- Echoes of Satisfaction: Customer Testimonials & Reviews -</p>
      </center>  
    </div>


    <div class="gallery" style="margin-right:90px;">
      <a target="_blank" href="/Main_PHP Project/Images/mimage2.png">
        <img src="/Main_PHP Project/Images/r1.png" alt="Cinque Terre">
      </a>
    </div>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage14.png">
        <img src="/Main_PHP Project/Images/r2.png" alt="Cinque Terre">
      </a>
    </div>
    <div style="margin-top: 320px; color: white;"><p>H</p></div>
    <div class="gallery" style="margin-right:90px;">
      <a target="_blank" href="/Main_PHP Project/Images/mimage12.png">
        <img src="/Main_PHP Project/Images/r3.png" alt="Cinque Terre">
      </a>
    </div>
    <div class="gallery" >
      <a target="_blank" href="/Main_PHP Project/Images/fimage10.png">
        <img src="/Main_PHP Project/Images/r4.png" alt="Cinque Terre">
      </a>
    </div>
</body>
</html>