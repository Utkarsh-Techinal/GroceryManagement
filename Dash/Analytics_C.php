<?php
@ob_start();
session_start();
?>

<!doctype html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>DOT |Analytics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Team DOT" class="logo-src"><img src="assets/images/Logo-dot.png" width="60px"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li class="mm-active">
                                    <a href="Dashboard.php">
                                        <i class="metismenu-icon"><img src="assets/icons/dashboard.png" width="20px">  </i>
                                        Dashboards
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Profile.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Profile.png" width="20px">  </i>
                                        Profile
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Item.php">
                                        <i class="metismenu-icon"><img src="assets/icons/online-shop.png" width="20px">  </i>
                                        Items
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Order.php">
                                        <i class="metismenu-icon"><img src="assets/icons/orders.png" width="20px">  </i>
                                        Orders
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Stock%20Ups.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Stock.png" width="20px">  </i>
                                        Stock Ups
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Analytics.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Analytic.png" width="20px">  </i>
                                        Analytics
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Map.php">
                                       <i class="metismenu-icon"><img src="assets/icons/1.png" width="20px">  </i>
                                        Map
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Support.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Support.png" width="20px">  </i>
                                        Support
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="../index.php">
                                        <i class="metismenu-icon"><img src="assets/icons/logout.png" width="20px">  </i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            <?php echo $_SESSION["Shop Name"]; ?>
                            <div class="page-title-subheading">
                                <img width="30" class="rounded-circle" src="assets/icons/1.png">
                                <?php 
                                echo $_SESSION["Address"]; 
                                echo " , ";
                                echo $_SESSION["city"];
                                ?>
                            </div>
                        </div>
                        <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="header-dots">

                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                            <i class="typcn typcn-bell"></i>
                                            <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header mb-0">
                                                <div class="dropdown-menu-header-inner bg-night-sky">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                                    <div class="menu-header-content text-light">
                                                        <h5 class="menu-header-title">Notifications</h5>
                                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                        <span>Events</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                        <span>System</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="notifications-box">
                                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Something not important
                                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/1.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/3.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/4.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/5.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/9.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/7.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/8.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                <div class="avatar-icon"><i>+</i></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                        class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                        class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="no-results pt-3 pb-0">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle">All caught up!</div>
                                                                <div class="results-title">There are no system errors!</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                     <?php
                      $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
                      $y= $_SESSION["user_id"];
                      $sql = "Select * From Profile_R where s_id = {$y}";
                     
                         $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                        
                      $row = mysqli_fetch_assoc($result);

                                            $y=$row['images'];
                                                     
                                                    if(isset($row['images']))
                                                    {
                                                echo '
                                                <img width="45"  height="45" class= "rounded" src="assets/images/Shopkeeper/'. $y.'" >';
                                                    }
                                                    else
                                                    {
                                                    echo "<img width='45' height='45' class='rounded' src='assets\images\Shopkeeper\Profile.png'>" ;
                                                    }
                               ?>
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-info">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="40" height="40" class="rounded-circle"
                                                                                 src="assets\images\Shopkeeper\<?php echo $row['images']; ?>"
                                                                                 alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading"><?php echo $_SESSION["username"]; ?>
                                                                            </div>
                                                                            <div class="widget-subheading opacity-8">Thanks For being a Part of DOT family.
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right mr-2">
                                                                           <a href="../logout.php"> <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                               </button></a>
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
                                </div>
                            </div>    </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column">
                                        <div class="nav-item-header text-primary nav-item">
                                            Dashboards Examples
                                        </div>
                                        <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                        <a class="dropdown-item active" href="management-dashboard.html">Management</a>
                                        <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                        <a class="dropdown-item" href="index.html">Helpdesk</a>
                                        <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                        <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                        <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                        <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                        <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                    </div>                            </div>
                            </div>
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                                    Orders Status
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                               
                                                    <div class="col-md-6 col-lg-3">
                                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
                                                        <div class="widget-chat-wrapper-outer">
                                                             <a href="Analytics.php"> 
                                                            <div class="widget-chart-content">
                                                                <div class="widget-title opacity-5 text-uppercase">Orders Under Process
                                                                </div>
                                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                                    <div class="widget-chart-flex align-items-center">
                                                                        <div>
<!--
                                                    <span class="opacity-10 text-success pr-2">
                                                        <i class="fa fa-angle-up"></i>
                                                    </span>
-->
                                                                            234
                                                                            <small class="opacity-5 pl-1"></small>
                                                                        </div>
                                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                                            <div class="circle-progress circle-progress-gradient-alt-sm d-inline-block">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 </div></a>
                                                         </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-danger border-danger card">
                                                        <div class="widget-chat-wrapper-outer">
                                                           
                                                                <div class="widget-chart-content">
                                                                <div class="widget-title opacity-5 text-uppercase">Orders Completed
                                                                </div>
                                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                                    <div class="widget-chart-flex align-items-center">
                                                                        <div>
