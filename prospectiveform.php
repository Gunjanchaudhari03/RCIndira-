<?php
     session_start();
     
     if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "rcic";
      
      $conn = new mysqli($server, $user, $pass, $db);
      
      if($conn -> connect_errno)
      {
         echo "Database connection failed!<BR>";
         echo "Reason: ", $conn->connect_error;
         exit();
      }
      else
      {
        $fname = $_POST['firstName'];
        $mname = $_POST['fatherSpousename'];
        $lname = $_POST['lastName'];
        $mob = $_POST['mobNo'];
        $bloodgroup = $_POST['bloodgroup'];
        $dob = date('Y-m-d',strtotime($_POST['dob']));
        $mail = $_POST['email'];
        $add = $_POST['ad'];
        $emob = $_POST['emergencyNo'];
        $gender = $_POST['gender'];
        $eduQua = $_POST['eduQua'];
        $moto = $_POST['moto'];
        $abt = $_POST['aboutYou'];
        
        
            
        $sql = "INSERT INTO prospectiveform (firstName,fatherSpousename,lastName,mobNo,bloodgroup,dob,email,ad,emergencyNo,gender,eduQua,moto,aboutYou)
                                   VALUES ('$fname', '$mname', '$lname', '$mob','$bloodgroup','$dob','$mail','$add','$emob',' $gender','$eduQua','$moto','$abt')";
         $q=$conn->query($sql);
         if($q)
         {?>
         <script>
          alert("Successfully Submitted");

          </script><?php
            header('location:index.html');
            
            // block of code, to process further...
         }
         else
         {?>
         <script>
          alert("Form not subbmitted");
          
          </script><?php
            echo "Something went wrong while registration!<BR>";
            echo "Error Description: ", $conn -> error;
         }
      }
   }
    
  // $conn -> close();
?>
<html>
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Prospective Form</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/logo.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
 

</head>
<body>
  <div class="body-inner">
    <div id="top-bar" class="top-bar">
      <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-12">
              <ul class="top-info text-left text-md-left">
                    <div class="top-link">
                      <img src="images\logo1.png"  width="100">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text"></p>Indira College of Commerce and Science, Tathwade, Pune,India 
                    </p>
                   <span id="social-icon"><i class="fa fa-phone-alt"></i></span><p class="info-text">+91 91090 14777</p> 
                   <i class="fas fa-mail-alt"></i><p class="info-text"><li><a href="mailto:rcindiracollege@gmail.com">
                    <i class="fa fa-envelope"></i></a>rcindiracollege@gmail.com</p>
                    
                      <a title="Facebook" href="https://facebook.com/Rotaract-Club-Of-Indira-College-109769683923004">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="http://twitter.com/ClubIndira?s=08">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/rotaract_indira?utm_medium=copy_link">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkedin" href="http://linkedin.com/company/rotaract-club-of-indira-college-rcic">
                          <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                      </a>
                   </li>
              </ul>  
            </div>
              <!--/ Top info end -->
            </li>
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown active">
                        <a href="index.html" class="nav-link dropdown-toggle">Home</a> 
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Club <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="faq.html">Faq</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                          <li><a href="pdd.html">PDD</a></li>
                          <li> <a href="isd.html">ISD</a><li>
                          <li><a href="csd.html">CSD</a><li>
                          <li><a href="cmd.html">CMD</a><li>
                          <li><a href="wr.html" >WR</a><li>
  </ul>
                        </li>
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Team Indira <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="bod.html">BOD</a></li>
                            <li><a href="member.html">Member</a></li>
                            <li><a href="rotary.html">Parent Rotary</a></li>
                            <li><a href="district.html">District Council</a></li>
                          </ul>
                        </li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.html">Contact us</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

<!--Form start-->
<br><br>
<h2><center class="bg-1"><i><u>Prospective Form</u></i></center></h2>
<hr>
<center><div class="form-body container border">
<form  method="POST" action="prospectiveform.php">
   <br>
  <label>First Name<span class="danger">*</span></label>
  <label>Father/Spouse Name<span class="danger">*</span></label>
  <input name="fatherSpousename" type="text" id="fatherSpousename" class="border-primary user-input-box" required="" />
  <label>Last Name<span class="danger">*</span></label>
  <input name="lastName" type="text" id="lastName" class="border-primary user-input-box" required="" />
  <label>Mobile No<span class="danger">*</span></label>
  <input name="mobNo" type="number" id="mobNo" class="border-primary user-input-box" required="" />
  <label>Blood Group<span class="danger">*</span></label>
  <select name="bloodgroup" id="bloodgroup" class="border-primary user-input-box" required="">
    <option value=""></option>
    <option value="A+">A+</option>
    <option value="A−">A−</option>
    <option value="B+">B+</option>
    <option value="B−">B−</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB−</option>
    <option value="O+">O+</option>
    <option value="O−">O−</option>
  </select>
        
            <label>Payment<span class="danger">*</span></label>
            <input name="dob" type="file" id="dob" class=" border-primary user-input-box" required="" />
            
            <label>Email<span class="danger">*</span></label>
            <input name="email" type="email" id="email" class=" border-primary user-input-box" required="" />
    
            <label>Address<span class="danger">*</span>&nbsp;(House no., Street Name, City, State, Pin Code)</label>
            <input name="ad" type="text" id="ad" class="border-primary user-input-box" required="" />
        
            <label>Emergency Contact No<span class="danger ">*</span></label>
            <input name="emergencyNo" type="number" id="emergencyNo" class=" border-primary user-input-box" required="" />
       
            
            <h7>Gender<span class="danger">*</span> :</h7><br>
            <input value="male" name="gender" type="radio" id="male" />
            <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input value="female" name="gender" type="radio" id="female" />
            <label for="female">Female</label>
            <br>
            <label>Course<span class="danger">*</span></label>
            <input name="eduQua" type="text" id="eduQua" class="border-primary user-input-box" required="" />
        <center>  <label>Motive behind Joining Rotaract Club<span class="danger">*</span></label></center> 
            <input name="moto" type="text" id="moto" class="border-primary user-input-box" required="" />
       
            <center> <label>Short Description about Yourself<span class="danger">*</span> (30 words max)</label></center> 
            <input name="aboutYou" type="text" id="aboutYou" class="border-primary user-input-box" required/><br><br>
          <center><input type="submit" name="save" value="Save" id="save" class="btn btn-primary btn-min-width mr-1 mb-1" /></center> 
       
</form>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</center>

<!--Form end-->
<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <p>Rotaract Club of Indira College is an institutional based club located in district 3131 zone 4

We as a club having youthful members intensively focus on grooming their virtuous side as a community service club while developing their professional skills for their succesfull endeavours</p>
          </div><!-- Col end -->
          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Quick Links</h3>
            <div class="working-hours">
              <ul class="list-arrow">
                <li><a href="index.html">Home</a></li>
                <li><a href="donation.html">Donation</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="prospectiveform.php">Apply for Membership</a></li>
                <li><a href="admin.php">Admin panel</a></li>
              </ul>
            </div>
          </div><!-- Col end -->
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-5 footer-widget">
            <h3 class="widget-title">Connect us on social media</h3>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/Rotaract-Club-Of-Indira-College-109769683923004" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/ClubIndira?s=08" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/rotaract_indira?utm_medium=copy_link" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://linkedin.com/company/rotaract-club-of-indira-college-rcic" aria-label="linkedin"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by Gunjan</span>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>