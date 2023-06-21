<?php
    $id = $_SESSION['course']['cou_id'];
    $dataCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id = '$id'")->fetch(PDO::FETCH_ASSOC);
    $_SESSION['course']['cou_name'] = $dataCourse['cou_name'];
?>
<title>Students Account Section</title>
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
    @media print {
  * {
    display: none;
  }

  #printableTable input{
    display: none;
  }
  #printableTable {
    display: block;
  }
}
   
</style>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"></div>
                            <div><?php echo $dataCourse['cou_name']; ?>
                            </div>
                      </div>
                </div>
            </div>        
            <div class="mb-1 card">
              <div class="card-header">
                <div>
                  <div class="card-header-title font-size-md text-capitalize font-weight-medium">Assessment:</div> 
                </div>
                <div style="width: 100%;" class="d-flex justify-content-around">
                  <div>
                    <div class="card-header-title font-size-md text-capitalize font-weight-medium"><a href="home.php?page=manage-activities">Manage Activities</a></div> 
                  </div>
                  <div>
                    <div class="card-header-title font-size-md text-capitalize font-weight-medium"><a href="home.php?page=manage-termpapers">Manage Term papers</a></div> 
                  </div>
                  <div>
                    <div class="card-header-title font-size-md text-capitalize font-weight-medium"><a href="home.php?page=manage-exam">Manage Long Exam</a></div> 
                  </div>
                  <div>
                    <div class="card-header-title font-size-md text-capitalize font-weight-medium"><a href="home.php?page=manage-assignments">Manage Assignments</a></div> 
                  </div>
                  <div>
                    <div class="card-header-title font-size-md text-capitalize font-weight-medium"><a href="home.php?page=manage-quizzes">Manage Quiz</a></div> 
                  </div>
                </div>
              </div>
             </div>
            <div class="card" style="background-color: white; margin-top: 10px;">
                    <div class="card-header font-size-lg text-capitalize font-weight-normal">
                            <span>Lessons</span>
                            <div class="btn-actions-pane-right actions-icon-btn">
                                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modalForLessonCourse" style="border-color: transparent;"><i class="fa fa-plus"></i>Add new</a>
                            </div>
                        </div>
            <div class="col-md-12" style="background: white;">
                    <div class="table-responsive" style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left">Title</th>
                                <th class="text-center" width="10%">Course Sent</th>
                                <th class="text-center">Lesson Description</th>
              
                                <th class="text-center" width="15%">Date Uploaded</th> 
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selLesson = $conn->query("SELECT * FROM lessons_tbl WHERE cou_id IN (SELECT cou_id from course_tbl Where cou_instructor = $id) ORDER BY lesson_id DESc ");
                                if($selLesson->rowCount() > 0)
                                {
                                    while ($selLessRow = $selLesson->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><i class="pe-7s-notebook"></i> <?php echo $selLessRow['lesson_title']; ?></td>
                                            <td class="text-center"><i class="pe-7s-study"></i> 
                                                <?php 
                                                    $courseId =  $selLessRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $selLessRow['lesson_desc']; ?></td>
                                 
                                            <td class="text-center"><i class="pe-7s-date"></i> <?php echo $selLessRow['date_uploaded'];?></td>
                                            <td class="text-center">
                                             <a href="home.php?page=manage-lessons-topic&id=<?php echo $selLessRow['lesson_id']; ?>" type="button" style="color: black;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit btn-icon-wrapper"></i> Manage </a>
                                             <button type="button" id="deleteLesson" data-id='<?php echo $selLessRow['lesson_id']; ?>' style="color: black;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                               ?>
                            </tbody>
                        </table>
                       </div>
            </div>
                </div>
                            <div class="card" style="background-color: white; margin-top: 10px;">
                                    <div class="card-header font-size-lg text-capitalize font-weight-normal">
                                            <span><img src="assets/images/notif3.gif" width="25" height="20"> Posts and Announcementncements Section</span>
                                            <div class="btn-actions-pane-right actions-icon-btn">
                                                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modalForAddAnnouncementCourse" style="border-color: transparent;"><i class="fa fa-bullhorn"></i> Post</a>
                                            </div>
                                        </div>
                                
                                        <div class="table-responsive" style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                                            <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                                                <thead>
                                                <tr>
                                                    <th class="text-center" width="10%">Announcement</th>
                                                    <th class="text-center" width="20%">Date Posted</th>
                                        <!--             <th class="text-center" width="20%">Posted to</th> -->
                                                    <th class="text-center" width="20%">Announcement Date Start &nbsp;·&nbsp; End</th>
                                                    <th class="text-center" width="5%">Modified by</th>
                                                    <th class="text-center" width="10%">Action</th>
                                                </tr>
                                                </thead>
                                                 <tbody>
                                                    <?php
                                                    $query = $conn->query("SELECT * FROM announcement_tbl WHERE course_id = '$id' ORDER BY ann_id desc");
                                                    while($row = $query -> fetch(PDO::FETCH_OBJ)){
                                                    ?>
                                                    <tr>
                                                        <td><a href="home.php?page=announcement&id=<?php echo $row->ann_id; ?>" style="color: green"><?php echo $row->ann_title;?></a></td>
                                                        <td align="center"><div class="text-muted small pl-4"><?php echo $row->date_modified; ?> &nbsp;·&nbsp;</div></td>
                                               <!--          <td align="center"> -->
                                                        <td align="center"><div class="text-muted small"><?php echo $row->ann_start ?> &nbsp;·&nbsp; <?php echo $row->ann_end;?></div></td>
                                                        <td align="center">
                                                            <div class="text-muted small">
                                                                <?php 
                                                                $modifier = $row->modified_by; 
                                                                if ($modifier == "Administrator") {
                                                                    echo "Administrator";
                                                                }else{
                                                                    echo $_SESSION['instructor']['instructor_name'];
                                                                }
                                                                ?>
                                                            </div>
                                                        </td>
                                                        <td align="center"><a href="home.php?page=announcement&id=<?php echo $row->ann_id; ?>" class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-eye"></i> Preview</a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>          
                                                <center> <a class="btn-icon btn-icon-only btn btn-link" href="home.php?page=announcement&id">View announcements</a></center>               
                                        </div>
                                </div>
                            <div class="card" style="background-color: white; margin-top: 10px;">
                                    <div class="card-header font-size-lg text-capitalize font-weight-normal">
                                            <span>Report Log</span>
                                        </div>
                  <div class="col-md-12">
                    <div class="table-responsive" style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead id="myHead">
                            <tr>
                                <th class="text-left pl-4">Activity, Exam, Exercise Title</th>
                                <th class="text-left ">Course</th>
                                <th class="text-left ">Description</th>
                                <th class="text-center" width="8%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id = '$id' ORDER BY ex_id DESC ");
                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['ex_title']; ?></td>
                                            <td>
                                                <?php 
                                                    $courseId =  $selExamRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$id' ");
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
                                        <h3 class="p-3">No Exam Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
              
                   </div>    
                </div>
<!--                             <div class="card" style="background-color: white; margin-top: 10px;">
                                    <div class="card-header font-size-lg text-capitalize font-weight-normal">
                                            <span>Student Enrolled</span>
                                            <div class="btn-actions-pane-right actions-icon-btn">
                                                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modalForAddExamineeEnroll" style="border-color: transparent;"><i class="fa fa-plus"></i> Enroll Student</a>
                                            </div>
                                        </div>
                                              <div class="col-md-12">
                                                    <div class="table-responsive" id="printableTable" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                                                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                                                            <thead>
                                                            <tr>
                                                              <center>
                                                                <th class="text-center">Student Number</th>
                                                                <th class="text-center">Fullname</th>
                                                                <th class="text-center">Sex</th>
                                                                <th class="text-center">Course & Section</th> 
                                                                <th class="text-center">Email</th>
                                                                </center>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                              <center>
                                                              <?php 
                                                                $selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_course = '$id'");
                                                                if($selExmne->rowCount() > 0)
                                                                {
                                                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                                                        <tr>
                                                                           <td align="center"><strong><?php echo $selExmneRow['exmne_stud_number']; ?></strong></td>
                                                                           <td><?php echo $selExmneRow['exmne_surname'];?>, <?php echo $selExmneRow['exmne_fullname'];?> <?php echo $selExmneRow['exmne_middle'];?>.</td>
                                                                           <td align="center"><?php echo $selExmneRow['exmne_gender']; ?></td>
                                                                           <td align="center"><strong><i class="pe-7s-study"></i> 
                                                                            <?php 
                                                                                 $exmneCourse = $selExmneRow['exmne_course'];
                                                                                 $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                                                 echo $selCourse['cou_name'];
                                                                             ?></strong> 
                                                                            </td>
                                                                           <td align="center"><?php echo $selExmneRow['exmne_email']; ?></td>
                                                                        </tr>
                                                                    <?php }
                                                                }
                                                            
                                                               ?>
                                                             </center>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                                    <div class="float-right">
                                                        <button class="btn btn-success" onclick="printDiv()"><i class="pe-7s-print"></i> Print table</button>
                                                    </div>
                                            </div>
                </div> -->


            </div>
            <div id="izi-modal" data-izimodal-group="" data-izimodal-loop="" data-izimodal-title="Edit Student Profile" style="display:none;">
            <form method="post" id="updateExamineeFrm">
            <input type="hidden" name="examinee_id" value="">
            <div class="col-md-12 waitme-container">
                <div class="form-group">
                    <label>Student Number</label>
                    <input type="number" name="stud_number" id="stud_number" class="form-control" autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Fullname</label>
                    <input type="" name="fullname" id="fullname" class="form-control"  autocomplete="off" required="">
                </div>
                 <div class="form-group">
                    <label>Surname</label>
                    <input type="" name="surname" id="surname" class="form-control" autocomplete="off" required="">
                </div>
                 <div class="form-group">
                    <label>Middle Initial</label>
                    <input type="" name="middleIni" id="middleIni" class="form-control"  autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Birthdate</label>
                    <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" >
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control chosen-select" name="gender" id="gender">
                        <option value="0">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Course</label>
                    <select class="form-control chosen-select" name="course" id="course">
                        <option value="0">Select course</option>
                        <?php 
                        $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year Level</label>
                    <select class="form-control chosen-select" name="year_level" id="year_level">
                        <option value="0">Select year level</option>
                        <option value="First year">First Year</option>
                        <option value="Second year">Second Year</option>
                        <option value="Third year">Third Year</option>
                        <option value="Fourth year">Fourth Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
                </div>
                <div class="form-group">



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
                <div class="form-group" align="right">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
            </form>
            </div>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script>
            $('#izi-modal').iziModal({
                headerColor: '#3ac47d',
                width: '50%',
                overlayColor: 'rgba(0, 0, 0, 0.5)',
                fullscreen: true,
                transitionIn: 'fadeInUp',
                transitionOut: 'fadeOutDown',
            });
            function openModal(id){
                $('input[name=examinee_id]').val(id);
                $('#izi-modal').iziModal('open');
                $('.form-control').val('');
                $('.waitme-container').waitMe({
                    effect : 'bounce',
                    text : '',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000'
                }); 
                $.ajax({
                    url: "query/getStudentsInfo.php",
                    method: 'get',
                    data:{
                        'id':id 
                    },
                    dataType:'json',
                    complete: function(response){
                        $('.waitme-container').waitMe("hide");
                    },
                    success: function(response) {
                        console.log(response);
                        $('#stud_number').val(response.exmne_stud_number);
                        $('#fullname').val(response.exmne_fullname);
                        $('#surname').val(response.exmne_surname);
                        $('#middleIni').val(response.exmne_middle);
                        $('#bdate').val(response.exmne_birthdate);
                        $('#gender').val(response.exmne_gender).trigger('chosen:updated');
                        $('#course').val(response.exmne_course).trigger('chosen:updated');
                        $('#year_level').val(response.exmne_year_level).trigger('chosen:updated');
                        $('#email').val(response.exmne_email);
                        $('#password').val(response.exmne_password);
                        
                    },
                    error: function (response){

                    }
                });
                $('.iziModal-header-title').css("color","black");
                $('.iziModal-header-title').css("font-size","1.25rem");
                $('.iziModal-header-buttons').css("font-size","1.25rem");
                $('#announcement-container').waitMe("hide");
            }
            $(document).ready(function(){
            $('.data-table').dataTable({
                buttons: ['print'],
                "iDisplayLength": 100,
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                responsive: true,
                "order": []
            });
            });
       function printDiv() {
        $('#tableList_filter').hide();
        $("#tableList_length").hide();
        $("#tableList_info").hide();
        $("#tableList_paginate").hide();
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
        window.onafterprint = function(){
            $('#tableList_filter').show();
            $("#tableList_length").show();
            $("#tableList_info").show();
            $("#tableList_paginate").show();
        }
            </script>
           <script >
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