<!--
                                                    <span class="opacity-10 text-danger pr-2">
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
-->
                                                                            71
                                                                            <small class="opacity-5 pl-1"></small>
                                                                        </div>
                                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                                            <div class="circle-progress circle-progress-danger-sm d-inline-block">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-warning border-warning card">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <a href="Analytics_U.php"> 
                                                                <div class="widget-chart-content">
                                                                <div class="widget-title opacity-5 text-uppercase">Orders Undelivered
                                                                </div>
                                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                                    <div class="widget-chart-flex align-items-center">
                                                                        <div>
                                                                            <small class="opacity-5 pr-1"></small>
                                                                            14
                                                                        </div>
                                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                                            <div class="circle-progress circle-progress-warning-sm d-inline-block">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <a href="Analytics_all.php"> 
                                                                <div class="widget-chart-content">
                                                                <div class="widget-title opacity-5 text-uppercase">Total Orders
                                                                </div>
                                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                                    <div class="widget-chart-flex align-items-center">
                                                                        <div>
                                                                            <small class="text-success pr-1"></small>
                                                                            100
                                                                            <small class="opacity-5 pl-1"></small>
                                                                        </div>
                                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted">
                                                                            <div class="circle-progress circle-progress-success-sm d-inline-block">
                                                                                <small></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header-tab-animation card-header">
                                                        <div class="card-header-title">
                                                            <img width="35" class="rounded-circle" src="assets/icons/2.2.png">
                                                            Orders Placed
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                           
                                                                
                                                                <div class="scroll-area">
                                                                    <div class="scrollbar-container">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                            <?php 
                                                       $connect= mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
                                                        $x= $_SESSION["user_id"];
                                                        $sql = "SELECT * FROM Orders where Product_Status = 4";
                                                        $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                                                     if(mysqli_num_rows($result)>0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                    ?> 
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/5.jpg"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                               <?php echo $row["C_Name"]; ?> 
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                <?php echo $row["Order_id"]; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                 <?php echo $row["DeliveryDate"]; ?>
                                                                                                </small>
                                                                                                
                                                                                               
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <?php }} ?>
                                                                           
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"> </i>
                                                            Technical Support
                                                        </div>
                                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                            <div class="btn-group dropdown">
                                                                <button type="button" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        class="btn-icon btn-icon-only btn btn-link">
                                                                    <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                                </button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                                     class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                    </button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <div class="p-3 text-right">
                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                            View Details
                                                                        </button>
                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                            Action
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-0 card-body">
                                                        <div class="p-1 slick-slider-sm mx-auto">
                                                            <div class="slick-slider">
                                                                <div>
                                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                                        <div class="widget-chat-wrapper-outer">
                                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                        WEEKLY
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                            <span class="opacity-10 text-success pr-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </span>
                                                                                            <span>78</span>
                                                                                            <small class="opacity-5 pl-1">
                                                                                                %
                                                                                            </small>
                                                                                        </div>
                                                                                        <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                                            <span class="text-success pl-2">+14</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                <div id="dashboard-sparkline-3"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                                        <div class="widget-chat-wrapper-outer">
                                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                        MONTHLY
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-3 pr-1">
                                                                                                $
                                                                                            </small>
                                                                                            <span>629</span>
                                                                                            <span class="text-primary pl-3">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                <div id="dashboard-sparkline-1"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                                        <div class="widget-chat-wrapper-outer">
                                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                                <div class="widget-chart-flex">
                                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                                        YEARLY
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <span class="text-warning">34</span>
                                                                                        </div>
                                                                                        <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                                            <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                                            increase
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                                <div id="dashboard-sparkline-2"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="text-muted text-uppercase font-size-md opacity-5 pl-3 pr-3 pb-1 font-weight-normal">
                                                            Sales Progress</h6>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="p-3 bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Total Orders
                                                                                </div>
                                                                                <div class="widget-subheading">Last year
                                                                                    expenses
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-success">
                                                                                    <small>$</small>
                                                                                    1896
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper">
                                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-primary"
                                                                                     role="progressbar" aria-valuenow="43"
                                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                                     style="width: 43%;"></div>
                                                                            </div>
                                                                            <div class="progress-sub-label">
                                                                                <div class="sub-label-left">YoY Growth</div>
                                                                                <div class="sub-label-right">100%</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="card-hover-shadow-2x mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                            <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"> </i>
                                                            Timeline Example
                                                        </div>
                                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                            <div class="btn-group dropdown">
                                                                <button type="button" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        class="btn-icon btn-icon-only btn btn-link">
                                                                    <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                                </button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                                     class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                    <h6 tabindex="-1"
                                                                        class="dropdown-header">
                                                                        Header</h6>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                    </button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <div class="p-3 text-right">
                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                            View Details
                                                                        </button>
                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                            Action
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-lg">
                                                        <div class="scrollbar-container">
                                                            <div class="p-4">
                                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <div class="badge badge-danger ml-2">
                                                                                        NEW
                                                                                    </div>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">
                                                                                    Something not important
                                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAggAAAgIDAQEAAAAAAAAAAAAABQYEBwACAwEIAQEBAAMBAAAAAAAAAAAAAAADAgABBAUQAAIBAgQEBQMDAgcAAAAAAAECAxEEACESBTEiEwZBUWEyB3FCI4FSFPCRobHBYoIVFhEAAgIDAQADAQAAAAAAAAAAAAERAiFBAzFRYRJx/9oADAMBAAIRAxEAPwBg2uaIXFNPO2WpsqV8TWuLAklvfyzvJDayyNq5EiFSNQPjqAyrjDAT3B3pt22MpOiTdIEZZLeBAXYnI65CQhP0FMS2NTm3kW3+Ut8vZ4ZILNrW2RVHQjYqDoyqAMuPhg22MuaC43lruIGaVluJwS2rUpGrjqNfHFUvoO/JrJxQ2nVKrOkhiJ1FpC3DMVK1/wAMIGS/5gEao8Md3GaqzAuEA9wVdRyrwJpjDDWHe90rG6iBTCaosTZDKhID1xhORk3GDbNmiW4YlpwCqAas5M6qC1eUeLYmTapIqbt8i3djZG2tYYYJplZRLHqyQDn4+76nEu4tOSkqu/3+Rrp9EdZ9YdHkzViPpiTpGrYOyO8N50XRQWlu3MkjNWinyA44K9zopwbGvuL423az7blu9quWub+2VpTBIeaUKKsuX+WDV85N9OSSwK3YXdM+/WU6yxKLi1VD1hGdTJJUDVSo1gimOyl9M83pTaGl2cDSqdQilVrmfPLCSFDOyHaUt2kuLNgVAA5uBr5jjXGjZm+X9zI0hno2kMzSFxU6c2oDX+2BG8Kj7v3G4e4hu3aqewqKBlY+FBjT9Fp4GuwBsdzdI91S4njAZ1I4N5EfXA9HB1cEmXdte4o6CONdAAoPBaelMDJ2/k77t3RY7LYSXly4ZI6ZDhUmgB9PPG0pZF4SllL9xJd9pTjdtmSWz2HfpXMcjxaehcglmgdQTSN6l4mr5g8MdNHpnndee0aRd/b6DScQXKoKsHUqCPOoOLg5v0T7X5DlVB/J26J4QSKRyipoc9OoGn64qDMEXetzuCouJW1TLIhiXKq0FRSvj+7+3HGGCPv4twCAQ8TczsOBlVqt+lGODv6Nz8Ivad09l3GkqhujKhiMg4aq1GseBxF8obhixbr9wbm1tDt9rbz/AJaCW4hOhI1rmzy0Ys3ki4JJbO1t6GXYrDph9v3pWmgvNL28k3vRl9uR/wBc8RvAkSjr8g3Fn/53ce3ZNtk6QtnmtpF0sjPCvVV1bMqy0+7FLDD6JflyUDFfRiKDRL+IiqK5IYA/bQ15V9MdNDyugNvLqzYu05YMoJaSGoJ8v20H6YUE+jU7d2u1iMqWSKiU/LIA1KerV4YOWWV18tQWN1Z2U1m6arQyF4oVAQq9KtygCtcsSxeZV+3W/wDG3WDXIejcBmRq0HAmjYx5RdMWLR7F74eCNR1XqgU9MZ0DDI0GOd0g9Hh1q1DGLcdx3DeN76b9eydogiTyyLbQKpOolpGDZn/aK43RYE9cVCu+JEnZu8NY3X/YbhZ7Vcq92utowSNXTRn5myBJY4qFKI7p1o5KgsrG1ntInEKsDmVYA0AAH9UwtTyugN3jYYmmasYVAKscwOXMDI4aoDLTurneri5Ec9QkpAULL1GBr9sXtLeIwf8ACiLcbbaSo1lCA9xKzQJM9WKRMOd2P7tXDGQbThlUdy7LNs+5PBcsXtoGpFLH7QHNQwr4HB/Q2PSLatfWNxbzW87W1yMop8miKsfa3ocZjZalPA3bf8ib4Z1sd5sYZ44SAWJNQPNTny/XEOi0NTu9hzuP5Q3QbLPs+yWkccF3EI5r0EELE451UedMs8aS+S79ZUJAbtySA7TCcxGoVZFIzVzVSCP+OEozjsjXdwonCSvzyNVaHIjj44fQD9G9r65tt11xSDQSESQCoGpSrDxNRxriNwb+z3Z7+CI3MsnKkcXKzEZEPpAz/djb+CV8iv8AJYjXbNqZaLdPbme+YUKlJZD0lp6AV+mNXSwNzcJsR7O7tZIZIDpZacqPUkU4r9MG00XS6YUtZ7BVaKF3d+EkZUN+Pyp91PLEiKDaOwuZC3SOuFjph0LnqbgAB4edcTKNwwztrIuiOgMMx/NH96Nw1EHiurG08mmpM3K0WWeNFTVKtAoAJr50w9QOiUSH0l0u0zsHiRG6TjIMxNXGfrQYxLYf0RrKeOeeWJ10xzurqyhSXCijceX35jE0KaFjf7hLue624gopcBZpXBCqv2ljQc1KYpeyU/IE+E23UXqxlgCCXB0gN4g0rhLr4Co1sk28RN1rjn1Imciu4JVRxcNTgMHEoVPPoct7uwKytAzTSygr+IsBQihchh7l9MC00MnJLs7421+qT3HU1LqUOPyMSDR2bPTSlDiI2X9BZr5gElKFdDDUSKkAZ09cdHOWgrrR/9k="
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div class="avatar-icon">
                                                                                                <i>+</i></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has an
                                                                                    info state</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has a
                                                                                    dark state</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <div class="badge badge-danger ml-2">
                                                                                        NEW
                                                                                    </div>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">
                                                                                    Something not important
                                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhgAAAgMBAQEAAAAAAAAAAAAABQYDBAcCAQABAAIDAQAAAAAAAAAAAAAAAAIDAQQFABAAAgEDAwMCBAQHAQAAAAAAAQIDEQQFACESMRMGQSJRYSMHMkJSFHGBkaFyMxbBEQACAgICAQQBBQEAAAAAAAABAgARIQMxEgRBUSITFGFxkTIFI//aAAwDAQACEQMRAD8Aw3/j7yr0VPYQCK/HUDyFhnQ4nbeE5FUZ+0pUELWo6nUfkp7yfxdk+fxMWtnNe5FTFbxe1O20YZ3BFQok2agO9N9NTYGFiL2a2Q0eZzY43xwXERu42e3n2jUyGI77V5AMCV+H8ttFYgUYx2f288dyqMMZcyQzL7S1x/pRyKokpIWReVPxCo/jqbEijAF94Pl8fcft72waCYjlGpZWV19HRlJV1PoQdLbco5jF07GFiQL4veNxAth7gSCSOg0P5CQh4+w+k8Xxm9K1FsCvqeQ135Ke84+Lsh61a8JIe/iZyVLVWm+qOB6TQ6En+wlsy5JWnFzfwwWS0lknZCeIHwHr8tcqA1ids2MpIsRQ8ly4zeQ5RrI0UICQwdwgrxFCwVfpc26njq/YAqUKLEsfWTYuBLZhC80d7jrs0nsJaoxJ/NE35JV69RXQFoQWGhn8rg4O3EFurZVBt7gioliB98cq9Uk6H/IVHXS+9xn11LsXlVnLOMfb3JGHyambGib6gsb0jkU/UI5GqpHp10HXsKMZ26mxJkiuhZWzPeQLPKDyjYUpXqK6rE5ODLaoaBsSaS1uYrXti6iDyD2sR7dcKOaMFgRixBN+9y8v13iio4JYJTTEFcXB3NdWRB2fy8q4m+tP3EUyukaqUX3AFhy07WuQaMrbcYBBjF9msX45kElF/bRy3aEFeQ6L/wC6lzD0rNyw3j+CCUbG25pszdtWqD09NKBlhll658F8PuouMmKhpvQBeO51xUcyQx4iR5F9mfD5LG7mt0e24kOQjcehqQpPQ6jWcztqjrVRG8pSCIi0keIIApglcUcxlfaWPxOi6gOSOJXZ2KdTVwLcWWNmEFtFeUkCcmdgSnXpqftPNQB4oOO0gzN75BkII0bHlIahz7dzT46Zr1KpsGL2b3cURBOVxbHCX17cQvFdRmP6QQheHIAtt01Pf5BRxJGr4ljgxi+26W+Cw6eR3MEtzPcSOkFvGQoKIacjyooFep0naReZa0D42Jo2L+91lHdLHJjgLSoElxDOkwi+UgAH9tCzFRdQ0IY1cdM79x8dhre3nubaWVbuPuwRwryZ09WFaD19Tpf35qo76cXcXPL/ADK0zfieQgwwntMt2f3MNpcxNG0sURDShDurEJU7HUMQcQTxM2zFteZaa1nhljji7aBUkUEjjXc6ar0OJXZbPIEGZTLXNteR2cdxbKAm7lBSo12tLF0Ye3YVNWsvXORkoskk5UnbiR66M6RVASuvlsCCSIU8Vk/6CzyVtft3HjUSRRR+0sqVHE/qqSNjtpLaevFy7p8nvd1Gb7cWWNucacDkIUdLQCF4+q7bkivzP9dSW7NmQE6rj0jNl/CsTj8e/EyTpIw7cT8CC/RTQLuQuwOnVQ94tcn0H7QrdeLWeXxOOsbyNFKWvC3lkRZFjZajiVPUFTQ6CqIjDkH2lC08GxHi2OnuGdG+k6rDEWFupZChZY3LcWYGjH10t/7dmna1+PRRQmX+XY/GeP3Fqt85gu54D9OOQupjB4rJQj2lq9Btttp2l2riVvK8fWCD2yREKUYc3jqspeBVBSRhUk/PVgOa4lJtQugYTaC1vp+E11JEUb3rT8Wg+wjgQ01K3JqX7P8Af+PZOO/wweWTiwYsOS8WFGR19QdHfZc4gD/m/wAcwh475DfR5OTISMqvcS1vABQIxNKgfp1n71o4mx4+zstn1j15DkcllUuMMUurN24Nb5C3WRiYyOqMgPUGhpolNiGFzjE68anufHpIp8xmZ760gia2gj+oiqtQVkdZVBaRTtWug4NxrKetQn5J5XZw3cLXzMcVEq3F7IoJPZJ91FG5Jr00pWLPUg0iFuJkX3Hztjns/Nk7WVksW7cVhDKlHMEK8VLD0LbmmtJFIxMfbtDm7gSxvYGuwsjpFEVrz7daEeh20JTEkbcy1LcZJI6Xtn9TkDzWm9Dto11qODEvtc8iW7LMuxljlWWNTQsQDTfQ7FHpHeO5zcrQXIxdzJkY2NzYSEpeIVqVr0YD5dDpOzNCqljSetkGxc1LxDyzA5axjguZAUt/p20ivQqg6VPXQhR6xq7L4jccjhMfYtK129yqgse7J3Fp0/NtTfQvUaGJmOeb+TTTQ8baRUiuS00bsP8AciNxog/QCKV/pqfE1W3b2iPO3fDqPWJl5LJciOd7lA609tNgdaAv2mZ1XBBzI5chkYLmOKJoyrj8QT1+e2h6AwztZeJ7cZq+uGVkd1kG1CuwGpXWo4gPscmzD9nbeQW2Plushc21tEqB1iuZVSYg9Kx78dt/dTTj/nMy9qxK6/6wRugNn9rhnxfEfucQn7kdtbz68QA37b7KW/zG9PhrO8gDtQmx4gPQk+sCXPgU9tlXSGWS0iYgLNExWgY9SBpTbSBGfQCYy4L7byveJHeXV3ewV5FZ5D2/48Qd/wCeqrbnbGBLK+Oq/rJvuv4heS3tneWEEkqxWnZhhiXmzdliZAqjrxVgxA3p6a1PCRupCiwP5mZ/olO4LGiRj2/n3mbyWFkgTuTSJLyBEciFfd8KHTu5PpK31KPWStlDDf8ADmrBkBPt9fhoauScGf/Z"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAiwABAAIDAQEAAAAAAAAAAAAABwMGBAUIAgEBAAIDAQEAAAAAAAAAAAAAAAIDAAQFAQYQAAIBAwMCBQIEAgsAAAAAAAECAxEEBQAhEhMGMUFRFAciMmFCIxVSM3GBkaHhYnKCQyQWEQACAgICAgEEAwEAAAAAAAAAARECIQMSBDEiE0FRMkJhYtIF/9oADAMBAAIRAxEAPwDp7RgnxiQNQh5klRELuwRFBZ3YgBQNySTsBqEKTN8x9gxZuTDTZWKCVeIjvGZWtpSxoVSRC1GB/ipqA5gxj85fHUeTisP3FWWRihuyyiMEGhqKk0/HQfIm4GvU1WT1f/J+MyceRssJyn6EYT9woej1JKghP4uK7/2a78tUxb12ayDjdl41r2VmjN7Ox5S397IWkr50FfDS3s5MOlK1RYYfZWlskVvGi8aKekvHw89RNBRJtO3PkrumKy4XuTt7iVW/TeXizOh3HIjjvqc7DL6az68iwxfKV+yAtFbSerRv5f0b649zX0FvVjyCPyv875/Ny3FjjrhrDEDnbyY5UV1uEB4l5pj48z4IuwXzrplLOxz44yDfubiWRpAhKg1bitFHoFHhTRkPLNLGzzSxsGfYhaEAetPHQ/Qn1NhD3pd20ga0nuYYkURxhJStdqBnXw0r458jvlU4Fz40y375FPDe3hub+NFkjlUUqh2YSU2qp8PUaXwyL2JJyi+QWD2tt0pZ2uCTVXYAcfwFNNSJa8hVaZC1kSSV45F6KryCspUilKgmm+3hpNIZoPmnBl2VxbXMwkluDGaHphUJrtUjY+Jpt+OosuJJdNKYC1rCfK9xrj6CFA31py5lN9lkYVBfehp56fKqpKUO1oOiez/jWztrOJjaJJIVp0mUGgKjY1GqN9ln4NTXopVSyHuvsTFdd3uLCJeYHUCrx2p+GgpsvW0NjL6aWrKQB93YCLCZL3NqvK3ikB6bbgiu4qfEa0k+SMfZThYzPiibFv3pbe8eS3NwzC0uIp/bGNt3UMx+llYCnDz0SFP7nRs05ZCsmwG9BtTRQL5BTaW2ZjleI2iHHczJJEyoyV402YUNdVFPg1G6+Z9iHIR1hV0hGPdWPTKBvqNK6F4+g3DxJP8AF/bnusld5W1i9xc06Ytn3PVROb708/Kml9i7aSR3r60nyFbB/KFq19bQwWaSFlUyI/UtbmJX+12hlDK6tTYo9fw0u861ygKjW1ukmN393DBPkJomE7XCgFra2iM0gWleTAU4r/mOq022XwXFw1UhsDfkO8gupLaztUcySL9kigSFpTxWgVmG5PrrS68ryZPah+Cw/DHaFnFjb+5yuJnXKW8gSZL+IiBYxuskayClQ3ifI6tYKGfCEtpBOyxqwkZvp4oag/16JNW8AXpajhoIvewyYx4kkdZmkVv1FIj4jx3B1TxBrOZTgmg9+FjRp4umdpDyJAB9NLS/ka/tBdfivIQ2OTe2ujEttI7SJMjtUMyhGHHwFeIPLx0rbhSx2hS2hGi/8quanSySOWQMvusk6ngkku4j8CORG7HbbSHsTwvxGV1Rlr2KQ2Gx/dOW7wtlvYpZHeOR2jfqB4Ubg1KHienItKf46KlrVzUG9K3fFlQxPY2Bm74xmHsoetb45myOZuD/AMhi/lK4Gw5SeQ1f6zd8sze7Ra1xQg9xe0v7uCCW8MCW/LnxrRwRTgT+HjqxdTgpatjplGyGJx/b2PgythG11bsrCYPVpBIB9LgeAB1xLgsDL7Htc2/ID4pIxbvcSWKtIZCsaJzEfAipqPWuq+PJd9piSW0uYpF9r+2tFGazO4LinFSa1I8NREbazJau3MHCvbz588UAUFbfkSWUuB9p/uOubdE62zmvttbVUQcJxx2Kilsnnjxs8bNIYYzOgkY1Z2FDSv5qnVHTD8mwuLX9g8v+5YrGTN3cEjWuMiUi3/662xnmb7qKD4V8x465bUm1Au+3hLNV8Sd6ds4w3lzm80LPIZl3NxVGISJDxiRpAGCV3ah1t6dfGp5vsbXe0suvdPePZWPW2kiyNvdxspdVtmE7t6Gibj/dTROn2F0ub3t/PZLufsq0mx2Mmmhv53jj6fFpCsbFWYoPtCkb11L19cHddlz9g5kynbhwwk95CJIECXdzyJ/VK1UKB9xOlqGsDYatLKDf975BUktLSSR+R/nyfmVRTiE8qn11K6ozYPZ2E8UQr2vanssTYVn6lxGsbzoTVnkdQWJ/0k0A8tZtuy7Nr9TVr1FVJ/sbJsT3faog7dyLWok+o2coJhr57jcDQLXVhWtevgPsp2L373TlbmS4mbKC1U9b2lRGCPymRwqRj1b7vQat6taWKoodjbK5XZFc/Anc9rY3M/Ey+yp7sW6coQDQ/oENzlp4Gi+O2r8Rj9jM5yVpcHDjpjbTKDMwEkRZeAZXBoSD4ny1zZSyHanVnQ3wd3NiYvje7t5n9uuKkupr+Zf0h0WdWiDyj7Vbka08hTXaanZIDZdKwXdn/GF/3TnZWkkWHBWxpE0gAa5ukgEsscca1q0aSL9R2WvmdtL0a0lIzt7m3CETuP457Nv45MZaxLFd9v4yGUR26dW9E33sYI497hwycG5VWpHoa3XetlFkZ6ratpqw+y/ynmcbLb2i4+SW/dHN1Hk4oVljlZ6QIotePJiu7Ky1rrMv0tbco2df/R2pZ42FrtD4+7myUVled7uRBNELtsWZzAxU06du9rF0wnGo6nJ23+nTKaqVWF7FfZ2dl3l+ptsXhv23uH9vx8clrjbC4abK8XZLKBpFE0TxBwvP6NvpHFK+b6tKztX2KLxbBAl3fXV5ce4vZcXeS3DTWTui9KPH8mMht4lWqFlXj1XJZq/TStdNrqommly/0A72zPqGXyv2nBme4Pd4ZvcZG6mihltrZqr1GqOIVqLEo41JLUrt56ZwmufyCV8/1I/hDKxY/vHIdpMEk9/eWjDrLzW4tbdZY54mUDj+YPvtsdVa1bmB+xrDZ//Z"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div class="avatar-icon">
                                                                                                <i>+</i></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has an
                                                                                    info state</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has a
                                                                                    dark state</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span
                                                                                        class="text-success">15:00 PM</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <div class="badge badge-danger ml-2">
                                                                                        NEW
                                                                                    </div>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">
                                                                                    Something not important
                                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhQAAAwEBAAMAAAAAAAAAAAAABQYHBAIBAwgBAAMBAQEAAAAAAAAAAAAAAAIDBAEABRAAAgIBAwQABAUDBAMAAAAAAQIDBBEAEgUhMRMGQVFhFIEiMiMHcZFCoVJiFYJTNBEAAgICAQQCAwEBAAAAAAAAAAERAiEDEjFBIgRRE2EyQlJy/9oADAMBAAIRAxEAPwCERTyMWBgJCnaxXr1GoGi7kebRjNZwsZDkdAVx111OpjZ3Qk4iKsv34CMDs7Ek/HPT5aLhZvBkpLIUTk/SzVEfEzyLdf8AU86OsUY/3sR0A+OqVpXdk72PsYLPunJVroTjbCW6cYG6eWPCux6kAZ3Kvy1j01N+xh/i/c+K5dY42dKdtGDeCUEozD4JIBg5+AODpF9PEZS7Y2S2LMUXlnrALj8zKfnqdJPoNbaMss9Ro8yQOqn4suR/XprOLOlCFWr2628vVZt7byUPxOmOH3OUo0pcrtL45EdSMblK5xrOB3NHs9Z9M5X2z2WHjYYmRORm8Rn/AEpDWjP7h6f5Htj56t1UeEJu+7PoG96167wUbcRQowipA/hSPxqSVUYyxxlifmdL9hpWhFPrrlWWL3OfxT6jzlb9uktOywz5YMIc9+o+OmUmANmtSSn3L+LL/r9aQyq0lpW3+TtuUdUZR2YuPh8x89c7ZhivrUSg/wCucjY531OJ6YR2UeGfcNpV1AJGOo69wRqO9FW2RlW7IIT3Z6lYRz1JCsa/mdSCOmk8JeGFMCxC9wruNV9rYwV0yF8nSbeJrpPzSRzRmGOwQgdxhV2qTlj+Gj10myQN74bHj1X2Gh69yVS5VqQz14LDjlb0snirVgsZfdldzMc4XAGNxxnXp2daeRJRWvhIy8z/AC9Yfk2EcFOxHK3kbxTMJlL9QGWVQDu+HXrrz9k28j0dV1XxCXGfyTwNtq896wtZZSQUfchUA4y2R0H17a6l7TlB3VYwxn/kiLieZ9EnnjmE1NY1eOzC4OPE6sAHGcMDp93JKiW+tJYpcPXSrGhNyaaYjGDkvjPTpggaj2w3kKk9glyUXKtXdPtozuGMhsjrpdK16ya2wHWtywxIj1JBtAGR113FPuFP4NEvJztx1t6Pkgnh2CdwgaRYmJEgQEY3N0H9M6C00yiz0VW9mrL+S0ew+p8AnpfCcZeghZYYI2Twqq5nkTdvBUdQoPx769HffjrTZ53q15bbVX6kpscNXv8AMf8AXSRxchBURSbcm2P7aJTt3S42rIR+lc/21Itzg9N+sl1DnvPoFe96x6/NSmNKSOB/2Y3AEsIkJ2ordHeMHdhu+qOKVE2TOXsaQuey0vYuI9F5T7enYjovJA9fkEiMfmiPR68tdS2PI3ZuuNdTGP5E7k46+QS4LhOTqcXx8jSBbK1lEsTqMB3G5u31OpNmxNsxKDvkLHL1qzyMkUiKCcDI1lIeEbLAcNq4GPm4+ZcHDbcNrHrjuEr/AIOeO5G/CLsXhmhS1uV3VSWKnqAdFfXKhM3Rteu3KCnfyvy89bgq8EbtDIgggJXo6osQDhcdiT0yO2n+2+lQvT72JlxXr9+4Rx1rg/BaLmUh7ib2SPqkkZcBNu49ic50tKenlUplpTbxDvuEtHieArULNyet7ZSlHItDaLMLIQeB3hMZlhQYG3AI66ZtolTH7VB1bn9mPKth859uW5r1njTlq6w4mt2lcxvFLHs8SqFwW3EsrDQ7L2tSQdfCl22Kpq3vLNsuHarnAYA9+uppXwSZB/J0+XnhaH7iIKw6krgkD4aKjqnJzTM0F+R7DJJ9sLCY8gWcKCT06ZHXPzGmvRL6mLY0ugUr3YI7tGF/G9u08RipROGZlaUId7Y2qcZOO+NavWh5Zz2NrCDvubUuY5eV/JsWKdizdMAN1U/6aPalsG6m9eBQA4/lZmd+U+zeswjjSSMnP5sfrU7vw0v14XfiW32vsP3McTx8nBUKFxozBBNDYmmQKGnEDeRFJ7ld3U51XtzWGyH7fJsXb92flLliQWXSqsm2GBHOwBf8sdixJJzqPZcxZRhmoywhvDZkUnrnO7r89L5rujfrBFufmF8YSwsjO21Q6dep1q4s5ponT8gURZcEiAFlHUEIDhxj5qe41U6C1cKcHzjUeYgubvLJUdJIpGOSY36q/wBSBkZ+ml3mMB0anJRo4JHL24pgYbCAOck/UNn6g99S+u2ivekxdqerS3uRWKCQ9WJdxkY6/wBtU/syfopKvS4GGrwTyzhrLuBVjaRyx/OcM30HTGrNepW8WR79rqpFyClw96xehrKC1FYpbZJ2JGJU343g7SQO+gv6V1+r5AL2q91xBP8A0Pke0ztPBFG/7MgYlShGQQe2pditTqijXZW6MzTcMcBkuyZQ7kJwRkaSti+BrT+SectVWStX5WL/AOW9Elw9sCRWENpfxRgx+oOvWdMSQq+YBvG0bL05ERs2OJnapMCe8DsfGf8AxYaXwywuXQL0Pd7fr7pQ5YP9nlkr2QC2wj9UUg+IHdT8tKv685qUa/ZjFh99G9i9ZNue7Z5GsKzJlpDMqKoHU9CRgn+ms11snlB7dtWsMeh7hXu1/LCDHxFCKSyZWG3yqF/K4VsFY/guep769DRSMs8vfs5YROKnJXeK9crCLLcz7RZa0kDfHd+3CG/4IuWOjq4X/QtqXH+QlwfskA5GKnTItcZxMhpUInOEv8k6k2bM5/8ARXTcT+GiTnBjUZNfN+sUlp1uU4qaeOhZyrAkhA/dXiDZYRv/AIhtef7mlUXKqLPW2u+LH//Z"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAgwAAAgMBAQEAAAAAAAAAAAAABQYDBAcCCAEBAAIDAQEAAAAAAAAAAAAAAAABAgMEBQYQAAIBAwMBBwMCBQUAAAAAAAECAxEEBQASBiExQVFhIhMHcTIUkULwgVKCCLHhYiMVEQACAgIDAAIDAAAAAAAAAAAAARECMQMhEgRRYUGxE//aAAwDAQACEQMRAD8A0KAMNQJl+Fa000BZW3r0AqTogRmXMvnThHHMjJjY0my93CAJjZlBErn9nut0JH7qfTQOBSn/AMm8UZgIONTtEQamS6RXr/JCNIAtw/5445ncvHjMnZHDPdNss7t5RJAzH7UlNFMZY9A3210Aak9mVYqy0YGhB7QdAHH4nloAlgjB7tAF2KMjUgMz/wAhPkJ+O8bi4/jJ5YM7mhvM8LbWhslJV+o9W6ZvSKdwJrpCPPnHeFZrOyGKzjHoG6eaSoVS3ie86pvtVcmnVotfA3r8CZV4C638Ynp0jKnZXwLapfpXwXrxP5BOT+HOZ2MbNDAmQFG3wxGrbQK1Cntp5asr6Ksqt5LL7Nu+BOWZHkPEJ7HJsZMjgJVs2mkP/Y8LKTF7leu5NpQk+A1oT4MrTnk0gwU7tECOIIezTGEIYagCmgR5l/yMtyflaR26JFjrJQW6j7GNQPKv66hZwTqjQfj3j9tjsBart9ndGJJTJ6SXfqGcmnXXOs3a0nW1pVqkOUVqzMKBSrdjKag/pqDTLqNNcF1bFF9QQlqU3U6AA1/11F8ElkVPi7jX4PO/kG/jI/HuLq1ijiHQKzIZ3NP7tdPzuaI4vqUXZpBh1cZ5OIIOzQMI2ttV1HZU9ugTZh/yJxgch+QMblp4fbufzTaXdoKsos7GphkeooHYg18dYr7m5R1V5FVUaczDf7CHKuGNlzHcGNbzalI7aeWSOBO31lIypdifPVFNkcF2zX2KXBONy4S/jd98AkiQ3drFLI9utwxIZIxIzVQCnq8dPbacBp1NZUEubuOYXvKbqyt7zJY3G2u38ea1EUkUpkYKu6NhvO2tWoei6lRpVlwQ2KztClD/APGWJv7Tj97NkpFmyd/k7u4vJUFFLKVhUAeAWLW3Sl1UYOZvb7ucjS0Q1YVENsimlNAwxaRoAD36ZEUOaYuO1yYvUIAyLVChgGaSNKN6O+nj56wenXD7LDOr5N6tVVeUUIEQW/uTV2qvp/31mTWDauORduM5jRfpBMyxRlgQ0YD0Ff3NUdfIan0tEwH9qzkYcVkLC7lnNnL7qqGMMo7DQ0ZSO0ddRtWOGHdWUpjzBYxW1vHDGgVVFSB3s3Vm/mddWihJHn7tuzbPjoB26kRFi55Nh7BmV5WleP71gXeF8i3Ra6jJNVZm/Ifk7n2QzEtnir2PA4uJCY3hjWW5kYVoGlcMEHTrtH00pZJURY45NmM3lY7jJ3k13cpjpVtrid9zHbOtSKUA86ayeqzhG3x1UsZLm7hubGWGUiN1pHKtaMrin8Dx1lScpo12fDTA9xYYDEpHHPDI8E1Ckr235AYk16sKEndqytm/ySr/ADSUoJ4S3wWHvTcMGi94RtLbIhG1GNWYRk1qR2g6dU7tJ4KNt60TdeJNNtsnj8inuWNzHOvbRD6h5FTRhT6a6cnIaaOXTx0CMiRS9ylvKqttdvdA+0oR6en1Ool4oZi1lsuWQ2SRGRLmCeY0FTS3G4n6Uk0gGHGTS4+DG5K3Xc9i+2SEmhmhkFJYkrSrsnqUdtRqrdTtWC3TfrYa89xmzzdtFksddGFpVWSC6QblZfuX3E6Vp+o1z626s6Fq9kCoE59aJL+Ra2UthbxvLNf/AJIVFRFLM+1l3dKdmrnar5KYugdYG7u0hy95Uy36Ey7ulFNDGKH+nv1s11SXBi2Nt8hJF9iYhN0cu33FkUkNXuoR56sID1x7PPf7rS4O66hjDe+OgkFSp/uWnXTTK7KBFyMPtzx3sfQKRHMD3f0nUS0jz+NjuTbX6LWWDpuHRgrCh6juOgRUyHF7bJCG4Rtl9bgPYyyEskFwh3RShOz7htb/AIkjTAYOA5PfZMtzA1tE7SGWOOrx2sqPslR61KKHP0/XWTb55co1a/RCSYS5cbO9j/8AEifdArq+TANAyqdwhJHcSKt5ap1a1a30i7Zsday8vAIUR3kEUsDBolLDdtoGo23cpIHaO8dNdBI55blsRLdWikelGAWgp6a1INNOBEvG5Gjs7W9FCSzOQO0gyMKaEKx//9k="
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon"><img
                                                                                                    src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                                                                    alt=""></div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div class="avatar-icon">
                                                                                                <i>+</i></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has an
                                                                                    info state</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot has a
                                                                                    dark state</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-block text-center card-footer">
                                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                                                            <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                                            View All Messages
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                      
                                       
                                      
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    <!-- <div class="ui-theme-settings">
        <button type="button" id="TooltipDemo" class="btn-open-options btn btn-outline-2x btn-outline-focus">
            <i class="fa fa-sync-alt icon-anim-pulse fa-2x"></i>
        </button>
        <div class="theme-settings__inner">
            <div class="scrollbar-container">
                <div class="theme-settings__options-wrapper">
                    <h3 class="themeoptions-heading">Layout Options
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="app-sidebar-full">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Full Sidebar
                                            </div>
                                            <div class="widget-subheading">Removes sidebar layout spacing.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="switch has-switch switch-container-class" data-class="body-subnav-pills">
                                                <div class="switch-animate switch-off">
                                                    <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Pills Page Navigation Style
                                            </div>
                                            <div class="widget-subheading">Changes the page sub navigation style to pills!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>
                            Sidebar Options
                        </div>
                        <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                            Restore Default
                        </button>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Choose Color Scheme
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="themeoptions-heading">
                        <div>Main Content Options</div>
                    </h3>
                    <div class="p-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5 class="pb-2">Color Schemes
                                </h5>
                                <div class="theme-settings-swatches">
                                    <div role="group" class="mt-2 btn-group">
                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-white">
                                            White Theme
                                        </button>
                                        <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class active" data-class="app-theme-gray">
                                            Gray Theme
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="app-drawer-wrapper">
    <div class="drawer-nav-btn">
        <button type="button" class="hamburger hamburger--elastic is-active">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
    </div>
    <div class="drawer-content-wrapper">
        <div class="scrollbar-container">
            <h3 class="drawer-heading">Servers Status</h3>
            <div class="drawer-section">
                <div class="row">
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 1</h4>
                            <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 2</h4>
                            <div class="circle-progress circle-progress-success-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 3</h4>
                            <div class="circle-progress circle-progress-danger-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-3"><h5 class="text-center card-title">Live Statistics</h5>
                    <div id="sparkline-carousel-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-warning fsize-3">43</div>
                                    <div class="widget-subheading pt-1">Packages</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-danger fsize-3">65</div>
                                    <div class="widget-subheading pt-1">Dropped</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-success fsize-3">18</div>
                                    <div class="widget-subheading pt-1">Invalid</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center mt-2 d-block">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
                        <button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
                    </div>
                </div>
            </div>
            <h3 class="drawer-heading">File Transfers</h3>
            <div class="drawer-section p-0">
                <div class="files-box">
                    <ul class="list-group list-group-flush">
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                        <i class="fa fa-file-alt"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">TPSReport.docx</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
                                        <i class="fa fa-file-archive"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Latest_photos.zip</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
                                        <i class="fa fa-file-pdf"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
                                        <i class="fa fa-file-excel"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Tasks in Progress</h3>
            <div class="drawer-section p-0">
                <div class="todo-box">
                    <ul class="todo-list-wrapper list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="todo-indicator bg-warning"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1266" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox1266">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Wash the car
                                            <div class="badge badge-danger ml-2">Rejected</div>
                                        </div>
                                        <div class="widget-subheading"><i>Written by Bob</i></div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-focus"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1666" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox1666">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Task with hover dropdown menu</div>
                                        <div class="widget-subheading">
                                            <div>By Johnny
                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <div class="d-inline-block dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                <i class="fa fa-ellipsis-h">
                                                </i>
                                            </button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-primary"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox4777" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox4777">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Badge on the right task</div>
                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="widget-content-right ml-3">
                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-info"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox2444" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox2444">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left"><img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt=""/></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Go grocery shopping</div>
                                        <div class="widget-subheading">A short description ...</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-success"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox3222" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox3222">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Development Task</div>
                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="badge badge-warning mr-2">69</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check">
                                            </i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Urgent Notifications</h3>
            <div class="drawer-section">
                <div class="notifications-box">
                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Build the production release
                                        <div class="badge badge-danger ml-2">NEW</div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Something not important
                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/1.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/2.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/3.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/4.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/5.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/6.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/7.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/8.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                <div class="avatar-icon"><i>+</i></div>
                                            </div>
                                        </div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon is-hidden"></span>
                                <div class="vertical-timeline-element-content is-hidden"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script></body>

</html>
