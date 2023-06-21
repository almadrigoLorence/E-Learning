<!doctype html>
<html lang="en">
<?php 
  include("../../conn.php");
  include("query/countData.php");
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
     
    <!-- MAIN CSS NIYA -->
    <link href="./main.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/facebox.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/iziModal.min.css"/>
    <script type="text/javascript" src="js/iziModal.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="css/Chosen/chosen.min.css">
    <script src="js/chosen.jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="ChosenSelect/chosen.css">
    <link rel="stylesheet" type="text/css" href="ChosenSelect/chosen.min.css">
    <script src="ChosenSelect/chosen.jquery.js"></script>
    <script src="ChosenSelect/chosen.jquery.min.js"></script>
    <!-- DATATABLE STYLE EXPORT START -->
    <link href='pages/DataTables/datatables.min.css' rel='stylesheet' type='text/css'>
    <script src="pages/DataTables/datatables.min.js"></script>
    <script src="waitMe/waitMe.js"></script>
    <link rel="stylesheet" href="waitMe/waitMe.css">
    <link href="css/mycss.css" rel="stylesheet">
</head>

<body id="body">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-light header-text-dark">
            <div class="app-header__logo">
               <div class="#" ><img src="assets/images/logo-inverse.png" style="width: 150px;  height: 30px; margin-left: 10px;"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="50" class="rounded-circle" src="assets/images/cvsu.png" alt="" style="margin-top: 6px;">
                                            <i class="fa fa-angle-down ml-2 opacity-10"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; width: 300px">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-premium-dark">
                                                    <div class="menu-header-content text-center">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper" style="padding-top: 15px; margin-top: -15px; margin-bottom: 15px; padding-bottom: 15px;">
                                                                <div class="widget-content-left pl-4">
                                                                    <div class="widget-heading text-center" style="color: white"> ADMIN</div>
                                                                    <div class="widget-subheading opacity-5 text-center" style="color: white;">A short profile description</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a href="query/logoutExe.php" type="submit" class="btn-pill btn-shadow btn-shine btn btn-focus" id="logOutBtn">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container">
                                                    <ul class="nav flex-column">
                                                        
                                                        <li class="nav-item-header nav-item text-center">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="home.php?page=view-profile" class="nav-link">Profile Settings</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item text-center">Shortcut Menu</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="home.php?page=change-pass" class="nav-link">Change Password</a>
                                                        </li>
                                                    </ul>
                                                <div class="ps__rail-x" ><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu pl-2" style="margin-top: 10px;">
                                                <div class="no-gutters row">
                                                    <div class="col-md-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success" style="height: 70px; border-color: transparent; color: black;">
                                                            <i class="fa fa-envelope icon-gradient bg-aqua-gradient btn-icon-wrapper bm-2"></i> Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success" style="height: 70px; border-color: transparent; color: black;" data-toggle="modal" data-target="#feedbacksModal">
                                                            <i class="fa fa-comments icon-gradient bg-navy-gradient btn-icon-wrapper bm-2"></i> Send Feedback
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm"> Announcements </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info" style="margin-top: -10px;">
                                    <div class="widget-heading">
                                       <center>Lorence</center>
                                    </div>
                                    <div class="widget-subheading text-center">
                                       Administrator
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                    </div>
             </div>
        </div>
            </div>
        </div>  