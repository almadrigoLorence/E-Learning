<title>Lessons</title>
<style type="text/css">
    .btn-outline-success{
        border-color: transparent;
        background-color: transparent;
        color: black;
    }
    .btn-outline-danger{
        border-color: transparent;
        background-color: transparent;
        color: black;
    }
    .btn-warning{
      background-color: transparent;
      border-color: transparent;
    }
</style>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-light">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                           <div class="page-title-icon" style="background-color: transparent;"><img src="assets/images/Cavite_State_University.png" height="50" width="50" style="margin-left: -4px"></div>
                            <div>Lesson Module section
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Lesson Modules Table</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>        
            <div class="col-md-15">
              <div class="float-right">
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalForLesson"><i class="fa fa-plus"></i> Add new</button>
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
                                $selLesson = $conn->query("SELECT * FROM lessons_tbl ORDER BY lesson_id DESC ");
                                if($selLesson->rowCount() > 0)
                                {
                                    while ($selLessRow = $selLesson->fetch(PDO::FETCH_ASSOC)) { ?>
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
                                             <a href="home.php?page=manage-lessons-topic&id=<?php echo $selLessRow['lesson_id']; ?>" type="button" style="color: black;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit btn-icon-wrapper"></i> Manage </a>
                                             <button type="button" id="deleteLesson" data-id='<?php echo $selLessRow['lesson_id']; ?>' style="color: black;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
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
