<?php

$id = $_GET['id'];
$selCourse = $conn->query("SELECT * FROM myterms  WHERE term_id = '$id'")->fetch(PDO::FETCH_ASSOC);
// $studentid = $selCourse['exmne_idd'];
// $student = $conn->query("SELECT * FROM examinee_tbl where exmne_id = $studentid")->fetch(PDO::FETCH_ASSOC);
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
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d"><?php echo $selCourse['term_title']; ?></li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div> 

                            <div class="main-card mb-3 card">
                                            <div class="card-body">
                                             <!--    <div class="text-center">
                                                    <button class="btn btn-lg btn-success start-tour">Start Tour</button>
                                                </div> -->
                                                <div class="divider"></div>
                                                <div class="jumbotron" data-step="1" data-intro="This is a tooltip!">
                                                    <h1 class="display-4"><?php echo $selCourse['term_title']; ?></h1>
                                                    <p class="lead"><!-- Submitted by: <strong><?php echo $student['exmne_fullname']." ".$student['exmne_middle'].". ".$student['exmne_surname']; ?></strong> -->
                                                    </p>
                                                    <hr class="my-4">
                                                    <p>
                                                       Date submitted: <?php echo $selCourse['date_uploaded']; ?>
                                                       <br>
                                                       Course/Section: <?php echo $selCourse['cou_id']; ?>
                                                       <br>
                                                       Grade: <span style="color: green">
                                                        <?php if ($selCourse['grade'] == "") {
                                                                    echo "Not graded";
                                                                  }else{
                                                                    echo $selCourse['grade']; 
                                                                  } ?>
                                                                  </span>
                                                    </p>
                                                </div>
                                                <p><form class="refreshFrm" id="addActFrm" method="post">
                                                <span class="text-muted">Body:</span>
                                                <hr>
                                              <div class="form-group">
                                                <p><?php echo $selCourse['term_desc']; ?></p>
                                              </div>
                                                    </form>
                                            </p>
                                            </div>
                                        </div> 
                        </div>
                    </div>
                </div>
            </div>
  