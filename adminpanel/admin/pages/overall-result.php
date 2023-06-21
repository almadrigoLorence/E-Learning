<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-light">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                           <div class="page-title-icon" style="background-color: transparent;"><img src="assets/images/Cavite_State_University.png" height="50" width="50" style="margin-left: -4px"></div>
                            <div>Exams result log
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Long exam Table</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div> 
            <div class="row"> 
            <h5>Exams</h5>      
            <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th>Student</th>
                                <th class="text-center">Long Exam Information</th>
                                <!-- <th class="text-center">Course & Section</th> -->
                                <th class="text-center">Score / Over</th>
                                <th class="text-center">Passing Percentage</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExmne = $conn->query("SELECT * FROM examinee_tbl et INNER JOIN exam_attempt ea ON et.exmne_id = ea.exmne_id ORDER BY ea.examat_id DESC ");
                                if($selExmne->rowCount() > 0)
                                {
                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                           <td><?php echo $selExmneRow['exmne_surname']; ?>, <?php echo $selExmneRow['exmne_fullname']; ?> <?php echo $selExmneRow['exmne_middle']; ?>.</td>
                                           <!-- <td><?php echo $selExmneRow['exmne_course'];?> -->
                                           <td align="center">
                                             <?php 
                                                $eid = $selExmneRow['exmne_id'];
                                                $selQzName = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id=ea.exam_id WHERE  ea.exmne_id='$eid' ")->fetch(PDO::FETCH_ASSOC);
                                                $exam_id = $selQzName['ex_id'];
                                                echo $selQzName['ex_title'];
                                              ?>
                                           </td>
                                           <td align="center">
                                                    <?php 
                                                    $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$eid' AND ea.exam_id='$exam_id' AND ea.exans_status='new' ");
                                                      ?>
                                                <span>
                                                    <?php echo $selScore->rowCount(); ?>
                                                    <?php 
                                                        $over  = $selQzName['ex_questlimit_display'];
                                                     ?>
                                                </span> / <?php echo $over; ?>
                                                
                                           </td>
                                           <td><center>
                                              <?php 
                                                    $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$eid' AND ea.exam_id='$exam_id' AND ea.exans_status='new' ");
                                                ?>
                                                <span>
                                                    <?php 
                                                        $score = $selScore->rowCount();
                                                        $ans = $score / $over * 100;
                                                        echo "$ans";
                                                        echo "%";
                                                     ?>
                                                </span> 
                                              </center>
                                           </td>
                                        </tr>
                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="2">
                                        <h3 class="p-3">No Data Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
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
