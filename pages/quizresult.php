<?php include("includes/sidebar.php"); ?>
 <style type="text/css">
     #myBtn{
        margin-bottom: 50px;
     }
 </style>

 <?php 
    $examId = $_GET['quiz_id'];
    $selExam = $conn->query("SELECT * FROM quiz_tbl WHERE quiz_id='$examId' ")->fetch(PDO::FETCH_ASSOC);
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
                                        Quiz Title: <?php echo $selExam['quiz_title']; ?>
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
        <div class="col-md-12">
        <div class="row">
        <div class="col-md-4">
            <strong>Name:</strong> <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?><br>
            <strong>Title:</strong> <?php echo $selExam['quiz_title']; ?><br>
            <strong>Description:</strong> <?php echo $selExam['quiz_desc']; ?><br>
            <strong>Quiz date uploaded:</strong> <?php echo $selExam['quiz_created']; ?><br>
            <strong>Number of Items:</strong> <span style="color: red;"><?php echo $selExam['quiz_questlimit_display']; ?></span><br>
            <strong>Time Limit:</strong> <i style="color: red"><?php echo $selExam['quiz_time_limit']; ?> minutes</i> <br>
            <hr>
        </div>
        <div class="col-md-8">
        <div class="col-md-4">  
        <div class="text-black" style="font-size: 18px;">
                    
                        Your Score: <span class="pl-4"><?php 
                                $selScore = $conn->query("SELECT * FROM quiz_question_tbl eqt INNER JOIN quiz_answers ea ON eqt.qqt_id = ea.quest_id AND eqt.quiz_answer = ea.quiz_answer  WHERE ea.axmne_id='$exmneId' AND ea.quiz_id='$examId'");
                            ?></span>
                            <span>
                                <?php echo $selScore->rowCount(); ?>
                                <?php 
                                    $over  = $selExam['quiz_questlimit_display'];
                                 ?>
                            </span> out of  <span><?php echo $over; ?> </span>
                        
                    
                </div>
        </div>
        <div class="col-md-4">
                <div class="text-black" style="font-size: 18px;">
                   
                        Passing Percentage: <span class="pl-4">
                            <?php 
                                $selScore = $conn->query("SELECT * FROM quiz_question_tbl eqt INNER JOIN quiz_answers ea ON eqt.qqt_id = ea.quest_id AND eqt.quiz_answer = ea.quiz_answer  WHERE ea.axmne_id='$exmneId' AND ea.quiz_id='$examId'");
                            ?></span>
                            <span>
                                <?php 
                                    $score = $selScore->rowCount();
                                    $ans = $score / $over * 100;
                                    echo "$ans";
                                    echo "%";
                                 ?>
                            </span> 
                        <div class="widget-content-right">
                        <div class="widget-numbers text-black">
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-12 mb-5" style="font-size: 13px;">
        	<div class="main-card card" style="width: 100%">
                <div class="card-body" align="float-left">
                     <div class="col-sm-4">
                        Your Answers
                     </div>   
                   
                    <hr>
        			<table class="align-middle mb-2 table table-borderless table-hover" id="tableList">
                    <?php 
                    	$selQuest = $conn->query("SELECT * FROM quiz_question_tbl eqt INNER JOIN quiz_answers ea ON eqt.qqt_id = ea.quest_id WHERE eqt.quiz_id='$examId' AND ea.axmne_id='$exmneId'");
                    	$i = 1;
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                    		<tr>
                    			<td>
                    				<b><p><?php echo $i++; ?> .) <?php echo $selQuestRow['quiz_question']; ?></p></b>
                    				<label class="pl-4 text-black">
                    					Your Answer : 
                    					<?php 
                    						if($selQuestRow['quiz_answer'] != $selQuestRow['quiz_answer'])
                    						{ ?>
                    							<span style="color:red"><?php echo $selQuestRow['quiz_answer']; ?></span>
                    						<?PHP }
                    						else
                    						{ ?>
                    							<span class="text-success"><?php echo $selQuestRow['quiz_answer']; ?></span>
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

   