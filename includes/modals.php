
<!-- Modal For Add files-->
<div class="modal fade" id="modalForAddFiles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 200px;">
  <div class="modal-dialog modal-md" role="document">
   <form method="post" enctype="multipart/form-data">
     <div class="modal-content">
      <div class="modal-header bg-light text-dark">
        <span class="modal-title" id="exampleModalLabel">Add File</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group p-3">
            <input type="file" name="myFiles" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" data-dismiss="modal" class="btn btn-secondary" style="background-color: transparent; color: black; border-color: transparent">Cancel</button>
        <input type="submit" name="btn_insert" class="btn btn-success" value="Upload">
      </div>
    </div>
   </form>
  </div>
</div>

<!-- Modal For Update Display Picture-->
<!-- Modal For Add Img Profile -->
<div class="modal fade" id="displayPicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 10%">
  <div class="modal-dialog modal-md" role="document">
   <form class="refreshFrm" id="addprofileimgs" method="post" enctype="multipart/form-data" action="query/addProfileimgExe.php">
     <div class="modal-content">
      <div class="modal-header bg-ligh text-black">
        <span  class="modal-title" id="exampleModalLabel">Update Profile Picture</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="file" name="profileimg" id="userprofileimg" class="form-control" accept="image/x-png,image/gif,image/jpeg" required />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
   </form>
  </div>
</div>

<!-- Modal For Add Feedback -->
<div class="modal fade" id="feedbacksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 100px">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addFeebacks" method="post">
     <div class="modal-content">
      <div class="modal-header bg-light header-text-dark">
        <h5 class="modal-title" id="exampleModalLabel">Submit Feedbacks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Feedback AS</label><br>
            <?php 
               $selMe = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
             ?>
            <input type="radio" name="asMe" value="<?php echo $selMe['exmne_fullname']; ?>"> <?php echo $selMe['exmne_fullname']; ?> <?php echo $selMe['exmne_surname']; ?> <br>
            <input type="radio" name="asMe" value="Anonymous"> Anonymous
            
          </div>
          <div class="form-group">
           <textarea name="myFeedbacks" class="form-control" rows="3" placeholder="Input your feedback here.."></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="col">Close</button>
        <button type="submit" class="btn btn-warning"><i class="pe-7s-chat

"></i>Send</button>
      </div>
    </div>
   </form>
  </div>
</div>
<script type="text/javascript">
  $("#userprofileimg").change(function(){
    var file = this.files[0];
    var fileType = file["type"];
    var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
    if ($.inArray(fileType, validImageTypes) < 0) {
        alert("invalid file please use image");
        $("#userprofileimg").val('');
    }
});
</script>