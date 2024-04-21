<?php 
session_start();
include "dbcon.php";

$productId=$_GET['productId'];
$price= $_GET['price'];
$id=$_GET['id'];
$txid=$_GET['txid'];

$name=$_GET['name'];
$email=$_GET['email'];
$pr_desc='Donation';
$loc='unknown';

 // Get Product Details By Using Product-Id

            // $payment_date = date("Y-m-d H:i:s");
            // $dt_tm = date('Y-m-d H:i:s');


            // $sql = "INSERT INTO `orders`(`name`,`email`,`item_name`,`item_price`,`paid_amount`,`txn_id`,`location`,`created`,`modified`) VALUES ('$name','$email','$pr_desc','$price','$price','$txid','$loc','$dt_tm','$dt_tm')";
            // mysqli_query($con,$sql) or die("Mysql Error Stripe-Charge(SQL)".mysqli_error($con));
            

            // //Get Last Id
            // $sql_g = "SELECT * FROM `orders` WHERE id='$productId'";
            // $res_g = mysqli_query($con,$sql_g) or die("Mysql Error Stripe-Charge(SQL2)".mysqli_error($con));
            // while($row_g=mysqli_fetch_assoc($res_g)){
            //     $id = $row_g['id'];
            // }

?>


<?php
$messages="Your bill is paid now";
$phno="0789775066";
include("flutterwave/message.php");
?>


<!--             <head>
        <title> Payment Gateway</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/stripe.css">
    </head>

<div class="container">
        <h2 style="text-align: center; color: blue;">Payment Gateway </h2>
        <h4 style="text-align: center;">Payment Success URL </h4>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <?php  
                if ($id!='') {
                ?>
                <div class="status">
                    <h1 class="success"><?php echo "success"; ?></h1>
                
                    <h4 class="heading">Payment Information - </h4>
                    <br>
                    <p><b>Reference ID:</b> <strong><?php echo $id; ?></strong></p>
                    <p><b>Transaction ID:</b> <?php echo $txid; ?></p>
                    <p><b>Paid Amount:</b> <?php echo $price; ?>Rwf </p>
                    <p><b>Payment Status:</b> <?php echo "Success"; ?></p>
                    <h4 class="heading">Product Information - </h4>
                    <br>
                    <p><b>Book:</b> <?php echo $pr_desc; ?></p>
                    <p><b>Price:</b> <?php echo $price; ?>Rwf </p>
                </div>
                <?PHP 
                }




                // echo $response;



                ?>

                <a href="http://localhost:8080/firstwebApp/images/<?php echo $file;?>" class="btn-primary">Download Book</a>&emsp;&emsp;


                <a href="http://localhost:8080/firstwebApp/user/home.jsp" class="btn-success">Back to Home</a>


            </div>
        </div>
    </div> -->




<!DOCTYPE html>
<html>
    <head>
        <title> Payment Gateway</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/stripe.css">
    </head>

    <div class="container">
        <h2 style="text-align: center; color: blue;">Payment Gateway</h2>
        <h4 style="text-align: center;">Payment status page</h4>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="status">
                    <h1 class="success"> YOUR PAYMENT HAS BEEN SUCCESSFUL! </h1>
                <?php   if($txid!=''){ 
$bills_id = (int)$_SESSION['billid'];
$con=mysql_connect("localhost","root","");
mysql_select_db("waterb_db")or die("no database selected!!");

$billsel=mysql_query(" select * from tbl_bill where billid='$bills_id'");
mysql_query("update tbl_payment set status='Confirmed' where billid='$mbill'");

mysql_query("update tbl_bill set status='Confirmed' where billid='$mbill'");

unset($_SESSION['billid']);
                    ?>
                    <h4 class="heading">Payment Information - </h4>
                    <br>
                    <p><b>Reference ID:</b> <strong><?php echo $id; ?></strong></p>
                    <p><b>Transaction ID:</b> <?php echo $txid; ?></p>
                    <p><b>Paid Amount:</b> <?php echo $price.'Rwf '; ?></p>
                    <p><b>Payment Status:</b> <?php echo "Success"; ?></p>
                    <h4 class="heading">Truck Information - </h4>
                    <br>
                    <p><b>Truck :</b> <?php echo $pr_desc; ?></p>
                    <p><b>Price:</b> <?php echo $price.'Rwf ';?></p>
                    <?php } else{
                        ?>                  
                        <?php
                        echo "Please check you connection and try again!";
                    }?>
                </div>
                <a href="http://localhost/Waterbill/" class="btn-continue">Continue</a>
            </div>
        </div>
    </div>



    <!-- <meta http-equiv = "refresh" content = "1; url = http://localhost/Waterbill/Flutterwave/bill2.php?productId=<?php echo $productId;?>&price=<?php echo $price;?>&id=<?php echo $id;?>&txid=<?php echo $txid;?>&name=<?php echo $name;?>&email=<?php echo $email;?>" /> -->
</html>
