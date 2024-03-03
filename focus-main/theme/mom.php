<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                        <br><br>
                            <!-- <img src="images/logo.png" alt="" /> --><span></span></a></div>
                    
                    <li><a  href="home.php"class=""><i class="ti-home"></i> Dashboard
                    </li>

                    
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    
                    <li><a href="app-profile.php"><i class="ti-user"></i> Profile</a></li>
                    
                    
                    <li><a href="../../report.php"><i class="ti-layout"></i> Pre-Event Reports</a></li>
          <li><a href="../../posteve.php"><i class="ti-layout"></i> Post-Event Reports</a></li>
                   
                    </li>
                    <li><a href="allocation.php"><i class="ti-layout-grid2-alt"></i>Dates Allocation Report</a></li>

                
                            
                            <li><a href="mom.php" ><i class="ti-bell"></i>Minutes of Meeting</a></li>
                           
                      
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="table-export.php">Datatable Export</a></li>
                           
                            <li><a href="table-jsgrid.php">Editable </a></li>
                        </ul>
                    </li>
                    <li><a href="../../index.html"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div><br>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <a href="app-profile.php">
                                <i class="ti-user"></i>
                                <span>Profile</span>
                            </a>
                        </div><br>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</body>
</html>