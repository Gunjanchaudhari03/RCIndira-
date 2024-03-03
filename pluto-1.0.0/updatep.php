<?php
   include 'database.php';
   
   
   if(isset($_POST['submit']))
   {
      //echo "ssssssssssssssssssssssssssssssssssssssssssss".$ids=$_GET['ID'];
      $idupdate=$_POST['uid'];
      //$showq="SELECT * FROM prospectiveform WHERE ID=$ids";
      // $showdata=mysqli_query($conn,$showq);
      // $data=mysqli_fetch_array($showdata);
      $ufname=$_POST['firstName'];
      $mname=$_POST['fatherSpousename'];
      $lname=$_POST['lastName'];
      $mob=$_POST['mobNo'];
      $bg=$_POST['bloodgroup'];
      $mail=$_POST['email'];
      $emob=$_POST['emergencyNo'];
      
      echo $query="UPDATE prospectiveform SET firstName='$ufname',fatherSpousename='$mname',lastName='$lname', mobNo='$mob',bloodgroup='$bg',email='$mail',emergencyNo='$emob' WHERE ID=$idupdate";
      $res=mysqli_query($conn,$query);
      if($res)
      {
         ?>
         <script>
            alert("Date Updated properly");
         </script><?php
         header('location:prospective.php');
      }
      else
      {
         ?>
         <script>alert("Date Not Updated properly");
</script><?php
      }
   }
?>

<?php

include 'database.php';
$idd=$_GET['id'];
if(isset($idd)){
$run=mysqli_query($conn,"select * from prospectiveform where ID='$idd'");
while ($row=mysqli_fetch_array($run)) 
{
   $id=$row[0];
   $fname=$row['firstName'];
   $edit_fatherSpousename=$row['fatherSpousename'];
   $edit_lastname=$row['lastName'];
   $edit_mob=$row['mobNo'];
   $edit_bg=$row['bloodgroup'];
  $edit_dob=$row['dob'];
  $edit_mail=$row['email'];
  $edit_emob=$row['emergencyNo'];

}

}
?>
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
               </div><br><hr>
             
               <div class="center verticle_center   ">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="images/logo.png" alt="#" />
                     </div>
                     
                  </div>
                  <div class="login_form">
                        <form  method="POST" action="updatep.php">
                        
                        <fieldset>
                        <div class="field">
                              <label class="label_field">ID</label>
                              <input type="text" name="uid" value="<?php echo $idd; ?>">
                           </div>
                           <div class="field">
                              <label class="label_field">First Name</label>
                              <input name="firstName" type="text" id="firstName" class=" border-primary user-input-box" value="<?php echo $fname;?>" /><br>
                           </div>
                           <div class="field">
                              <label class="label_field">Father Name</label>
                              <input name="fatherSpousename" type="text" id="fatherSpousename" class="border-primary user-input-box" value="<?php echo $edit_fatherSpousename;?>"/><br>

                           </div>
                           <div class="field">
                              <label class="label_field">Last Name</label>
                              <input name="lastName" type="text" id="lastName" class="border-primary user-input-box" value="<?php echo $edit_lastname;?>" required="" /><br>

                           </div>
                           <div class="field">
                              <label class="label_field">Mobile no</label>
                              <input name="mobNo" type="number" id="mobNo" class="border-primary user-input-box" value="<?php echo $edit_mob;?>" required="" /><br>
                           </div>
                           <div class="field">
                              <label class="label_field">Bloodgroup</label>
                              <select name="bloodgroup" id="bloodgroup" class="border-primary user-input-box" value="<?php echo $edit_bg;?>" ><br>
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
                           </div>
                           <div class="field">
                              <label class="label_field">DOB</label>
                              <input name="dob" type="date" id="dob" class=" border-primary user-input-box" value="<?php echo $edit_DOB;?>" required="" /><br>
                           </div>
                           <div class="field">
                              <label class="label_field">Email Id</label>
                              <input name="email" type="email" id="email" class=" border-primary user-input-box"  value="<?php echo $edit_mail;?>"required="" /><br>
                           </div>
                           <div class="field">
                              <label class="label_field">Emergency Cno</label>
                              <input name="emergencyNo" type="number" id="emergencyNo" class=" border-primary user-input-box" value="<?php echo $edit_emob;?>" required="" /><br>
                           </div>
                           
                           <div class="field">
                              
                              <input type="submit"  name="submit" value="Update Details"class="btn btn-primary btn-min-width mr-1 mb-1"/>
                           </div>
                           
                        </fieldset>
                        
</div>
</div></div>
</body></html>
