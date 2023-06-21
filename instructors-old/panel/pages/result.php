<?php include("includes/sidebar.php"); ?>
 <style type="text/css">
     #myBtn{
        margin-bottom: 50px;
     }
 </style>

 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div id="refreshData">
        <div class="app-page-title bg-premium-dark text-light">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                                        <img src="assets/images/exam.png" height="50" width="40">
                                    </div>
                                    <div>
                                        Exam Title: <?php echo $selExam['ex_title']; ?>
                          <div class="page-title-subheading">
                           <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="breadcrumb-item"><a href="home.php?page=long-exam-history" style="color: white;">History</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page">Result</li>
                                                    </ol>
                           </nav>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <strong>Name:</strong> <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?><br>
            <strong>Title:</strong> <?php echo $selExam['ex_title']; ?><br>
            <strong>Type:</strong> Multiple Choices<br>
            <strong>Description:</strong> <?php echo $selExam['ex_description']; ?><br>
            <strong>Exam date uploaded:</strong> <?php echo $selExam['ex_created']; ?><br>
            <strong>Number of Items:</strong> <span style="color: red;"><?php echo $selExam['ex_questlimit_display']; ?></span><br>
            <strong>Time Limit:</strong> <i style="color: red"><?php echo $selExam['ex_time_limit']; ?> minutes</i> <br>
            <hr>
        </div>  
        <div class="row col-md-15" style="border-radius: 15px; margin-top: 5px; width: 100%">
        	<h5 class="text-black">Result:</h5>

        <div class="col-md-6 float-left" >
            <div class="col-md-6 float-left">
            
                <div class="text-black" style="font-size: 18px;">
                    <div class="widget-content-left">
                        <div class="widget-heading">Your Score: <span class="pl-4"><?php 
                                $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.exam_id='$examId' AND ea.exans_status='new' ");
                            ?></span>
                            <span>
                                <?php echo $selScore->rowCount(); ?>
                                <?php 
                                    $over  = $selExam['ex_questlimit_display'];
                                 ?>
                            </span> /  <span><?php echo $over; ?> </span>
                        </div>
                    </div>
                    

                       
                </div>
                
                  <div class="text-black" style="font-size: 18px;">
                    <div class="widget-content-left">
                        <div class="widget-heading">No. of items: <span class="pl-4">
                      
                             
                            </div>
                    </div>
                    

                       
                </div>
            </div>

            <div class="col-md-6 float-left" >
           
                <div class="text-black" style="font-size: 18px;">
                    <div class="widget-content-left">
                        <div class="widget-heading">Passing Percentage: <span class="pl-4"><?php 
                                $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.exam_id='$examId' AND ea.exans_status='new' ");
                            ?></span>
                            <span>
                                <?php 
                                    $score = $selScore->rowCount();
                                    $ans = $score / $over * 100;
                                    echo "$ans";
                                    echo "%";
                                 ?>
                            </span> 
                        </div>
                    
                        </div>
                        <div class="widget-content-right">
                        <div class="widget-numbers text-black">
                            
                        </div>
                    </div>
                </div>
          
            </div>
        </div>
        </div>
        <hr>

    <center>
        <div class="row col-md-19" style="font-size: 13px;">
        	<div class="main-card mb-20 card" style="width: 100%">
                <div class="card-body" align="float-left">
                     <div class="col-sm-4">
                        Your Answers
                     </div>   
                   
                    <hr>
        			<table class="align-middle mb-2 table table-borderless table-hover" id="tableList">
                    <?php 
                    	$selQuest = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id WHERE eqt.exam_id='$examId' AND ea.axmne_id='$exmneId' AND ea.exans_status='new' ");
                    	$i = 1;
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                    		<tr>
                    			<td>
                    				<b><p><?php echo $i++; ?> .) <?php echo $selQuestRow['exam_question']; ?></p></b>
                    				<label class="pl-4 text-black">
                    					Your Answer : 
                    					<?php 
                    						if($selQuestRow['exam_answer'] != $selQuestRow['exans_answer'])
                    						{ ?>
                    							<span style="color:red"><?php echo $selQuestRow['exans_answer']; ?></span>
                    						<?PHP }
                    						else
                    						{ ?>
                    							<span class="text-success"><?php echo $selQuestRow['exans_answer']; ?></span>
                    						<?php }
                    					 ?>
                    				</label>
                    			</td>
                    		</tr>
                    	<?php }
                     ?>
	                 </table>
                </div>
          
      </div>
  </div>
</div>
 </div>
    </div>
</div>

</center>
<hr>
  <div>
      <center><button class="btn btn-danger" id="myBtn" >Back to Top</button>
  </div>
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

   