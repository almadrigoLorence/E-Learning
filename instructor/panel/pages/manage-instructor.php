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
   .btn-outline-warning{
        color: black;
        border-color: transparent;
   }
</style>
<title>List of Instructors</title>
<style>
    .iziModal-header-title{
        color:#343a40;
    }
</style>
<link rel="stylesheet" type="text/css" href="css/mycss.css">


<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                          <div class="page-title-icon"></i></div>
                            <div>Manage Instructors Account
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page">Instructors List</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>        
            
            <div class="col-md-15">
                 <div class="float-right">
                 <button class="btn btn-warning" data-toggle="modal" data-target="#modalForAddInstructor"><i class="fa fa-user-plus"></i> Add new</button>
                 </div>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                              <center>
                                <th>Fullname</th>
                                <th class="text-center">Sex</th>
                                <th class="text-center">Birthdate</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Assigned Course and Section</th>
                                <th><center>Status<center></th>
                                <th><center>Option<center></th>
                                </center>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selInstrctr = $conn->query("SELECT * FROM instructors_tbl ORDER BY instructor_id DESC ");
                                if($selInstrctr->rowCount() > 0)
                                {
                                    while ($selInstrctrRow = $selInstrctr->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                           <td><?php echo $selInstrctrRow['instructor_surname']; ?>, <?php echo $selInstrctrRow['instructor_fullname']; ?> <?php echo $selInstrctrRow['instructor_middle']; ?>.</td>
                                           <td align="center"><?php echo $selInstrctrRow['instructor_gender']; ?></td>
                                           <td align="center"><?php echo $selInstrctrRow['instructor_bdate']; ?></td>
                                           <td align="center"><span style="color: blue"><?php echo $selInstrctrRow['instructor_email']; ?></span></td>
                                           <td align="center"> <?php 
                                                 $assignedCourse = $selInstrctrRow['cou_id'];
                                                 $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$assignedCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                 echo $selCourse['cou_name'];
                                             ?></strong> </td>
                                           <td align="center"><div class="badge badge-pill badge-success"><?php echo $selInstrctrRow['instructor_status']; ?></div></td>
                                           <td align="center">
                                              
                                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-warning" onclick="openModal(<?php echo $selInstrctrRow['instructor_id']; ?>)"><i class="pe-7s-note btn-icon-wrapper"></i> Edit</button>

                                           </td>
                                        </tr>
                                    <?php }
                                }
                               ?>
                            </tbody>
                        </table>
                    </div>
                     <div class="float-right">
                    <button class="btn btn-success"><i class="pe-7s-print"></i> Print table</button>
            </div>
            </div>
            </div>
            <div id="izi-modal" data-izimodal-group="" data-izimodal-loop="" data-izimodal-title="Edit Instructor Profile" style="display:none;">
            <form method="post" id="updateInstructorFrm">
                
                <div class="col-md-12 waitme-container">
                    <div class="form-group">
                        <legend>Name</legend>
                        <input type="hidden" name="instructor_id" value="">
                        <input type="" name="tFullname" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <legend>Surname</legend>
                        <input type="hidden" name="instructor_id" value="">
                        <input type="" name="tSurname" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <legend>Middle Initial</legend>
                        <input type="hidden" name="instructor_id" value="">
                        <input type="" name="tMiddle" class="form-control" value="" >
                    </div>
                    <div class="form-group" required>
                        <legend>Gender</legend>
                        <select class="form-control chosen-select" name="tGender">
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <legend>Birthdate</legend>
                        <input type="date" name="tBdate" class="form-control" required value=""/>
                    </div>

                    <div class="form-group">
                        <legend>Email</legend>
                        <input type="email" name="tEmail" class="form-control" required value="" >
                    </div>


                    <div class="input-group">
                       <input type="password" name="tPass" class="form-control" id="password" autocomplete="off" aria-describedby="inputGroupPrepend" required="" style="height: 30px; margin-top: 10px;">
                       <div class="input-group-prepend" style="height: 30px; margin-top: 10px;">
                       <span class="input-group-text" id="inputGroupPrepend"> <i toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></i></span>
                       </div>
                       <div class="invalid-feedback">
                       Please.
                       </div>
                       </div>


                        </div>
                <div class="col-md-12" align="right" style="padding-bottom:10px;">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
</form>
</div>
<script>
$('#izi-modal').iziModal({
    headerColor: '#f9f9f9',
    width: '50%',
    overlayColor: 'rgba(0, 0, 0, 0.5)',
    fullscreen: true,
    transitionIn: 'fadeInUp',
    transitionOut: 'fadeOutDown',
});
function openModal(id){
    $('#izi-modal').iziModal('open');
    $('.form-control').val('');
    $('input[name=instructor_id]').val(id);
    $('.waitme-container').waitMe({
        effect : 'bounce',
        text : '',
        bg : 'rgba(255,255,255,0.7)',
        color : '#000'
    });
    $.ajax({
        url: "query/getInstructorInfo.php",
        method: 'get',
        data:{
            'id':id 
        },
        dataType:'json',
        complete: function(response){
            $('.waitme-container').waitMe("hide");
        },
        success: function(response) {
            $('input[name=tFullname]').val(response.instructor_fullname);
            $('input[name=tSurname]').val(response.instructor_surname);
            $('input[name=tMiddle]').val(response.instructor_middle);
            $('select[name=tGender]').val(response.instructor_gender).trigger('chosen:updated');
            $('input[name=tBdate]').val(response.instructor_bdate);
            $('input[name=tEmail]').val(response.instructor_email);
            $('input[name=tPass]').val(response.instructor_pass);
        },
        error: function (response){

        }
    });
    $('.iziModal-header-title').css("color","black");
    $('.iziModal-header-title').css("font-size","1.25rem");
    // $('.iziModal-header-buttons').css("color","#343a40");
    $('.iziModal-header-buttons').css("font-size","1.25rem");
}
$(document).ready(function(){
// $('[data-toggle="tooltip"]').tooltip();
$('.data-table').dataTable({
    "iDisplayLength": 10,
    "aLengthMenu": [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]
    ],
    responsive: true,
    "order": []
});
});
</script>
         
<script >
              $(".toggle-password").click(function() {
              $(this).toggleClass("fa-eye fa-eye-slash");
              var input = $($(this).attr("toggle"));
              if (input.attr("type") == "password") {
                input.attr("type", "text");
              } else {
                input.attr("type", "password");
              }
            });
           </script> 
