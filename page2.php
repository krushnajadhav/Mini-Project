<?php
session_start();


?>
<!DOCTYPE html>
<html>

<head>
  <title>
    page 2
  </title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <?php

  include 'page2CSS.css';
  include 'links.html';

  ?>

</head>

<body>

  <div class="parallax-window  " data-parallax="scroll" data-image-src="photos/b4.jpg" style="height: 750px">

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
    <!--/.Navbar Ended-->

    <h1 class="text moto tital  animate__shakeY">Motercycles</h1>



  </div>

  <br>

  <br>



  <div id="multi-item-example1" class="carousel slide carousel-multi-item container" data-interval="false">
    <h1 class="tital">HERO</h1>
  <hr style="height:4px;width:300px;background-color:#007bff; border-radius: 5px;">

    <!--Controls-->
  
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
      <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
      <br>
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
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/g.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Glamour</h4> 
              <p class="card-text">
                Engine: 124.7 Cc <br>
                Mileage:
                60 - 86 Kmpl <br>
                Power:
                9 - 11.4 bhp <br>
                Weight:
                126 - 129 Kg <br>
                On Road Price : INR 66,700
              </p>
              <br>
              <a class="animi" href="pyment.php?val=66700 & name=Hero Glamour">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hep.jpg" alt="Card image cap"style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Passion</h4>
              <p class="card-text">Engine:
                97.2 Cc <br>
                Mileage:
                84 Kmpl <br>
                Power:
                8.2 - 8.36 bhp <br>
                Weight:
                115 - 119 Kg <br>
                On Road Price : INR 52,800
              </p>
              <br>
              <a class="animi" href="pyment.php?val=52800&name=Hero Passion">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hf.jpg" alt="Card image cap"style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero HF Deluxe</h4>
              <p class="card-text">Engine:
                97.2 Cc <br>
                Mileage:
                60 Kmpl <br>
                Power:
                8.2 bhp <br>
                Weight:
                107 - 112 Kg <br>
                On Road Price : INR 47,759
              </p>
              <br>
              <a class="animi" href="pyment.php?val=47759&name=Hero HF Deluxe">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/sp3.jpg" alt="Card image cap"style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Splendor</h4>
              <p class="card-text">Engine:
                97 Cc <br>
                Mileage:
                81 Kmpl <br>
                Power:
                8.2 bhp
                Weight: <br>
                109 Kg <br>
                On Road Price : INR 48,930
              </p>
              <br>
              <a class="animi" href="pyment.php?val=48930&name=Hero Splendor">Buy Now</a>
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
            <img class="card-img-top" src="photos/kzmr.jpg" alt="Card image cap"style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Karizma</h4>
              <p class="card-text">Engine:
                223 Cc <br>
                Mileage:
                40 Kmpl <br>
                Power:
                14.9 bhp <br>
                Weight:
                157 Kg <br>
                On Road Price : INR 1,11,000
              </p>
              <br>
              <a class="animi" href="pyment.php?val=111000&name=Hero Karizma ZMR">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/harch.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              
              <h4 class="card-title">Hero Achiever</h4>
              <p class="card-text">Engine:
                124 - 149.1 Cc <br>
                Mileage:
                66 - 83 Kmpl <br>
                Power:
                9.1 - 13.6 bhp <br>
                Weight:
                121 - 139 Kg <br>
                On Road Price : INR 67,900
              </p>
              <br>
              <a class="animi" href="pyment.php?val=67900&name=Hero Achiever">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hextr.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;" >
            <div class="card-body">

              <h4 class="card-title">Hero Xtreme</h4>
              <p class="card-text">Engine:
                149.2 Cc <br>
                Mileage:
                62 Kmpl <br>
                Power:
                15.2 - 15.6 bhp <br>
                Weight:
                146 - 147 Kg <br>
                On Road Price : INR 81,200
              </p>
              <br>
              <a class="animi" href="pyment.php?val=81200&name=Hero Xtreme">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px;  ">
            <br>
            <img class="card-img-top" src="photos/hpxp.jpg" alt="Card image cap"style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Hero Passion XPro</h4>
              <p class="card-text">Engine:
                109 Cc <br>
                Mileage:
                70 Kmpl <br>
                Power:
                8.7 bhp <br>
                Weight:
                116 Kg <br>
                On Road Price : INR 56,650
              </p>
              <br>
              <a class="animi" href="pyment.php?val=56650&name=Hero Passion XPro">Buy Now</a>
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




  <div id="multi-item-example2" class="carousel slide carousel-multi-item container" data-interval="false">
    <h1 class="tital">Honda</h1>
  <hr style="height:4px;width:300px;background-color:#007bff; border-radius: 5px;">

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
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/4.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda CB Unicorn</h4>
              <p class="card-text">Engine:
                149 Cc <br>
                Mileage:
                60 Kmpl <br>
                Power:
                12.73 bhp <br>
                Weight:
                145 - 146 Kg <br>
                On Road Price : INR 79,771
              </p>
              <br>
              <a class="animi" href="pyment.php?val=79771&name=Honda CB Unicorn">Buy Now</a>
              <br>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/5.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda CB Shine</h4>
              <p class="card-text">Engine:
                124 Cc <br>
                Mileage:
                65 - 74.7 Kmpl <br>
                Power:
                10.57 bhp <br>
                Weight:
                123 Kg <br>
                On Road Price : INR 62,616

              </p>
              <br>
              <a class="animi" href="pyment.php?val=62616&name=Honda CB Shine">Buy Now</a>
              <br>

              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/hd6.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda D Neo</h4>
              <p class="card-text">Engine:
                109 - 109.19 Cc <br>
                Mileage:
                73 - 74 Kmpl <br>
                Power:
                8.31 - 8.4 bhp <br>
                Weight:
                105 - 107 Kg <br>
                On Road Price : INR 52,051
              </p>
              <br>
              <a class="animi" href="pyment.php?val=52051&name=Honda Dream Neo">Buy Now</a>
              <br>

              <br>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/hd7.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda D Yuga</h4>
              <p class="card-text">Engine:
                109.19 Cc <br>
                Mileage:
                64 Kmpl <br>
                Power:
                8.31 bhp <br>
                Weight:
                108 Kg <br>
                On Road Price : INR 53,709
              </p>
              <br>
              <a class="animi" href="pyment.php?val=23709&name=Honda D Yuga">Buy Now</a>
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
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/hd8.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda Livo</h4>
              <p class="card-text">Engine:
                109.19 Cc <br>
                Mileage:
                74 Kmpl <br>
                Power:
                8.31 bhp <br>
                Weight:
                111 Kg <br>
                On Road Price : INR 59,470
              </p>
              <br>
              <a class="animi"href="pyment.php?val=59470&name=Honda Livo">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/hd9.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda Shine SP</h4>
              <p class="card-text">Engine:
                124.73 Cc <br>
                Mileage:
                74.7 Kmpl <br>
                Power:
                10.57 bhp <br>
                Weight:
                124 Kg <br>
                On Road Price : INR 67,477
              </p>
              <br>
              <a class="animi" href="pyment.php?val=67477&name=Honda Shine SP">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/8.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda CD 110</h4>
              <p class="card-text">Engine:
                109.19 - 109.2 Cc <br>
                Mileage:
                70 - 74 Kmpl <br>
                Power:
                8.31 bhp <br>
                Weight:
                105 - 109 Kg <br>
                On Road Price : INR 48,931

              </p>
              <br>
              <a class="animi" href="pyment.php?val=48931&Honda CD 110">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/hd10.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Honda CBR 250R</h4>
              <p class="card-text">Engine:
                249.6 Cc <br>
                Mileage:
                29 Kmpl <br>
                Power:
                26.15 bhp <br>
                Weight:
                167 Kg <br>
                On Road Price : INR 1,94,000
              </p>
              <br>
              <a class="animi" href="pyment.php?val=194000&name=Honda CBR 250R">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/.Second slide-->

  <br>
  <br>
  <br>

  <br>

  <br>
  <br>
  <br>
  <br>




  <!--/.third slide start  here -->

  <div id="multi-item-example3" class="carousel slide carousel-multi-item container" data-interval="false">
    <h1 class="tital">TVS & Bajaj</h1>
  <hr style="height:4px;width:300px;background-color:#007bff; border-radius: 5px;">

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

      <!--third first part slide-->
      <div class="carousel-item active">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/tvs1.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Sport</h4>
              <p class="card-text">Engine:
                99.7 - 100 Cc <br>
                Mileage:
                80 Kmpl <br>
                Power:
                7.4 bhp <br>
                Weight:
                108 Kg <br>
                On Road Price : INR 46,257
              </p>
              <br>
              <a class="animi" href="pyment.php?val=46257&name=TVS Sport">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/tvs2.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Star City Plus</h4>
              <p class="card-text">Engine:
                109 - 109.7 Cc <br>
                Mileage:
                65 - 86 Kmpl <br>
                Power:
                8.3 bhp <br>
                Weight:
                109 Kg. <br>
                On Road Price : INR 54,399
              </p>
              <br>
              <a class="animi" href="pyment.php?val=54399&name=TVS Star City Plus">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/tvsvic.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Victor</h4>
              <p class="card-text">Engine:
                109.3 Cc <br>
                Mileage:
                76 Kmpl <br>
                Power:
                9.4 - 9.46 bhp <br>
                Weight:
                113 Kg <br>
                On Road Price : INR 55,295
              </p>
              <br>
              <a class="animi" href="pyment.php?val=55295&name=TVS Victor">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/tvs222.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">TVS Apache</h4>
              <p class="card-text">Engine:
                159 - 177.4 Cc <br>
                Mileage:
                55.7 - 60.1 Kmpl <br>
                Power:
                15.2 - 17.03 bhp <br>
                Weight:
                137 Kg <br>
                On Road Price : INR 83,183
              </p>
              <br>
              <a class="animi" href="pyment.php?val=83183&name=TVS Apache">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

      </div>
      <!--/. third First slide end-->

      <!-- third Second slide start-->
      <div class="carousel-item">

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/bpla.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Bajaj Platina</h4>
              <p class="card-text">Engine:
                102 Cc <br>
                Mileage:
                96.9 Kmpl <br>
                Power:
                8.1 - 8.2 bhp <br>
                Weight:
                108 Kg <br>
                On Road Price : INR 47,405
              </p>
              <br>
              <a class="animi" href="pyment.php?val=47405&name=Bajaj Platina">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/bdis.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Bajaj Discover</h4>
              <p class="card-text">Engine:
                124.6 Cc <br>
                Mileage:
                82.4 Kmpl <br>
                Power:
                10.9 bhp <br>
                Weight:
                120 Kg <br>
                On Road Price : INR 57,990
              </p>
              <br>
              <a class="animi" href="pyment.php?val=57990&name=Bajaj Discover">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2"style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/bv.png" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Bajaj V</h4>
              <p class="card-text">Engine:
                124.6 - 149.5 Cc <br>
                Mileage:
                55 - 70 Kmpl <br>
                Power:
                10.6 - 11.8 bhp <br>
                Weight:
                133 - 135 Kg <br>
                On Road Price : INR 66,176
              </p>
              <br>
              <a class="animi" href="pyment.php?val=66176&name=Bajaj V">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2" style="border: 2px solid #007bff;border-radius: 15px 50px 30px; ">
            <br>
            <img class="card-img-top" src="photos/bpul.jpg" alt="Card image cap" style="border-radius: 15px 50px 30px;">
            <div class="card-body">
              <h4 class="card-title">Bajaj Pulsar </h4>
              <p class="card-text">Engine:
                149 - 149.5 Cc <br>
                Mileage:
                65 - 68 Kmpl <br>
                Power:
                13.8 - 15.06 bhp <br>
                Weight:
                144 Kg <br>
                On Road Price : INR 78,515
              </p>
              <br>
              <a class="animi" href="pyment.php?val=78515&name=Bajaj Pulsar">Buy Now</a>
              <br>
              <br>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/. thied Second slide end-->


  <br>
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
                <p>We Are Trying to provide your dream bike .Our Site Working to Give Info and best deal to bikers
          </p>
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