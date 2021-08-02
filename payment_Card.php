<?php
session_start();
$val=$_GET['val'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="links.html">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial;
  font-size: 17px;
 
}

* {
  box-sizing: border-box;
}
.container {
  background-color: #f2f2f2;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px ;

  margin: 10px 0;
  border: none;
  width: 103%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}
.row
{
	display: flex;
}
span.price {
  float: right;
  color: grey;
}


</style>
</head>
<body>

<div class="container">
<h2 style="text-align: center;"><b>E-Bikers Payment ...</b></h2>


	<div class="row" >
 
    
      <form action="#">
      
        
          <div class="col-lg-6 col-md-6 col-12" style="padding-left: 70px">
	            <h3>Billing Address</h3>
	            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
	            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
	            <label for="email"><i class="fa fa-envelope"></i> Email</label>
	            <input type="text" id="email" name="email" placeholder="john@example.com">
	            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
	            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
	            <label for="city"><i class="fa fa-institution"></i> City</label>
	            <input type="text" id="city" name="city" placeholder="New York">

	            <div class="row">
	              <div class="col-lg-6 col-md-6 col-6">
	                <label for="state">State</label>
	                <input type="text" id="state" name="state" placeholder="NY">
	              </div>
	              <div class="col-lg-6 col-md-6 col-6">
	                <label for="zip">Zip</label>
	                <input type="text" id="zip" name="zip" placeholder="10001">
	              </div>
	            </div>
          </div>
       
          <div class="col-lg-6 col-md-6 col-12" style="padding-left: 70px">
	            <h3>Payment</h3>
	            <label for="fname">Accepted Cards</label>
	            <div class="icon-container">
	              <i class="fa fa-cc-visa" style="color:navy;"></i>
	              <i class="fa fa-cc-amex" style="color:blue;"></i>
	              <i class="fa fa-cc-mastercard" style="color:red;"></i>
	              <i class="fa fa-cc-discover" style="color:orange;"></i>
	            </div>
	            <label for="cname">Name on Card</label>
	            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
	            <label for="ccnum">Credit card number</label>
	            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
	            <label for="expmonth">Exp Month</label>
	            <input type="text" id="expmonth" name="expmonth" placeholder="September">
	            <div class="row">
	              <div class="col-50">
	                <label for="expyear">Exp Year</label>
	                <input type="text" id="expyear" name="expyear" placeholder="2018">
	              </div>
	              <div class="col-50">
	                <label for="cvv">CVV</label>
	                <input type="text" id="cvv" name="cvv" placeholder="352">
	              </div>
	            </div>  
        </div>
      

        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <a href="" class="btn">PAY ₹ <?php echo $val; ?></a>
      </form>
    </div>
  
  
</div>
</div>
</body>
</html>
