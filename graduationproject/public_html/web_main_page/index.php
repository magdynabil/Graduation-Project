<?php
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
?>

 <!-- Header -->
 <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>WEBSITE FOR <span id="js-rotating">SERVICES, CARPOOLING, BUSLINES, LOST PEOPLE</span></h1>
                            <p class="p-large"></p>
                        </div>
                    </div> <!-- end of col -->

                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    

    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="../img/home/Asset_4.png" alt="alternative" width="350px">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>SERVICES</h3>
                        <p>4U can easily help you in your personal daily services you need, Check out the details.</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="Services.php">MORE DETAILS</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3>CARPOOLING</h3>
                            <p>Save Money Save Fuel, Just open the feature and start enjoying carpooling trips.</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="Carpooling.php">MORE DETAILS</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="../img/home/Asset_6.png" alt="alternative" width="450px">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-3 -->    
    <!-- end of details 2 -->

        <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="../img/home/Asset_5.png" alt="alternative" width="500px">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>BUSLINES</h3>
                        <p>Now you can easily know your transportations, your Buslines that can serve you, Check out the details.</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="buslines.php">MORE DETAILS</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3>LOST PEOPLE</h3> 
                            <p>When you find someone lost like kids or adults you can announce on our page.</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="loss_p.php">MORE DETAILS</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="../img/home/Asset_3.png" alt="alternative" width="450px">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-3 -->    
    <!-- end of details 2 -->

    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                <img src="../img/Newfolder/bus.png" id="main">
                <div id="thumbnails">
                    <img src="../img/Newfolder/bus.png">
                    <img src="../img/Newfolder/Screenshot_1.png">
                    <img src="../img/Newfolder/Screenshot_2.png">
                    <img src="../img/Newfolder/Screenshot_8.png">
                    <img src="../img/Newfolder/Screenshot_9.png">
                </div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->

    

    <!-- Statistics -->
    <div class="counterr">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                <div class="row text-center">
	        <div class="col">
	        <div class="counter">
                <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                <p class="count-text ">Happy Clients</p>
            </div>
            </div>
            
              <div class="col">
               <div class="counter">
                    <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                    <p class="count-text ">Our Services</p>
                </div>
              </div>

              <div class="col">
                  <div class="counter">
                    <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                    <p class="count-text ">Carpooling Trips</p>
                </div></div>

              <div class="col">
              <div class="counter">
                    <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                    <p class="count-text ">Buslines Numbers</p>
                </div>
              </div>
         </div>
                    <!-- end of counter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->
	
    <!-- Scripts -->
    <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->

<?php
include_once("include/footer.php");
?>