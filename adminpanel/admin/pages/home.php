
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="shorcut icon" type="image/png" href="img/favicon2.png">
    <link type="text/css" rel="stylesheet" href="media/layout.css" />
     
</head>
<style type="text/css">
    .btn-warning {
        background-color: white;
        border-shadow: 2px 2px red;
    }
    .btn-focus {
        background-color: white;
        color: black;
    }
    .btn-danger {
        background-color: white;
        color: black;
    }
</style>

<div class="app-main__outer">
    <div class="app-main__inner">
    <div id="refreshData">
       <!--      <div class="app-page-title bg-premium-dark text-light">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon" style="background-color: white; color: black;">
                            <i class="fa fa-users-cog fa-1x">
                            </i>
                        </div>
                        <div >
                            <strong><div class="page-title-subheading">College of Engineering and Information Technology (CEIT) Science, Technology and Society or STS (GNED06 Subject) E-Learning System based Administrator Panel
                            </div></strong>
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                        <div class="d-inline-block dropdown">
                           <img src="assets/images/icon.png" height="30%" width="50%" style="border-radius: 5px;">
                           
                        </div>
                    </div>   
                 </div>
            </div>        -->
<!--             <div class="float-right"> 
                <span><i class="fa fa-info-circle bg-sunny-morning"></i> Overview</span>
            </div> -->
            <h5> Dashboard</h5>  
            <div class="row">
                <div class="col-md-3 col-xl-4">
                    <div class="card mb-3 widget-content" style="background: linear-gradient(to right, #FFFEFF 15%,#FFFEFF 0%,#000000 0%,#FFFEFF 0%,#FFFEFF 100%);">
                        <div class="widget-content-wrapper text-black">
                            <div class="widget-content-left" style="width: 100%;"> 
                                <strong><div class="widget-heading text-dark">Account Management</div></strong>
                                <br>
                                <a href="" class="btn btn-block btn-warning cbtn cbtn-66C3B1" data-toggle="modal" data-target="#modalForAddInstructor">
                                    <div style="justify-content: space-between; display: flex; position: relative;">
                                        <div style="position: absolute;padding: 4px 0px 0px 1px;">
                                            <i style="color: white;" class="fa fa-user-plus"></i>
                                        </div>
                                        <div style="position: absolute;padding: 4px 0px 0px 66px;">
                                            <span>Add Instructor</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="btn btn-block btn-warning cbtn cbtn-66C3B1" data-toggle="modal" data-target="#modalForAddExaminee">
                                    <div style="justify-content: space-between; display: flex; position: relative;">
                                        <div style="position: absolute;padding: 4px 0px 0px 1px;">
                                            <i style="color: white;" class="fa fa-users"></i>
                                        </div>
                                        <div style="position: absolute;padding: 4px 0px 0px 66px;">
                                            <span>Add New Student</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="widget-subheading" style="color:black;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper text-dark">
                            <div class="widget-content-left" style="width: 100%;">
                                <strong>
                                    <div style="display: flex; justify-content: space-between;">
                                        <div class="widget-heading">Course/Section Management</div>
                                        <div class="">
                                            <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                        </div>
                                    </div>
                                </strong>
                                <br>
                                <div class="widget-subheading" style="color:transparent;"></div>
                                <a href="home.php?page=manage-course" class="btn btn-block btn-warning cbtn cbtn-66C3B1">
                                    <div style="justify-content: space-between; display: flex; position: relative;">
                                        <div style="position: absolute;padding: 4px 0px 0px 1px;">
                                            <i style="color: white;" class="fa fa-graduation-cap"></i>
                                        </div>
                                        <div style="position: absolute;padding: 4px 0px 0px 66px;">
                                            <span>Manage Courses</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="btn btn-block btn-warning cbtn cbtn-66C3B1" data-toggle="modal" data-target="#modalForAddCourse">
                                    <div style="justify-content: space-between; display: flex; position: relative;">
                                        <div style="position: absolute;padding: 4px 0px 0px 1px;">
                                            <i style="color: white;" class="fa fa-plus"></i>
                                        </div>
                                        <div style="position: absolute;padding: 4px 0px 0px 66px;">
                                            <span>Add Course</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left" style="width: 100%;">
                                <strong>
                                    
                                   <div style="display: flex; justify-content: space-between;">
                                        <div class="widget-heading">Total Students</div>
                                        <div class="">
                                            <span><?php echo $totalCourse = $selStud['totStud']; ?></span>
                                        </div>
                                    </div>
                                </strong>
                                <br>
                                 <div class="widget-subheading" style="color:transparent;"></div>
                                <a href="home.php?page=manage-students" class="btn btn-block btn-warning cbtn cbtn-66C3B1">
                                    <div style="justify-content: space-between; display: flex; position: relative;">
                                        <div style="position: absolute;padding: 4px 0px 0px 1px;">
                                            <i style="color: white;" class="fa fa-users"></i>
                                        </div>
                                        <div style="position: absolute;padding: 4px 0px 0px 66px;">
                                            <span>Student Accounts</span>
                                        </div>
                                    </div>
                                </a> 
                                <a href="home.php?page=manage-students" class="btn btn-block btn-warning cbtn cbtn-66C3B1" style="visibility: hidden;">
                                    <div style="justify-content: space-between; display: flex; position: relative;">
                                        <div style="position: absolute;padding: 4px 0px 0px 1px;">
                                            <i style="color: white;" class="fa fa-users"></i>
                                        </div>
                                        <div style="position: absolute;padding: 4px 0px 0px 66px;">
                                            <span>Student Accounts</span>
                                        </div>
                                    </div>
                                </a> 
                            </div>                     
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="background-color: transparent; border-color: black; border-radius: 5px; padding-bottom: 100px;">
                            <div class="card" style="background-color: white;">
                                    <div class="card-header font-size-lg text-capitalize font-weight-normal">
                                            <span><img src="assets/images/notif3.gif" width="25" height="20"> Posts and Announcements Section</span>
                                            <div class="btn-actions-pane-right actions-icon-btn">
                                                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modalForAddAnnouncement" style="border-color: transparent;"><i class="fa fa-bullhorn"></i> Post</a>
                                            </div>
                                        </div>
                                
                                        <div class="table-responsive" style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                                            <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                                                <thead>
                                                <tr>
                                                    <th class="text-center" width="10%">Announcement</th>
                                                    <th class="text-center" width="20%">Date Posted</th>
                                        <!--             <th class="text-center" width="20%">Posted to</th> -->
                                                    <th class="text-center" width="20%">Announcement Date Start &nbsp;·&nbsp; End</th>
                                                    <th class="text-center" width="5%">Modified by</th>
                                                    <th class="text-center" width="10%">Action</th>
                                                </tr>
                                                </thead>
                                                 <tbody>
                                                    <?php
                                                    $query = $conn->query("SELECT * FROM announcement_tbl WHERE 1 ORDER BY ann_id DESC");
                                                    while($row = $query -> fetch(PDO::FETCH_OBJ)){
                                                    ?>
                                                    <tr>
                                                        <td><a href="home.php?page=announcement-view&id=<?php echo $row->ann_id; ?>" style="color: green"><?php echo $row->ann_title;?></a></td>
                                                        <td align="center"><div class="text-muted small pl-4"><?php echo $row->date_modified; ?> &nbsp;·&nbsp;</div></td>
                                               <!--          <td align="center"> -->
                                                        <td align="center"><div class="text-muted small"><?php echo $row->ann_start ?> &nbsp;·&nbsp; <?php echo $row->ann_end;?></div></td>
                                                        <td align="center"><div class="text-muted small">
                                                            <?php 
                                                              $authorid = $row->modified_by;
                                                              if ($authorid == "Administrator") {
                                                              echo "Administrator";
                                                              }else{
                                                              $authordetails = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id = $authorid ")->fetch(PDO::FETCH_ASSOC);
                                                              echo $authordetails['instructor_fullname']." ".$authordetails['instructor_middle'].". ".$authordetails['instructor_surname'];
                                                              }
                                                              ?>
                                                        </div></td>
                                                        <td align="center"><a href="" class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-eye"></i> Preview</a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>          
                                                <center> <a class="btn-icon btn-icon-only btn btn-link" href="home.php?page=announcement&id">View announcements</a></center>               
                                        </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                        <div class="card-header">
                                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Course and Sections
                                            </div>                                        </div>
                                        <div class="table-responsive"  style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                                            <br>
                                            <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList" style="background-color: transparent;">
                                                <thead>
                                                <tr>
                                                    <th class="text-left" width="50%">Course and Section</th>
                                                    <th class="text-left">Assigned Instructor</th>
                                               <!--      <th class="text-center">Students Limit</th> -->
                                                   <!--  <th class="text-center" width="30%">Option</th> -->
                                                </tr>
                                                </thead>
                                                <tbody>
                                                  <?php 
                                                    $selCourse = $conn->query("SELECT course_tbl.*,instructors_tbl.instructor_fullname, instructors_tbl.instructor_surname, instructors_tbl.instructor_middle FROM course_tbl LEFT JOIN instructors_tbl ON course_tbl.cou_instructor = instructors_tbl.instructor_id ORDER BY cou_id DESC ");
                                                    if($selCourse->rowCount() > 0)
                                                    {
                                                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { 
                                                            $cid = $selCourseRow['cou_id'];
                                                            $crow = $selCourseRow['cou_name'];
                                                            ?>
                                                            <tr>
                                                                <td class="pl-4">
                                                                    <i class="pe-7s-study"></i> <?php echo $selCourseRow['cou_name']; ?>
                                                                </td>
                                                                <td class="pl-4">
                                                                    <?php echo $selCourseRow['instructor_surname']; ?>, <?php echo $selCourseRow['instructor_fullname']; ?> <?php echo $selCourseRow['instructor_middle']; ?>. 
                                                                </td>
                                                            </tr>
                                                        <?php }
                                                    }
                                                   ?>
                                                </tbody>
                                            </table>
                                                <a href="home.php?page=manage-course">
                                                    <center> <span class="mr-2 opacity-7"><i class="fa fa-cog fa-spin"></i>
                                                    </span>
                                                    <span class="mr-1">Manage</span></center>
                                                </a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                                    <div class="main-card mb-3 card">
                                                    <div class="card-header">
                                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><span class="badge badge-pill badge-success" style="color: black">STS</span> Instructors
                                                        </div>
                                                        <div class="btn-actions-pane-right">
                                                            <div class="btn-group dropdown">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                                                                    Actions Menu <span class="pl-2 align-middle opacity-7">
                                                                    <i class="fa fa-angle-right"></i>
                                                                </span></button>
                                                                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                        <a href="home.php?page=manage-instructor" type="button" tabindex="0" class="dropdown-item">
                                                                            <span><i class="fa fa-table"></i> View Table <i class="badge badge-pill badge-warning"><?php echo $totalCourse = $selStud['totStud']; ?> <span class="text-muted small text-white">Data</span></i></span>
                                                                        </a>
                                                                        
                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                        
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive"  style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                                                        <br>
                                                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-left" width="30%">Name</th>
                                                                    <th class="text-center">Sex</th>
                                                                    <th class="text-center" width="30%">Course and Section Assigned</th>
                                                                    <th class="text-center">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    $selInstrctr = $conn->query("SELECT * FROM instructors_tbl ORDER BY instructor_surname ASC ");
                                                                    if($selInstrctr->rowCount() > 0)
                                                                    {
                                                                while ($selInstrctrRow = $selInstrctr->fetch(PDO::FETCH_ASSOC)) { ?>
                                                                <tr>
                                                                    <td class="text-left"><?php echo $selInstrctrRow['instructor_surname']; ?>, <?php echo $selInstrctrRow['instructor_fullname']; ?> <?php echo $selInstrctrRow['instructor_middle']; ?>.</td>
                                                                    <td class="text-center"><?php echo $selInstrctrRow['instructor_gender']; ?></td>
                                                                    <td class="text-center">
                                                                        <?php 
                                                                             $assignedCourse = $selInstrctrRow['cou_id'];
                                                                             $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$assignedCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                                             echo $selCourse['cou_name'];
                                                                         ?>
                                                                    <td class="text-center">
                                                                        <div class="badge badge-pill badge-success"><?php echo $selInstrctrRow['instructor_status'];?></div>
                                                                    </td>
                                                                    
                                                                </tr>
                                                                <?php }
                                                            }
                                                            
                                                           ?>
                                                              
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <button class="btn btn-lg btn-success start-tour">Start Tour</button>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="jumbotron" data-step="1" data-intro="This is a tooltip!">
                                                    <h1 class="display-4">Hello, world!</h1>
                                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                                                        attention to featured content or information.</p>
                                                    <hr class="my-4">
                                                    <p>It uses utility classes for typography and spacing to space content out within the larger
                                                        container.</p>
                                                    <p class="lead">
                                                        <a class="btn btn-primary btn-lg" data-step="2" data-intro="Ok, wasn't that fun?" data-position="right" data-scrollto="tooltip" href="javascript:void(0);" role="button">Learn
                                                            more
                                                        </a>
                                                    </p>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                                                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                                                    quam felis, ultricies nec,
                                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                                    vel, aliquet nec, vulputate eget, arcu.</p>
                                
                                                <p data-step="3" data-intro="More features, more fun." data-scrollto="tooltip" data-position="left" class="">In
                                                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                                    pretium. Integer tincidunt.
                                                    Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                                    porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                                                    feugiat a, tellus. Phasellus
                                                    viverra nulla ut metus varius laoreet.</p>
                                
                                                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies
                                                    nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                                                    libero, sit amet adipiscing
                                                    sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec
                                                    odio et ante tincidunt tempus.</p>
                                
                                                <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros
                                                    faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed
                                                    consequat, leo eget bibendum
                                                    sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
                                                    Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.</p>
                                
                                                <p>Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum
                                                    primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer
                                                    lacinia. Nam pretium turpis
                                                    et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam
                                                    ultrices mauris.</p>
                                
                                                <p>Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus
                                                    ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui.
                                                    Aenean ut eros et nisl
                                                    sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed
                                                    lectus. Donec mollis hendrerit risus.</p>
                                                <div class="jumbotron jumbotron-fluid" data-step="4" data-intro="This is the end of the tour!" data-position="top">
                                                    <div class="container">
                                                        <h1 class="display-4">Fluid jumbotron</h1>
                                                        <p class="lead" id="elem-tour-5">This is a modified jumbotron that occupies the entire
                                                            horizontal space of its parent.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>  
                                 </div>
            
         
<script>
$(document).ready(function(){
// $('[data-toggle="tooltip"]').tooltip();
$('.data-table').dataTable({
    "iDisplayLength": 10,
    "aLengthMenu": [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]
    ],
    responsive: true,
    "order": []
});
});
</script> 
