<?php include("includes/sidebar.php"); ?>

 <?php 
    $lessonId = $_GET['id'];
    $selLesson = $conn->query("SELECT * FROM lessons_tbl WHERE lesson_id='$lessonId' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div id="refreshData">
            
    <div class="col-md-12">
        <div class="app-page-title">
           <!--  <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        Lesson Title: <strong><?php echo $selLesson['lesson_title']; ?></strong>
                        <div class="page-title-subheading">
                        Date Uploaded: <u><strong style="color: black;"><?php echo $selLesson['date_uploaded']; ?></strong></u>
                                </div>

                    </div>
                </div>
            </div> -->
        </div>  

           <div class="main-card mb-3 card" style="border-radius: 15px;">
                                            <div class="card-body"><h5 class="card-title"></h5>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg10-0" class="active nav-link">Lesson Details</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg10-1" class="nav-link">Description</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg10-2" class="nav-link">File</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg10-0" role="tabpanel"><p><?php echo $selLesson['lesson_title']; ?>
                                                        <div><?php echo $selLesson['date_uploaded']; ?></p></div>
                                                       
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg10-1" role="tabpanel"><p></p>
                                                     <div class="col-md-16"><?php echo $selLesson['lesson_desc']; ?></p></div>
                                                     <div class="col-md-6"><hr>Uploaded by: </p></div></div>
                                                    <div class="tab-pane" id="tab-eg10-2" role="tabpanel"><p>File Name: </p></div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
            </div>
          