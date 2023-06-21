
<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10%">
  <div class="modal-dialog modal-md" role="document">
   <form class="refreshFrm" id="addCourseFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
        <span  class="modal-title" id="exampleModalLabel">Add Course and Section</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Note: Please be sure to input the right Course and Section: </label>
            <input type="" name="course_name" id="course_name" class="form-control" placeholder="Input Course and Section (e.g. BSIT 4-4)" required="" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Held by: (Name of Instructor)</label>
            <select class="form-control chosen-select" name="instructor" id="prof">
              <option value="0"></option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM instructors_tbl ORDER BY instructor_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['instructor_id']; ?>"><?php echo $selCourseRow['instructor_fullname']; ?>, <?php echo $selCourseRow['instructor_fullname']; ?> <?php echo $selCourseRow['instructor_middle']; ?>. </option>
                <?php }
               ?>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>
<!-- Modal For Add Img Profile -->
<div class="modal fade" id="modalForAddImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10%">
  <div class="modal-dialog modal-md" role="document">
   <form class="refreshFrm" id="addprofileimg" method="post" enctype="multipart/form-data" action="query/addProfileimgExe.php">
     <div class="modal-content">
      <div class="modal-header bg-light text-dark">
        <span  class="modal-title" id="exampleModalLabel">Upload New Picture</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="file" name="profileimg" id="userprofileimg" class="form-control" accept="image/x-png,image/gif,image/jpeg" required />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Upload</button>
      </div>
    </div>
   </form>
  </div>
</div>

<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="addCourseFrm" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update Now</button>
        </div>
      </div>
     </form>
    </div>
  </div>

<!-- Modal For Inputting Grade -->
<div class="modal fade myModal" id="inputGrade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="inputgradeform" method="post" >
      <input type="hidden" name="termid" id="termid" value="">
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add grade for (<?php echo $student['exmne_fullname']." ".$student['exmne_middle'].". ".$student['exmne_surname']; ?>)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-floating">
              <label for="grade"><i class="fa fa-exclamation"></i> You're about to input grade</label>
              <input type="number" name="grade" id="grade" class="form-control" value="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </div>
     </form>
    </div>
  </div>
<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 5%">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addExamFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-grow-early text-light">
        <span class="modal-title" id="exampleModalLabel"><i class="fa fa-pen"></i> New Exam</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-4">
              <?php 

                  if (isset($_SESSION['course']['cou_id']) && isset($_SESSION['course']['cou_name'])) {
                       $course_id = $_SESSION['course']['cou_id'];
                       $course_name = $_SESSION['course']['cou_name'];
                  }
                  if (!empty($course_id)) {  ?>
            <div class="form-group">
              <label><i class="fa fa-graduation-cap"></i>Course : <?php echo $course_name; ?></label>
              <input type="hidden" name="courseSelected" value="<?php echo $course_id; ?>">
            </div>
                 <?php }else{
               ?> 
            <div class="form-group">
              <label><i class="fa fa-graduation-cap"></i> Select Course</label>
              <select class="form-control chosen-select" name="courseSelected">
                                  <?php 
                                    $selAllCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_instructor = '$id' ORDER BY cou_id DESC");
                                    while ($selAllCourseRow = $selAllCourse->fetch(PDO::FETCH_ASSOC)) { 
                                      if ($selLessRow['cou_id'] == $selAllCourseRow['cou_id']) {?>
                                      <option selected value="<?php echo $selAllCourseRow['cou_id']; ?>"><?php echo $selAllCourseRow['cou_name']; ?></option>
                                    <?php 

                                    }else{?>
                                      <option value="<?php echo $selAllCourseRow['cou_id']; ?>"><?php echo $selAllCourseRow['cou_name']; ?></option>
                                      <?php
                                      }
                                    }
                                   ?>
              </select>
            </div>

          <?php                   
                 }
                  ?>
          </div>

          <div class="col-sm-4">
          <div class="form-group">
            <label><img src="assets/images/timer1.png" height="15" width="15" style="margin-top: -4px;"> Time Limit</label>
            <select class="form-control chosen-select" name="timeLimit" required="">
              <option value="0">Time</option>
              <option value="1">1 Minute</option> 
              <option value="10">10 Minutes</option> 
              <option value="20">20 Minutes</option> 
              <option value="30">30 Minutes</option> 
              <option value="40">40 Minutes</option> 
              <option value="50">50 Minutes</option> 
              <option value="60">60 Minutes</option> 
            </select>
          </div>
        </div>

          <div class="col-sm-4">
            <div class="form-group">
            <label>Question Limit to Display</label>
            <input type="number" name="examQuestDipLimit" id="" class="form-control" style="height: 25px;">
          </div>
          </div>

          </div>
          

          <div class="form-group">
            <label>Exam Title</label>
            <input type="" name="examTitle" class="form-control"  required="">
          </div>

          <div class="form-group">
            <label>Exam Description</label>
            <textarea name="examDesc" class="form-control" rows="4" required=""></textarea>
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>

