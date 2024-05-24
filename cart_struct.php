<!DOCTYPE html>
<html>
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            top: 0;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(206, 206, 206);
            color: rgb(0, 0, 0);
            padding-bottom: 20px;
            padding-top: 18px;
            border-bottom: black;
        }

        .logo {
            font-size: 40px;
            font-family: 'Kaushan Script';
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin-right: 380px;
            padding-left: 30px;
        }

        .nav-links a {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 330;
            margin-left: 90px;
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
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
        .navbar-spacer {
            height: 50px; /* Adjust this value to change the spacing */
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

    <div class="navbar-spacer"></div> <!-- Add this div to create space below the navbar -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-10">
                <h1>My Cart</h1>
            </div>

            <center>
            <div class = "navbar-spacer"></div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class = "text-center">
                        <tr>
                            <th scope="col">Sr. No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Quantity</th>
                            <th scope = "col">Total</th>
                            <th scope = "col"></th>
                        </tr>
                    </thead>
                    <tbody class = 'text-center'>
                        <?php
                       
                        $c = 0;
                        if(isset($_SESSION['cart']))
                        {
                            
                        foreach($_SESSION['cart'] as $key=>$val)
                        {
                                $c +=1;
                                echo "
                                <tr>
                                <td>$c</td>
                                <td>$val[Item_Name]</td>
                                <td>$val[Price]<input type = 'hidden' class ='iprice' value = '$val[Price]'></td>
                                <td><input class = 'text-center iquantity' type = 'number' value = '$val[Quantity]' min = '1' max = '15' onchange = subTotal()></td>
                                <td class = 'itotal'></td> 
                                <form action = 'cart.php' method ='post'>
                                <td><button name = 'Remove_Item' class = 'btn btn-sm  btn-outline-danger'>REMOVE</td>
                                <input type = 'hidden' name = 'item_name' value = $val[Item_Name]>

                                </form>
                                </tr>
                            ";
                        }
                    }

                    
                        
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-lg-5">
                <div class = 'border bg-light rounded p-4 '>
                    <div class = 'navbar-spacer'></div>
                <center>
                <h3 id = 'total'>Total:</h3>
            
                </center>
                <input type="radio" name="paymentopt" id="option1" checked>
<label  for="option1">Online</label>
<br>
<input type="radio" name="paymentopt" id="option2">
<label for="option2">Cash on Delivery </label>
                
                <form>
                <button onclick = openNewPage() class="btn btn-outline-success btn-block">Proceed to Pay</button>
                </form1>
            </div>
                
                
            </div>
        </div>
    </div>
    </center>

    <script>
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');

    var gtotal = document.getElementById('total');
   
    function subTotal() {
        var total = 0;
        for(let i = 0; i < iprice.length; i++) {
            itotal[i].innerText = iprice[i].value * iquantity[i].value;
            total += iprice[i].value * iquantity[i].value;
        }
        gtotal.innerText = "Total: " + total;
    }

    for(let i = 0; i < iquantity.length; i++) {
        iquantity[i].addEventListener('change', subTotal);
    }

    subTotal();
</script>
</body>
<script>
              function openNewPage() {
                window.open('buy.html', '_blank');
              }
              </script>
</html>
