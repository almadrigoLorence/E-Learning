<style type="text/css">
    .btn-outline-warning{
        border-color: transparent;
        background-color: transparent;
        color: black;
    } 
</style>
<div class="app-main__outer">
        <div class="app-main__inner">
            <?php 
                @$exam_id = $_GET['exam_id'];
                if($exam_id != "")
                {
                   $selEx = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$exam_id' ")->fetch(PDO::FETCH_ASSOC);
                   $exam_course = $selEx['cou_id'];
                   $selExmne = $conn->query("SELECT * FROM examinee_tbl et  WHERE exmne_course='$exam_course' ORDER BY exmne_surname ASC ");
                   ?>
                   <div class="app-page-title bg-slick-carbon text-light">
                      <div class="page-title-wrapper" >
                            <div class="page-title-heading">
                                <div class="page-title-icon"></div>
                                  <div>Report: Exam result<br>
                                    <div class="text-muted small">Exam name : <?php echo $selEx['ex_title']; ?></div>
                                      <div class="page-title-subheading">
                                          <nav class="" aria-label="breadcrumb">
                                              <ol class="breadcrumb">
                                              <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                              <li class="breadcrumb-item"><a href="home.php?page=report-log" style="color: white">Report Table</a></li>
                                              <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d"><?php echo $selEx['ex_title']; ?></li>
                                              </ol>
                                          </nav> 
                                      </div>
                                  </div>
                            </div>
                             <div class="page-title-actions">
                                    <center><legend>Legend:</legend></center>
                                    <div class="row">
                                    <div class="col-md-6">
                                      <span class="badge badge-pill badge-warning"><i class="pe-7s-graph1"></i> Excellence</span><br>
                                      <span class="badge badge-pill badge-success text-dark"><i class="pe-7s-graph1"></i> Very Good</span> <br>
                                      <span class="badge badge-pill badge-info"><i class="pe-7s-graph1"></i> Good</span><br>
                                    </div>
                                    <div class="col-md-6">
                                      <span class="badge badge-pill" style="background-color: #eb2d3a; color: white"><i class="pe-7s-graph1"></i> Failed</span> <br>
                                      <span class="badge badge-pill" style="background-color: #E9ECEE; color: black"><i class="pe-7s-graph1"></i> No result</span><br>
                                    </div>
                                  
                                  </div> 
                             </div>
                      </div>
                   </div>
                   <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search" id="search_field">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                  <br>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="myTable">
                          <tbody>
                            <thead>
                                <tr>
                                    <th width="25%">Student Fullname</th>
                                    <th class="text-center">Score - Over</th>
                                    <th class="text-center">Passing Percentage</th>
                                </tr>
                            </thead>
                            <?php 
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <?php 
                                            $exmneId = $selExmneRow['exmne_id'];
                                            $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.exam_id='$exam_id' AND ea.exans_status='new' ORDER BY ea.exans_id DESC");
                                            $selAttempt = $conn->query("SELECT * FROM exam_attempt WHERE exmne_id='$exmneId' AND exam_id='$exam_id' ");
                                            $over = $selEx['ex_questlimit_display']  ;    
                                            @$score = $selScore->rowCount();
                                            @$ans = $score / $over * 100;
                                         ?>
                                       <tr style="<?php 
                                             if($selAttempt->rowCount() == 0)
                                             {
                                                echo "background-color: #E9ECEE;color:black";
                                             }
                                             else if($ans >= 90)
                                             {
                                                echo "background-color: yellow;";
                                             } 
                                             else if($ans >= 80){
                                                echo "background-color: green;color:white";
                                             }
                                             else if($ans >= 75){
                                                echo "background-color: #5ec5ff;color:black";
                                             }
                                             else
                                             {
                                                echo "background-color: #eb2d3a;color:white";
                                             }

                                             ?>"
                                        >
                                        <td>

                                          <?php echo $selExmneRow['exmne_surname']; ?>, <?php echo $selExmneRow['exmne_fullname']; ?> <?php echo $selExmneRow['exmne_middle']; ?>.</td>
                                        
                                        <td align="center">
                                        <?php 
                                          if($selAttempt->rowCount() == 0)
                                          {
                                            echo "No data";
                                          }
                                          else if($selScore->rowCount() > 0)
                                          {
                                            echo $totScore =  $selScore->rowCount();
                                            echo " / ";
                                            echo $over;
                                          }
                                          else
                                          {
                                            echo $totScore =  $selScore->rowCount();
                                            echo " / ";
                                            echo $over;
                                          }
                                         ?>
                                        </td> 
                                        <td align="center">
                                          <?php 
                                                if($selAttempt->rowCount() == 0)
                                                {
                                                  echo "Not answering yet";
                                                }
                                                else
                                                {
                                                    echo $ans; ?>%<?php
                                                }
                                           
                                          ?>
                                        </td>
                                    </tr>
                                <?php }
                             ?>                              
                          </tbody>
                        </table>
                    </div>

                   <?php
                }
                else
                { ?>
                <div class="app-page-title bg-slick-carbon text-light">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"></div>
                            <div>Report Log
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Exams report</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead id="myHead">
                            <tr>
                                <th class="text-left pl-4">Title</th>
                                <th class="text-left ">Course</th>
                                <th class="text-left ">Description</th>
                                <th class="text-center" width="8%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExam = $conn->query("SELECT * FROM exam_tbl ORDER BY ex_id DESC ");
                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['ex_title']; ?></td>
                                            <td>
                                                <?php 
                                                    $courseId =  $selExamRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $selExamRow['ex_description']; ?></td>
                                            <td class="text-center">
                                             <a href="?page=report-log&exam_id=<?php echo $selExamRow['ex_id']; ?>"  Class="mr-2 btn-icon btn-icon-only btn btn-outline-warning" style="color: black;"><i class="pe-7s-look"></i> View </a>
                                            </td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Data Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
              
            </div>       
                <?php }
             ?>           
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


<script>
  $('#search_field').on('keyup', function() {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $('#myTable').find('tr').each(function() {
    if (!($(this).find('td').text().search(patt) >= 0)) {
      $(this).not('.myHead').show();
    }
    if (($(this).find('td').text().search(patt) >= 0)) {
      $(this).show('No result');
    }


  });
});
</script>