<!-- Modal For Add Quiz -->
<div class="modal fade" id="modalForQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 5%">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addQuizFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
        <span class="modal-title" id="exampleModalLabel">Add Quiz</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-4">
              <?php 

                  if (isset($_SESSION['course']['cou_id']) && isset($_SESSION['course']['cou_name'])) {
                       $course_id = $_SESSION['course']['cou_id'];
                       $course_name = $_SESSION['course']['cou_name'];
                  }
                  if (!empty($course_id)) {  ?>
            <div class="form-group">
              <label><i class="fa fa-graduation-cap"></i>Course : <?php echo $course_name; ?></label>
              <input type="hidden" name="courseSelected" value="<?php echo $course_id; ?>">
            </div>
                 <?php }else{
               ?> 
            <div class="form-group">
              <label><i class="fa fa-graduation-cap"></i> Select Course</label>
              <select class="form-control chosen-select" name="courseSelected">
                                  <?php 
                                    $selAllCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_instructor = '$id' ORDER BY cou_id DESC");
                                    while ($selAllCourseRow = $selAllCourse->fetch(PDO::FETCH_ASSOC)) { 
                                      if ($selLessRow['cou_id'] == $selAllCourseRow['cou_id']) {?>
                                      <option selected value="<?php echo $selAllCourseRow['cou_id']; ?>"><?php echo $selAllCourseRow['cou_name']; ?></option>
                                    <?php 

                                    }else{?>
                                      <option value="<?php echo $selAllCourseRow['cou_id']; ?>"><?php echo $selAllCourseRow['cou_name']; ?></option>
                                      <?php
                                      }
                                    }
                                   ?>
              </select>
            </div>

          <?php                   
                 }
                  ?>
          </div>

          <div class="col-sm-4">
          <div class="form-group">
            <label><img src="assets/images/timer1.png" height="15" width="15" style="margin-top: -4px;"> Time Limit</label>
            <select class="form-control chosen-select" name="timeLimit" required="">
              <option value="0">Time</option>
              <option value="1">1 Minute</option> 
              <option value="10">10 Minutes</option> 
              <option value="20">20 Minutes</option> 
              <option value="30">30 Minutes</option> 
              <option value="40">40 Minutes</option> 
              <option value="50">50 Minutes</option> 
              <option value="60">60 Minutes</option> 
            </select>
          </div>
        </div>

          <div class="col-sm-4">
            <div class="form-group">
            <label>Question Limit to Display</label>
            <input type="number" name="quizQuestDipLimit" id="" class="form-control" style="height: 25px;">
            </div>
          </div>
          </div>

          <div class="form-group">
            <label>Quiz #</label>
            <input type="number" name="quizTitle" id="" class="form-control"  required="" style="width: 30%; height: 25px;">
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="quizDesc" class="form-control" rows="4" required=""></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Add Lesson -->
<div class="modal fade" id="modalForLesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10%;">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addLessonFrm" method="post">
    <input type="hidden" name="uploader" value="<?php echo $_SESSION['instructor']['instructor_id']; ?>">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
        <span class="modal-title" id="exampleModalLabel">Add Lesson</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Select Course</label>
            <select class="form-control chosen-select" name="courseSelected">
              <option value="0">Select Course</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_instructor = '$id' ORDER BY cou_id DESC");
                if($selCourse->rowCount() > 0)
                {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                }
                else
                { ?>
                  <option value="0">No Course Found</option>
                <?php }
               ?>
            </select>
          </div>

          <div class="form-group">
            <label>Lesson Title</label>
            <input type="" name="lessonTitle" class="form-control" placeholder="Input Lesson Title" required="">
          </div>

          <div class="form-group">
            <label>Lesson Description</label>
            <textarea name="lessonDesc" class="form-control" rows="4" placeholder="Input Lesson Description" required=""></textarea>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>
