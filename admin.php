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
		    $username = $_POST['username'];
		    $password = $_POST['pwd'];
        $name=$_POST['nme'];
		

        $sql= "SELECT * from admin where nme='".$name."' AND username='".$username."' AND pwd='".$password."' limit 1";
    
    
        $result=mysqli_query($conn,$sql);
        $fetch=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            $_SESSION['user']=$fetch['user'];
            ?>
            <script>
            alert("Login Successful");
            </script>
            <?php
			      header('location:pluto-1.0.0\dashboard.php');
            exit();
        }
        else
        {
          ?>
          <script>
            alert("Check Username and Password");
          </script>
          <?php
           header('location: Admin.php');
            exit();
        }
            
	    }
  }
?>
        
<html>
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Admin</title>

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
<h2><center><i>Admin login</i></center></h2>
<hr>
<center>
<div class="form-body">
<form  method="POST" action="admin.php">
    
            <label>Enter your Name<span class="danger">*</span></label>
            <input name="nme" type="text" id="nme"  required="" /><br><br>
        
            <label>Enter Username<span class="danger">*</span></label>
            <input name="username" type="text" id="username"  required="" /><br><br>
        
            <label>Enter Password<span class="danger">*</span></label>
            <input name="pwd" type="password" id="pwd"  required="" /><br><br>
      
            <div class="form-actions right">
                <div class="form-group">
                  <center><input type="submit" name="login" value="Login" id="login" class="btn btn-primary btn-min-width mr-1 mb-1" /></center> 
                </div>
            </div>
</div>
</form>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
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
                <li><a href="page-login.php">BOD Login</a></li>
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