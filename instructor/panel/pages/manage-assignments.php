<?php
if (isset($_SESSION['course']['cou_id']) && isset($_SESSION['course']['cou_name'])) {
     $course_id = $_SESSION['course']['cou_id'];
     $course_name = $_SESSION['course']['cou_name'];
}

?>
<title>Manage Assignments</title>
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
            <div class="app-page-title bg-slick-carbon text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><img src="assets/images/exam1.png" height="40" width="40"></div>
                            <div>Assignment Section
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Manage assignments</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
            <div class="col-md-15">
                <div class="float-right">
                <a class="btn btn-warning" href="home.php?page=add-assignment"><i class="fa fa-plus"></i> Add new</a>
              </div>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-center">Assignment</th>
                                <th class="text-center">Course</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Date</th> 
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                              if (!empty($course_id)) {
                                 $selAss  = $conn->query("SELECT * FROM assignment_tbl WHERE cou_id ='$course_id'");
                              }else{
                                $selAss = $conn->query("SELECT * FROM assignment_tbl WHERE cou_id IN (SELECT cou_id from course_tbl Where cou_instructor = $id) ORDER BY ass_id DESc ");
                              }

                                if($selAss->rowCount() > 0)
                                {
                                    while ($selAssRow = $selAss->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><i class="pe-7s-bookmarks"></i> <?php echo $selAssRow['ass_title']; ?></td>
                                            <td class="text-center"><i class="pe-7s-study"></i>
                                                <?php 
                                                    $courseId =  $selAssRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                 $lenthOfTxt = strlen ($selAssRow['ass_desc']);
                                                 if($lenthOfTxt >= 150)
                                                 { ?>
                                                 <?php echo substr($selAssRow['ass_desc'], 0, 150);?>.....
                                                 <?php }
                                                 else
                                                 {
                                                 echo $selAssRow['ass_desc'];
                                                 }
                                                ?>    
                                            </td>
                                            <td class="text-center"><?php echo $selAssRow['date_uploaded'];?></td>
                                            <td class="text-center">
                                            <form method="POST" action="home.php?page=edit-assignment">
                                                <input type="hidden" name="ass_id" value="<?php echo $selAssRow['ass_id'];?>">
                                                <button type="submit" style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit"></i>Manage</button>
                                             </form>  
                                             <button type="button" id="deleteAssignment" data-id='<?php echo $selAssRow['ass_id']; ?>' style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
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