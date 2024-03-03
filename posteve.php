<?php

session_start();
     
$con=mysqli_connect("localhost","root","","rcic") or die("Database not connected");
if(isset($_POST['upload']))
{
    if((empty($_POST['name'])) || (empty($_POST['upload'])))
    {
        ?>
        <script>window.alret("Enter name and upload file");</script>
        <?php

    }
    else
    {
        var_dump($_FILES);
        $fname = $_POST['name'];
        $pst = $_POST['post'];
        $month = $_POST['month'];
        
        $nme=$_POST['nme'];
      
        $tmp=$_FILES['upload']['tmp_name'];
        echo "</br>HELLO $tmp<br/>";
        $file_name=$_FILES['upload']['name'];
        
       $t= move_uploaded_file($tmp,"uploaded_file/".$file_name);
       
       // $sql = "INSERT INTO upload('name','post','month','nme','upload') values 
       // ('$fname', '$pst', '$month', '$nme','$tmp')";-->

       
        $q=mysqli_query($con,"insert into upload(name,post,month,nme,upload) values 
        ('$fname', '$pst', '$month','$nme','$tmp')");
        if($q)
        {
            ?>
        <script>window.alret("Record saved successfully");</script>
        <?php
        }
        else
        {
            ?>
        <script>window.alret("Record Not Saved successfully");</script>
        <?php
        }
        
    }
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="icon" type="image/png" href="images/logo.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="focus-main/theme/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="focus-main/theme/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="focus-main/theme/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="focus-main/theme/css/lib/themify-icons.css" rel="stylesheet">
    <link href="focus-main/theme/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="focus-main/theme/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="focus-main/theme/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="focus-main/theme/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="focus-main/theme/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="focus-main/theme/css/lib/helper.css" rel="stylesheet">
    <link href="focus-main/theme/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="focus-main/theme/index.html">
                        <br><br>
                            <!-- <img src="images/logo.png" alt="" /> --><span></span></a></div>
                    
                    <li><a  href="focus-main/theme/home.php"class=""><i class="ti-home"></i> Dashboard
                    </li>

                    
                    <li><a href="focus-main/theme/app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    
                    <li><a href="focus-main/theme/app-profile.php"><i class="ti-user"></i> Profile</a></li>
                    
                    
                    <li><a href="report.php"><i class="ti-layout"></i> Pre-Event Reports
                    <li><a href="posteve.php"><i class="ti-layout"></i> Post-Event Reports
                    <li><a href="focus-main/theme/allocation.php"><i class="ti-layout-grid2-alt"></i>Dates Allocation Report</a></li>

                    </li>
                
                            
                            <li><a href="focus-main/theme/uc-todo-list.html" ><i class="ti-bell"></i>To do</a></li>
                           
                      
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="focus-main/theme/table-export.php">Datatable Export</a></li>
                           
                            <li><a href="focus-main/theme/table-jsgrid.html">Editable </a></li>
                        </ul>
                    </li>
                    <li><a href="index.html"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
<h2><center><i>Monthly Post Event Reports</i></center></h2>
<hr>
    <div class="form-body container border">
    <center><form action="report.php" method="POST" enctype="multipart/form-data" ><br><br>
            <label class="danger"> Enter your name</label>
            <input type="text"  name="name"  class="border-primary user-input-box" required><br><br>
            <label class="border-primary user-input-box">  Select Post</label>
            <select name="post" class="danger" class="border-primary user-input-box" required>
                <option>PDD</option>
                <option>CSD</option>
                <option>ISD</option>
                <option>WR</option>
                <option>CMD</option>
                <option>RRRO</option>
                <option>PRO</option>
                <option>MDD</option>
                <option>SR</option>
                <option>SAA</option>
            </select><br><br>
            <label class="danger" class="border-primary user-input-box"> Select Month</label>
            <select name="month" class="danger" class="border-primary user-input-box" required>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>

            </select><br><br>
           
            <label class="danger"> Upload Your file:  </label>
            <input type="file" name="upload" class="danger" class="border-primary user-input-box" required><br><BR>
            <label class="danger"> Enter your File name</label>
            <input type="text" name="nme" class="border-primary user-input-box" required><br><BR>
            <input type="submit" required name="upload" value="upload "class="btn btn-primary btn-min-width mr-1 mb-1">
        </form></center></div>
        <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 © Admin Board. - <a href="#">RCIC.org</a></p>
                            </div>
                        </div>
                </div>
   
    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="js/lib/calendar-2/pignose.init.js"></script>


    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
</body>

</html>