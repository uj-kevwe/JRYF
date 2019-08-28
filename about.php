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
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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
            function (showdiv){
                s = document.getElementById("story");
                a = document.getElementById("abt");
                s.style.visibility = "visible";
                a.style.visibility = "hidden";
                s.style.float="right";
                return false;
            }
        </script>
    </head>
    <body style="background-color:rgba(255, 0, 0,0.1)">
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
                                        onclick="getElementById('story').style.display='block';
                                        getElementById('story').style.float='right'; 
                                        getElementById('leadership').style.display='none';
                                        getElementById('abt').style.display='none';">
                                            Our Story
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                        onclick="getElementById('leadership').style.display='block';
                                        getElementById('leadership').style.float='right';
                                        getElementById('story').style.display='none';
                                        getElementById('abt').style.display='none'">
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
                                        getElementById('leadership').style.float='right';
                                        getElementById('leadership').style.display='none';
                                        getElementById('story').style.display='none';
                                        getElementById('abt').style.display='none'">Join Us</a>
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
        <div class="container-fluid">
            <div class="row">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url('Images/Jayden1.jpg');
                     opacity:0.7 ;height:420px;width:100%;padding-top:50px;padding-right:20px">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="abt" class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="background-color:rgb(255,255,255);float:right; border:2px; border-color:red">
                                <center>
                                <div id="about" style="color:white; font-size: 20px;background-color:red; text-align:center; margin-top:20px;">About JRYF</div>
                                </center>
                                <hr style="border-color: red;color:red">
                                    <p>
                                        Jayden Robinson Youth Foundation (JRYF) is a non-governmental organization (NGO), focused on mentoring less privileged youths in Africa to 
                                        build character, integrity and to maximize their potentials and build a successful career in any industry or career of their choice. 
                                    </p>
                                    <p>
                                        JRY Foundation supports youths to learn about career opportunities in variety of businesses. And this we achieve through mentoring and 
                                        providing opportunities for the candidates to explore and prepare for high demand career, gain work experiences, and develop the personal 
                                        attributes necessary to succeed in the workplace. 
                                    </p>

                                    
                                </div>
                               <div id="story" class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="background-color:rgb(255,255,255);border:2px; border-color:red; 
                                    display:none;float:right;">
                                    <center>
                                        <div style="color:white; font-size: 20px;background-color:red; text-align:center; margin-top:0px;">Our Story</div>
                                    </center>
                                    <hr style="border-color: red;color:red">
                                    <div style="padding-top:0px;">
                                        <p>Hello Afro Youths,</p>
                                        <p>My name is Jayden Chidubem Robinson, founder of Jayden Robinson Youth Foundation, my initiative to bridge the gap of many unemployed graduates by mentoring and training the youths (#catchthemyoung) to acquire the needed skills-set, character and attitude to excel in any career they choose for themselves.</p> 
                                        <p>Our institutions (both Secondary and Universities) has over the years failed to inculcate the essential characters, attitude and capabilities needed to help our youth excel or realize their dreams. JRYF is a visionary initiative to empower less privileged African Youths to develop capabilities and entrepreneurial minds to scale up their standard of living and impact in the sustainable African economic growth. </p>
                                        <p>JRY Foundation understands that teaching core skills essential for the workplace such as teamwork, leadership, discipline and the value of effort, provides young people with a constructive activity that helps reduce levels of juvenile crime and anti-social behaviour, and in instances of child labour, provides a meaningful substitute to work. </p>
                                        <p>JRY Foundation, understands that while sport is essential to human development, it also contributes to economic development. Sport actively educates young people about the importance of certain key values, such as honesty, fair play, respect for self and others and adherence to the rules and respect for their importance. It provides a forum for them to learn how to cope with competition, not only how to lose but also how to win.</p>
                                        <p>Degree Certificates cannot put food on your table if you do not have the necessary skills and capabilities to add value to the society either as an innovator or as a result oriented ‘support system’. We mentor and provide opportunities for the candidates to explore and prepare for high demand career, gain work experiences, and develop the personal attributes necessary to succeed in any workplace or career. </p>
                                        <p>JRYF will create enabling learning experience for our candidates to develop great passion and show resilient in the pursuit of their excellence. The time is set and its ticking, don’t wait to be told about it, stay close to our websites and all social platforms for more information. </p>
                                        <p>I wish you all African Youths all the best and together we would build the next generations of Youth ‘Afropreneur Zillionaires’ and stronger AFRICA.</p>
                                        <p>Yours Sincerely,<br>
                                        <img src="Images/signature.png">
                                    </p>
                                    <p style="font-size:1vw; color:red; font-weight: bold;">
                                        Jayden Robinson <br>
                                        Founder JRFY
                                    </p>
                                </div>
                            </div>
                            <div id="leadership" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:rgb(255,255,255);float:right; border:2px; border-color:red;
                                display:none;">
                                <center>
                                <div style="color:white; font-size: 20px;background-color:red; text-align:center; margin-top:20px;">Leadership</div>
                                </center>
                                <hr style="border-color: red;color:red">
                                <div style="padding-top:0px;">
                                    <div>
                                        <p>
                                            Jayden’s visionary and entrepreneurial acumen was evident on how he built Innovative Data Solutions fondly called IDS Africa from a 
                                            small business started in his living room in June 2012 to becoming a household name in Marketing & Social Research industry in Africa 
                                            and beyond. A brand that has set its footprints in more 35 countries in Africa and Middle East.

                                            Jayden worked with Nielsen for 6 years from 2003-2009, where he helped Nielsen set up operations in Nigeria, Ghana, Cameroon and Ivory 
                                            Coast. After he left Nielsen in 2009, he consulted for other local and international research companies in data processing/analysis, 
                                            data collections, business development and project management until 2012 when he focused on building IDS Africa brand known today. 

                                            Jayden’s love for sport as a key to building character, confidence and integrity in youths, motivated him to enroll for a dual Master’s 
                                            program in International Sport & Event Management, from University of Applied Sciences, Europe (Germany) and Real Madrid Graduate School
                                            (Spain) so he can add value to his foundation. Jayden Robinson Youth Foundation is non-profit founded by Jayden as CSR to mentor and 
                                            support the less privileged youths in Africa to achieve their potentials. Please visit JR Foundation website and see how you can join 
                                            us to mentor our next generation of ‘Afriprenuer’s Zillionaires’.

                                            Jayden loves to travel and listen to Country Music. He graduated with BA - Mass Communication from University of Nigeria, Nsukka and 
                                            he is a Certified Project Monitoring & Evaluation from Pro-Active College Pretoria, South Africa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="career" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:rgba(0,0,0,0.9);float:right; border:2px; border-color:red; color:white;
                                display:none; padding-bottom:20px">
                                <center>
                                <div style="color:white; font-size: 20px;background-color:red; text-align:center; margin-top:20px;">Join JRYF Team</div>
                                </center>
                                <p style="font-size:18px;">Vacancies at JRYF<br><span style="color:white; font-size:12px"><i>select a vacant position to apply</i></span></p>
                                <hr style="border-color: red;color:red;margin-top:1px;">
                                <div style="padding:20px; font-weight:bolder;">
                                    <form action = "career.php" method="post">
                                       <ol style="list-style-type:none;">
                                            <li style=" ">
                                                <input type="radio" name="position" value = "Project Manager"> Project Manager
                                            </li>
                                        </ol>
                                        <hr style="border-color: red;color:red">
                                        <button class="w3-btn w3-green w3-round-xlarge" style="margin-bottom:20px; margin-left:30px">Apply</button>
                                    </form>
                                </div>
                                
                            </div>                            
                            </div>
                            
                            
                        </div>
                    </div>
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




<!--<!DOCTYPE html>
<html>
    <head>
        General 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <meta name="HandheldFriendly" content="true">
        <link rel="icon" type="image/x-icon" href="images/jrflogo.jpg">    

         Bootstrap 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

         Custom Fonts 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

         Assets    
        <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="js/myjs.js"></script>

        <title>Jayden Robinson Youth Foundation</title>
    </head>
    <body>
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
                                        <a href="missionandvision.php">Mission</a>
                                    </li>
                                    <li>
                                        <a href="vision.php">Vision</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="document.getElementById('about').style.">Our Story</a>
                                    </li>
                                    <li>
                                        <a href="leadership.php">Leadership</a>
                                    </li>
                                    <li>
                                        <a href="staff.php">Staff</a>
                                    </li>
                                    <li>
                                        <a href="mentor">Mentor</a>
                                    </li>
                                </ul>
                            </div>
                             The overlay 
                            <div id="myNav" class="col overlay" style="float:right">
                                 Button to close the overlay navigation 
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                    <span style="font-size:20px;">&times;</span></a>
                                 Overlay content 
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
        <div class="container-fluid">
            <div class="row">
                <div id="about" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url('Images/Jayden1.jpg');
                     opacity:0.7 ;height:420px;width:100%;padding-top:50px;padding-right:20px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:rgb(255,255,255);float:right; 
                                 height:350px; overflow-y: scroll; border:2px; border-color:red">
                                <div style="color:white; font-size: 3vw;background-color:black;">Message From Jayden Robinson</div>
                                <hr style="border-color: red;color:red">
                                <div style="padding-top:0px;">
                                    <p>Hello Afro Youths,</p>
                                    <p>My name is Jayden Chidubem Robinson, founder of Jayden Robinson Youth Foundation, my initiative to bridge the gap of many unemployed graduates by mentoring and training the youths (#catchthemyoung) to acquire the needed skills-set, character and attitude to excel in any career they choose for themselves.</p> 
                                    <p>Our institutions (both Secondary and Universities) has over the years failed to inculcate the essential characters, attitude and capabilities needed to help our youth excel or realize their dreams. JRYF is a visionary initiative to empower less privileged African Youths to develop capabilities and entrepreneurial minds to scale up their standard of living and impact in the sustainable African economic growth. </p>
                                    <p>JRY Foundation understands that teaching core skills essential for the workplace such as teamwork, leadership, discipline and the value of effort, provides young people with a constructive activity that helps reduce levels of juvenile crime and anti-social behaviour, and in instances of child labour, provides a meaningful substitute to work. </p>
                                    <p>JRY Foundation, understands that while sport is essential to human development, it also contributes to economic development. Sport actively educates young people about the importance of certain key values, such as honesty, fair play, respect for self and others and adherence to the rules and respect for their importance. It provides a forum for them to learn how to cope with competition, not only how to lose but also how to win.</p>
                                    <p>Degree Certificates cannot put food on your table if you do not have the necessary skills and capabilities to add value to the society either as an innovator or as a result oriented ‘support system’. We mentor and provide opportunities for the candidates to explore and prepare for high demand career, gain work experiences, and develop the personal attributes necessary to succeed in any workplace or career. </p>
                                    <p>JRYF will create enabling learning experience for our candidates to develop great passion and show resilient in the pursuit of their excellence. The time is set and its ticking, don’t wait to be told about it, stay close to our websites and all social platforms for more information. </p>
                                    <p>I wish you all African Youths all the best and together we would build the next generations of Youth ‘Afropreneur Zillionaires’ and stronger AFRICA.</p>
                                    <p>Yours Sincerely,<br>
                                        <img src="Images/signature.png">
                                    </p>
                                    <p style="font-size:1vw; color:red; font-weight: bold;">
                                        Jayden Robinson <br>
                                        Founder JRFY
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="nb-footer">
            <div class="container">
                <div class="row" style="background-color:white; width:100%">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info-single"> 
                            <img src="Images/RealJR.png" class="img-responsive center-block" alt="" 
                                 style="padding-top:10px; height:60px ; float:left">
                            <div class="social-media" style="float:right">
                                <h2 class="title">Connect with us</h2>
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/Jayden-Robinson-Youth-Foundation-107106137303747/?modal=admin_todo_tour" title=""><i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
                                    <li><a href="https://twitter.com/JaydenYouth" title=""><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>
                                    <li><a href="https://www.instagram.com/jry_foundation" title=""><i class="fa fa-linkedin"></i>&nbsp;Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info-single">
                            <h2 class="title">Help Center</h2>
                            <ul class="list-unstyled">
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to Register as a Student</a></li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to Partner with us</a></li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to be a sponsor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-info-single">
                            <h2 class="title">Customer information</h2>
                            <ul class="list-unstyled">
                                <li><a href="about.php" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Programs</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Media</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Past Programs</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Contact Us </a></li>
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
</html>-->
