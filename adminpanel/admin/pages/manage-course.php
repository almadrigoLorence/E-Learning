<title>Course and Section</title>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
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
            <div class="app-page-title bg-slick-carbon text-light">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                           <div class="page-title-icon" style="background-color: transparent;"><img src="assets/images/Cavite_State_University.png" height="50" width="50" style="margin-left: -4px"></div>
                            <div>Course and Section
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Course & Section Table</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>        

            <div class="col-md-15">
              <div class="float-right">
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalForAddCourse"><i class="fa fa-plus"></i> Add new</button>
              </div>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList" style="background-color: transparent;">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Course and Section</th>
                                <th class="text-left pl-4">Assigned Instructor</th>
                           <!--      <th class="text-center">Students Limit</th> -->
                                <th class="text-center" width="20%">Option</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selCourse = $conn->query("SELECT course_tbl.*,instructors_tbl.instructor_fullname, instructors_tbl.instructor_surname, instructors_tbl.instructor_middle FROM course_tbl LEFT JOIN instructors_tbl ON course_tbl.cou_instructor = instructors_tbl.instructor_id ORDER BY cou_id DESC ");
                                if($selCourse->rowCount() > 0)
                                {
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { 
                                        $cid = $selCourseRow['cou_id'];
                                        $crow = $selCourseRow['cou_name'];
                                        ?>
                                        <tr>
                                            <td class="pl-4">
                                                <i class="pe-7s-study"></i> <?php echo $selCourseRow['cou_name']; ?>
                                            </td>
                                            <td class="pl-4">
                                                <?php echo $selCourseRow['instructor_surname']; ?>, <?php echo $selCourseRow['instructor_fullname']; ?> <?php echo $selCourseRow['instructor_middle']; ?>. 
                                            </td>
                                            <td class="text-center">
                                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-success" style="color: black; border-color: transparent;" type="button"  onclick="openModal(<?php echo $selCourseRow['cou_id']; ?>)"><i class="pe-7s-note btn-icon-wrapper"></i> Edit </button>
                                                <a href="#" class="btn btn-success" 
                                                onclick="openModalSection(<?php echo "'".$cid."'".","."'".$crow."'" ?>)">View Section</a>
                                               
                                            </td>
                                        </tr>

                                    <?php }
                                }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="float-right">
                    <button class="btn btn-success"><i class="pe-7s-print"></i> Print table</button>
            </div>
        </div>
        <div id="izi-modal" data-izimodal-group="" data-izimodal-loop="" data-izimodal-title="Manage Course and Sections" style="display:none;">
            <form method="post" id="updateCourseFrm">
            <input type="hidden" name="course_id" value="">
            <div class="col-md-12"  id="announcement-container">
                <div class="form-group">
                    <label>Note: Please be sure to input the right Course and Section: </label>
                    <input type="" name="course_name" id="course_name" class="form-control" placeholder="Input Course and Section (e.g. BSIT 4-4)" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Assign Instructor:</label>
                    <select class="form-control chosen-select" name="instructor" id="prof">
                        <option value="0">Instructors List</option>
                        <?php 
                        $selCourse = $conn->query("SELECT * FROM instructors_tbl ORDER BY instructor_id asc");
                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $selCourseRow['instructor_id']; ?>"><?php echo $selCourseRow['instructor_fullname']; ?> <?php echo $selCourseRow['instructor_middle']; ?>. <?php echo $selCourseRow['instructor_surname']; ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                </div>
            </form>
        </div>
        <div id="izi-modalSection" data-izimodal-group="" data-izimodal-loop="" data-izimodal-title="BSIT 4-6" style="display:none;">
            <form method="post" id="viewSection">
            <input type="hidden" name="secion_id" value="">
            <div class="col-md-12"  id="announcement-container">
                <div class="form-group">
                    <label>List of enrolled students on this section</label><span></span>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList" style="background-color: transparent;">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Student #</th>
                                <th class="text-left pl-4">Student Name</th>
                            </tr>
                            </thead>
                            <tbody id="tbl_viewSection">
                              <?php 
                                $selCourse = $conn->query("SELECT * FROM examinee_tbl");
                                if($selCourse->rowCount() > 0)
                                {
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4">
                                                <i class="pe-7s-study"></i> <?php echo $selCourseRow['exmne_stud_number']; ?>
                                            </td>
                                            <td class="pl-4">
                                                <?php echo $selCourseRow['exmne_surname']; ?>, <?php echo $selCourseRow['exmne_fullname']; ?> <?php echo $selCourseRow['exmne_middle']; ?>. 
                                            </td>
                                        </tr>

                                    <?php 
                                    }
                                }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
$('#izi-modalSection').iziModal({
    headerColor: '#f9f9f9',
    width: '50%',
    overlayColor: 'rgba(0, 0, 0, 0.5)',
    fullscreen: true,
    transitionIn: 'fadeInUp',
    transitionOut: 'fadeOutDown',
});
function openModal(id){
    $('input[name=course_id]').val(id);
    $('#izi-modal').iziModal('open');
    $('.form-control').val('');
    $('.chosen-select').val('').trigger('chosen-updated');
    $('#announcement-container').waitMe({
        effect : 'bounce',
        text : '',
        bg : 'rgba(255,255,255,0.7)',
        color : '#000'
    }); 
    $.ajax({
        url: "query/getCourseInfo.php",
        method: 'get',
        data:{
            'id':id 
        },
        dataType:'json',
        complete: function(response){
            $('#announcement-container').waitMe("hide");
        },
        success: function(response) {
            console.log(response);
            $('input[name=course_name]').val(response.cou_name);
            $('select[name=instructor]').val(response.cou_instructor).trigger('chosen:updated');
        },
        error: function (response){

        }
    });
    $('.iziModal-header-title').css("color","black");
    $('.iziModal-header-title').css("font-size","1.25rem");
    $('.iziModal-header-buttons').css("font-size","1.25rem");
    // $('#announcement-container').waitMe("hide");
}
function openModalSection(id,name){
    let n = name;
    $('input[name=course_id]').val(id);
    $('#izi-modalSection').iziModal('open');
    $('.form-control').val('');
    $('.chosen-select').val('').trigger('chosen-updated');
    $('#announcement-container').waitMe({
        effect : 'bounce',
        text : '',
        bg : 'rgba(255,255,255,0.7)',
        color : '#000'
    }); 
    $.ajax({
        url: "query/getCourseInfo.php",
        method: 'get',
        data:{
            'id':id 
        },
        dataType:'json',
        complete: function(response){
            $('#announcement-container').waitMe("hide");
        },
        success: function(response) {
            console.log(response);
            $('input[name=course_name]').val(response.cou_name);
            $('select[name=instructor]').val(response.cou_instructor).trigger('chosen:updated');
            $('#tbl_viewSection').load("query/tbl_viewSectionExe.php",{sid:id},function(){

            });   
        },
        error: function (response){

        }
    });
    $('.iziModal-header-title').html(n);
    $('.iziModal-header-title').css("color","black");
    $('.iziModal-header-title').css("font-size","1.25rem");
    $('.iziModal-header-buttons').css("font-size","1.25rem");
    // $('#announcement-container').waitMe("hide");
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
         
