<title>Manage Quizzes</title>
<style type="text/css">
    .btn-success{
        border-color: transparent;
        background-color: transparent;
        color: black;
    }
    .btn-warning{
        border-color: transparent;
        background-color: transparent;
        color: black;
    }
   
</style>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-light">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                           <div class="page-title-icon" style="background-color: transparent;"><img src="assets/images/Cavite_State_University.png" height="50" width="50" style="margin-left: -4px"></div>
                            <div>Quizzes
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Manage quizzes</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
           
            <div class="col-md-15">
                <div class="float-right">
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalForQuiz  "><i class="fa fa-plus"></i> Add Quiz</button>
              </div>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-center" width="10%">Quiz</th>
                                <th class="text-center" width="10%">Course</th>
                                <th class="text-center">Description</th>
                                <th class="text-center" width="10%">Time Limit</th>
                                <th class="text-center" width="10%">No. of items</th>
                                <th class="text-center" width="15%">Date</th>
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selQuiz = $conn->query("SELECT * FROM quiz_tbl ORDER BY quiz_id DESC ");
                                if($selQuiz->rowCount() > 0)
                                {
                                    while ($selQuizRow = $selQuiz->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4">Quiz #<?php echo $selQuizRow['quiz_title']; ?></td>
                                            <td align="center"><i class="pe-7s-study"></i>
                                                <?php 
                                                    $courseId =  $selQuizRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td align="center"><?php echo $selQuizRow['quiz_desc']; ?></td>
                                            <td align="center"><i class="fa fa-clock"></i> <?php echo $selQuizRow['quiz_time_limit']; ?> minutes</td>
                                            <td align="center"><?php echo $selQuizRow['quiz_questlimit_display']; ?></td>
                                            <td align="center"><?php echo $selQuizRow['quiz_created'];?></td>
                                            <td align="center">
                                             <a href="manage-quiz.php?id=<?php echo $selQuizRow['quiz_id']; ?>" type="button" style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit"></i> Manage</a>
                                             <button type="button" id="deleteQuiz" data-id='<?php echo $selQuizRow['quiz_id']; ?>' style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                                
                               ?>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="float-right">
                    <button class="btn btn-success"><i class="pe-7s-print"></i> Print table</button>
            </div>       
        </div>
<script>
                
$(document).ready(function(){
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