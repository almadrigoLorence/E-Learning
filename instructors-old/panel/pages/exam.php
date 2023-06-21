
 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);
    $selExamTimeLimit = $selExam['ex_time_limit'];
    $exDisplayLimit = $selExam['ex_questlimit_display'];
 ?>
 <style type="text/css">
    .form-group:hover{
        background-color: black;
        color: white;
        border-radius: 5px;
    }
    .page-title-wrapper{
      font-size: 18px;
    }
    .col-md-12{
      color: black;
      background-color: white;
    }
    .tableList{
      padding-left: 4px;
    }
</style>


<div class="app-main__inner">
    <div class="col-md-12">
         <div class="app-page-title" >
                <div class="page-title-wrapper">
                    <div class="page-title-heading ">
                        <div class="col-lg-15 pl-4"> 
                          Cavite State University Main Campus <span><img src="assets/images/Cavite_State_University.png " height="40" width="40"></span><br>
                            <center><strong><div class="page-title-subheading"><span><?php echo $selExam['ex_title']; ?></span></div></strong></center>
                            <div class="page-title-subheading">
                             <strong>Student Name: </strong><?php echo ($selExmneeData['exmne_fullname']); ?> <?php echo ($selExmneeData['exmne_middle']); ?>. <?php echo ($selExmneeData['exmne_surname']); ?>
                            </div>
                            <div class="page-title-subheading">
                              <strong>Course and Section:</strong>  <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']); ?>                             
                            </div>
                            <div class="page-title-subheading">
                             <strong>Date Uploaded: </strong><?php echo  $selExam['ex_created']?>
                            </div>
                            <div class="page-title-subheading">
                             <strong>Description: </strong> <?php echo $selExam['ex_description']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions mr-1" style="font-size: 20px;">
                        <form name="cd">
                          <input type="hidden" name="" id="timeExamLimit" value="<?php echo $selExamTimeLimit; ?>">
                          <label><strong>Remaining Time : </strong></label>
                          <input style="border:none;background-color: transparent;color:black;font-size: 25px; border-radius: 5px;" name="disp" type="text" class="clock" id="txt" value="00:00" size="2" readonly="true" /><ul></ul>
                          <span><img src="assets/images/Cavite_State_University.png" height="80px;"></span> <span> - </span> <span><img src="assets/images/cvsu.png" height="80px;"></span>
                      </form> 
                    </div> 

                 </div>
            </div>  
    </div>

   
    <ul>
    </ul>
    <div class="col-md-12 p-0 mb-4">
      <div class="card-header bg-premium-dark text-light">   
        Questions:
     </div>
    
        <form method="post" id="submitAnswerFrm">
            <input type="hidden" name="exam_id" id="exam_id" value="<?php echo $examId; ?>">
            <input type="hidden" name="examAction" id="examAction" >
        <table class="align-middle mb-0 table table-borderless table-hover pl-4" id="tableList">
        <?php 
            $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' ORDER BY rand() LIMIT $exDisplayLimit ");
            if($selQuest->rowCount() > 0)
            {
                $i = 1;
                while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                      <?php $questId = $selQuestRow['eqt_id']; ?>
                    <tr>
                        <td>
                            <p><b><?php echo $i++ ; ?> .) <?php echo $selQuestRow['exam_question']; ?></b></p>
                            <div class="col-md-4 float-left">
                              <div class="form-group pl-4 ">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch1']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch1']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch2']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch2']; ?>
                                </label>
                              </div>   
                            </div>
                            <div class="col-md-8 float-left">
                             <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch3']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch3']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch4']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch4']; ?>
                                </label>
                              </div>   
                            </div>
                             

                        </td>
                    </tr>

                <?php }
                ?>
                       <tr>
                             <td style="padding: 20px;">
                                 <button type="button" class="btn btn-xlg btn-danger p-3 pl-4 pr-4" id="resetExamFrm">Reset</button>
                                 <input name="submit" type="submit" value="Submit" class="btn btn-xlg btn-success p-3 pl-4 pr-4 float-right" id="submitAnswerFrmBtn">
                             </td>
                         </tr>

                <?php
            }
            else
            { ?>
                <b>No question at this moment</b>
            <?php }
         ?>   
              </table>
        </form>
    <br>
  </div>
</center>
    <center><button class="btn btn-danger" id="myBtn" style="margin-top: 100px;">Back to Top</button></center>

  
  <script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
  
  $('#myBtn').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
</script>

<script>
  function disable_f5(e)
{
  if ((e.which || e.keyCode) == 116)
  {
      e.preventDefault();
  }
}

$(document).ready(function(){
    $(document).bind("keydown", disable_f5);    
});
</script>

<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
