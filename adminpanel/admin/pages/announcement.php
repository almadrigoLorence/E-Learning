<title>Announcements</title>
<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                             <i class="fa fa-list-alt fa-1x">
                            </i>
                        </div>
                        <div>List of Announcements 
                            <strong><div class="page-title-subheading text-white" style="color: black;">Note: Be careful on removing announcements!
                            </div></strong>
                             <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Announcements</li>
                                                    </ol>
                                                </nav> 
                                        </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                    </div>   
                 </div>
            </div>                
            <div class="col-md-15">
                        <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 25px;">
                        <!-- <center><button class="btn btn-danger" data-toggle="modal" data-target="#modalForAddAnnouncement"><i class="fa fa-bell"></i> Post Announcement</button></center> -->
                        <table width="100%" class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th class="text-left" width="80%">Announcements</th>
                                <!-- <th class="text-center">Date Posted</th> -->
                            </tr>
                            </thead>
                            <tbody style="background-color: transparent;">
                            <tr>
                            <?php
                            $query = $conn->query("SELECT * FROM announcement_tbl WHERE 1 ORDER BY ann_id DESC");
                            while($row = $query -> fetch(PDO::FETCH_OBJ)){
                            ?>
                                <td>
                                    <div class="card mb-3" style="background-color:">
                                                        <div class="card-body">
                                                            <div class="media">     
                                                               
                                                                <div class="media-body ml-4">
                                                                    <div class="float-right text-muted small">Author: 
                                                                    <?php 
                                                                      $authorid = $row->modified_by;
                                                                      if ($authorid == "Administrator") {
                                                                      echo "Administrator";
                                                                      }else{
                                                                      $authordetails = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id = $authorid ")->fetch(PDO::FETCH_ASSOC);
                                                                      echo $authordetails['instructor_fullname']." ".$authordetails['instructor_middle'].". ".$authordetails['instructor_surname'];
                                                                      }
                                                                      ?>
                                                                          
                                                                      </div>
                                                                    <a href="#" style="color: green"><?php echo $row->ann_title?></a>
                                                                    <div class="text-muted small"><?php echo $row->date_modified; ?> &nbsp;·&nbsp; </div>
                                                                    <div class="mt-2 pl-4">
                                                                        <?php echo $row->ann_desc;?>
                                                                    </div>
                                                                    <div class="small mt-2">
                                                                        <!-- a href="javascript:void(0)" style="color: green">Info:</a>
                                                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                                                            <i class="fa fa-calendar bg-sunny-morning"></i> <?php echo $row->ann_start.' - to -'.$row->ann_end;?>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="text-muted ml-3">
                                                                            <i class="fa fa-calendar" style="color: red;"></i>
                                                                        </a> -->
                                                                        <span class="float-right">
                                                                         <button class="btn btn-success" style="background-color: transparent; border-color: transparent;"><i class="fa fa-edit" style="color: black" onclick="openModal(<?php echo $row->ann_id;?>)"></i></button>
                                                                         <button class="btn btn-success" style="background-color: transparent; border-color: transparent;" id="deleteAnnouncement" data-id='<?php echo $row->ann_id;?>' ><i class="fa fa-trash" style="color: black"></i></button>
                                                                        </span>
                                                                    </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                    </div>
                                 </td>
                        <!-- <td class="float-right">
                            <div class="card">
                            <div class="card-body">
                            <div class="media">
                            <div class="media-body">
                            <div class="small mt-2">
                            <?php echo $row->date_modified;?>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </td> -->
                    </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
          </div>
          <div id="izi-modal" data-izimodal-group="" data-izimodal-loop="" data-izimodal-title="Update Announcement" style="display:none;">
            <form class="refreshFrm" id="updateAnnouncementFrm" method="post">    
                <input type="hidden" name="update_assign_course_array" value="">
                <input type="hidden" name="announcement_id" value="">
                <div class="col-md-12" id="announcement-container">
                     <div class="form-group">
                        <label>Title</label>
                        <textarea name="title" id="title" class="form-control" required rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control" required rows="10"></textarea>
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
            <select class="form-control" id="update_assign_course" name="update_assign_course" multiple>
                <option value=""></option>
                <?php
                $query = $conn->query("SELECT * FROM course_tbl  WHERE 1");
                while($row = $query -> fetch(PDO::FETCH_OBJ)){
                ?>
                <option value="<?php echo $row->cou_id;?>"><?php echo $row->cou_name;?></option>
                <?php } ?>
            </select>
        </div>
                    <div class="form-group" align="right">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    <div><center><button class="btn btn-danger" id="myBtn" >Back to Top</button></center></div><br>
</div>
</div>

<script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
  
  $('#myBtn').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
</script>
<!--  <script>
    CKEDITOR.replace('description');
  </script> -->
<script>
$('#izi-modal').iziModal({
    headerColor: '#3ac47d',
    width: '50%', 
    overlayColor: 'rgba(0, 0, 0, 0.5)',
    fullscreen: true,
    transitionIn: 'fadeInUp',
    transitionOut: 'fadeOutDown',
});
$('#update_assign_course').chosen({
    no_results_text: "Oops, nothing found!",
    width: '100%',
}).change(function(){
    $('input[name=update_assign_course_array]').val($('#update_assign_course').val());
});
function openModal(id){
    $('#izi-modal').iziModal('open');
    $('.form-control').val('');
    $('#announcement-container').waitMe({
        effect : 'bounce',
        text : '',
        bg : 'rgba(255,255,255,0.7)',
        color : '#000'
    }); 
    $.ajax({
        url: "query/getAnnouncementInfo.php",
        method: 'get',
        data:{
            'id':id 
        },
        dataType:'json',
        complete: function(response){
            $('#announcement-container').waitMe("hide");
        },
        success: function(response) {
            $('input[name=announcement_id]').val(response.ann_id);
            $('#title').val(response.ann_title);
            $('#description').val(response.ann_desc);
            $('#date_from').val(response.ann_start);
            $('#date_to').val(response.ann_end);
            var course_array = [];
            var course = response.course_id;
            var res = course.split(",");
            $(res).each(function( index ) {
                course_array.push(res[index]);
            });
            $('input[name=update_assign_course_array]').val(response.course_id);
            $('#update_assign_course').val(course_array).trigger('chosen:updated');
        },
        error: function (response){

        }
    });
    $('.iziModal-header-title').css("color","black");
    $('.iziModal-header-title').css("font-size","1.25rem");
    $('.iziModal-header-buttons').css("font-size","1.25rem");
    // $('#announcement-container').waitMe("hide");
}

$(document).ready(function(){
// $('[data-toggle="tooltip"]').tooltip();
$('#data-table').dataTable({
    "iDisplayLength": 5,
    "aLengthMenu": [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]
    ],
    responsive: true,
    "order": []
});
});
</script>