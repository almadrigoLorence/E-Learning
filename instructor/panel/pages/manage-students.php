<title>Students Account Section</title>
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
    @media print {
  * {
    display: none;
  }

  #printableTable input{
    display: none;
  }
  #printableTable {
    display: block;
  }
}
   
</style>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"></div>
                            <div>Students Account Section
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Students Account Table</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>        
            <div class="col-md-15">
                <div class="float-right">
<!--                 <button class="btn btn-warning" data-toggle="modal" data-target="#modalForAddExaminee"><i class="fa fa-user-plus"></i> Add new</button> -->
                </div>
                    <div class="table-responsive" id="printableTable" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                              <center>
                                <th class="text-center">Student Number</th>
                                <th class="text-center">Fullname</th>
                                <th class="text-center">Sex</th>
                                <th class="text-center">Course & Section</th> 
                                <th class="text-center">Year level</th>
                                <th class="text-center">Birthdate</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Status</th>
                                </center>
                            </tr>
                            </thead>
                            <tbody>
                              <center>
                              <?php 
                                $myid = $_SESSION['instructor']['instructor_id'];
                                $selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_course IN (Select cou_id from course_tbl WHERE cou_instructor ='$myid')");
                                if($selExmne->rowCount() > 0)
                                {
                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                           <td align="center"><strong><?php echo $selExmneRow['exmne_stud_number']; ?></strong></td>
                                           <td><?php echo $selExmneRow['exmne_surname'];?>, <?php echo $selExmneRow['exmne_fullname'];?> <?php echo $selExmneRow['exmne_middle'];?>.</td>
                                           <td align="center"><?php echo $selExmneRow['exmne_gender']; ?></td>
                                           <td align="center"><strong><i class="pe-7s-study"></i> 
                                            <?php 
                                                 $exmneCourse = $selExmneRow['exmne_course'];
                                                 $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                 echo $selCourse['cou_name'];
                                             ?></strong> 
                                            </td>
                                           <td align="center"><?php echo $selExmneRow['exmne_year_level']; ?></td>
                                           <td align="center"><?php echo $selExmneRow['exmne_birthdate']; ?></td>
                                           <td align="center"><?php echo $selExmneRow['exmne_email']; ?></td>
                                           <td align="center"><div class="badge badge-pill badge-success"><?php echo $selExmneRow['exmne_status'];?></div></td>
<!--                                            <td align="center">
                                               <button type="button" onclick="openModal(<?php echo $selExmneRow['exmne_id']; ?>)" class="mr-2 btn-icon btn-icon-only btn btn-warning"><i class="pe-7s-note"></i> Edit </button>
                                           </td> -->
                                        </tr>
                                    <?php }
                                }
                            
                               ?>
                             </center>
                            </tbody>
                        </table>
                    </div>
                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                    <div class="float-right">
                        <button class="btn btn-success" onclick="printDiv()"><i class="pe-7s-print"></i> Print table</button>
                    </div>
            </div>
            
            </div>
            <div id="izi-modal" data-izimodal-group="" data-izimodal-loop="" data-izimodal-title="Edit Student Profile" style="display:none;">
            <form method="post" id="updateExamineeFrm">
            <input type="hidden" name="examinee_id" value="">
            <div class="col-md-12 waitme-container">
                <div class="form-group">
                    <label>Student Number</label>
                    <input type="number" name="stud_number" id="stud_number" class="form-control" autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Fullname</label>
                    <input type="" name="fullname" id="fullname" class="form-control"  autocomplete="off" required="">
                </div>
                 <div class="form-group">
                    <label>Surname</label>
                    <input type="" name="surname" id="surname" class="form-control" autocomplete="off" required="">
                </div>
                 <div class="form-group">
                    <label>Middle Initial</label>
                    <input type="" name="middleIni" id="middleIni" class="form-control"  autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Birthdate</label>
                    <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" >
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control chosen-select" name="gender" id="gender">
                        <option value="0">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Course</label>
                    <select class="form-control chosen-select" name="course" id="course">
                        <option value="0">Select course</option>
                        <?php 
                        $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year Level</label>
                    <select class="form-control chosen-select" name="year_level" id="year_level">
                        <option value="0">Select year level</option>
                        <option value="First year">First Year</option>
                        <option value="Second year">Second Year</option>
                        <option value="Third year">Third Year</option>
                        <option value="Fourth year">Fourth Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
                </div>
                <div class="form-group">



               <div class="input-group">
               <input type="password" name="password" class="form-control" id="password" autocomplete="off" aria-describedby="inputGroupPrepend" required="" style="height: 30px; margin-top: 10px;">
               <div class="input-group-prepend" style="height: 30px; margin-top: 10px;">
               <span class="input-group-text" id="inputGroupPrepend"> <i toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></i></span>
               </div>
               <div class="invalid-feedback">
               Please.
               </div>
               </div>
                    
                </div>
                <div class="form-group" align="right">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
            </form>
            </div>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script>
            $('#izi-modal').iziModal({
                headerColor: '#3ac47d',
                width: '50%',
                overlayColor: 'rgba(0, 0, 0, 0.5)',
                fullscreen: true,
                transitionIn: 'fadeInUp',
                transitionOut: 'fadeOutDown',
            });
            function openModal(id){
                $('input[name=examinee_id]').val(id);
                $('#izi-modal').iziModal('open');
                $('.form-control').val('');
                $('.waitme-container').waitMe({
                    effect : 'bounce',
                    text : '',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000'
                }); 
                $.ajax({
                    url: "query/getStudentsInfo.php",
                    method: 'get',
                    data:{
                        'id':id 
                    },
                    dataType:'json',
                    complete: function(response){
                        $('.waitme-container').waitMe("hide");
                    },
                    success: function(response) {
                        console.log(response);
                        $('#stud_number').val(response.exmne_stud_number);
                        $('#fullname').val(response.exmne_fullname);
                        $('#surname').val(response.exmne_surname);
                        $('#middleIni').val(response.exmne_middle);
                        $('#bdate').val(response.exmne_birthdate);
                        $('#gender').val(response.exmne_gender).trigger('chosen:updated');
                        $('#course').val(response.exmne_course).trigger('chosen:updated');
                        $('#year_level').val(response.exmne_year_level).trigger('chosen:updated');
                        $('#email').val(response.exmne_email);
                        $('#password').val(response.exmne_password);
                        
                    },
                    error: function (response){

                    }
                });
                $('.iziModal-header-title').css("color","black");
                $('.iziModal-header-title').css("font-size","1.25rem");
                $('.iziModal-header-buttons').css("font-size","1.25rem");
                $('#announcement-container').waitMe("hide");
            }
            $(document).ready(function(){
            $('.data-table').dataTable({
                buttons: ['print'],
                "iDisplayLength": 100,
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                responsive: true,
                "order": []
            });
            });
       function printDiv() {
        $('#tableList_filter').hide();
        $("#tableList_length").hide();
        $("#tableList_info").hide();
        $("#tableList_paginate").hide();
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
        window.onafterprint = function(){
            $('#tableList_filter').show();
            $("#tableList_length").show();
            $("#tableList_info").show();
            $("#tableList_paginate").show();
        }
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