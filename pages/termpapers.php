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
          $errorMsg = "Your File to large Please Upload 50mb size";
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
<!-- <div class="app-main__outer"> -->
                        <div class="app-main__inner">
                            <div class="app-page-title bg-premium-dark text-white">
                                <div class="page-title-wrapper" >
                                      <div class="page-title-heading">
                                          <div class="page-title-icon" style="color: black"><i class="pe-7s-pen" height="40" width="40"></i></div>
                                            <div>Term Paper
                                                <div class="page-title-subheading">
                                                    <nav class="" aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                                        <li class="breadcrumb-item"><a href="home.php?page=myterms" style="color: white">List</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">New</li>
                                                        </ol>
                                                    </nav> 
                                                </div>
                                            </div>
                                      </div>
                                </div>
                            </div>     
                            <div class="main-card mb-3 card">
                                            <div class="card-body">
                                              <form class="refreshFrm" action="query/addtermpaper.php" method="post">
                                                <div class="divider"></div>
                                                <div class="jumbotron" data-step="1" data-intro="This is a tooltip!">
                                                    <h1 class="display-4">Title: <input name="actTitle" type="text" class="form-control"
                                                     value=''></h1>
                                                    <p class="lead"><strong><?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?></strong>
                                                      <br>
                                                      <div class="text-small"><?php echo $selExmneeData['exmne_stud_number'];?></div> 
                                                    </p>
                                                    <hr class="my-4">
                                                    <p>
                                                       Date today: <?php echo date("l jS \of F Y") ?>
                                                       <br>
                                                       Course and Section: <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?>
                                                       <br>
                                                    </p>
                                                </div>
                                                <p>
                                                <span class="text-muted">Answer</span>
                                                <hr>
                                              <div class="form-group">
                                                <p><textarea name="actDesc" id="description" rows="20"></textarea></p>
                                              </div>
                                            </p>
                                            <div>
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                            </div>
                                        </div> 
                        </div>
                    </div>
                </div>
            </div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
</script>
  