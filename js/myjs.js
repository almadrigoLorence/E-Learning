
$(document).on("click","#startQuiz", function(){
    var thisId = $(this).data('id');
    Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      text: 'Do you want to start now? your time will start automatically',
      showCancelButton: true,
      confirmButtonColor: '#3ac47d',
      cancelButtonColor: '#f0ad4e',
      confirmButtonText: 'Yes!'
 }).then((result) => {
  if (result.value) {
         $.ajax({
          type : "post",
          url : "query/selExamAttemptExe.php",
          dataType : "json",  
          data : {thisId:thisId},
          cache : false,
          success : function(data){ 
            if(data.res == "alreadyExam")
            {
              Swal.fire(

                'Already Taken ',
                'You already taken this exam',
                'error',
                 '#3ac47d'
                
              )
            }
            else if(data.res == "takeNow")
            {
              window.location.href="home.php?page=exam&id="+thisId;
              return false;
            }
          },
          error : function(xhr, ErrorStatus, error){
            console.log(status.error);
          }

        });
  }
 });
  return false;
})
$(document).on("click","#startQuiz2", function(){
    var thisId = $(this).data('id');
    Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      text: 'Do you want to start now? your time will start automatically',
      showCancelButton: true,
      confirmButtonColor: '#3ac47d',
      cancelButtonColor: '#f0ad4e',
      confirmButtonText: 'Yes!'
 }).then((result) => {
  if (result.value) {
         $.ajax({
          type : "post",
          url : "query/selQuizAttemptExe.php",
          dataType : "json",  
          data : {thisId:thisId},
          cache : false,
          success : function(data){ 
            if(data.res == "alreadyQuiz")
            {
              Swal.fire(

                'Already Taken ',
                'You already taken this quiz',
                'error',
                 '#3ac47d'
                
              )
            }
            else if(data.res == "takeNow")
            {
              window.location.href="home.php?page=takequiz&id="+thisId;
              return false;
            }
          },
          error : function(xhr, ErrorStatus, error){
            console.log(status.error);
            console.log(xhr);
            console.log(error);
          }

        });
  }
 });
  return false;
})



// Reset Exam Form
$(document).on("click","#resetExamFrm", function(){
      var thisId = $(this).data('id');
      Swal.fire({
        title: 'Wait!',
        text: 'Do you really want to reset your answers?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3ac47d',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) =>{
      $('#submitAnswerFrm')[0].reset();
      });
      return false;
})



 

// Select Time Limit
var mins
var secs;

function cd() {
  var timeExamLimit = $('#timeExamLimit').val();
  mins = 1 * m("" + timeExamLimit); // change minutes here
  secs = 0 + s(":01"); 
  redo();
}

function m(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(0, i));
}

function s(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
  var disp;
      disp = " 0";  if(mins <= 9) {

  } else {
      disp = " ";
  }
  disp += mins + ":";
  if(secs <= 9) {
      disp += "0" + secs;
  } else {
      disp += secs;
  }
  return(disp);
}

function redo() {
  secs--;
  if(secs == -1) {
      secs = 59;
      mins--;
  }
  document.cd.disp.value = dis(mins,secs); 
  if((mins == 0) && (secs == 0)) {
    $('#examAction').val("autoSubmit");
     $('#submitAnswerFrm').submit();
  } else {
    cd = setTimeout("redo()",1000);
  }
}

function init() {
  cd();
}
window.onload = init;

function result(id){
  window.location.href="home.php?page=quizresult&quiz_id="+id;
}