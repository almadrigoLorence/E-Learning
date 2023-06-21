<title>Manage Question</title>
 <link rel="icon" type="image/png" href="img/favicon2.png">
<?php 

session_start();

if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");


 ?>
<?php include("../../conn.php"); ?>
<?php include("includes/header.php"); ?>      
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
<?php include("includes/sidebar.php"); ?>


<?php 
   $exId = $_GET['id'];
   $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$exId' ");
   $selExamRow = $selExam->fetch(PDO::FETCH_ASSOC);
   $courseId = $selExamRow['cou_id'];
   $selCourse = $conn->query("SELECT cou_name as courseName FROM course_tbl WHERE cou_id='$courseId' ")->fetch(PDO::FETCH_ASSOC);
 ?>


<div class="app-main__outer">
        <div class="app-mainain__inner">
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><img src="assets/images/exam1.png" height="40" width="40"></div>
                            <div>Exams Section - Exam information and Questions Table
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="home.php?page=manage-exam" style="color: white">Long exam Table</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d"><?php echo $selExamRow['ex_title']; ?></li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>        
            <div class="col-md-12">
            <div id="refreshData">
            <div class="row">
                  <div class="col-md-4">
                          <div class="card-header text-light" style="background-color: #3ac47d">
                           <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Edit exam information</div>
                          </div>
                          <div class="card-body">
                           <form method="post" id="updateExamFrm">
                               <div class="form-group">
                                <label><i class="pe-7s-study"></i> Course</label>
                                <select class="form-control chosen-select" name="courseId" required="">
                                  <option value="<?php echo $selExamRow['cou_id']; ?>"><?php echo $selCourse['courseName']; ?></option>
                                  <?php 
                                    $selAllCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                                    while ($selAllCourseRow = $selAllCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                      <option value="<?php echo $selAllCourseRow['cou_id']; ?>"><?php echo $selAllCourseRow['cou_name']; ?></option>
                                    <?php }
                                   ?>
                                </select>
                              </div>

                              <div class="form-group">
                                <label><i class="pe-7s-note2"></i> Exam Title</label>
                                <input type="hidden" name="examId" value="<?php echo $selExamRow['ex_id']; ?>">
                                <input type="" name="examTitle" class="form-control" required="" value="<?php echo $selExamRow['ex_title']; ?>">
                              </div>  

                              <div class="form-group">
                                <label><i class="pe-7s-note2"></i> Exam Description</label>
                                <input type="" name="examDesc" class="form-control" required="" value="<?php echo $selExamRow['ex_description']; ?>">
                              </div>  

                              <div class="form-group">
                                <label><i class="pe-7s-stopwatch"></i> Time limit</label>
                                <select class="form-control chosen-select" name="examLimit" required="">
                                  <option value="<?php echo $selExamRow['ex_time_limit']; ?>"><?php echo $selExamRow['ex_time_limit']; ?> Minutes</option>
                                  <option value="10">10 Minutes</option> 
                                  <option value="20">20 Minutes</option> 
                                  <option value="30">30 Minutes</option> 
                                  <option value="40">40 Minutes</option> 
                                  <option value="50">50 Minutes</option> 
                                  <option value="60">60 Minutes</option> 
                                </select>
                              </div>

                              <div class="form-group">
                                <label><i class="pe-7s-display1"></i> Display limit</label>
                                <input type="number" name="examQuestDipLimit" class="form-control" value="<?php echo $selExamRow['ex_questlimit_display']; ?>"> 
                              </div>

                              <div class="form-group" align="right">
                                <button type="submit" class="btn btn-success btn-lg"><i class="pe-7s-refresh"></i> Update</button>
                              </div> 
                           </form>                           
                          </div>
                      
                    
                  </div>
                  <div class="col-md-8">
                    <?php 
                        $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$exId' ORDER BY eqt_id desc");
                    ?>
                     <div class="main-card mb-3 card" >                          
                          <div class="card-body">
                            <button class="btn btn-sm btn-success " data-toggle="modal" data-target="#modalForAddQuestion"><i class="fa fa-plus"></i> Add Question</button> 
                            <div class="float-right">
                              <div class="text-muted medium">Questions count
                            <span class="badge badge-pill badge-danger ml-2">
                              <?php echo $selQuest->rowCount(); ?>
                            </span>
                          </div>
                          </div>
                            <hr>
                            <div class="scroll-area-sm" style="min-height: 550px;">
                               <div class="scrollbar-container"> 
                            <?php 
                               if($selQuest->rowCount() > 0)
                               {  ?>
                                 <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-hover" id="tableList">
                                        <thead>
                                        <tr>
                                            <th class="text-left pl-1"><div class="text-muted small">Question: </div></th>
                                            <th class="text-left" width="10%"><div class="text-muted small">Action</div></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            
                                            if($selQuest->rowCount() > 0)
                                            {
                                               $i = 1;
                                               while ($selQuestionRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <tr>
                                                        <td >
                                                            <?php echo $i++ ; ?> .) <?php echo $selQuestionRow['exam_question']; ?><br>
                                                            <?php 
                                                              if ($selQuestionRow['exam_type'] == 'fint') {
                                                               { ?>
                                                                <span class="pl-4 text-success">Correct Answer: <?php echo  $selQuestionRow['exam_answer']; ?></span><br>
                                                              <?php } 
                                                              }else{
                                                              // Choice A
                                                              if($selQuestionRow['exam_ch1'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">A - <?php echo  $selQuestionRow['exam_ch1']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">A - <?php echo $selQuestionRow['exam_ch1']; ?></span><br>
                                                              <?php }

                                                              // Choice B
                                                              if($selQuestionRow['exam_ch2'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">B - <?php echo $selQuestionRow['exam_ch2']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">B - <?php echo $selQuestionRow['exam_ch2']; ?></span><br>
                                                              <?php }

                                                              // Choice C
                                                              if($selQuestionRow['exam_ch3'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">C - <?php echo $selQuestionRow['exam_ch3']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">C - <?php echo $selQuestionRow['exam_ch3']; ?></span><br>
                                                              <?php }

                                                              // Choice D
                                                              if($selQuestionRow['exam_ch4'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">D - <?php echo $selQuestionRow['exam_ch4']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">D - <?php echo $selQuestionRow['exam_ch4']; ?></span><br>
                                                              <?php }

                                                              }
                                                             ?>
                                                            
                                                        </td>
                                                        <td>
                                                          <div class="float-right">
                                                           <a data-toggle="modal"  id="<?php echo $selQuestionRow['eqt_id'];?>" data-target="#modalForUpdateQuestion"
                                                          style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success" 
                                                          onclick="getData('<?php echo $selQuestionRow['eqt_id'];?>')"><i class="fa fa-edit"></i></a>
                                                           <button type="button" style="border-color: transparent;" id="deleteQuestion" data-id='<?php echo $selQuestionRow['eqt_id']; ?>' class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                         
                                                       </div>
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
                               <?php }
                               else
                               { ?>
                                  <h4 class="text-secondary">No questions at the moment</h4>
                                 <?php
                               }
                             ?>
                        </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>  
       </div> 
     </div>
   </div>

<!-- FOOTER -->
<?php include("includes/footer.php"); ?>
<?php include("includes/modals.php"); ?>