<!-- Modal For Add Lesson with course -->
<div class="modal fade" id="modalForLessonCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10%;">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addLessonFrmCourse" method="post">
    <input type="hidden" name="uploader" value="<?php echo $_SESSION['instructor']['instructor_id']; ?>">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
        <span class="modal-title" id="exampleModalLabel">Add Lesson</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Course:</label>
            <input type="hidden" name="courseSelected" value="<?php echo $_SESSION['course']['cou_id'];?>">
            <span><?php echo $_SESSION['course']['cou_name'];?></span>
<!--             <select class="form-control chosen-select" name="courseSelected">
              <option value="0">Select Course</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_instructor = '$id' ORDER BY cou_id DESC");
                if($selCourse->rowCount() > 0)
                {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                }
                else
                { ?>
                  <option value="0">No Course Found</option>
                <?php }
               ?>
            </select> -->
          </div>

          <div class="form-group">
            <label>Lesson Title</label>
            <input type="" name="lessonTitle" class="form-control" placeholder="Input Lesson Title" required="">
          </div>

          <div class="form-group">
            <label>Lesson Description</label>
            <textarea name="lessonDesc" class="form-control" rows="4" placeholder="Input Lesson Description" required=""></textarea>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Add Topic -->
<div class="modal fade" id="modalForAddTopic" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
   <form id="addTopicFrm" method="post" enctype="multipart/form-data" style="width: 1500px; margin-left: -300px">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
       <span>Add topic for: <span style="color: #3ac47d"><?php echo $selLessRow['lesson_title']; ?> </span></span>
       <input type="hidden" name="lessId" value="<?php echo $selLessRow['lesson_id']; ?>">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12" style="width: 1500px;">
               <div class="card-body">
                  <div class="position-relative row form-group">
                  <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input name="topicTitle" class="form-control" required="">
                    </div>
                  </div>                                       
                    <div class="position-relative row form-group">
                    <label class="col-sm-2 col-form-label">Topic description</label>
                      <div class="col-sm-10">
                        <textarea name="topicDesc" id="description" rows="30" required=""></textarea>
                      </div>
                    </div>
                    <div class="position-relative row form-group">

                    <label class="col-sm-2 col-form-label">Files</label>
                      <div class="col-sm-10">
                        <span><i class="fa fa-exclamation"></i>Notice: Max Uploaded Files is 40mb</span>
                        <input type="file" name="multimedia" class="form-control" id="multimedia">
                      </div>
                    </div>                           
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-success button-submit" style="color: black">Add Now</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Edit Topic -->
<div class="modal fade" id="modalForEditTopic" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
   <form id="editTopicFrm" method="post" enctype="multipart/form-data">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
       <span>Edit topic for: <span style="color: #3ac47d"><?php echo $selLessRow['lesson_title']; ?> </span></span>
       <input type="hidden" name="topic_id" id="toid" value="">
       <input type="hidden" name="lsnid" id="editlesonid">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
               <div class="card-body">
                  <div class="position-relative row form-group">
                  <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input name="topicTitle" class="form-control" id="edittopictitle" required="">
                    </div>
                  </div>                                       
                    <div class="position-relative row form-group">
                    <label class="col-sm-2 col-form-label">Topic description</label>
                      <div class="col-sm-10">
                        <textarea name="topicDesc" class="form-control" id="edittopicdesc" rows="10" required=""></textarea>
                      </div>
                    </div>  
                    <div class="position-relative row form-group">
                      <div class="col-sm-12">
                        
                    <label class="col-form-label">Current Uploaded Files: <Strong id="currentFile"></Strong></label>
                    <button type="button" id="removefiles" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Remove Files" onclick="removeFiles()"><i class="fa fa-times"></i></button>
                      </div>
                      <div class="col-sm-12">
                        <span class="mr-2">Upload New Files?</span>
                        <small><i class="fa fa-exclamation-circle"></i>Leave Empty if your not going to change the file</small>
                        <input type="file" name="multimedia" class="form-control" id="editmultimedia">
                      </div>
                    </div>                          
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-success button-submit">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal For Add Instructor -->
<div class="modal fade" id="modalForAddInstructor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 80px;">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addInstructorFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-happy-fisher">
        <span class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus"></i> Add Instructor </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-sm-3 mb-0">
  
            Name<ul></ul><br>
            Surname<ul></ul><br>
            Middle Initial<ul></ul><br>
            Birhdate<ul></ul><br>
            Sex<ul></ul><br>
            Email<ul></ul><br>
            Password<ul></ul><br>
            Assign Course and Section<ul></ul><br>
      </div>
      <div class="col-sm-9">
            <input type="" name="fullname" id="fullname" class="form-control" placeholder=" " autocomplete="off" required="" style="height: 30px" ><ul></ul>
                     
            <input type="" name="surname" id="surname" class="form-control" placeholder=" " autocomplete="off" required="" style="height: 30px; margin-top: 25px;" ><ul></ul>
         
            <input type="" name="middle" id="middle" class="form-control" placeholder=" " autocomplete="off" required="" style="height: 30px; margin-top: 25px;" ><ul></ul>
          
            
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder=" " autocomplete="off" style="height: 30px; margin-top: 30px;" ><ul></ul><br>
        
            
            <select class="form-control chosen-select text-dark" name="gender" id="gender">
              <option value="0">Select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select><ul></ul>
            <input type="email" name="email" id="email" class="form-control" placeholder=" " autocomplete="off" required="" style="height: 30px; margin-top: 25px;" ><ul></ul>
            <input type="password" name="ins_password" id="ins_password" class="form-control mb-0" placeholder=" " autocomplete="off" required="" style="height: 30px; margin-top: 25px;" ><ul></ul><br>
                <select class="chosen-select form-control" id="assign_course_array" name="assign_course_array" style="height: 30px; margin-top: 50px;"  required multiple>
                  <option value=""></option>
                  <?php
                  $query = $conn->query("SELECT * FROM course_tbl  WHERE 1");
                  while($row = $query -> fetch(PDO::FETCH_OBJ)){
                  ?>
                  <option value="<?php echo $row->cou_id;?>"><?php echo $row->cou_name;?></option>
                  <?php } ?>
                </select><ul></ul>
      </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success button-submit">Add Now</button>
      </div>
