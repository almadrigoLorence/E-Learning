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
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><img src="assets/images/exam1.png" height="40" width="40"></div>
                            <div>Activities
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="home.php?page=manage-activities" style="color: white">Activities List</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Edit Activity</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
            <div class="col-md-15">
               <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Assignment</h5>
                                        <form class="refreshFrm" id="UpdateAssFrm" method="post">
                                                          <?php 
                                                            $id = $_POST['ass_id'];
                                                            $selCourse = $conn->query("SELECT * FROM assignment_tbl WHERE ass_id = '$id'");
                                                            if($selCourse->rowCount() > 0)
                                                            {
                                                              while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)){?>
                                                                  <input type="hidden" name="act_id" value="<?php echo $id; ?>">
                                                                  <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Title</label>
                                                                      <div class="col-sm-10">
                                                                          <input name="actTitle" type="text" class="form-control"
                                                                           value='<?php echo $selCourseRow['ass_title']; ?>'>
                                                                      </div>
                                                                  </div>
                                                                  <div class="position-relative row form-group"><label class="col-sm-2 col-form-label"></label>
                                                                      <div class="col-sm-10">

                                                                 <textarea name="actDesc" id="description" rows="20"><?php echo $selCourseRow['ass_desc']; ?></textarea>
                                                               
                                                              <?php }
                                                            }
                                                            else
                                                            { ?>
                                                              <option value="0">Something went wrong.. please contact administrator.</option>
                                                            <?php }
                                                           ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Upload to</label>
                                                    <div class="form-group pl-4" style="width: 20%">
                                                        <select class="form-control chosen-select" name="courseSelected" required>
                                                          <option value="0">Select Course</option>
                                                          <?php 
                                                            $id = $_SESSION['instructor']['instructor_id'];
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
                                            </div>
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
            </div>
<script>
    CKEDITOR.replace('description');
</script>
</script>
  