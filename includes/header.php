
<?php 
  include("conn.php");
  include("query/selectData.php");
  include("query/countData.php");
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo strtoupper($selExmneeData['exmne_surname']); ?>, <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link href="./main.css" rel="stylesheet">
   <!--  <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet"> -->
</head>

<body id="body">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
       <div class="app-header header-shadow bg-light header-text-dark">
            <div class="app-header__logo">
                <div class="logo-src" style="width: 150px;  height: 30px; margin-left: 10px;"></div>
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
            </div>    <div class="app-header__content">
                <div class="app-header-left">
              
                    <ul class="header-menu nav">

                        <li class="btn-group nav-item">
                            <a href="home.php" class="nav-link">
                                <i class="nav-link-icon fa fa-home"></i>
                                Dashboard
                            </a>
                        </li>
               
                        <li class="btn-group nav-item">
                            <a href="home.php?page=myterms" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Term Papers
                            </a>
                        </li>
                    </ul>       
                 </div>
                <div class="app-header-right">
                    <div class="header-btn-md pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <i class="fa fa-bell" style="width: 40px; font-size: 20px; background-color: transparent; border-radius: 50%; height: 40px; padding: 11px 5px; margin-top: 2px; margin-right: 20px">
                                                <span id="topnotif" class="badge badge-danger" style="position: absolute; z-index: 1; font-size: 10px; font-family: Arial; left: 18px; width: 20px; height: 20px; padding: 4px; border-radius: 50%;"></span>
                                            </i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="width: 300px; max-height: 500px; overflow-y: auto;">
                                            <div class="card-body"><h5><div class="card-title">Notification <img src="assets/images/notif1.gif" height="20" width="27"></div></h5>
                                            <div class="scroll-area-lg ">
                                                <div class="scrollbar-container ps--active-y ps">
                                                <ul class="nav flex-column pl-0" id="notif" style="margin-left: -20px; margin-right: 10px;">
                                                        <?php
                                                            $cid = $_SESSION['examineeSession']['exmne_id'];
                                                            $selExam = $conn->query("SELECT * FROM notification_tbl where cou_id IN (SELECT exmne_course from examinee_tbl WHERE exmne_id = '$cid') ORDER BY id DESC LIMIT 5");
                                                            if($selExam->rowCount() > 0)
                                                            {
                                                        while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) {
                                                            if ($selExamRow['not_desc'] == 'New Exam') {
                                                                $location = "long-exam";
                                                            }else if($selExamRow['not_desc'] =='New Assignment'){
                                                                $location = "assignments";
                                                            }else if ($selExamRow['not_desc'] == 'New Quiz') {
                                                                $location = 'quiz';
                                                            }else if ($selExamRow['not_desc'] == 'New Lesson'){
                                                                $location = 'alllessons';
                                                            }
                                                        ?>
                                                        <li>
                                                            <a href="home.php?page=<?php echo $location;?>" class="nav-link cNa">
                                                               <div class="card-body" style="color: transparent;">
                                                                <div style="background-color: red"><?php 
                                                                $insID = $selExamRow['uploader']; 
                                                                $instructorRow = $conn->query("SELECT * FROM `instructors_tbl` where instructor_id in (SELECT cou_instructor from course_tbl WHERE cou_id IN (SELECT exmne_course from examinee_tbl WHERE exmne_id = '$cid'))")->fetch(PDO::FETCH_ASSOC);
                                                                echo $instructorRow['instructor_fullname']." ".$instructorRow['instructor_middle'].". ". $instructorRow['instructor_surname'];  
                                                                ?> uploaded <?php echo $selExamRow['not_desc'];?></div>
                                                               <small class="align-text-bottom">Date: <?php echo $selExamRow['date_upload']; ?></small>
                                                               </div>
                                                            </a>
                                                        </li>
                                                                <?php
                                                            }
                                                        }?>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <?php 
                                                     $id = $_SESSION['examineeSession']['exmne_id'];
                                                     $selProfile = $conn->query("SELECT * FROM examinee_img WHERE exmne_id='$id'")->fetch(PDO::FETCH_ASSOC);
                                                        if ($selProfile['img'] == '') {
                                                           ?>
                                                            <img src="assets/images/user22.png" width="40" height="40" class="rounded-circle" style="border: 1px solid #008083;">
                                                            <?php
                                                           }else{
                                                                ?>
                                                             <img src="assets/images/<?php echo $id.'/'.$selProfile['img'] ;?>" width="40" height="40" class="rounded-circle" style="border: 1px solid #008083;">
                                                                <?php
                                                            }
                                                    ?>
                                            <i class="fa fa-angle-down ml-2 opacity-10"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; width: 300px">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-slick-carbon text-white" >
                                                    <div class="menu-header-content text-center">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left pl-4">
                                                                    <div class="widget-heading text-center" style="color: white;"> <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?></div>
                                                                    <div class="widget-subheading opacity-5 text-center" style="color: white;"><a href="home.php?page=view-profile" style="color: white">See your Profile</a></div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <img src="assets/images/<?php echo $id.'/'.$selProfile['img'] ;?>" width="40" height="40" class="rounded-circle" style="border: 1px solid #008083; margin-right: 15px">
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
                                                        <!-- <li class="nav-item">
                                                            <a href="#" class="nav-link" data-toggle="modal" data-target="#displayPicture" class="nav-link cNav">Update Profile Picture
                                                            </a>
                                                        </li> -->
                                                        <li class="nav-item">
                                                            <a href="home.php?page=edit-profile" class="nav-link">Profile Settings</a>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                            <a href="home.php?page=edit-profile" class="nav-link">Edit Profile</a>
                                                        </li> -->
                                                        <!-- <li class="nav-item">
                                                            <a href="home.php?page=changepass" class="nav-link">Change password</a>
                                                        </li> -->
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link btn-open-options">Display & Accessibility</a>
                                                        </li>
                                                        <li class="nav-item-header nav-item text-center">Shortcut Menu</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="home.php?page=myfiles" class="nav-link">Uploaded Files</a>
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
                                                        <a href="home.php?page=announcements-index"><button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success" style="height: 70px; border-color: transparent; color: black;">
                                                            <i class="fa fa-bell icon-gradient bg-aqua-gradient btn-icon-wrapper bm-2"></i> Announcements
                                                        </button></a>
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
                                                    <a href="query/logoutExe.php" type="submit" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info" style="margin-top: -10px;">
                                    <div class="widget-heading">
                                        <?php echo strtoupper($selExmneeData['exmne_surname']); ?>, <?php  echo strtoupper($selExmneeData['exmne_fullname']);?> <?php  echo strtoupper($selExmneeData['exmne_middle']);?>.
                                    </div>
                                    <div class="widget-subheading text-center">
                                        <?php echo strtoupper($selExmneeData['exmne_stud_number']);?>
                                    </div>
                                </div>
                            </div>
                    </div>
             </div>
        </div>
    </div>
</div>  