</div>
    </div>
    </div>
   </form>
  </div>
</div>
<!-- Modal For Enroll Student -->
<div class="modal fade" id="modalForAddExamineeEnroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 80px;">
  <div class="modal-dialog modal-lg" role="document">
   <form class="needs-validation" id="EnrollExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-sunny-morning text-dark">
       <span class="modal-title" id="exampleModalLabel"><i class="fa fa fa-users"></i> Enroll Student </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
                     <div class="table-responsive" id="printableTable" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                              <center>
                                <th class="text-center">Student Number</th>
                                <th class="text-center">Fullname</th>
                                <th class="text-center">Settings</th>
                                </center>
                            </tr>
                            </thead>
                            <tbody>
                              <center>
                              <?php 
                                $id = $_SESSION['course']['cou_id'];
                                $myid = $_SESSION['instructor']['instructor_id'];
                                $selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_course != '$id'");
                                if($selExmne->rowCount() > 0)
                                {
                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                           <td align="center"><strong><?php echo $selExmneRow['exmne_stud_number']; ?></strong></td>
                                           <td><?php echo $selExmneRow['exmne_surname'];?>, <?php echo $selExmneRow['exmne_fullname'];?> <?php echo $selExmneRow['exmne_middle'];?>.</td>
                                           <td align="center"><button class="btn btn-info">Enroll</button></td>
<!--                                            <td align="center">
                                               <button type="button" onclick="openModal(<?php echo $selExmneRow['exmne_id']; ?>)" class="mr-2 btn-icon btn-icon-only btn btn-warning"><i class="pe-7s-note"></i> Edit </button>
                                           </td> -->
                                        </tr>
                                    <?php }
                                }
                            
                               ?>
                             </center>
                            </tbody>
                        </table>
                    </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>

