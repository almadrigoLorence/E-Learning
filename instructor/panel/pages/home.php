
<!DOCTYPE html>
<html>
<head>
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
       <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                    <div class="page-title-heading">
                        <div><img src="assets/images/cvsu.png" width="80" height="80" class="rounded-circle" style="border-radius: 50%;"></div>
                         <ul></ul>
                            <div>
                                    <div class="page-title-subheading"><strong>Instructor Panel</strong> </div>
                            </div>    
                    </div>  
               </div>
            </div>   
            <h5> Dashboard</h5>  
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
                                                    $query = $conn->query("SELECT * FROM announcement_tbl WHERE course_id = '$couid' ORDER BY ann_id desc");
                                                    while($row = $query -> fetch(PDO::FETCH_OBJ)){
                                                    ?>
                                                    <tr>
                                                        <td><a href="home.php?page=announcement&id=<?php echo $row->ann_id; ?>" style="color: green"><?php echo $row->ann_title;?></a></td>
                                                        <td align="center"><div class="text-muted small pl-4"><?php echo $row->date_modified; ?> &nbsp;·&nbsp;</div></td>
                                               <!--          <td align="center"> -->
                                                        <td align="center"><div class="text-muted small"><?php echo $row->ann_start ?> &nbsp;·&nbsp; <?php echo $row->ann_end;?></div></td>
                                                        <td align="center">
                                                            <div class="text-muted small">
                                                                <?php 
                                                                $modifier = $row->modified_by; 
                                                                if ($modifier == "Administrator") {
                                                                    echo "Administrator";
                                                                }else{
                                                                    echo $_SESSION['instructor']['instructor_name'];
                                                                }
                                                                ?>
                                                            </div>
                                                        </td>
                                                        <td align="center"><a href="home.php?page=announcement&id=<?php echo $row->ann_id; ?>" class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-eye"></i> Preview</a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>          
                                                <center> <a class="btn-icon btn-icon-only btn btn-link" href="home.php?page=announcement&id">View announcements</a></center>               
                                        </div>
                                </div>
                                <br>
                                <div class="card">
                                    <div class="card-header font-size-lg text-capitalize font-weight-normal">
                                            <span>Lesson Module</span>
                                            <div class="btn-actions-pane-right actions-icon-btn">
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#modalForLesson" style="border-color: transparent;"><i class="fa fa-plus"></i> New Lesson</button>
                                            </div>
                                        </div>
                                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                                    <table class="data-table align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                        <thead>
                                        <tr>
                                            <th class="text-left">Title</th>
                                            <th class="text-center" width="10%">Course Sent</th>
                                            <th class="text-center">Lesson Description</th>
                          
                                            <th class="text-center" width="15%">Date Uploaded</th> 
                                            <th class="text-center" width="15%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $query = $conn->query("SELECT * FROM lessons_tbl WHERE cou_id IN (SELECT cou_id from course_tbl Where cou_instructor = $id) ORDER BY lesson_id DESc ");
                                            if($query->rowCount() > 0)
                                            {
                                                while ($selLessRow = $query->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <tr>
                                                        <td class="pl-4"><i class="pe-7s-notebook"></i> <?php echo $selLessRow['lesson_title']; ?></td>
                                                        <td class="text-center"><i class="pe-7s-study"></i> 
                                                            <?php 
                                                                $courseId =  $selLessRow['cou_id']; 
                                                                $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                                    echo $selCourseRow['cou_name'];
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><?php echo $selLessRow['lesson_desc']; ?></td>
                                             
                                                        <td class="text-center"><i class="pe-7s-date"></i> <?php echo $selLessRow['date_uploaded'];?></td>
                                                        <td class="text-center">
                                                         <a href="home.php?page=manage-lessons-topic&id=<?php echo $selLessRow['lesson_id']; ?>" type="button" style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit btn-icon-wrapper"></i> Manage </a>
                                                         <button type="button" id="deleteLesson" data-id='<?php echo $selLessRow['lesson_id']; ?>' style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
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