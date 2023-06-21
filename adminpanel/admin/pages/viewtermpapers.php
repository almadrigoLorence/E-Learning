<?php

$id = $_GET['id'];
$selCourse = $conn->query("SELECT * FROM myterms  WHERE term_id = '$id' ORDER BY cou_id DESC")->fetch(PDO::FETCH_ASSOC);
$studentid = $selCourse['exmne_idd'];
$student = $conn->query("SELECT * FROM examinee_tbl where exmne_id = $studentid")->fetch(PDO::FETCH_ASSOC);
?>
<title>Manage Activities</title>
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
</style>
<div class="app-main__outer">
        <div class="app-main__inner">   
            <div class="app-page-title bg-slick-carbon text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><img src="assets/images/exam1.png" height="40" width="40"></div>
                            <div>
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php?page=manage-termpapers" style="color: white">Back</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Reaction Paper</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div> 
            <div class="col-md-12 mb-3">
                <div class="main-card card p-4">
                    <div class="justify-content-around d-flex">
                        <div>
                        <label>Submitted By:<strong class="ml-2"><?php echo $student['exmne_fullname']." ".$student['exmne_middle'].". ".$student['exmne_surname']; ?></strong class="ml-2"></label>
                        </div>
                        <div>
                        <label>Date Uploaded:<strong class="ml-2"><?php echo $selCourse['date_uploaded']; ?></strong class="ml-2"></label>
                        </div>
                        <div>
                        <label>Course/Section:<strong class="ml-2"><?php echo $selCourse['cou_id']; ?></strong class="ml-2"></label>
                        </div>
                        <div>
                        <label>Grade:
                            <strong class="ml-2">
                                <?php if ($selCourse['grade'] == "") {
                                        echo "Not graded";
                                      }else{
                                        echo $selCourse['grade']; 
                                      } ?>
                            </strong class="ml-2">
                        </label>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-15">
               <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form class="refreshFrm" id="addActFrm" method="post">
                                 <div class="form-group">                                                
                                    <h4><?php echo $selCourse['term_title']; ?></h4>
                                </div>
                                <hr>
                            <div class="form-group">
                            <p><?php echo $selCourse['term_desc']; ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

            
                        </div>
                    </div>
                </div>
            </div>
  