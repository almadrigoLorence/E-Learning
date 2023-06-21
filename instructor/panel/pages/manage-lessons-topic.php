 <link rel="icon" type="image/png" href="img/favicon2.png">

<?php 
   $lessId = $_GET['id'];
   $selLess = $conn->query("SELECT * FROM lessons_tbl WHERE lesson_id='$lessId' ");
   $selLessRow = $selLess->fetch(PDO::FETCH_ASSOC);
   $courseId = $selLessRow['cou_id'];
   $selCourse = $conn->query("SELECT cou_name as courseSelected FROM course_tbl WHERE cou_id='$courseId' ")->fetch(PDO::FETCH_ASSOC);
    ?>
 <style type="text/css">
   .btn-warning{
    background-color: transparent;
    border-color: transparent;
   }
   .btn-success{
    background-color: transparent;
    border-color: transparent;
   }
 </style>
<title>Lesson: <?php echo $selLessRow['lesson_title']; ?></title>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><i class="pe-7s-notebook" style="color: black"></i></div>
                            <div>Add topic on: <?php echo $selLessRow['lesson_title'];?>
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="home.php?page=manage-lessons" style="color: white">Lesson Modules Table</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d"><?php echo $selLessRow['lesson_title'];?></li>
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
                           <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Lesson Information</div>
                          </div>
                          <div class="card-body">
                           <form method="post" id="updateLessonFrm">
                               <div class="form-group">
                                <label><i class="pe-7s-study"></i> Course</label>
                                <select class="form-control chosen-select" name="courseSelected" required="">
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

                              <div class="form-group">
                                <label><i class="pe-7s-note2"></i> Lesson Title</label>
                                <input type="hidden" name="lessId" value="<?php echo $selLessRow['lesson_id']; ?>">
                                <input type="" name="lessonTitle" class="form-control" required="" value="<?php echo $selLessRow['lesson_title']; ?>">
                              </div>  

                              <div class="form-group">
                                <label><i class="pe-7s-note2"></i> Lesson Description</label>
                                <textarea type="" rows="5" name="lessonDesc" class="form-control" required=""><?php echo $selLessRow['lesson_desc']; ?></textarea>
                              </div>  

                              <div class="form-group" align="right">
                                <button type="submit" class="btn btn-success btn-lg" style="color: black">Update</button>
                              </div> 
                           </form>                           
                          </div>
                  </div>
                  <div class="col-md-8">
                    <?php 
                        $selTopic = $conn->query("SELECT * FROM topics_tbl WHERE lesson_id='$lessId'");
                    ?>
                     <div class="main-card mb-3 card" >                          
                          <div class="card-body">
                            <button class="btn btn-sm btn-success " data-toggle="modal" data-target="#modalForAddTopic" style="color: black;"><i class="fa fa-plus"></i> Add new</button> 
                            <div class="float-right">
                              <div class="text-muted medium">Topics
                            <span class="badge badge-pill badge-danger ml-2">
                              <?php echo $selTopic->rowCount(); ?>
                            </span>
                          </div>
                          </div>
                            <hr>
                            <div class="scroll-area-sm" style="min-height: 550px;">
                               <div class="scrollbar-container"> 
                            <?php 
                               if($selTopic->rowCount() > 0)
                               {
                                while ($selTopicRow = $selTopic->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless" id="tableList">
                                        <tbody>
                                        <div class="card">
                                            <div class="card-shadow-secondary border mb-3 card card-body border-secondary">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="float-right">
                                                          <span>
                                                            <button class="btn btn-success"><a data-target="#modalForEditTopic" data-toggle="modal" onclick="modalForEditTopic(<?php echo $selTopicRow['topic_id']?>)" style="color: black"><i class="fa fa-edit"></i></a>
                                                            </button> 
                                                                <button class="btn btn-warning" id="deleteTopic" data-id='<?php echo $selTopicRow['topic_id']; ?>'><a href="#" style="color: black"><i class="fa fa-trash"></i></a></button>
                                                          </span>
                                                        </div>
                                                        <h5 style="color: green"><?php echo $selTopicRow['topic_title']?></h5>
                                                        <div class="mt-2 pl-4">
                                                            <?php echo $selTopicRow['topic_desc']; ?>
                                                        </div>
                                                        <br>
                                                        <?php  
                                                            if ($selTopicRow['files'] == "") {
                                                          
                                                        }else{?>
                                                              <div class="float-left">
                                                                Files:<?php echo " ".$selTopicRow['files'];?>
                                                              </div>
                                                          <?php

                                                        } 
                                                        ?>

                                                        <br>
                                                        <div class="float-right text-muted small">
                                                           Date: <?php echo $selTopicRow['date_uploaded']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </tbody>
                                    </table>
                              </div>
                                <?php }
                                }
                                else
                                { ?>
                                  <tr>
                                   <div class="text-muted-small">
                                      <span class="p-3">No topics at the moment</span>
                                   </div> 
                                  </tr>
                                <?php }
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