<!-- Modal For Add Student -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 80px;">
  <div class="modal-dialog modal-lg" role="document">
   <form class="needs-validation" id="addExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-sunny-morning text-dark">
       <span class="modal-title" id="exampleModalLabel"><i class="fa fa fa-users"></i> Add new student </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
        <div class="col-sm-3 mb-0">
           <label for="stud_number">Student Number</label><ul></ul><br>
           Name <ul></ul><br>
           Surname<ul></ul><br>
           Middle Initial<ul></ul><br>
           Birhdate <ul></ul><br>
           Sex <ul></ul><br>
           Course<ul></ul><br>
           Year Level <ul></ul><br>
           Email<ul></ul><br>
           Password<ul></ul><br>
        </div>
        <div class="col-sm-9">
            <input type="number" name="stud_number" id="stud_number" class="form-control" autocomplete="off" required="" style="height: 30px;"><div class="valid-feedback">
                                                Looks good!
                                            </div><ul></ul>
            <input type="" name="fullname" id="fullname" class="form-control"autocomplete="off" required="" style="height: 30px; margin-top: 30px;" ><ul></ul>
           
            <input type="" name="surname" id="surname" class="form-control" autocomplete="off" required="" style="height: 30px; margin-top: 25px;" ><ul></ul>
          
            <input type="" name="middleIni" id="middleIni" class="form-control"  autocomplete="off" style="height: 30px; margin-top: 25px;" ><ul></ul>
          
      
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" style="height: 30px; margin-top: 25px;" ><ul></ul><br>
       
           
            <select class="form-control chosen-select text-dark" name="gender" id="gender" style="height: 37px; margin-top: 40px;" >
              <option value="0" style="color: black;">-</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select><ul></ul><br>
        
            <select class="form-control chosen-select" name="course" id="course" style="height: 37px; margin-top: -30px;">
              <option value="0">Select course</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select><ul></ul>
        
            <select class="form-control" name="year_level" id="year_level">
              <option value="0">Select year level</option>
              <option value="First year">First Year</option>
              <option value="Second year">Second Year</option>
              <option value="Third year">Third Year</option>
              <option value="Fourth year">Fourth Year</option>
            </select><ul></ul>
       
            <input type="email" name="email" id="email" class="form-control" autocomplete="off" required="" style="height: 30px; margin-top: 30px;"><ul></ul>

               <div class="input-group">
               <input type="password" name="password" class="form-control" id="password" autocomplete="off" aria-describedby="inputGroupPrepend" required="" style="height: 30px; margin-top: 10px;">
               <div class="input-group-prepend" style="height: 30px; margin-top: 10px;">
               <span class="input-group-text" id="inputGroupPrepend"> <i toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></i></span>
               </div>
               <div class="invalid-feedback">
               Please.
               </div>
               </div>
      
       </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div>
<script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>


<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
       <span>Add Question for: <span style="color: #3ac47d"><?php echo $selExamRow['ex_title']; ?></span></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="qType">
        <label>Type Of Question</label>
        <select class="form-select form-control" aria-label="Default select example" id="qType" onchange="QuestionType()">
          <option selected="">Select type of question</option>
          <option value="1">Multiple Choice</option>
          <option value="2">Fill in the blanks / Identification</option>
        </select>
      </div>
      <form class="refreshFrm" method="post" id="addQuestionFrm">
        <div class="modal-body" id="questionBody">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add Now</button>
        </div>
      </form>
    </div>
   </form>
  </div>
</div>
<!-- Modal For Add Quiz Question -->
<div class="modal fade" id="modalForAddQuizQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
   <form class="refreshFrm" id="addQuizQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
       <span>Add Question for: <span style="color: #3ac47d">Quiz #<?php echo $selQuizRow['quiz_id']; ?></span></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="qType">
        <label>Type Of Question</label>
        <select class="form-select form-control" aria-label="Default select example" id="qType2" onchange="QuestionType2()">
          <option selected="">Select type of question</option>
          <option value="1">Multiple Choice</option>
          <option value="2">Fill in the blanks / Identification</option>
        </select>
      </div>
      <form class="refreshFrm" method="post" id="addQuizQuestionFrm">
        <div class="modal-body" id="questionQuizBody">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Add Now</button>
        </div>
      </form>
    </div>
   </form>
  </div>
</div>



<!-- Modal for Edit Question -->

