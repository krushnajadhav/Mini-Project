<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>

  </title>

  <?php

  include 'scooterCSS.css';
  include 'links.html';

  ?>
</head>

<body>

  <div class="parallax-window  " data-parallax="scroll" data-image-src="photos/s1.jpg" style="height: 750px">

      <nav class=" navbar navbar-expand-lg navbar-dark sticky-top">

  
  <a class="navbar-brand" href="#"><h2 style="color: white;">E-bikers</h2></a>

  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="basicExampleNav">


    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">

        <a class="nav-link" href="#"><h5>HOME</h5></a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle vl" id="navbardrop" data-toggle="dropdown"
          ><h5 >Bikes</h5></a>
        <div class="dropdown-menu " >
          <a class="dropdown-item" href="page2.php">Motarcycles</a>
          <a class="dropdown-item" href="scooter.php">Scooters/Electric</a>
          <a class="dropdown-item" href="atv.php">ATV</a>
         


        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link vl" href="https://www.icicibank.com/Personal-Banking/loans/two-wheeler-loan/index.page "><h5>Bikes Loan</h5></a>
      </li>
      

                            
                                    <a class="nav-link vl " href="javascript:history.go(-1)"><h5><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px"></i>Back</h5></a>
                           
    </ul>
    

    
  </div>
 

</nav>
    <h1 class="text tital animate__shakeY">Scooters </h1>
  </div>

  <br>

  <br>


  <h1 class="tital_text tital ">We Recommend E-Bikes</h1>
  <hr style="height:4px;width:700px;background-color:#007bff; border-radius: 5px;">
  <br>


  <div class="container-fluid">
    <div class="row ">
      <div class=" e-image col-lg-6 col-md-6 col-12">
        <img src="photos/s8.jpg" class="img-fluid">
      </div>

      <div class="col-lg-6 col-md-6 col-12 ">
        <h4 class="text">E-bikes have what they call battery-powered “pedal assist.” Technically, this is a machine integrated within the bike to give your pedalling a boost. This can reduce stress and impact on your knees and thighs. Say goodbye to sweaty rides.

          There are E-bikes that have specific boosting technology that can assist you to conquer hills and inclines, so you don't have to worry about any challenging terrain. People of all ages and health can ride flawlessly and for much longer with an E-bike. Longer rides mean more views and more possibilities for lunch stops!
        </h4>
      </div>

    </div>

  </div>

  <br>
  <br>

  <div id="cards_landscape_wrap-2">

    <div class="container">
      <h1 class="tital">Advantages of Electric Bikes</h1>
      <hr style="height:4px;width:700px;background-color:#007bff; border-radius: 5px;">

      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="photos/Eco-Friendly.PNG" alt="" />
                </div>

              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="photos/license.jpg" alt="" />
                </div>

              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="photos/reg.PNG" alt="" />
                </div>


              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="photos/low-cost.jpg" alt="" />
                </div>

              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- this script got from www.frontendfreecode.com -->

