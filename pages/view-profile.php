<?php include("includes/sidebar-profile.php"); ?>

<head>
  <link rel="css/myscss.css" type="text/css" >
</head>
<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                    <div class="page-title-heading">
                        <div>
                          <img src="assets/images/<?php echo $id.'/'.$selProfile['img'] ;?>" width="80" height="80" class="rounded-circle" style="border-radius: 50%;">
                   </div>
                         <ul></ul>
                            <div>
                              
                                 <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?><br>
                              <div class="page-title-subheading text-black"><strong>Student Number: </strong> <?php echo $selExmneeData['exmne_stud_number']; ?></div>
                                <div class="page-title-subheading"><strong>Course and Section:</strong> <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?> </div>
                            </div>    
                    </div> 
                    <div class="page-title-actions">
                      <!-- <button class="btn-shadow btn-wide btn-pill btn btn-light"> -->
                      <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse"></span>
                      <a href="home.php?page=edit-profile" class="btn-shadow btn-wide btn-pill btn btn-light"> <i class="fas fa-user-cog"></i> Edit Profile</a>
                      <!-- </button> -->
                    </div>                                  
                   </div>
                </div> 
                <h5>User Details</h5>       
                <div class="row">
                <div class="col-md-12" style="background-color: transparent;">
                                    <div id="accordion" class="accordion-wrapper">
                                        <div class="card tex-dark" >
                                            <div id="headingOne" class="card-header">
                                                <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block" style="background-color: transparent;">
                                                    <span class="m-0 p-0">General Information <i class="fa fa-angle-down"></i></span>
                                                </button>
                                            </div>
                                            <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show" style="">
                                                <div class="card-body">
                                                  <div class="row">
                                                  <div class="col-sm-2 pl-4" style="color: #3ac47d">
                                                    Firstname<ul></ul>
                                                    Surname <ul></ul>
                                                    Sex <ul></ul>
                                                    Age <ul></ul>
                                                    E-mail address<ul></ul>
                                                    Contact Number <ul></ul>
                                                    Address <ul></ul>
                                                    Birth Date <ul></ul>
                                                  </div>
                                                  <div class="col-sm-4" style="color: black;">
                                                     : <?php echo $selExmneeData['exmne_fullname']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_surname']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_gender']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_age']; ?> Y/O<ul></ul>
                                                     : <a href="#"><?php echo $selExmneeData['exmne_email']; ?></a><ul></ul>
                                                     : #<?php echo $selExmneeData['exmne_contact']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_address']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_birthdate']; ?><ul></ul>
                                                  </div>
                                                   <div class="col-sm-2 pl-4" style="color: #3ac47d">
                                                    Course & Section<ul></ul>
                                                    Year<ul></ul>
                                                    Status 
                                                  </div>
                                                  <div class="col-sm-2" style="color: black">
                                                     : <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?> <ul></ul>
                                                     <!-- : <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?> <ul></ul> -->
                                                     : <?php echo $selExmneeData['exmne_year_level'];?> <ul></ul>
                                                     : <span style="color: #3ac47d"><?php echo $selExmneeData['exmne_status'];?></span>
                                                  </div>
                                                  <div class="col-sm-2" style="color: #3ac47d">
                                                  </div>
                                                </div>
                                              </div>
                                              <br>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div id="headingTwo" class="b-radius-0 card-header">
                                                <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block collapsed">
                                                  <span class="m-0 p-0">Other Information <i class="fa fa-angle-down"></i></span></button>
                                            </div>
                                            <div data-parent="#accordion" id="collapseOne2" class="collapse" style="">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="col-sm-2 pl-4" style="color: #3ac47d">
                                                    Nationality<ul></ul>
                                                    Religion <ul></ul>
                                                    Civil Status <ul></ul>
                                                    Place of birth <ul></ul>
                                                    Name of Guardian/s<ul></ul>
                                                    Contact Number of Guardian/s <ul></ul>
                                                    Current Address <ul></ul>
                                                    Postal code <ul></ul>
                                                  </div>
                                                  <div class="col-sm-5" style="color: black;">
                                                     : <?php echo $selExmneeData['exmne_nationality']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_religion']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_civil_status']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_place_of_birth']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_guardian']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_guardian_contact']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_address']; ?><ul></ul>
                                                     : <?php echo $selExmneeData['exmne_address_postal']; ?><ul></ul>
                                                  </div>
                                                  </div>
                                                </div>
                                                 <center>
                                               <a href="home.php?page=edit-profile">Edit content</a>
                                              </center>
                                              <br>
                                            </div>
                                        </div>
                                    </div>
                </div>  
                </div>
     </div>
   </div>
   </div>



        <script>
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
          