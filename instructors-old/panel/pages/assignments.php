<?php include("includes/sidebar.php"); ?>

<div class="app-main__outer">
<div class="app-main__inner">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-hourglass icon-gradient bg-ripe-malin"></i>
                                    </div>
                                    <div>Assignments
                                        <div class="page-title-subheading">Example layout page for forum threads</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                                        <i class="fa fa-star"></i>
                                    </button>
                                <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-warning">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Assessments
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=activities" style="color: black">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>Activities</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled"  style="color: #3ac47d">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Assignments</span>
                                                        <div class="ml-auto badge badge-pill badge-success"><i class="fa fa-hand-o-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=long-exam" style="color: black;">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span> Long Exam</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=quiz" style="color: black">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span> Quizzes</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                             </div>
                        </div>            
                     
                         
                          <div class="d-flex flex-wrap justify-content-between">
                        
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                </div>
                                                <input placeholder="Search..." type="text" class="form-control" id="search_field">
                                            </div>
                        </div>
                        <br>
            
                                     <div class="card mb-5">
                                         <div class="card-header pl-0 pr-0">
                                            <div class="row no-gutters w-50 align-items-center">
                                                <div class="col-4"></div>
                                                <div class="col-4 text-muted">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-4"></div>
                                                        <div class="col-8"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                            <table id="myTable" class="table table-inverse">
                                            
                                             <tbody>
                                                
                                               <?php
                                                $selAss = $conn->query("SELECT * FROM assignment_tbl WHERE cou_id='$exmneCourse' ORDER BY ass_id DESC ");
                                                if ($selAss->rowCount() > 0) 
                                                {
                                                
                                                while($row = $selAss -> fetch(PDO::FETCH_OBJ)){
                                                ?>
                                                <tr>
                                                  <td >
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-md-15">
                                                            <h5><a href="home.php?page=assignment-page&id=<?php echo $row->ass_id; ?>" class="text-big">
                                                                <?php echo $row->ass_title?></a></h5>
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="media col-8 align-items-center">
                                                                    <div class="text-big" style="text-align: justify;"><?php echo $row->ass_desc ?></div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="text-muted small mt-1">Date Published &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $row->date_uploaded?></a></div>
                                                        </div>
                                                        <div class="d-none d-md-block col-4">
                                                            
                                                        </div>
                                                    </div>
                                                  </td>
                                                
                                                  <td> 
                                                    <div class="media-body flex-truncate ml-2">
                                                    <div class="line-height-1 text-truncate"><?php echo $row->date_uploaded?></div>
                                                    <a href="javascript:void(0)" class="text-muted small text-truncate">by Belle Ross</a>
                                                    </div>
                                                    </td>
                                                </tr>
                                              <?php }
                                            }
                                            else
                                              { ?>
                                                  <tr>
                                                    <td colspan="5">
                                                      <h3 class="p-3">No Details</h3>
                                                    </td>
                                                  </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>    
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                </div>  
                            </div>
                        </div>
                    </div>


    <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>

    <script src="js/index.js"></script>
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <script >
         $('#search_field').on('keyup', function() {
      var value = $(this).val();
      var patt = new RegExp(value, "i");

      $('#myTable').find('tr').each(function() {
        if (!($(this).find('td').text().search(patt) >= 0)) {
          $(this).not('.myHead').hide();
        }
        if (($(this).find('td').text().search(patt) >= 0)) {
          $(this).show();
        }

      });

     
    });
    </script>
          
<script>
                
$(document).ready(function(){
$('.data-table').dataTable({
    "iDisplayLength": 10,
    "aLengthMenu": [
        [15, 10, 25, 50, 100, -1],
        [15, 10, 25, 50, 100, "All"]
    ],
    responsive: true,
    "order": []
});
});
             </script>