<br>
<br>

  <div id="multi-item-example1" class="carousel slide carousel-multi-item container" data-interval="false">
    <h1 class="tital">HERO & HONDA</h1>
      <hr style="height:4px;width:400px;background-color:#007bff; border-radius: 5px;">

    <!--Controls-->
  
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
      <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
    </div>
    <br>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example1" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example1" data-slide-to="1"></li>

    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hdu.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Duet</h4>
              <p class="card-text">Engine:
                110.9 Cc <br>
                Mileage:
                63.8 Kmpl <br>
                Power:
                6 bhp <br>
                Weight:
                116 Kg <br>
                On Road Price : INR 48,900
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=48900&name=Hero Duet' >Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hda.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Destini 125</h4>
              <p class="card-text">Engine:
                124.6 Cc <br>
                Mileage:
                55 Kmpl <br>
                Power:
                6.5 bhp <br>
                Weight:
                111.5 Kg <br>
                On Road Price : INR 57,500
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=57500&name=Hero Destini 125' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"  style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/hpl.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Pleasure</h4>
              <p class="card-text">Engine:
                102 Cc <br>
                Mileage:
                50 Kmpl <br>
                Power:
                6.9 bhp <br>
                Weight:
                101 Kg <br>
                On Road Price : INR 46,900
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=46900&name=Hero Pleasure' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hma2.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Maestro</h4>
              <p class="card-text">Engine:
                110 - 110.9 Cc <br>
                Mileage:
                60 - 65 Kmpl <br>
                Power:
                6 - 8.31 bhp <br>
                Weight:
                110 Kg <br>
                On Road Price : INR 51,300
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=51300&name=Hero Maestro' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br> 
            <img class="card-img-top" src="photos/hodio.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda Dio</h4>
              <p class="card-text">Engine:
                109.19 Cc <br>
                Mileage:
                55 - 60 Kmpl <br>
                Power:
                5.83 - 8 bhp <br>
                Weight:
                103 - 104 Kg <br>
                On Road Price : INR 53,837
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=53837&name=Hero Dio' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hoact2.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda Activa 125</h4>
              <p class="card-text">Engine:
                124.9 Cc <br>
                Mileage:
                54 - 60 Kmpl <br>
                Power:
                6.35 - 8.52 bhp <br>
                Weight:
                108 - 111 Kg <br>
                On Road Price : INR 64,007
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=64007&name=Hero Activa 125' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/ho2.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda Aviator</h4>
              <p class="card-text">Engine:
                109.19 Cc <br>
                Mileage:
                50 - 66.7 Kmpl <br>
                Power:
                8 bhp <br>
                Weight:
                105 - 109 Kg <br>
                On Road Price : INR 56,507
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=56507&name=Hero Aviator' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hogra.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda Grazia</h4>
              <p class="card-text">Engine:
                124.9 Cc <br>
                Mileage:
                54 Kmpl <br>
                Power:
                8.52 bhp <br>
                Weight:
                107 Kg <br>
                On Road Price : INR 63,994
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=63994&name=Hero Grazia' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->





    </div>
    <!--/.Slides-->

  </div>
  <!--/.Carousel Wrapper-->

  <br>
  <br>
  <br>

  <br>
  <br>
  <br>
  <br>
  <br>




  <div id="multi-item-example2" class="carousel slide carousel-multi-item container" data-interval="false">
    <h1 class="tital">TVS & BAJAJ</h1>
      <hr style="height:4px;width:400px;background-color:#007bff; border-radius: 5px;">

    <!--Controls-->
  

    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
      <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
    </div>
  <br>

    <!--/.Controls-->


    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example2" data-slide-to="1"></li>

    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/tvsju.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS MegaX</h4>
              <p class="card-text">Engine:
                109.7 Cc <br>
                Mileage:
                60 - 62 Kmpl <br>
                Power:
                5.88 - 7.9 bhp <br>
                Weight:
                108 Kg <br>
                On Road Price : INR 62,346
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=62346&name=TVS MegaX ' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/tvspep.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Scooty Pep</h4>
              <p class="card-text">Engine:
                87.8 - 88 Cc <br>
                Mileage:
                65 Kmpl <br>
                Power:
                3.6 - 5 bhp <br>
                Weight:
                95 Kg <br>
                On Road Price : INR 44,764
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=44764&name=TVS Scooty Pep' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/tvsweg.jfif" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Wego</h4>
              <p class="card-text">Engine:
                109.7 Cc <br>
                Mileage:
                70 Kmpl <br>
                Power:
                5.8 bhp <br>
                Weight:
                108 Kg <br>
                On Road Price : INR 53,433
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=53433&name=TVS Wego' >Buy Now</a>
              <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/tvsv.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Zest</h4>
              <p class="card-text">Engine:
                109 - 109.7 Cc <br>
                Mileage:
                50 - 62 Kmpl <br>
                Power:
                7.9 bhp <br>
                Weight:
                97 - 98 Kg <br>
                On Road Price : INR 50,486
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=66700&name=TVS Zest' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/suzuki1.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Suzuki Access</h4>
              <p class="card-text">Engine:
                124 Cc <br>
                Mileage:
                64 Kmpl <br>
                Power:
                6.3 - 8.58 bhp <br>
                Weight:
                101 - 112 Kg <br>
                On Road Price : INR 59,118
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=59118&name=Suzuki Access' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/suzuki2.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Suzuki Let's</h4>
              <p class="card-text">Engine:
                112 - 112.8 Cc <br>
                Mileage:
                63 Kmpl <br>
                Power:
                8.5 - 8.7 bhp <br>
                Weight:
                98 Kg <br>
                On Road Price : INR 49,030
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=49030&name=Suzuki Let's >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/suzuki3.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Suzuki Burgman</h4>
              <p class="card-text">Engine:
                124 Cc <br>
                Mileage:
                65 Kmpl <br>
                Power:
                8.6 bhp <br>
                Weight:
                108 Kg <br>
                On Road Price : INR 68,836
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=68836&name=Suzuki Burgman' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/suzuki4.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Suzuki SE 125</h4>
              <p class="card-text">Engine:
                124 Cc <br>
                Mileage:
                55 - 64 Kmpl <br>
                Power:
                8.4 - 8.7 bhp <br>
                Weight:
                102 - 112 Kg <br>
                On Road Price : INR 60,046
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=60046&name=Suzuki SE 125' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/.Second slide end here-->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>




  <!--/.third slide start here-->

  <div id="multi-item-example3" class="carousel slide carousel-multi-item container" data-interval="false">
    <h1 class="tital">Electric Bikes</h1>
      <hr style="height:4px;width:400px;background-color:#007bff; border-radius: 5px;" style="border-radius: 15px 50px 30px;">

    <!--Controls-->
  

    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example3" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
      <a class="btn-floating" href="#multi-item-example3" data-slide="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
    </div>
  <br>

    <!--/.Controls-->


    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example3" data-slide-to="1"></li>

    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <img class="card-img-top" src="photos/e11.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Optima</h4>
              <p class="card-text">Range : 50 Km <br>
                Top Speed : 25 Kmph <br>
                Charging Time : 8-10 Hrs <br>
                Motor Power : 250 W <br>
                On Road Price : INR 51,558

              </p>
              <br>
              <a class=" animi" href='pyment.php?val=51558&name=Hero Optima' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <img class="card-img-top" src="photos/e12.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Ampere REO</h4>
              <p class="card-text">Range : 45-50 Km <br>
                Top Speed : 25 Kmph <br>
                Charging Time : 8-10 Hrs <br>
                Motor Power : 250 W <br>
                On Road Price : INR 44,141
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=44141&name=Ampere REO' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <img class="card-img-top" src="photos/e13.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Okinawa R30</h4>
              <p class="card-text">Range : 60 Km <br>
                Top Speed : 25 Kmph <br>
                Charging Time : 4-5 Hrs <br>
                Motor Power : 250 W <br>
                On Road Price : INR 58,800
              </p>
              <br>
              <a class=" animi" href='pyment.php?val=58800&name=Okinawa R30' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <img class="card-img-top" src="photos/e15.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Yo Drift</h4>
              <p class="card-text">Range : 60 Km    <br>
                                  Top Speed :	25 Kmph     <br>
                                  Charging Time :	7-8 Hrs   <br>
                                  Motor Power :	250 W   <br>
                                  On Road Price : INR 58,800
                                </p>
              <br>
              <a class=" animi" href='pyment.php?val=58800&name=Yo Drift' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

      </div>
      <!--/.d silde First part end here-->

      <!--third slide  Second part start here  -->
      <div class="carousel-item">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/e16.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Techo Raptor</h4>
              <p class="card-text">Range :	90-100 Km <br>
                                  Charging Time :	5-7 Hrs <br>
                                  Motor Power : 250 W     <br>
                                  Battery Capacity :	1.8 kWh <br>
                                  On Road Price : INR 57,583
                                </p>
              <br>
              <a class=" animi" href='pyment.php?val=57583&name=Techo Raptor' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/e17.jpeg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Techo Emerge</h4>
              <p class="card-text">
                                    Range :	60-70 Km    <br>
                                    Charging Time :	3-4 Hrs <br>
                                    Motor Power :	250 W   <br>
                                    Battery Capacity :	1.8 kWh   <br>
                                    On Road Price : INR  68,166

                                  </p>
              <br>
              <a class=" animi" href='pyment.php?val=68166&name=Techo Emerge' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/e19.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Yo Edge</h4>
              <p class="card-text">Range :	60 Km    <br>
                                  Top Speed :	25 Kmph    <br>
                                  Charging Time :	7-8 Hrs    <br>
                                  Motor Power :	250 W      <br>
                                  On Road Price : INR  49,000
                                </p>
              <br>
              <a class=" animi" href='pyment.php?val=49000&name=Yo Edge' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/e20.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">BGauss B8</h4>
              <p class="card-text">Range :	70 Km     <br>
                                  Top Speed :	50 Kmph       <br>  
                                  Charging Time :	7-8 Hrs     <br>
                                  Motor Power :	800 W       <br>
                                  On Road Price : INR  62,999
                                </p>
              <br>
              <a class=" animi" href='pyment.php?val=62999&name=BGauss' >Buy Now</a>
               <br>
              <br>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/.third slide end here-->

  <br>
  <br>
  <br>
  <br>

  <br>

  <br>







