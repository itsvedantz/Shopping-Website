<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImperialIsle - Kids</title>
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
  margin-top: 180px;
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
  margin-top: 600px;
  margin-bottom: 20px;
}

.tttt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 500px;
  /* margin-bottom: 20px; */
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
          <p>- Little Fashionistas: Explore Our Kids' Clothing Wonderland -</p>
        </center>
      </div>
  
      <div class="headimg">
        <img style="width: 1200px; height: auto; margin-top: 40px; margin-left: 250px; margin-bottom: 40px;" src="/Main_PHP Project/Images/khead.png">
      </div>


      <div class="t">
        <center>
          <p>- Mini Fashionistas: Trendy Picks for Your Little Trendsetters -</p>
        </center>
      </div>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage1.png">
          <img src="/Main_PHP Project/Images/kimage1.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Cozy Critter Romper</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Cozy_Critter_Romper">
            <input type = 'hidden' name = 'price' value = "1999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage2.png">
          <img src="/Main_PHP Project/Images/kimage2.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Cuddle Bunny Romper</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Cuddle_Bunny_Romper">
            <input type = 'hidden' name = 'price' value = "999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>

  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage3.png">
          <img src="/Main_PHP Project/Images/kimage3.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Sunshine Smock</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>1999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Sunshine_Smock">
            <input type = 'hidden' name = 'price' value = "1999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage4.png">
          <img src="/Main_PHP Project/Images/kimage4.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Dreamland Dress</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>2999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Dreamland_Dress">
            <input type = 'hidden' name = 'price' value = "2999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>

      <form action = "cart.php" method = 'post'>
      <div style="margin-top: 510px; color: white;">Hello</div>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage5.png">
          <img src="/Main_PHP Project/Images/kimage5.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Bunny Hop Bloomers</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Bunny_Hop_Bloomers">
            <input type = 'hidden' name = 'price' value = "2999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>

      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage6.png">
          <img src="/Main_PHP Project/Images/kimage6.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Peek-a-Boo Playsuit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 3999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Peek_a_Boo_Playsuit">
            <input type = 'hidden' name = 'price' value = "3999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage7.png">
          <img src="/Main_PHP Project/Images/kimage7.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Dino Dash Dungarees</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>1999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Dino_Dash_Dungarees">
            <input type = 'hidden' name = 'price' value = "1999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage8.png">
          <img src="/Main_PHP Project/Images/kimage8.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Magic Meadow Jumper</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Magic_Meadow_Jumpe">
            <input type = 'hidden' name = 'price' value = "1999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage9.png">
          <img src="/Main_PHP Project/Images/kimage9.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Unicorn Dreams Dress</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Unicorn_Dreams_Dress">
            <input type = 'hidden' name = 'price' value = "2999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage10.png">
          <img src="/Main_PHP Project/Images/kimage10.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Dinosaur Delight Duds</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 3999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Dinosaur_Delight_Duds">
            <input type = 'hidden' name = 'price' value = "3999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage11.png">
          <img src="/Main_PHP Project/Images/kimage11.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Holi Stash T-Shirt</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Holi_Stash_T-Shirt">
            <input type = 'hidden' name = 'price' value = "999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage12.png">
          <img src="/Main_PHP Project/Images/kimage12.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Superhero T-Shirt</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>1999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Superhero_Tshirt">
            <input type = 'hidden' name = 'price' value = "1999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>

<div style="margin-top: 1000px; color: white;">Hello</div>

<form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage13.png">
          <img src="/Main_PHP Project/Images/kimage13.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Butterfly Ballet Dress</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Butterfly_Ballet_Dress">
            <input type = 'hidden' name = 'price' value = "2999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage14.png">
          <img src="/Main_PHP Project/Images/kimage14.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Princess Peplum Top</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Princess_Peplum_Top">
            <input type = 'hidden' name = 'price' value = "999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>

      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage15.png">
          <img src="/Main_PHP Project/Images/kimage15.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Ballerina Blossom Skirt</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Ballerina_Blossom_Skirt">
            <input type = 'hidden' name = 'price' value = "1999">
            <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
  
            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/kimage16.png">
          <img src="/Main_PHP Project/Images/kimage16.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Twirl & Swirl </b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type = 'submit' class="btn" name = 'Add_To_Cart' style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Twirl_&_Swirl ">
            <input type = 'hidden' name = 'price' value = "2999">
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
    
     