<div class="modal fade" id="modalForUpdateQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
   <form id="updateQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
       <span>Update Question for: <span style="color: #3ac47d"><?php echo $selExamRow['ex_title']; ?></span></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="updateQuestionFrm">
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <legend>Question:</legend>
            <input type="hidden" name="examId" value="" id="UpdateQuestionId">
            <input type="hidden" name="QType" value="" id="questType">
            <textarea name="question"  id="course_name" class="form-control cname" autocomplete="off" rows="5" required=""></textarea>
          </div>
          <fieldset>
            <legend class="chooseQ">Choices:</legend>
            <div class="form-group">
                <label class="chooseQ">Choice A:</label>
                <input type="" name="exam_ch1"  class="form-control updateExamQ" value="" autocomplete="off" id="updateExam_ch1">
            </div>

            <div class="form-group">
                <label class="chooseQ">Choice B:</label>
                <input type="" name="exam_ch2"  class="form-control updateExamQ" value="" autocomplete="off" id="updateExam_ch2">
            </div>

            <div class="form-group">
                <label class="chooseQ">Choice C:</label>
                <input type="" name="exam_ch3"  class="form-control updateExamQ" value="" autocomplete="off" id="updateExam_ch3">
            </div>

            <div class="form-group">
                <label class="chooseQ">Choice D:</label>
                <input type="" name="exam_ch4"  class="form-control updateExamQ" value="" autocomplete="off" id="updateExam_ch4">
            </div>

            <div class="form-group">
                <label style="color: #3ac47d">Correct Answer</label>
                <input type="" name="exam_final" class="form-control" value="" autocomplete="off" id="cAnswer">
            </div>
          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
      </div>
      </form>
    </div>
   </form>
  </div>
</div>
<!-- MODAL FOR EDIT QUIZ QUESTION -->
<div class="modal fade" id="modalForUpdateQuizQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
   <form id="updateQuestionFrmQuiz" method="post">
     <div class="modal-content">
      <div class="modal-header bg-premium-dark text-light">
       <span>Update Question for: <span style="color: #3ac47d" id="QuizID"></span></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="updateQuestionFrmQuiz">
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <legend>Question:</legend>
            <input type="hidden" name="examId" value="" id="UpdateQuestionQuizId">
            <input type="hidden" name="QType" value="" id="questTypeQuiz">  
            <textarea name="question"  id="course_name" class="form-control cname" autocomplete="off" rows="5" required=""></textarea>
          </div>
          <fieldset>
            <legend class="chooseQ">Choices:</legend>
            <div class="form-group">
                <label class="chooseQ">Choice A:</label>
                <input type="" name="exam_ch1"  class="form-control updateExamQ" value="" autocomplete="off" id="updateQuiz_ch1">
            </div>

            <div class="form-group">
                <label class="chooseQ">Choice B:</label>
                <input type="" name="exam_ch2"  class="form-control updateExamQ" value="" autocomplete="off" id="updateQuiz_ch2">
            </div>

            <div class="form-group">
                <label class="chooseQ">Choice C:</label>
                <input type="" name="exam_ch3"  class="form-control updateExamQ" value="" autocomplete="off" id="updateQuiz_ch3">
            </div>

            <div class="form-group">
                <label class="chooseQ">Choice D:</label>
                <input type="" name="exam_ch4"  class="form-control updateExamQ" value="" autocomplete="off" id="updateQuiz_ch4">
            </div>

            <div class="form-group">
                <label style="color: #3ac47d">Correct Answer</label>
                <input type="" name="exam_final" class="form-control" value="" autocomplete="off" id="cAnswerQuiz">
            </div>
          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
      </div>
      </form>
    </div>
   </form>
  </div>
</div>


