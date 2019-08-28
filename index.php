<!DOCTYPE html>
<head>
    <!--General -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" type="image/x-icon" href="Images/jrflogo.jpg">    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <!-- Assets -->   
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/myjs.js"></script>

    <title>Jayden Robinson Youth Foundation - Empowering Youths and bridging the gap of graduate unemployment</title>
 <!--  --> 
    <style>
        @media screen and (min-width: 1281px){
               #foot{
                width:100%;
                position:relative;
                bottom:-700px;
            }
        }
        @media screen and (min-width: 1025px) and (max-width: 1280px){
               #foot{
                width:100%;
                position:relative;
                bottom:-700px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1024px){
               #foot{
                width:100%;
                position:relative;
                bottom:-700px;
            }
        }
        @media screen and (min-width: 481px) and (max-width: 767px) {
               #foot{
                width:100%;
                position:relative;
                bottom:-700px;
            }
        }
        @media screen and (min-width: 320px) and (max-width: 480px) {
            #foot{
                width:100%;
                position:relative;
                bottom:-700px;
                z-index:1;
            }
        }
    </style>
<!---->
</head>
<body>
    <header style="position:fixed; top:0; background:rgba(0,0,0,0.5);color:#f1f1f1;
            width:100%;padding:10px; z-index: 2">
        <div class="topnav" id="myTopnav">
            <div class= "col-lg-9 col-md-7 col-sm-12 col-xs-12" style="height:fit-content; padding:10px;" >
                
                <span style="font-size:15px;cursor:pointer; margin-top:0;" onclick="openNav()">&#9776;Program Menu</span>
                <div class="container">
                    <div class="row">
                        <a href="index.php" class="active"><img src="Images/JRFoundation1.png" style="height:40px; float:left"></a>
                        <div style="float:right">
                            <a href="index.php"><i class = "fa fa-home"></i></i></a>
                            <a href="about.php">About</a>
                            <a href="#partners">Partners</a>
                            <a href="#media">Media</a>
    <!--                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars">Other Menu</i></a> --->
                        </div>
                        <!-- The overlay -->
                        <div id="myNav" class="col overlay" style="float:right">
                            <!-- Button to close the overlay navigation -->
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span style="font-size:20px;">&times;</span></a>
                            <!-- Overlay content -->
                            <div class="overlay-content w3-container w3-mobile">
                                <div class="overlay-link">
                                    <div class="dropdown">
                                        <a class="dropbtn" href="index.php"><i class = "fa fa-home"></i></i></a>
                                        <div class="dropdown-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-link">
                                    <div class="dropdown">
                                        <a class="dropbtn" href="about.php">About</a>
                                        <div class="dropdown-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-link">
                                    <div class="dropdown">
                                        <a class="dropbtn" href="#partners">Partners</a>
                                        <div class="dropdown-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-link">
                                    <div class="dropdown">
                                        <a class="dropbtn" href="#media">Media</a>
                                        <div class="dropdown-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-link">
                                    <div class="dropdown">
                                        <a class="dropbtn" href="">Programs</a>
                                        <div class="dropdown-content">
                                            <a href="empower.php">Empowerment Programs</a>
                                            <a href="sports.php">Sports</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-link">
                                    <div class="dropdown">
                                        <a class="dropbtn" href="">Past JR Programs</a>
                                        <div class="dropdown-content">
                                            <a href="">Success Stories</a>
                                            <a href="">Our Students</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>

        </div>
    </header>
    <section style="top:0px; left:0;  width:100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <video id="videobg" poster="Images/jrf" autoplay loop style="position:fixed;right:0;
                           z-index: -1;bottom:0;min-width: 100%; min-height: 100%">
                        <source src="Videos/Beach2.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
    </section>
       <footer id="foot" class="nb-footer" style="z-index:1; left:0; background:rgba(0,0,0,0.5);color:#f1f1f1;
            width:100%;padding:20px;position:absolute; bottom:-800px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-info-single"> 
                        <img src="Images/jrflogo.jpg" class="img-responsive center-block" alt="" 
                             style="padding-top:10px;margin-right:0px; height:6vw ; float:left">
                        <div class="social-media" style="float:right">
                            <p style="font-size: 1.5vw">Connect with us</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-phone">&nbsp;08104584568</i></li>
                                <li><a href="mailto:contact@jrinitiative.org"><i class="fa fa-mail-forward">&nbsp; contact@jrinitiative.org</i></a></li><br>
                                <li><a href="https://www.facebook.com/Jayden-Robinson-Youth-Foundation-107106137303747/?modal=admin_todo_tour" title=""><i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
                                <li><a href="https://twitter.com/JaydenYouth" title=""><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>
                                <li><a href="https://linkedin.com/company/jayden-robinson-youth-foundation" title=""><i class="fa fa-linkedin"></i>&nbsp;LinkedIn</a></li><br>
                                <li><a href="https://www.instagram.com/jry_foundation/" title=""><i class="fa fa-instagram"></i>&nbsp;Instagram</a></li><br><hr>
                                <li><i class="fa fa-home">
                                        No 1 S Road, Plot 7 & 9,<br>
                                        off Read Roof, New Site Estate, <br>
                                        Lugbe FCT Abuja,Nigeria.
                                    </i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-info-single">
                        <p style="font-size: 1.5vw">Useful Links</p>
                        <ul class="list-unstyled">
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> How to Register as a Student</a></li>
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> How to Partner with us</a></li>
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> How to be a sponsor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-info-single">

                        <p style="font-size: 1.5vw">Easy Menu</p>
                        <ul class="list-unstyled">
                            <li><a href="about.php" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Programs</a></li> <br>
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Media</a></li>
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Past Programs</a></li> <br>
                            <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Contact Us </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="copyright">
            <div class="container">
                <div class="row" style="">
                    <div class="col-sm-12">
                        <p style="text-align: center">Copyright © 2019. Jayden Robinson Youth Foundation .</p>
                    </div>
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </section>
    </footer>

</body>
</html>
