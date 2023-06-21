// Admin Log in
$(document).on("submit","#examineeLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Invalid Account',
          'Wrong Credentials (Please contact Administrator for more Info)',
          'error'
        )
      }
      else if(data.res == "success")
      {
        $('body').fadeOut();
        window.location.href='home.php';
      }
   },'json');

   return false;
});
 




// Submit Answer
$(document).on('submit', '#submitAnswerFrm', function(){
  var examAction = $('#examAction').val();

  if(examAction != "")
  {
    Swal.fire({
    title: 'Time Out',
    text: "Your time is over, please click ok",
    icon: 'warning',
    showCancelButton: false,
    allowOutsideClick: false,
    confirmButtonColor: '#3ac47d',
    cancelButtonColor: '#d33',
    confirmButtonText: 'OK!'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){
    alert(data.res);

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Already Finished',
         "You're done with this activity / exam ",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Success!',
            text: "Your answer is successfully submitted!",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6', 
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           var quiz_id = $("#quiz_id").val();



           if (exam_id == undefined) {


           window.location.href='home.php?page=quizresult&quiz_id=' + quiz_id; 
           }else{

           window.location.href='home.php?page=result&id=' + exam_id;
           }
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Something;s went wrong",
         'error'
       ) 
    }

   },'json');

}
});
  }
  else
  {
      Swal.fire({
    title: 'Done?',
    text: "Are you sure you want to submit your answer now?",
    icon: 'warning',
    showCancelButton: true,
    allowOutsideClick: false,
    confirmButtonColor: '#3ac47d',
    cancelButtonColor: 'red',
    confirmButtonText: 'Yes!'
}).then((result) => {
if (result.value) {
   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){
    alert(data.res);
    if(data.res == "alreadyFinish")
    {
       Swal.fire(
         'Ops',
         "You already finished this exam",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Success',
            text: "your answer successfully submitted!",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           var quiz_id = $("#quiz_id").val();

           if (exam_id == undefined) {

           window.location.href='home.php?page=quizresult&quiz_id=' + quiz_id; 
           }else{

           window.location.href='home.php?page=result&id=' + exam_id;
           }
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Something;s went wrong",
         'error'
       ) 
    }

   },'json');

}
});
  }

return false;
});


// Submit Feedbacks
$(document).on("submit","#addFeebacks", function(){
   $.post("query/submitFeedbacksExe.php", $(this).serialize(), function(data){
      if(data.res == "limit")
      {
        Swal.fire(
          'Error',
          'You reached the 3 limit maximum for feedbacks',
          'error'
        )
      }
      else if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'your feedbacks has been submitted successfully',
          'success'
        )
          $('#addFeebacks')[0].reset();
        
      }
   },'json');

   return false;
});

// For Button
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

  
// Disable Refresh button
  function disable_f5(e)
{
  if ((e.which || e.keyCode) == 116)
  {
      e.preventDefault();
  }
}

$(document).ready(function(){
    $(document).bind("keydown", disable_f5);    
});


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
        


  $('#search_field').on('keyup', function() {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $('#myTable').find('tr').each(function() {
    if (!($(this).find('td').text().search(patt) >= 0)) {
      $(this).not('.myHead').hide();
    }
    if (($(this).find('td').text().search(patt) >= 0)) {
      $(this).show('No result');
    }

  });
});



  
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

  // Update Profile
$(document).on("submit","#generaldetails", function(){
   $.post("query/updategeneraldetailsexe.php", $(this).serialize(), function(data){
      if(data.res == "failed")
      {
        Swal.fire(
          'Error',
          'Please restart your browser or contact your Administrator',
          'error'
        )
      }
       if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'your general details has been updated successfully',
          'success'
        )        
      }
   },'json');

   return false;
});

$(document).on("submit","#otherinformations", function(){
   $.post("query/updateotherinformationexe.php", $(this).serialize(), function(data){
      if(data.res == "failed")
      {
        Swal.fire(
          'Error',
          'Please restart your browser or contact your Administrator',
          'error'
        )
      }
       if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'your other informations has been updated successfully',
          'success'
        )        
      }
   },'json');

   return false;
});
$("#notif").load('includes/notif.php');
$("#topnotif").load('includes/topnotif.php');
setInterval(function(){
$("#topnotif").load('includes/topnotif.php');
$("#notif").load('includes/notif.php');
},5000);

$("#changePassword").on("submit",function(e){
          e.preventDefault();
          $.ajax({
           url: "query/changePasswordExe.php",
           type:"POST",
           data:new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           dataType:"JSON",
           beforeSend: function() {
              var n = $("#newPassword").val();
              var cn = $("#confirmPassword").val();
              if (n == cn) {

                return true;
                
              }else{
                $("#WrongPass").removeClass("text-hide");
                $("#confirmPassword").css("border","1px solid red");
                $("#currentPassword").css("border","1px solid red");
                $("#newPassword").css("border","1px solid red");
                alert("Incorrect Old password or Password doesnt matches")
                return false;
              }
           },
           success: function(data)
              {
                alert(data.res);
                $("#changePassword")[0].reset();
              },
             error: function(e) 
              {
                alert(e);
              }          
            });
 }); 