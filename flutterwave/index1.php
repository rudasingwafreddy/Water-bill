<?php 
    /* coded by Rahul Barui ( https://github.com/Rahul-Barui ) */
    include "dbcon.php";
    if(isset($_GET['id'])){
        $productId = $_GET['id'];
    } else {
        $productId = '';
    }

    $SQL_getPr = "SELECT * FROM `houses` WHERE `house_id`='$productId'";
    $res_getPr = mysqli_query($con,$SQL_getPr) or die("MySql Query Error".mysqli_error($con));
    $row_getPr = mysqli_fetch_assoc($res_getPr);
    $price = $row_getPr['price'];
?>
<html>
    <head>
            <title> Payment Gateway</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
             <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
            <link rel="stylesheet" type="text/css" href="css/design.css">
            

            <?php 
                // include 'header.php';
            ?>
    </head>
    <body>
        <?php 
                // include 'nav.php';
            ?>
            <div class="wrapper">

            <?php 
                // include 'sidebar.php';
            ?>

        <div class="container"  id="content">

            <h2 style="text-align: center; color: blue;">Payment Gateway </h2>
            <br>
            <div class="row">
                <div class="col-xs-12 col-md-4">

                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table" >
                            <div class="row display-tr" >
                                <h3 class="panel-title display-td"> &nbsp;Payment Details<?php //echo $_GET['id'];?></h3>
                                <div class="display-td" >                            
                                    <!-- <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png"> -->
                                </div>
                            </div>                    
                        </div>

                        <div class="panel-body">

                            <!-- Display errors returned by createToken -->
                            <div class="payment-status" style="color: red;"></div>

                            <!-- Payment form -->
                            <form role="form" action="http://nkarimo.cf/flutterwaveAlice/pay.php" method="POST" id="payment-form">

                                <input type="hidden" name="productId" value="<?php echo $productId;?>"/>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="couponCode">CUSTOMER NAME*</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Customer Name" autofocus required id="name" />
                                        </div>
                                    </div>                        
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="couponCode">EMAIL*</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" id="email" required />
                                        </div>
                                    </div>                        
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="couponCode">Amount (Rwf)*</label>
                                            <input type="text" class="form-control" name="options" placeholder="price" id="price" required value="<?php echo $price;?>" readonly/>
                                        </div>
                                    </div>                        
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="couponCode">Latitude and Longitude</label>
                                            <input type="text" class="form-control" name="latLong" placeholder="Paste Latitude,Longitude" autofocus />
                                        </div>
                                    </div>                        
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="subscribe btn btn-success btn-lg btn-block submit" type="submit" id="payBtn" name="pay">PAY NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>            
                    <!-- CREDIT CARD FORM ENDS HERE -->
            
                </div>
                



                <!--<div class="col-xs-12 col-md-4">-->
                <!--    <h2>Book</h2>-->
                <!--    <p><?php //echo $row_getPr['name'].' - '.$row_getPr['type'].' - '.$row_getPr['zone'];?> </p>-->
                <!--    <h4>You will pay with:</h4>-->
                <!--        <ul>-->
                            
                <!--            <li>Mobile Money</li>-->
                <!--            <li>Bank account</li>-->
                <!--        </ul>-->
                        <!--<p>To test Stripe payment gateway integration in PHP</p>-->
                    
                <!--</div>-->

                

            </div>
             <?php 
                // include 'footer.php';
            ?>
       
        </div>
    </div>

       
    </body>

 <?php 
                // include 'script.php';
            ?>


    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- Stripe JavaScript library -->
    <script src="https://js.stripe.com/v2/"></script>
    <script src="js/jquery.min.js"></script>

    


</html>