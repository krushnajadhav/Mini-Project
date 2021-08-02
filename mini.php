<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
    
    

  <?php
    include 'links.html';
    include 'mainStyle.css';

  ?>

  
</head>
<body>

<!--Navbar started-->

<div class="parallax-window  " data-parallax="scroll" data-image-src="photos/b2.jpg" style="height: 750px">

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
      

                             <?php

                                  if(isset($_GET['login'])){
                                    ?>
                                     <li class="nav-item">
                                    <a class="nav-link vl" href="logout.php"><h5>Logout</h5></a>
                                  </li>
                                  <?php
                                  }
                                  else{

                                    ?>
                                    <li class="nav-item">
                                    <a class="nav-link vl" href="newlog.php"><h5>Login</h5></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link vl" href="newlog.php"><h5>Signup</h5></a>
                                  </li>
                                    <?php

                                  }


                            ?>                      

    </ul>
    

    
  </div>
 

</nav>
<!--/.Navbar Ended--> 

                            <!--Hello user name-->
                                <?php
                                if(isset($_GET['login']))
                                {
                                    ?>
                                    <br>
                                    <div class="row hello">
                                    <h1  class="font-weight-bold animate__animated animate__bounce animate__shakeY">Hello <?php echo $_SESSION['ud1']; ?></h1>
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <br>
                                    <div class="row hello">
                                    <h1   class="font-weight-bold animate__animated  
                                     animate__shakeY">Hello </h1>
                                    </div>
                                    <?php
                                }
                                ?>
</div>

<!--card start!-->
    
    
             <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">

        <div class="container">
            <h1 class="tital">BRANDS</h1>
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-aos="fade-down">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="photos/honda_logo.PNG" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>HONDA</h6>
                                    <p>Honda Motorcycle & Scooter India Pvt. Ltd. (HMSI), the only Honda in Indian 2Wheeler industry is the 100% subsidiary of Honda Motor Company Ltd., Japan, started its Indian operations at Manesar (District Gurgaon, Haryana) in May 2001. </p>
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
                                    <img src="photos/royal_logo.jpg" alt="" />
                                </div>
                                <div class="text-container">                                    
                                    <h6>ROYAL ENFIELD</h6>
                                    <p>Royal Enfield was a brand name under which The Enfield Cycle Company Limited of Redditch, Worcestershire[1] sold motorcycles, bicycles, lawnmowers and stationary engines which they had manufactured. </p>
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
                                    <img src="photos/suzuki_logo.PNG" alt="" />
                                </div>

                                <div class="text-container">
                                    <h6>SUZUKI</h6>
                                   <p>Suzuki Motorcycle India, Private Limited (SMI) is the wholly owned Indian subsidiary of Suzuki, Japan.[2] It was the third Suzuki automotive venture in India, after TVS Suzuki (1982–2001) and Maruti Suzuki (1982). In 1982</p>
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
                                    <img src="photos/ktm_logo.jpg" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>KTM</h6>
                                   <p>KTM AG (formerly KTM Sportmotorcycle AG[4][5]) is an Austrian motorcycle and sports car manufacturer owned by Pierer Mobility AG and Indian manufacturer Bajaj Auto.It was formed in 1992 but traces its foundation to as 1934.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>          
<!--card end ...........!-->
<br>
<br>
<section class="project-work container " data-aos="zoom-in">
    <div class="container headings text-center">
        <p class="text-center font-weight-bold"> 
            <h1 class="tital"> Our Happy Customers </h1> </p>
        <br>
        <br>
        <br>

        
    </div>
    <br>
    <div class="container row d-flex justify-content-around text-center align-item-center text-center " >
        <div class="col-lg-3 col-md-3 col-6" >

           <i class="fas fa-user-shield"></i><h1 class="count">1500</h1>
            
            
            <p>AMT Bikes</p>
        </div>

        <div class="col-lg-3 col-md-3 col-6" >
            <i class="fas fa-user-shield"></i><h1 class="count">1200</h1>
            
            <p>100cc - 150cc bikes</p>
        </div>

        <div class="col-lg-3 col-md-3 col-6" >
            <i class="fas fa-user-shield"></i> <h1 class="count">1000</h1>
            
            <p>250cc - 350cc bikes</p>
        </div>

        <div class="col-lg-3 col-md-3 col-6" >
            <i class="fas fa-user-shield"></i> <h1 class="count">700</h1>
            
            <p>more then 350cc bikes</p>
        </div>

    </div>
</section>

<script>

  $(".count").counterUp({
    delay:10,
    time:1000
  })


</script>
<script>
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
</script>
<br>

<br>
<br>







<br>
<br>

 <h1 class="map_tital tital">Work Location </h1>
 <br>
 <br>
 <div>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.123200971121!2d75.36907751474314!3d19.877018986633455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba2ee439cf06d%3A0x1a509ba887dbdc37!2sProzone%20Mall!5e0!3m2!1sen!2sin!4v1624543631544!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div>



<!-- this script got from www.frontendfreecode.com -->
<footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
   
    <div class="container">

        <div class="row row-pb-md" >
            <div class="col-lg-4 col-md-4 col-4 fh5co-widget">
                 <h3>A Little About E-Biker</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.
                    Eos cumque dicta adipisci architecto culpa amet.</p>
                <p><br><a class=" animi" href="newlog.php">Log in for Buy</a>
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


