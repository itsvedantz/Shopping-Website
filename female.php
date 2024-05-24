<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImperialIsle - Female</title>
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
  b
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
  width: 285px;
  height: 90%;
}

div.desc {
    height: 87px;
    width: 285px;  
}






.tt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 160px;
  margin-bottom: 30px;

}

.t{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 150px;
  margin-bottom: 20px;
}

.ttt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 650px;
  margin-bottom: 20px;
}

.tttt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 640px;
  margin-bottom: 20px;
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
    <!-- <div class="search-icon">
        <a href="#" style="color: black;"><i class="fa-regular fa-heart"></i></a>
    </div> -->
</div>

    <!-- <div class="sale_bar">
        <marquee>
                <p><i>Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale!Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale!Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale! Sale!</i></p>
        </marquee>
    </div> -->

    <div class="tt">
        <center>
          <p>- Refined : Classic Styles for the Modern Women -</p>
        </center>
      </div>
  
      <div class="headimg">
        <img style="width: 1100px; height: auto; margin-top: 20px; margin-left: 300px; " src="/Main_PHP Project/Images/fhead.png">
      </div>


      <div class="t">
        <center>
          <p>- Empowerment in Elegance: Women's Formal Wear for Every Occasion -</p>
        </center>
      </div>
  
      <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="\Main_PHP Project\Images\fimage1.png">
        <img src="\Main_PHP Project\Images\fimage1.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Sophisticated Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Sophisticated_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage2.png">
        <img src="/Main_PHP Project/Images/fimage2.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Victoria Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Victoria_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage3.png">
        <img src="/Main_PHP Project/Images/fimage3.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Charlotte Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Charlotte_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage4.png">
        <img src="/Main_PHP Project/Images/fimage4.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Harrington Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Harrington_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<div style="margin-top:500px; color:white;"><p>Hello</p></div>

<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage5.png">
        <img src="/Main_PHP Project/Images/fimage5.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Wellington Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Wellington_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage6.png">
        <img src="/Main_PHP Project/Images/fimage6.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Sinclair Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Sinclair_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage7.png">
        <img src="/Main_PHP Project/Images/fimage7.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Beaumont Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Beaumont_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage8.png">
        <img src="/Main_PHP Project/Images/fimage8.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Montgomery Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Montgomery_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

      <div class="ttt">
        <center>
          <p>- Radiant Heritage: Celebrating Women's Ethnic Wear with Grace and Tradition -</p>
        </center>
      </div>
  
  
      <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage9.png">
        <img src="/Main_PHP Project/Images/fimage9.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Aurelius Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Aurelius_Kurta">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage10.png">
        <img src="/Main_PHP Project/Images/fimage10.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Seraphina Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Seraphina_Kurta">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage11.png">
        <img src="/Main_PHP Project/Images/fimage11.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Valentina Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 3999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Valentina_Kurta">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage12.png">
        <img src="/Main_PHP Project/Images/fimage12.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Celestia Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 4999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Celestia_Kurta">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>


      <div class="tttt">
        <center>
          <p>- Relaxed Radiance: Embracing Women's Casual Style with Confidence and Ease -</p>
        </center>
      </div>

       <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage13.png">
        <img src="/Main_PHP Project/Images/fimage13.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Willow Dress</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Willow_Dress">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage14.png">
        <img src="/Main_PHP Project/Images/fimage14.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Luna Dress</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Luna_Dress">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage15.png">
        <img src="/Main_PHP Project/Images/fimage15.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Daisy Dress</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Daisy_Dress">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
  
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/fimage16.png">
        <img src="/Main_PHP Project/Images/fimage16.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Aurora Dress</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit'class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Aurora_Dress">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
     
<script>
              function openNewPage() {
                window.open('buy.html', '_blank');
              }
              </script>
    