<!-- this script got from www.frontendfreecode.com -->
<footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
   
    <div class="container">

        <div class="row row-pb-md" >
            <div class="col-lg-4 col-md-4 col-4 fh5co-widget">
                 <h3>A Little About E-Biker</h3>
                <p>We Are Trying to provide your dream bike .Our Site Working to Give Info and best deal to biker</p>
                    <br>
                <p><a class=" animi" href="newlog.php">Log in for Buy</a>
                </p>
            </div>

            <div class="row col-lg-8 col-8 fh5co-widget second_col"  >
                 
                <div class="col-lg-4 col-md-4 col-4" >
                    <ul class="fh5co-footer-links">
                        <h3>Brands</h3>
                        <li><a href="#">Honda</a>
                        </li>
                        <li><a href="#">Yamaha</a>
                        </li>
                        <li><a href="#">KTM</a>
                        </li>
                       
                    </ul>
                </div>

                 <div class="col-lg-4 col-md-4 col-4" >
                    <ul class="fh5co-footer-links">
                        <h3>Types of Bikes</h3>
                        <li><a href="#">Motarcycles</a></li>
                        <li><a href="#">Scooters</a></li>
                        <li><a href="#">ATV</a></li>
                       
                    </ul>
                </div>
              
               <div class="col-lg-4 col-md-4 col-4" >
                    <ul class="fh5co-footer-links">
                        <h3>Services</h3>
                         <li><a href="#">Bikes Loans</a></li>
                        <li><a href="#">24x7 Support</a></li>
                        <li><a href="#">Secuity with Data</a></li>
                      
                    </ul>
                </div>
              
              
        </div>
        <br>
            <br>
            <br>
        <div class="row " >
            

            <div class="col-lg-12 copy">
                 <p>
                    <small class="block">&copy; 2020 | All Rights Reserved.</small>
                    <small class="block">E-Bikers</small>
                </p>
                
            </div>
        </div>
    </div>
</footer>


</body>

</html>