<!DOCTYPE html>
<html>
    <head>
        <!--General -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <meta name="HandheldFriendly" content="true">
        <link rel="icon" type="image/x-icon" href="images/jrflogo.jpg">    

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Custom Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

        <!-- Assets -->   
        <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="js/myjs.js"></script>

        <title>Jayden Robinson Youth Foundation</title>

        <style>
            #about{
                -webkit-animation: myfirst 5s 2; /* Safari 4.0 - 8.0 */
                -webkit-animation-direction: alternate; /* Safari 4.0 - 8.0 */
                animation: myfirst 3s 2;
                animation-direction: alternate;
            }


            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes myfirst {
                0%   {background: red; left: 0px; top: 0px;}
                25%  {background: yellow; left: 500px; top: 0px;}
                50%  {background: blue; left: 0px; top: 0px;}
                75%  {background: green; left: 500px; top: 0px;}
                100% {background: red; left: 250px; top: 0px;}
            }
            @media screen and (min-width: 320px) and (max-width: 480px) {
                #abt{
                    height:300px;
                    overflow-y:scroll;
                }
                #story{
                    height:300px;
                    overflow-y:scroll;
                    margin-top:20px;
                }
                #leadership{
                    height:300px;
                    overflow-y:scroll;
                    margin-top:20px;
                }
            }
            @media screen and (min-width: 1281px) {
                #abt{
                    height:300px;
                    overflow-y:scroll;
                }
                #story{
                    height:300px;
                    overflow-y:scroll;
                    margin-top:20px;
                }
            }
            #leadership{
                height:300px;
                overflow-y:scroll;
                margin-top:20px;
            }



        </style>
        <script type="text/javascript">
            function (showdiv) {
                s = document.getElementById("story");
                a = document.getElementById("abt");
                s.style.visibility = "visible";
                a.style.visibility = "hidden";
                s.style.float = "right";
                return false;
            }
        </script>
    </head>
    <body style="background-color:rgba(255, 0, 0,0.1)">
        <?php
        session_start();
        if($_POST['position']==""){
            $_POST['position'] = "";
            echo 
            "<script type = 'text/javascript'>".
                    "alert('You did not select a position.')".
            "</script>";
            //header("location:about.php");
        }
        else{
            $post = $_POST['position'];
        }
        ?>
        <div class="container-fluid" >
            <div class="row" style="background-color:grey; width:100%;padding:3px;" >
                <span style="font-size:30px;cursor:pointer; float:right;padding-right:10px;margin-top:0;
                      " onclick="openNav()">&#9776;</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="float:left">
                            <img src="Images/JRFoundation.png" style="height: 50px">
                        </div>
                        <div class="menu col-lg-9 col-md-9 col-sm-12 col-xs-12" style="float:right">
                            <div style="float:left">
                                <ul>
                                    <li>
                                        <a href="missionandvision.php">Mission & Vision</a>
                                    </li>
                                    <li>
                                        <a href="#" 
                                           onclick="getElementById('story').style.display = 'block';
                                                   getElementById('story').style.float = 'right';
                                                   getElementById('leadership').style.display = 'none';
                                                   getElementById('abt').style.display = 'none';">
                                            Our Story
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           onclick="getElementById('leadership').style.display = 'block';
                                                   getElementById('leadership').style.float = 'right';
                                                   getElementById('story').style.display = 'none';
                                                   getElementById('abt').style.display = 'none'">
                                            Leadership
                                        </a>
                                    </li>
                                    <li>
                                        <a href="staff.php">Staff</a>
                                    </li>
                                    <li>
                                        <a href="mentor">Mentor</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           onclick="getElementById('career').style.display = 'block';
                                                   getElementById('leadership').style.float = 'right';
                                                   getElementById('leadership').style.display = 'none';
                                                   getElementById('story').style.display = 'none';
                                                   getElementById('abt').style.display = 'none'">Join Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- The overlay -->
                            <div id="myNav" class="col overlay" style="float:right">
                                <!-- Button to close the overlay navigation -->
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                    <span style="font-size:20px;">&times;</span></a>
                                <!-- Overlay content -->
                                <div class="overlay-content">
                                    <div class="overlay-link">
                                        <div class="dropdown">
                                            <a class="dropbtn" href="index.php">Home</a>
                                        </div>
                                    </div>
                                    <div class="overlay-link">
                                        <div class="dropdown">
                                            <a href="about.php" class="dropbtn">About</a>
                                        </div>
                                    </div>
                                    <div class="overlay-link">
                                        <div class="dropdown">
                                            <button class="dropbtn">Programs</button>
                                            <div class="dropdown-content">
                                                <a href="">Empowerment Programs</a>
                                                <a href="">Sports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-link">
                                        <div class="dropdown">
                                            <button class="dropbtn">Partners</button>
                                            <div class="dropdown-content">
                                                <a href="">Partner</a>
                                                <a href="">Sponsor</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-link">
                                        <div class="dropdown">
                                            <button class="dropbtn">Media</button>
                                            <div class="dropdown-content">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-link">
                                        <div class="dropdown">
                                            <button class="dropbtn">Past JR Programs</button>
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
        </div>
        <div style="background-image:url('Images/Jayden1.jpg');opacity:0.7;background-size:cover;height:420px;width:100%;padding-top:5px;padding-right:20px">
            <div class="w3-row">
                <div class="w3-col w3-container m4 l5" style="background-color: white;padding:10px;height:400px; overflow-y: scroll;">
                    <div>
                        <h6><?php echo "You are applying for " . $post; ?></h6>
                        
                    </div>
                    <form class="w3-container" action="processApplication.php" method="post" enctype="multipart/form-data" name="apply">
                        <input type="hidden" name="position" value ="<?php echo $post; ?>">
                        <p>
                            <input class="w3-input w3-animate-input" type="text" name="lname" placeholder="surname" style="height:30px;width:50%; border:1px solid red">
                            <label style="font-size:12px">Last Name</label>
                        </p>
                        <p>
                            <input class="w3-input w3-animate-input" type="text" name="fname" placeholder="first name" required style="height:30px;width:50%; border:1px solid red">
                            <label style="font-size:12px">First Name</label>
                        </p>
                        <p>
                            <input class="w3-input w3-animate-input" type="text" name="mname" placeholder="middle name" required style="height:30px;width:50%; border:1px solid red">
                            <label style="font-size:12px">Middle Name</label>
                        </p>
                        <p>
                            <input class="w3-input w3-animate-input" type="text" name="email" placeholder="Email" required style="height:30px;width:50%; border:1px solid red">
                            <label style="font-size:12px"><i class="fa fa-envelope"></i></label>
                        </p>
                        <p>
                            <input class="w3-input" type="file"  name="resume" required  style="width:100%; border:1px solid red">
                            <label style="font-size:12px">Upload Your Resume</label>
                        </p>
                        <p>
                            <label style="font-size:10px;">Application letter (not more than 250 words)</label>
                            <textarea class="w3-input w3-border" name="letter" style = "width:100%" required></textarea>
                        </p>
                        <p>
                        <center>
                            <button class="w3-button w3-block w3-red" style="width:70%;" name="submit">
                                Send <i class="fa fa-angle-double-right" style="float:right"></i>
                            </button>
                        </center>
                        </p>
                    </form>
                </div>
                <div class="w3-col w3-container m8 l7">
                    <img src="Images/vacancy.jpg" style="width:40%">&nbsp;&nbsp;
                    <img src="Images/hiring.jpg" style="width:50%" style="margin-top:0">
                </div>
            </div>
        </div>
        <footer class="nb-footer">
            <div class="container">
                <div class="row" style="background-color:rgba(255, 0, 0,0.1); width:100%">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info-single"> 
                            <img src="Images/RealJR.png" class="img-responsive center-block" alt="" 
                                 style="padding-top:10px; height:60px ; float:left">
                            <div class="social-media" style="float:right">
                                <h2 class="title">Connect with us</h2>
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/Jayden-Robinson-Youth-Foundation-107106137303747/?modal=admin_todo_tour" title=""><i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
                                    <li><a href="https://twitter.com/JaydenYouth" title=""><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>
                                    <li><a href="https://www.linkedin.com/company/jayden-robinson-youth-foundation" title=""><i class="fa fa-linkedin"></i>&nbsp;LinkedIn</a></li>
                                    <li><a href="https://www.instagram.com/jry_foundation/" title=""><i class="fa fa-instagram"></i>&nbsp;Instagram</a></li><br><hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info-single">
                            <h2 class="title">Help Center</h2>
                            <ul class="list-unstyled">
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> How to Register as a Student</a></li>
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> How to Partner with us</a></li>
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> How to be a sponsor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info-single">
                            <h2 class="title">Customer information</h2>
                            <ul class="list-unstyled">
                                <li><a href="about.php" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Programs</a></li>
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Media</a></li>
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Past Programs</a></li>
                                <li><a href="coming_soon.php" title=""><i class="fa fa-angle-double-right"></i> Contact Us </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section class="copyright">
                <div class="container">
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <p>Copyright © 2019. Jayden Robinson Youth Foundation .</p>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>
