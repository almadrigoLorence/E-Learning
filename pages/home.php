<?php
include("./conn.php");
/*include("includes/sidebar.php");*/
$myID = $_SESSION['examineeSession']['exmne_id'];
$structure = "pages/examinee_files/$myID";
$datetoday = date('Y/m/d');
if (isset($_REQUEST['btn_insert'])) {
  $file = $_FILES['myFiles']['name'];
  $checkexistfile = $conn->query("SELECT * FROM examinee_files WHERE file_name = '$file' AND uploader = '$myID' ");
  if ($checkexistfile->rowCount() > 0) {
    
  }else{
  if (file_exists($structure) && is_dir($structure)) {
      try {
        $file = $_FILES['myFiles']['name'];
        $type = $_FILES['myFiles']['type'];
        $size = $_FILES['myFiles']['size'];
        $temp = $_FILES['myFiles']['tmp_name'];
        $path = "pages/examinee_files/$myID/".$file;
        if ($size < 50000000) {
          move_uploaded_file($temp, "pages/examinee_files/$myID/".$file);
          $insert_stmt = $conn->prepare('INSERT INTO examinee_files(file_name,file,file_size,uploader,`date`) VALUES(:fname,:file,:fsize,:uploader,:datetoday)');
          $insert_stmt->bindParam(':fname',$file);
          $insert_stmt->bindParam(':file',$temp);
          $insert_stmt->bindParam(':fsize',$size);
          $insert_stmt->bindParam(':uploader',$myID);
          $insert_stmt->bindParam(':datetoday',$datetoday);
          $insert_stmt->execute();
        }else{
          $errorMsg = "Your File is too large Please Upload 40mb size";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }
        
  }else{
    mkdir($structure, 0777, true);
      try {
        $file = $_FILES['myFiles']['name'];
        $type = $_FILES['myFiles']['type'];
        $size = $_FILES['myFiles']['size'];
        $temp = $_FILES['myFiles']['tmp_name'];
        $path = "pages/examinee_files/$myID/".$file;
        if ($size < 50000000) {
          move_uploaded_file($temp, "pages/examinee_files/$myID/".$file);
          $insert_stmt = $conn->prepare('INSERT INTO examinee_files(file_name,file,file_size,uploader,`date`) VALUES(:fname,:file,:fsize,:uploader,:datetoday)');
          $insert_stmt->bindParam(':fname',$file);
          $insert_stmt->bindParam(':file',$temp);
          $insert_stmt->bindParam(':fsize',$size);
          $insert_stmt->bindParam(':uploader',$myID);
          $insert_stmt->bindParam(':datetoday',$datetoday);
          $insert_stmt->execute();
        }else{
          $errorMsg = "Your File to large Please Upload 50mb size";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  }
}
?>
<head>
  <link rel="css/mycss.css" type="text/css">
</head>
<style type="text/css">
  .dropdown-menu-header-inner{
  margin-top: -15px; 
  padding-bottom: 20px;
  padding-top: 10px
}
</style>
<div class="app-main__outer" style="padding-left: unset;">
    <div id="refreshData">
          <div class="app-main__inner">
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                    <div class="page-title-heading">
                        <div><img src="assets/images/<?php echo $id.'/'.$selProfile['img'] ;?>" width="80" height="80" class="rounded-circle" style="border-radius: 50%;"></div>
                         <ul></ul>
                            <div><strong>Welcome: </strong> 
                                 <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?>
                                    <div class="page-title-subheading"><strong>Course and Section:</strong> <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?> </div>
                            </div>    
                    </div>  
                </div>
            </div>
              <br>
                <div class="row">
                  <div class="col-md-3">
                    <div class="mb-1 card">
                      <div class="card-header ">
                        <div class="card-header-title font-size-md text-capitalize font-weight-medium">Assessment</div> 
                      </div>
                    <div class="card-body-borderless">
                      <div>
                         <div class="card-body">
                            <div class="grid-menu grid-menu-2col">
                              <div class="no-gutters row">
                                <div class="col-sm-6 text-center">
                                  <a href="home.php?page=activities">
                                    <button class="btn-icon-vertical btn-transition  btn btn-outline-link">
                                    <span class="badge badge-pill badge-warning"><?php echo $selAct->rowCount(); ?></span><br>Activities
                                    </button></a>
                                </div>
                                <div class="col-sm-6 text-center">
                                  <a href="home.php?page=assignments"><button class="btn-icon-vertical btn-transition  btn btn-outline-link">
                                    <span class="badge badge-pill badge-success"><?php echo $selAss->rowCount(); ?></span><br>Assignments
                                    </button></a>
                                </div>
                                <div class="col-sm-6 text-center">
                                  <a href="home.php?page=long-exam"><button class="btn-icon-vertical btn-transition  btn btn-outline-link">
                                    <span class="badge badge-pill badge-danger"><?php echo $selExam->rowCount(); ?></span><br>Long Exams
                                    </button></a>
                                </div>
                                <div class="col-sm-6 text-center">
                                  <a href="home.php?page=quiz"><button class="btn-icon-vertical btn-transition  btn btn-outline-link">
                                    <span class="badge badge-pill badge-primary"><?php echo $selQuiz->rowCount(); ?></span><br>Quizzes
                                    </button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>
                      <div class="mb-1 card">
                        <div class="card-header bg-ligh text-black">
                          <div class="card-header-title font-size-md text-capitalize font-weight-bold">Lessons</div>
                          <div class="btn-actions-pane-right actions-icon-btn">
                              <div class="btn-group dropdown">
                                  <button type="button" aria-haspopup="true" data-toggle="collapse" href="#collapseExample1234" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                  <i class="fa fa-chevron-circle-down pl-2" style="color: black; padding-right: 10px; "></i>
                                  </button>
                              </div>
                          </div>
                        </div>
                          <div class="card-body">
                            <div class="" id="collapseExample1234" style="">
                                <div>
                                  <div class="drawer-section p-0">
                                    <div class="files-box">
                                        <ul class="list-group list-group-flush">
                                            <?php
                                           $selLesson = $conn->query("SELECT * FROM lessons_tbl WHERE cou_id='$exmneCourse' ORDER BY lesson_id DESC ");
                                           if ($selLesson->rowCount() > 0) 
                                           {
                                            while($row = $selLesson -> fetch(PDO::FETCH_OBJ)){ ?>
                                              <li class="pt-2 pb-2 pr-2 list-group-item">
                                                <a href="home.php?page=lesson&id=<?php echo $row->lesson_id ?>">
                                                  <div class="widget-content p-0">
                                                      <div class="widget-content-wrapper">
                                                         <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                                              <i class="pe-7s-notebook" style="color: black; font-weight: medium"></i>
                                                          </div>
                                                          <div class="widget-content-left">
                                                              <div class="widget-heading font-weight-normal" style="margin-top: unset !important;">
                                                                    <?php echo $row->lesson_title;?>
                                                                </div>
                                                          </div>
                                                          <div class="widget-content-right widget-content-actions">
                                                              <i class="fa fa-arrow-right"></i>
                                                          </div>
                                                     </div>
                                                  </div>
                                                </a>
                                            </li>
                                          <?php }
                                        }
                                        else
                                        { ?>
                                          <span class="p-3">Lesson Module is Empty</span>
                                            <?php }
                                            ?>
                                          </ul>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                        <div class="mb-1 card">
                            <div class="card-hover mb-1 card">
                            <div class="card-header-tab card-header bg-premium-dark text-white">
                                <div class="card-header-title font-size-sm text-capitalize font-weight-normal">
                                  Long exam history 
                                </div>
                            </div>
                            <div class="scroll-area-md-hover">
                              <div class="scrollbar-container ps ps--active-z">
                                 <table id="myTable" class="table table-inverse">
                                    <tbody>
                                      <?php $selTakenExam = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id = ea.exam_id WHERE exmne_id='$exmneId' ORDER BY ea.examat_id DESC ");
                                        if($selTakenExam->rowCount() > 0)
                                          {
                                            while ($selTakenExamRow = $selTakenExam->fetch(PDO::FETCH_ASSOC)) { 
                                          ?>
                                            <tr>
                                              <td >
                                                <div class="row no-gutters align-items-left">
                                                  <div class="col-md-12">
                                                    <i class="pe-7s-paperclip"></i>
                                                    <span style="font-size: 15px;"><?php echo $selTakenExamRow['ex_title']; ?></span>
                                                  <div class="text-muted small mt-1">Date Published: &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $selTakenExamRow['ex_created']?></a></div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td align="center"> 
                                                  <div class="row no-gutters align-items-center">
                                                      <div class="col-md-8"><i class="pe-7s-clock"></i> <?php echo $selTakenExamRow['ex_time_limit'];?> minutes
                                                      </div>                                                
                                                       <a href="home.php?page=result&id=<?php echo $selTakenExamRow['ex_id']?>" class="btn btn-default"><i class="fa fa-bars" style="color: green"></i> View Result</a>
                                                  </div>
                                              </td>
                                           </tr>
                                          <?php }
                                          }
                                          else
                                          { ?>
                                          <br>
                                          <ul class="pl-4">
                                          <span class="p-3">Empty data</span>
                                          <?php }
                                          ?>  
                                          </ul>
                                    </tbody>
                                  </table> 
                                </div>
                              </div>
                              </div>  
                            </div>
                            <div class="mb-1">
                            <div class="card-header bg-premium-dark text-light">
                            <div class="card-header-title font-size-sm text-capitalize font-weight-normal">
                                  Reaction Paper
                                </div>
                            </div>
                            <hr class="m-0">
                            <form id="submittermpaper" action="addtermpaper">
                                <div class="card">
                                  <table id="myTable" class="table table-inverse">
                                    <tbody>
                                        <?php 
                                          $myID = $_SESSION['examineeSession']['exmne_id'];
                                              $selExam = $conn->query("SELECT * FROM myterms WHERE exmne_idd= '$myID'");
                                              if($selExam->rowCount() > 0)
                                              {
                                              while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) 
                                              {
                                              ?>
                                                <tr>
                                                  <td>
                                                    <div class="row no-gutters align-items-left">
                                                        <div class="col-md-12">
                                                          <i class="pe-7s-pen"></i>
                                                            <span style="font-size: 15px;"><?php echo $selExamRow['term_title']; ?></span>
                                                            <div class="text-muted small mt-1">Date Submitted: &nbsp;·&nbsp;<a href="javascript:void(0)" class="text-muted"><?php echo $selExamRow['date_uploaded']?></a></div>
                                                         </div>
                                                    </div>
                                                  </td>
                                                  <td> 
                                                        <div class="row no-gutters align-items-center">
                                                        <div class="col-md-8 pr-0">Grade <i style="color: green">&nbsp;·&nbsp;<?php if ($selExamRow['grade'] == '') {
                                                        echo "Not graded yet";
                                                        }else{
                                                        echo $selExamRow['grade'];
                                                        } ?></i></div>
                                                  </td>
                                                </tr>
                                                  <?php }
                                                }
                                                else
                                                  { ?>
                                                <tr>
                                                  <td colspan="5">
                                                    <h3 class="p-3">No Term Paper is Recorded</h3>
                                                  </td>
                                                </tr>
                                                <?php }
                                        ?>
                                      </tbody>
                                  </table> 
                                </div>
                            </form>
                        </div>
                          </div>
                        <div class="col-sm-12 col-lg-6">
                          <div class="card-header rounded mb-2 bg-premium-dark text-white">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal rounded">Timeline</div>
                            <div class="btn-actions-pane-right text-black actions-icon-btn">
                              <div class="btn-group dropdown" style="color: black">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="pe-7s-menu btn-icon-wrapper" style="color: white"></i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <h6 tabindex="-1" class="dropdown-header" style="color: black;">Menu</h6>
                                  <a href="home.php?page=announcements-index" type="button" tabindex="0" class="dropdown-item">
                                  <i class="dropdown-icon lnr-inbox"> </i><span>See all announcement</span>
                                  </a>
                                    <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target="#feedbacksModal">
                                    <i class="dropdown-icon lnr-book"> </i><span>Add feedback</span>
                                    </button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="m-0">
                          <?php
                          $selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE course_id='$exmneCourse' ORDER BY ann_id DESC ");
                          if ($selAnn->rowCount() > 0) 
                          {
                          while($row = $selAnn -> fetch(PDO::FETCH_OBJ)){ ?>
                          <div class="mb-3 p-3" style="background-color: #FFFEFF;background: #FFFEFF;box-shadow:  5px 5px 10px #e0e0e0,-5px -5px 10px #FFFEFF; border-radius: 8px;">
                          <span><small> </small><?php 
                          $authorid = $row->modified_by;
                          if ($authorid == "Administrator") {
                          echo "Administrator";
                          }else{
                          $authordetails = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id = $authorid ")->fetch(PDO::FETCH_ASSOC);
                          echo $authordetails['instructor_fullname']." ".$authordetails['instructor_middle'].". ".$authordetails['instructor_surname'];
                          }
                          ?>
                          </span>
                          <div class="text-muted small mt-1">Posted on &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $row->date_modified?></a></div>
                          <hr>
                          <div class="text-muted small mt-1"><a href="home.php?page=announcements&id=<?php echo $row->ann_id ?>" class="text-big" style="color: #3ac47d; font-size: 18px;"><?php echo $row->ann_title?> </a></div>
                          <div class="text-muted small mt-1"></div>
                          <div class="row no-gutters align-items-center">
                            <div class="media col-11 align-items-center">
                              <div class="pl-4 text-big" style="text-align: left;">
                                <?php 
                                $lenthOfTxt = strlen ($row->ann_desc);
                                if($lenthOfTxt >= 200)
                                { ?>
                                <?php echo substr($row->ann_desc, 0, 200);?>.....
                                <?php }
                                else
                                {
                                echo $row->ann_desc;
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                          <br>  
                          </div>
                          <?php }
                          }
                          else
                          { ?>
                          <span class="p-3">No current Announcements</span>
                          <?php }
                          ?>
                          <hr>
                          <br>
                          <div class="main-card mb-3 card">
                            <div class="card-body">
                              <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                <div class="vertical-timeline-item vertical-timeline-element">
                                  <div>
                                  <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                  </span>
                                  <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Good day! </h4>
                                  <p>Welcome to STS(GNED) E-learning platform. This platform is currently under the progress of making it better for students and teachers.
                                  </p>
                                  <span class="vertical-timeline-element-date"><?php echo date("l / F j \ Y  - h:i A") ?></span>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          <div class="col-md-3">
                            <div class="mb-1 card" style="background-color: transparent;">
                              <div class="card-header">
                              <div class="card-header-title font-size-sm text-capitalize font-weight-medium">
                              My Files 
                              </div>
                              <div class="btn-actions-pane-right actions-icon-btn">
                              <button class="btn-icon btn-icon-only btn btn-link" data-toggle="modal" data-target="#modalForAddFiles">
                              <i class="fa fa-upload" style="color: black; padding-right: 10px;"></i>
                              </button>
                              <a href="home.php?page=myfiles"><button class="btn-icon btn-icon-only btn btn-link">
                              <i class="pe-7s-menu" style="color: black; padding-right: 10px;"></i>
                              </button></a>
                              <div class="btn-group dropdown">
                              <button type="button" aria-haspopup="true" data-toggle="collapse" href="#collapseExample12345" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                              <i class="fa fa-chevron-circle-down pl-2" style="color: black; padding-right: 10px"></i>
                              </button>
                              </div>
                              </div>
                              </div>
                                <div class="card-body">
                                  <div class="" id="collapseExample12345" style="">
                                    <div>
                                      <div class="drawer-section p-0">
                                        <div class="files-box">
                                        <ul class="list-group list-group-flush">
                                        <?php
                                        $select_stmt=$conn->prepare("SELECT * FROM examinee_files WHERE uploader = $myID LIMIT 3");
                                        $select_stmt->execute();
                                        while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                          <li class="pt-2 pb-2 pr-2 list-group-item">
                                          <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                            <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                            <i class="pe-7s-file"></i>
                                            </div>
                                              <div class="widget-content-left mr-2">
                                                <div class="widget-heading font-weight-normal" style="margin-top: unset !important;">
                                                <?php 
                                                $lenthOfTxt = strlen ($row['file_name']);
                                                if($lenthOfTxt >= 30)
                                                { ?>
                                                <?php echo substr($row['file_name'], 0, 30);?>.....
                                                <?php }
                                                else
                                                {
                                                echo $row['file_name'];
                                                }
                                                ?>
                                                </div>
                                              </div>
                                              <div class="widget-content-right widget-content-actions">
                                              <button class="border-0 btn-transition btn btn-outline-warning"><a  href="query/downloadfile.php?file_id=<?php echo $row['file_id']; ?>" name="btn_download" >
                                              <i class="pe-7s-download" style="color: black"></i>
                                              </a>
                                              </button>
                                              </div>
                                              <div class="widget-content-right widget-content-actions">
                                              <button class="border-0 btn-transition btn btn-outline-warning">
                                              <a href="query/deletefile.php?file_id=<?php echo $row['file_id']; ?>" name="btn_download" class="btn-icon btn-icon-only btn btn-link btn-sm">
                                              <i class="pe-7s-trash"></i>
                                              </a>
                                              </button>
                                              </div>
                                              </div>
                                            </div>
                                            </li>
                                              <?php
                                              }
                                              ?>
                                          </ul>
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

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="dcalendar.picker.js"></script>
<script>
$('#demo').dcalendarpicker();
$('#calendar-demo').dcalendar(); //creates the calendar
</script>
<script>
$(document).ready(function(){
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
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>



            





               
          