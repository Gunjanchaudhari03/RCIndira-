
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
        $date = $_POST['dte'];
        $AD = $_POST['avenuedirector'];
        $event_name = $_POST['eventname']; 
         
        $sql = "INSERT INTO dateallocation (dte,avenuedirector,eventname)
                                   VALUES ('$date', '$AD', '$event_name')";
        
         $q=$conn->query($sql);
         if($q)
         {
            echo "Registration done successfully!";
            header('location:dateallocation.php');
            
            // block of code, to process further...
         }
         else
         {
            echo "Something went wrong while registration!<BR>";
            echo "Error Description: ", $conn -> error;
         }

      }
   }
    
  // $conn -> close();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/logo.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                    
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo.png"  alt="#" /></div>
                        <div class="user_info">
                           <h6>Admin</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                  <li>
                              <a href="dashboard.php" ><i class="fa fa-dashboard "> </i><span>  Dashboard</span></a>
                           </li>
                     <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                          
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           
                        </ul>
                     </li>
                     
                     
                     
                     <li class="active">
                       
                           <li>
                              <a href="contactTable.php"> <span><i class="fa fa-table blue1_color"></i>Contact us Tabe</span></a>
                           </li>
                           <li>
                              <a href="feedback.php"><span><i class="fa fa-table green_color"></i>Feedback Table</span></a>
                           </li>
                           
                           <li>
                              <a href="prospective.php"> <span><i class="fa fa-table orange_color"></i>Prospective Form Table</span></a>
                           </li>
                           <li>
                              <a href="queries.php"><span><i class="fa fa-table"></i>Queries Table</span></a>
                           </li>
                           <li><a href="report.php"><i class="fa fa-diamond red_color"></i> <span>Reports</span></a></li>
                           <li><a href="dateallocation.php"><i class="fa fa-dashboard purple_color"></i> <span>Date Allocation Form</span></a></li>
                           <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                           <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                           <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                        
                        </ul>
                     </li>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="../index.html"><img class="img-responsive" src="images/logo.png" alt="#" />RCIC</a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="../index.html"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div><br>
   
            <div class="center verticle_center   ">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="images/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="dateallocation.php" method="POST">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Date</label>
                              <input type="text" name="dte" placeholder="Date"  required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Avenue</label>
                              <input type="text" name="avenuedirector" placeholder="Avenue Director" required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Event Name</label>
                              <input type="text" name="eventname" placeholder="Event Name" required/>
                           </div>
                           <div class="field">
                              
                              <input type="submit"  name="submit" class="btn btn-primary btn-min-width " />
                              
                           </div>
                           
                           
                        </fieldset>
                     </form>
                  </div>
             </div>
          </div><br>
          <?php include ("../focus-main/theme/developer.php");?>
        <center>  <h3><u>Data Allocation Table:-</u></h3><br><br></center>
        <center>  <div class="col-sm-8">
                              <?php echo $deleteMsg??''; ?>
                              <div class="table-responsive">
                              <center> <table class="table table-bordered">
                                 <thead><tr><th>S.N</th>

                                    <th>Date</th>
                                    <th>Avenue</th>
                                    <th>Event Name</th>
                                    <th colspan="2" align="center"><b>Operation</b></th>
                              </thead>
                              <tbody>
                           <?php
                                 if(is_array($fetchData)){      
                                 $sn=1;
                                 foreach($fetchData as $data){
                              ?>
                              
                              <tr>
                                 <td><?php echo $sn; ?></td>
                                 <td><?php echo $data['dte']??''; ?></td>
                                 <td><?php echo $data['avenuedirector']??''; ?></td>
                                 <td><?php echo $data['eventname']??''; ?></td>
                                 <td><a href="deletedate.php?id=<?php echo $data['ID']; ?>" class="btn btn-primary btn-min-width mr-1 mb-1">Delete</td> 
                                 <td><a href="dateup.php?id=<?php echo $data['ID']; ?>" class="btn btn-primary btn-min-width mr-1 mb-1" >Update</td>
                                 
                              </tr>
                              <?php
                                 $sn++;}}else{ ?>
                                 <tr>
                                 <td colspan="8">
                              <?php echo $fetchData; ?>
                           </td>
                              <tr>
                              <?php
                              }?>
                              </tbody>
                              </table></center>
                              </div></center>
                           </div>
                           </div></center>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>