<!-- Modal for add announcement -->
<div class="modal fade" id="modalForAddAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 80px;">
  <div class="modal-dialog modal-xl" role="document">
   <form class="refreshFrm" id="addAnnouncementFrm" method="post" style="">
     <div class="modal-content">
      <div class="modal-header bg-sunny-morning">
        <span class="modal-title text-gray-dark font-weight-bold" id="exampleModalLabel">POST ANNOUNCEMENT</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type="hidden" name="assign_course_array" value="">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-group">
                <textarea name="title" id="title" class="form-control" required rows="1" placeholder="Input Announcement title.."></textarea>
              </div>
              <div>
                <label>Description</label>
                 <textarea name="annDesc" id="desc" rows="20" style="width: 100%"></textarea>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4">
             <label style="color: #3ac47d">Date From:</label>
                <input type="date" name="date_from" id="date_from" class="form-control" autocomplete="off" required>
              </div>
              <div class="col-sm-4">
                 <label style="color: red;">Date To:</label>
                <input type="date" name="date_to" id="date_to" class="form-control" autocomplete="off" required>
            </div>
      
            <div class="form-group pl-4" style="width: 450px;">
                <label>Post to: </label>
                <select class="chosen-select form-control" id="assign_course" name="assign_course" multiple>
                  <option value=""></option>
                  <?php
                  $query = $conn->query("SELECT * FROM course_tbl  WHERE cou_instructor ='$id'");
                  while($row = $query -> fetch(PDO::FETCH_OBJ)){
                  ?>
                  <option value="<?php echo $row->cou_id;?>"><?php echo $row->cou_name;?></option>
                  <?php } ?>
                </select>
            </div>
            </div>
          </div>
      </div>
      <div class="modal-footer col-md-12">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-bullhorn"></i> Post Now</button>
      </div>
    </div>
  </div>
</div>
   </form>
  </div>
  </div>
<!-- Modal for add announcement Course -->
<div class="modal fade" id="modalForAddAnnouncementCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 80px;">
  <div class="modal-dialog modal-xl" role="document">
   <form class="refreshFrm" id="addAnnouncementFrmCourse" method="post" style="">
     <div class="modal-content">
      <div class="modal-header bg-sunny-morning">
        <span class="modal-title text-gray-dark font-weight-bold" id="exampleModalLabel">POST ANNOUNCEMENT</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="form-group pl-4" style="width: 450px;">
              <label>Post to: <span><?php echo $_SESSION['course']['cou_name']; ?></span></label>
              <input type="hidden" name="assign_course_array" value="<?php echo $_SESSION['course']['cou_id'];?>">
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-group">
                <textarea name="title" id="title" class="form-control" required rows="1" placeholder="Input Announcement title.."></textarea>
              </div>
              <div>
                <label>Description</label>
                 <textarea name="annDesc" id="desc" rows="20" style="width: 100%"></textarea>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4">
             <label style="color: #3ac47d">Date From:</label>
                <input type="date" name="date_from" id="date_from" class="form-control" autocomplete="off" required>
              </div>
              <div class="col-sm-4">
                 <label style="color: red;">Date To:</label>
                <input type="date" name="date_to" id="date_to" class="form-control" autocomplete="off" required>
            </div>
            </div>
          </div>
      </div>
      <div class="modal-footer col-md-12">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-bullhorn"></i> Post Now</button>
      </div>
    </div>
  </div>
