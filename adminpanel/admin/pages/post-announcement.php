
<div class="app-main__inner">
<div class="app-main__outer">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <img src="assets/images/lesson-icon.jpg" height="40" width="40">
                                    </div>
                                    <div>
                                        <!-- <?php echo $selAct['act_title'] ;?> -->
                                        
                                        <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="breadcrumb-item"><a href="home.php?page=activities" style="color: white;">Activities</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page"><!-- <?php echo $selAct['act_title']; ?> --></li>
                                                    </ol>
                                                </nav> 
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>                        
                        <div class="card mb-3">
                            <div class="card-body py-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <span style="font-size: 19px;"><!-- <?php echo $selAct['act_title'] ?> --></span>
                                        <div class="text-muted small mt-1"> <!-- <?php echo $selAct['date_uploaded']?> --> &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Lorence Versola</a></div>
                                    </div>
                                </div>
                                <div class="card-body pl-4">
                                    <form class="refreshFrm" id="addAnnouncementFrm" method="post">
                                      <input type="hidden" name="assign_course_array" value="">
                                      <div class="modal-body">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="form-group">
                                                <label>Title</label>
                                                <textarea name="title" id="title" class="form-control" required rows="1"></textarea>
                                              </div>
                                              <div>
                                                <label>Description</label>
                                                 <textarea name="description" id="description" rows="10" cols="100"></textarea>
                                 
                                            </div>
                                            <div class="form-group">
                                                <label>Date From:</label>
                                                <input type="date" name="date_from" id="date_from" class="form-control" autocomplete="off" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Date To:</label>
                                                <input type="date" name="date_to" id="date_to" class="form-control" autocomplete="off" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Course:</label>
                                                <select class="chosen-select form-control" id="assign_course_array" name="assign_course_array" required multiple>
                                                  <option value=""></option>
                                                  <?php
                                                  $query = $conn->query("SELECT * FROM course_tbl  WHERE 1");
                                                  while($row = $query -> fetch(PDO::FETCH_OBJ)){
                                                  ?>
                                                  <option value="<?php echo $row->cou_id;?>"><?php echo $row->cou_name;?></option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                   </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                 <button type="submit" class="btn btn-success"><i class="fa fa-bullhorn"></i> Post Now</button>
                            </div>
                </div>
        </div>
    </div>
</div>
          
          