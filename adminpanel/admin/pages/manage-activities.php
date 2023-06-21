<title>Manage Activities</title>
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
                            <div>Activities
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Activities List</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
           
            <div class="col-md-15">
                <div class="float-right">
                <a href="home.php?page=add-activity"><button class="btn btn-warning"><i class="fa fa-plus"></i> Add Activity</button></a>
              </div>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-center">Activity title</th>
                                <th class="text-center" width="15%">Course</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Date</th> 
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selAct = $conn->query("SELECT * FROM activities_tbl ORDER BY act_id DESC ");
                                if($selAct->rowCount() > 0)
                                {
                                    while ($selActRow = $selAct->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selActRow['act_title']; ?></td>
                                            <td class="text-center"><i class="pe-7s-study"></i>
                                                <?php 
                                                    $courseId =  $selActRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                 $lenthOfTxt = strlen ($selActRow['act_desc']);
                                                 if($lenthOfTxt >= 150)
                                                 { ?>
                                                 <?php echo substr($selActRow['act_desc'], 0, 150);?>.....
                                                 <?php }
                                                 else
                                                 {
                                                 echo $selActRow['act_desc'];
                                                 }
                                                ?>    
                                            </td>
                                            <td class="text-center"><?php echo $selActRow['date_uploaded'];?></td>
                                            <td class="text-center">
                                             <form method="POST" action="home.php?page=edit-activities">
                                                <input type="hidden" name="act_id" value="<?php echo $selActRow['act_id'];?>">
                                                <button type="submit" style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit"></i> Manage</button>
                                                <button type="button" id="deleteActivity" data-id='<?php echo $selActRow['act_id']; ?>' style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
                                             </form>   
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
<script>if(window.history.replaceState){window.history.replaceState(null,null,window.location.href);}</script>            