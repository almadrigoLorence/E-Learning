<title>Manage Termpapers</title>
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
                            <div>Term Papers
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Termpapers</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
            <div class="col-md-15">
            <div class="float-right">
              </div>
                    <div class="table-responsive"> 
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-center">Uploader</th>
                                <th class="text-center">Course</th>
                                <th class="text-center">Term title</th>
                                <th class="text-center">Grade</th>
                                <th class="text-center">Date</th> 
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $myid = $_SESSION['instructor']['instructor_id'];
                                $selAct = $conn->query("SELECT * FROM myterms LEFT JOIN course_tbl ON myterms.cou_id = course_tbl.cou_name AND course_tbl.cou_instructor = '$myid'");
                                if($selAct->rowCount() > 0)
                                {
                                    while ($selActRow = $selAct->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="text-left">
                                                <!-- <?php 
                                                    $studentid = $selActRow['exmne_idd'];
                                                    $student = $conn->query("SELECT * FROM examinee_tbl where exmne_id = $studentid")->fetch(PDO::FETCH_ASSOC);
                                                    echo  $student['exmne_stud_number'];?> - --> 
                                                    <?php echo $student['exmne_surname']." ".$student['exmne_fullname'].". ".$student['exmne_middle']; ?>
                                                </td>
                                            <td class="text-center"><?php echo $selActRow['cou_name']; ?></td>
                                            <td class="text-center"><?php echo $selActRow['term_title'];?></td>
                                            <td class="text-center"><?php if ($selActRow['grade'] == "") {                                   echo "Not graded";}else{echo $selActRow['grade']; } ?>
                                            </td>
                                            <td class="text-center"><?php echo $selActRow['date_uploaded'];?></td>
                                            <td class="text-center">
                                                <a onclick="viewTermpapers('<?php echo $selActRow['term_id']; ?>')" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit"></i> View</a>
                                                <a title="Input Grade" data-toggle="modal" data-target="#inputGrade" onclick="inputGrade('<?php echo $selActRow['term_id']; ?>')" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="fa fa-star"></i></a>                                          
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