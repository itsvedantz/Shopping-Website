<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImperialIsle - Men</title>
    <link rel="icon" type="image/x-icon" href="/Main_PHP Project/Images/ImperialIsle.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap');

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
    </div>

      


    <div class="tt">
      <center>
        <p>- Refined Gent: Classic Styles for the Modern Man -</p>
      </center>
  
    </div>

    <div class="heading">
      <img style="width: 1200px; height: auto; margin-top: 60px; margin-left: 250px; " src="/Main_PHP Project/Images/malehead.png">
    </div>

    <div class="t">
      <center>
        <p>- Gentleman's Distinguished <span style="color: #8f8f8f;">Formal</span> Attire for Every Occasion -</p>
      </center>
    </div>

    <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage1.png">
        <img src="/Main_PHP Project/Images/mimage1.png" alt="Cinque Terre" width="600" height="400">
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
          <a href="buy.html">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
          </a>
      </div>
      </div>
    </div>
</form>
    
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage2.png">
        <img src="/Main_PHP Project/Images/mimage2.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Polished Performance Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Polished_Performance_Shirt">
          <input type = 'hidden' name = 'price' value = "999">
          <button class="btn1" name="buy" onclick="openNewPage()"  style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>

    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage3.png">
        <img src="/Main_PHP Project/Images/mimage3.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Corporate Collared Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Corporate_Collared_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage4.png">
        <img src="/Main_PHP Project/Images/mimage4.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Regal Dress Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Regal_Dress_Shirt">
          <input type = 'hidden' name = 'price' value = "2999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>



    <div style="margin-top: 510px; color: white;">Hello</div>
    <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage5.png">
        <img src="/Main_PHP Project/Images/mimage5.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Classic Formal Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Classic_Formal_Shirt">
          <input type = 'hidden' name = 'price' value = "2999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>



    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage6.png">
        <img src="/Main_PHP Project/Images/mimage6.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Executive Elegance Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 3999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Executive_Elegance_Shirt">
          <input type = 'hidden' name = 'price' value = "3999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage7.png">
        <img src="/Main_PHP Project/Images/mimage7.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Office Ready Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Office_Ready_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
<form action = "cart.php" method = 'post'>

    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage8.png">
        <img src="/Main_PHP Project/Images/mimage8.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Symbol Premium Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Symbol_Premium_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>
    
    <div class="ttt">
      <center>
        <p>- Global Grace: Fusion <span style="color: #8f8f8f;">Ethnic</span> Wear for Men Across Cultures -</p>
      </center>
    </div>

  <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage9.png">
        <img src="/Main_PHP Project/Images/mimage9.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Traditional Dhoti Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 4999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Traditional_Dhoti_Kurta">
          <input type = 'hidden' name = 'price' value = "4999">
          <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>

    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage10.png">
        <img src="/Main_PHP Project/Images/mimage10.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Heritage Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 3999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Heritage_Kurta">
          <input type = 'hidden' name = 'price' value = "3999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>

    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage11.png">
        <img src="/Main_PHP Project/Images/mimage11.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Ethnic Class Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Ethnic_Class_Kurta">
          <input type = 'hidden' name = 'price' value = "2999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>

    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage12.png">
        <img src="/Main_PHP Project/Images/mimage12.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Cultural Pathani Kurta</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 5999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Cultural_Pathani_Kurta">
          <input type = 'hidden' name = 'price' value = "5999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

   
    <div class="tttt">
      <center>
        <p>-  Everyday Essentials Versatile <span style="color: #8f8f8f;">Casualwear</span> for Men on the Go -</p>
      </center>
    </div>
    <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage13.png">
        <img src="/Main_PHP Project/Images/mimage13.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Casual Polo Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Casual_Polo_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" name = "buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

<form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage14.png">
        <img src="/Main_PHP Project/Images/mimage14.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Raven Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Raven_Shirt">
          <input type = 'hidden' name = 'price' value = "999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

    <form action = "cart.php" method = 'post'>
    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage15.png">
        <img src="/Main_PHP Project/Images/mimage15.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Plain Matte Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>1999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Plain_Matte_Shirt">
          <input type = 'hidden' name = 'price' value = "1999">
          <button class="btn1" name="buy" onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
      </div>
      </div>
    </div>
</form>

    <form action = "cart.php" method = 'post'>

    <div class="gallery">
      <a target="_blank" href="/Main_PHP Project/Images/mimage16.png">
        <img src="/Main_PHP Project/Images/mimage16.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">
        <center>
        <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Denim Blue Shirt</b></p>
        <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
        <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 2999</p> 
      </center>
        <div style="display: flex; align-items: center;">
          <button type = 'submit' class="btn" name = "Add_To_Cart" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Denim_Blue_Shirt">
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
    
</body>
</html> 