</div>
   </form>
  </div>
  </div>
  <div style="display: none;" id="questionType">
          <div class="col-md-12" id="multipleChoice">
            <div class="form-group">
              <legend>Question:</legend>
              <input type="hidden" name="examId" value="<?php echo $exId;?>">
              <textarea name="question"  id="course_name" class="form-control" autocomplete="off" rows="5" required=""></textarea>
            </div>
            <fieldset>
              <legend>Choices:</legend>
              <div class="form-group">
                  <label>Choice A:</label>
                  <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="" autocomplete="off">
              </div>

              <div class="form-group">
                  <label>Choice B:</label>
                  <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="" autocomplete="off">
              </div>

              <div class="form-group">
                  <label>Choice C:</label>
                  <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="" autocomplete="off">
              </div>

              <div class="form-group">
                  <label>Choice D:</label>
                  <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="" autocomplete="off">
              </div>
              <div class="form-group">
                  <label style="color: #3ac47d">Correct Answer</label>
                  <input type="" name="correctAnswer" id="" class="form-control" placeholder="Input correct answer" autocomplete="off">
              </div>
              <div class="form-group" style="display: none;">
                  <input type="" name="etype" id="etype" value="mc" class="form-control" placeholder="" autocomplete="off">
              </div>
            </fieldset>
          </div>
          <div class="col-md-12" id="Fint">
            <div class="form-group">
              <legend>Question:</legend>
              <input type="hidden" name="examId" value="<?php echo $exId;?>">
              <textarea name="question"  id="course_name" class="form-control" autocomplete="off" rows="5" required=""></textarea><span style="font-color:#8b8e9f; font-size: .75rem;">Use '_' underscore to specify where you would like a blank to appear in the text below.</span>
            </div>
            <div class="form-group">
                <label style="color: #3ac47d">Correct Answer</label>
                <input type="" name="correctAnswer" id="" class="form-control" placeholder="Input correct answer" autocomplete="off">
            </div>
              <div class="form-group" style="display: none;">
                  <input type="" name="etype" id="etype" value="fint" class="form-control" placeholder="" autocomplete="off">
              </div>
          </div>
  </div>
  <div style="display: none;" id="questionType2">
          <div class="col-md-12" id="multipleChoice2">
            <div class="form-group">
              <legend>Question:</legend>
              <input type="hidden" name="examId" value="<?php echo $selQuizRow['quiz_id']; ?>">
              <textarea name="question"  id="course_name" class="form-control" autocomplete="off" rows="5" required=""></textarea>
            </div>
            <fieldset>
              <legend>Choices:</legend>
              <div class="form-group">
                  <label>Choice A:</label>
                  <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="" autocomplete="off">
              </div>

              <div class="form-group">
                  <label>Choice B:</label>
                  <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="" autocomplete="off">
              </div>

              <div class="form-group">
                  <label>Choice C:</label>
                  <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="" autocomplete="off">
              </div>

              <div class="form-group">
                  <label>Choice D:</label>
                  <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="" autocomplete="off">
              </div>
              <div class="form-group">
                  <label style="color: #3ac47d">Correct Answer</label>
                  <input type="" name="correctAnswer" id="" class="form-control" placeholder="Input correct answer" autocomplete="off">
              </div>
              <div class="form-group" style="display: none;">
                  <input type="" name="etype" id="etype" value="mc" class="form-control" placeholder="" autocomplete="off">
              </div>
            </fieldset>
          </div>
          <div class="col-md-12" id="Fint2">
            <div class="form-group">
              <legend>Question:</legend>
              <input type="hidden" name="examId" value="<?php echo $selQuizRow['quiz_id']; ?>">
              <textarea name="question"  id="course_name" class="form-control" autocomplete="off" rows="5" required=""></textarea><span style="font-color:#8b8e9f; font-size: .75rem;">Use '_' underscore to specify where you would like a blank to appear in the text below.</span>
            </div>
            <div class="form-group">
                <label style="color: #3ac47d">Correct Answer</label>
                <input type="" name="correctAnswer" id="" class="form-control" placeholder="Input correct answer" autocomplete="off">
            </div>
              <div class="form-group" style="display: none;">
                  <input type="" name="etype" id="etype" value="fint" class="form-control" placeholder="" autocomplete="off">
              </div>
          </div>
  </div>
<script>
    CKEDITOR.replace('description');
  </script>
<script>
$('.chosen-select').chosen({
    no_results_text: "Oops, nothing found!",
    width: '100%',
});
$('#assign_course').chosen({
    no_results_text: "Oops, nothing found!",
    width: '100%',
}).change(function(){
$('input[name=assign_course_array]').val($('#assign_course').val());
});
</script>

<script>
  function QuestionType(){
    let val = $("#qType").val();
    if (val == 1) {
      $("#multipleChoice").prependTo("#questionBody");
      $("#Fint").prependTo("#questionType");
    }else if(val == 2){
      $("#Fint").prependTo("#questionBody");
      $("#multipleChoice").prependTo("#questionType");
    }    
  }
  function QuestionType2(){
    let val = $("#qType2").val();
    if (val == 1) {
      $("#multipleChoice2").prependTo("#questionQuizBody");
      $("#Fint2").prependTo("#questionType2");
    }else if(val == 2){
      $("#Fint2").prependTo("#questionQuizBody");
      $("#multipleChoice2").prependTo("#questionType2");
    }    
  }
</script>

<script type="text/javascript">
  $("#userprofileimg").change(function(){
    var file = this.files[0];
    var fileType = file["type"];
    var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
    if ($.inArray(fileType, validImageTypes) < 0) {
        alert("invalid file please use image");
        $("#userprofileimg").val('');
    }
});
  $("#multimedia").on('change',function(){
    if (this.files[0].size > 40000000) {
      alert("This file is to large try to upload file less than 40mb");
      $(this).val('');
    }
  });
  $("#editmultimedia").on('change',function(){
    if (this.files[0].size > 40000000) {
      alert("This file is to large try to upload file less than 40mb");
      $(this).val('');
    }
  });
</script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');
</script>
<script>
    CKEDITOR.replace('description');
</script>