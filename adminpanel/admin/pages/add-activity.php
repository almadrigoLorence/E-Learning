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
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Add Activity</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
            <div class="col-md-15">
               <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Activity</h5>
                                        <form class="refreshFrm" id="addActFrm" method="post">
                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Activity title</label>
                                                <div class="col-sm-10"><input name="actTitle" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">add description</label>
                                                <div class="col-sm-10"><textarea name="actDesc" id="description" rows="20"></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Add Multimedia</label>
                                                <div class="col-sm-10">

                                                     <input type="file" name="multimedia" class="form-control" id="multimedia">
                                                    
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Upload to</label>
                                                    <div class="form-group pl-4" style="width: 20%">
                                                        <select class="form-control chosen-select" name="courseSelected">
                                                          <option value="0">Select Course</option>
                                                          <?php 
                                                            $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
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
  