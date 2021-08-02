<?php
session_start();

$val=$_GET['val'];
$name=$_GET['name'];
                   
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
    <?php
    include 'links.html';
    include 'pymentCss.html';

  ?>
</head>
<body>
<br>
<br>

<h1 class="pyment">PAYMENT </h1>
<br>    

<div class="container rounded bg-white">
    <div class="row d-flex justify-content-center pb-5">
        <div class="col-sm-5 col-md-5 ml-1">
            <div class="py-4 d-flex flex-row">
                <h5><span class="fa fa-check-square-o"></span><b>ELIGIBLE</b> | </h5><span class="pl-2">Pay</span>
            </div>
            <h4 class="green">Rs.<?php echo $val; ?></h4>
            <h6>Bike Name:</h6>

            <h4 class="green"><?php echo $name; ?></h4>
            <div class="d-flex pt-2">
                <div>
                    <br>
                    
                    

                    <p><b>Person Insurance</b><span class="green">₹ 2000</span></p>
                </div>
                <div class="ml-auto">
                    <br>
                    
                    <p class="text-primary"><i class="fa fa-plus-circle text-primary"></i><a href="https://www.icicibank.com/Personal-Banking/loans/two-wheeler-loan/index.page" style="font-size: 15px" >Add insurance card</a></p>
                </div>
            </div>
            <p>Insurance claims and all necessary dependencies will be submitted to your insurer for the coverred portion of this order</p>
         
            <hr>
            <div class="pt-2">
          
                <div> <a href="payment_Card.php?val=<?php echo $val; ?>" class="btn btn-primary btn-block"> Proceed to payment</a> </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-4 offset-md-1 mobile">
            <div class="py-4 d-flex justify-content-end">
                <h6><a href="#">Cancel and return to website</a></h6>
            </div>
            <div class="bg-light rounded d-flex flex-column">
                <div class="p-2 ml-3">
                    <h4>Order Recap</h4>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">Bike Price</div>
                    <div class="ml-auto">₹</div>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">RTO</div>
                    <div class="ml-auto">₹ 13,488</div>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">Insurance</div>
                    <div class="ml-auto">₹ 7,012</div>
                </div>
                <div class="p-2 d-flex">
                    <div class="col-8">Transportation</div>
                    <div class="ml-auto">₹ 2,000</div>
                </div>
                <div class=""> </div>
                <div class="p-2 d-flex pt-3">
                    <div class="col-8">Servicing 5 Year</div>
                    <div class="ml-auto">₹ 1000</div>
                </div>
                
                <div class="p-2 d-flex">
                    <div class="col-8">Road Tax <span class="fa fa-question-circle text-secondary"></span></div>
                    <div class="ml-auto">₹ 2100</div>
                </div>
                <div class="border-top px-4 mx-3"></div>
                <div class="p-2 d-flex pt-3">
                    <div class="col-8"><b>Total</b></div>
                     <div class="ml-auto"><b class="green">Rs. <?php echo $val; ?></b></div> 
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>



