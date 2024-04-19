<?php
session_start();
if(isset($_POST['buy']))
{

    echo "<script>window.location.href = document.referrer;</script>";
}
 if(isset($_POST['Add_To_Cart']))
 {

    
    if(isset($_SESSION['cart']))
    { 
        $myitems = array_column($_SESSION['cart'],'Item_Name');
        if(in_array($_POST['item_name'],$myitems))
        {
            echo "<script>alert('Item already added');
            window.location.href= document.referrer;  
            </script>";
        }

        else
        {
       $count=count($_SESSION['cart']);
       $_SESSION['cart'][$count] = array("Item_Name"=>$_POST['item_name'], "Price"=>$_POST['price'], "Quantity"=>1);
       echo "<script>alert('Item added');
       window.location.href= document.referrer;  
       </script>";
        }
    }

    else
    {
       
        $_SESSION['cart'][0] = array("Item_Name"=>$_POST['item_name'], "Price"=>$_POST['price'], "Quantity"=>1);
        echo "<script>alert('Item Added');
        window.location.href= document.referrer;  
        </script>";
    }
 }

 if(isset($_POST['Remove_Item']))
 {
    foreach($_SESSION['cart'] as $key=> $value)
    {
        if($value['Item_Name']==$_POST['item_name'])
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>alert('Item Removed');
            window.location.href = document.referrer;
            </script>
            
            ";
        }
        
    }
 }
?>