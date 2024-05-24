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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.caom/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


/* .New{
  font-family: 'poppins';
  font-size: 30px;
  font-weight: 500;
  margin-top: 100px;
  padding: 40px;
  margin-left:320px;
  font-style: italic;
} */



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
  margin-top: 135px;
  margin-bottom: 30px;

}

.ttt{
  font-size: 28px;
  font-family: 'Kaushan Script';
  margin-top: 1615px;
  margin-bottom: 29px;

}

/* .col1 {
  font-size: 16px;
  font-family: 'Lexend';
  margin-top: 100px;
  margin-left: 100px;
} */



/* :root {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
} */
/* body {
  height: 100vh;
  overflow: hidden;
} */
.footer {
  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem;
  background: #d9d9d9;
  margin-top: 600px;
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

   
    <div class="headimg">
      <img style="width: 1500px; height: auto; margin-top: 160px; margin-left: 103px; " src="/Main_PHP Project/Images/rm.png">
    </div>
    <div class="tt">
      <center>
        <p>- Explore Lavish Wardrobe Wonders -</p>
      </center>
    </div>



    <form action = "cart.php" method = 'post'>
    <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image.png">
          <img src="/Main_PHP Project/Images/image.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Mesh Matte Blazer</b></p>
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 7999</p> 
        </center>
          <div style="display: flex; align-items: center;">
          <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
          <input type = 'hidden' name = 'item_name' value = "Mesh_Matte_Blazer">
          <input type = 'hidden' name = 'price' value = "7999">
          <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
      </form>
        
      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image1.png">
          <img src="/Main_PHP Project/Images/image1.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Raven Black Blazer</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 8999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Raven_Black_Blazer">
          <input type = 'hidden' name = 'price' value = "8999">
            <button class="btn1" name="buy"   onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>

        

            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image2.png">
          <img src="/Main_PHP Project/Images/image2.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Midnight Black Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>10,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Midnight_Black_Suit">
          <input type = 'hidden' name = 'price' value = "10999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image3.png">
          <img src="/Main_PHP Project/Images/image3.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Charcoal Black Blazer</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 5999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Charcoal_Black_Blazer">
          <input type = 'hidden' name = 'price' value = "5999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>




            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image4.png">
          <img src="/Main_PHP Project/Images/image4.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Regal Ebony Tuxedo</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 12,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Regal_Ebony_Tuxedo">
          <input type = 'hidden' name = 'price' value = "12999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image5.png">
          <img src="/Main_PHP Project/Images/image5.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Noble Midnight Gray Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 4999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Noble_Midnight_Gray_Suit">
          <input type = 'hidden' name = 'price' value = "4999"> 
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>

            <form action = "cart.php" method = 'post'>    
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image6.png">
          <img src="/Main_PHP Project/Images/image6.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Steel Gray Attire</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>15,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Steel_Gray_Attire">
          <input type = 'hidden' name = 'price' value = "15999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image7.png">
          <img src="/Main_PHP Project/Images/image7.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Silver Gray Tailcoat</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 3999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Silver_Gray_Tailcoat">
          <input type = 'hidden' name = 'price' value = "3999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>


            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image8.png">
          <img src="/Main_PHP Project/Images/image8.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Smoke Gray Wool Blazer</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 10,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Smoke_Gray_Wool_Blazer">
          <input type = 'hidden' name = 'price' value = "10999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
          
        
            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image9.png">
          <img src="/Main_PHP Project/Images/image9.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Platinum Gray Pinstripe Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 14,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Platinum_Gray_Pinstripe_Suit">
          <input type = 'hidden' name = 'price' value = "14999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
            <form action = "cart.php" method = 'post'>

      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image10.png">
          <img src="/Main_PHP Project/Images/image10.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Mist Gray Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>9,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Mist_Gray_Suit">
          <input type = 'hidden' name = 'price' value = "9999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>

            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image11.png">
          <img src="/Main_PHP Project/Images/image11.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Peter Gray Formal Blazer</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 6999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Peter_Gray_Formal_Blazer">
          <input type = 'hidden' name = 'price' value = "6999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>


      <div class="ttt">
        <center>
          <p>- Ethereal Whites Indulge in Luxury Fashion -</p>
        </center>
      </div>


      <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image12.png">
          <img src="/Main_PHP Project/Images/image12.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Ivory White Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 24,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Ivory_White_Suit">
          <input type = 'hidden' name = 'price' value = "24999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>

            <form action = "cart.php" method = 'post'>

      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image13.png">
          <img src="/Main_PHP Project/Images/image13.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Snow White Tuxedo</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 20,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Snow_White_Tuxedo">
          <input type = 'hidden' name = 'price' value = "20999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
            <form action = "cart.php" method = 'post'>

      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image14.png">
          <img src="/Main_PHP Project/Images/image14.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Diamond White Formal Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span>27,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Diamond_White_Formal_Suit">
          <input type = 'hidden' name = 'price' value = "27999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>
            <form action = "cart.php" method = 'post'>
      <div class="gallery">
        <a target="_blank" href="/Main_PHP Project/Images/image15.png">
          <img src="/Main_PHP Project/Images/image15.png" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
          <center>
          <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Alabaster White Tailored Suit</b></p>
          <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
          <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 29,999</p> 
        </center>
          <div style="display: flex; align-items: center;">
            <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
            <input type = 'hidden' name = 'item_name' value = "Alabaster_White_Tailored_Suit">
          <input type = 'hidden' name = 'price' value = "29999">
            <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
        </div>
        </div>
      </div>
            </form>

<div class="spaceee" style=" margin-top: 520px; color: white;">
hello
</div>
<form action = "cart.php" method = 'post'>
<div class="gallery">
  <a target="_blank" href="/Main_PHP Project/Images/image16.png">
    <img src="/Main_PHP Project/Images/image16.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">
    <center>
    <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Luxe Snow White Tailcoat</b></p>
    <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
    <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 22,999</p> 
  </center>
    <div style="display: flex; align-items: center;">
      <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
      <input type = 'hidden' name = 'item_name' value = "Luxe_Snow_White_Tailcoat">
          <input type = 'hidden' name = 'price' value = "22999">
      <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
  </div>
  </div>
</div>
            </form>

            <form action = "cart.php" method = 'post'>
<div class="gallery">
  <a target="_blank" href="/Main_PHP Project/Images/image17.png">
    <img src="/Main_PHP Project/Images/image17.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">
    <center>
    <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Mesh Blazer</b></p>
    <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
    <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 17,999</p> 
  </center>
    <div style="display: flex; align-items: center;">
      <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
      <input type = 'hidden' name = 'item_name' value = "Mesh_Blazer">
          <input type = 'hidden' name = 'price' value = "17999">
      <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
  </div>
  </div>
</div>
            </form>

            <form action = "cart.php" method = 'post'>
<div class="gallery">
  <a target="_blank" href="/Main_PHP Project/Images/image18.png">
    <img src="/Main_PHP Project/Images/image18.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">
    <center>
    <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Eclat White Occasion Blazer</b></p>
    <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
    <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 20,999</p> 
  </center>
    <div style="display: flex; align-items: center;">
      <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
      <input type = 'hidden' name = 'item_name' value = "Eclat_White_Occasion">
          <input type = 'hidden' name = 'price' value = "20999">
      <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
  </div>
  </div>
</div>
            </form>
            <form action = "cart.php" method = 'post'>
<div class="gallery" style="margin-bottom: 80px;">
  <a target="_blank" href="/Main_PHP Project/Images/image19.png">
    <img src="/Main_PHP Project/Images/image19.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">
    <center>
    <p style="text-align: center; font-size: 15.5px; font-family: Arimo; padding-top: 3px;"><b>Magnifique Ivory Suit</b></p>
    <!-- <span style="color: white;">_______</span> <span>₹ 7000 </span> -->
    <p style="text-align: center; font-size: 14.5px; font-family: Arimo;  padding-top: 6.5px;"><span style="font-weight: bold;" >₹</span> 31,999</p> 
  </center>
    <div style="display: flex; align-items: center;">
      <button type='submit' name = 'Add_To_Cart' class="btn" style="border: none; background: none; padding-left: 90px; font-size: 15px; margin-top: 10px; padding-top: 1px;"  ><i class="fa-solid fa-cart-shopping"></i></button>
      <input type = 'hidden' name = 'item_name' value = "Magnifique_Ivory_Suit">
          <input type = 'hidden' name = 'price' value = "31999">
      <button class="btn1" name="buy"  onclick="openNewPage()" style=" border: 1px solid black; border-radius: 8px; font-size: 13px; padding: 4px; margin-left: 13px; padding-top: 3px; padding-left: 9px; padding-right: 8.5px;  margin-top: 8px;"><i class="fa-solid fa-bag-shopping"></i> <span style="font-family: Arimo;  letter-spacing: 1px; font-size: 14px; font-weight:900; padding-left: 6px; font-style: italic;">Buy</span></button>
  </div>
  </div>
</div>
            </form>
    


<div class="footer" style="font-family: 'kaushan Script';"><span id="year"> 2024</span><span> ImperialIsle. All rights reserved.</span></div>


</body>
</html>

<script>
              function openNewPage() {
                window.open('buy.html', '_blank');
              }
              </script>