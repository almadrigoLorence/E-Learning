<?php include ("includes/sidebar.php"); ?>
<style type="text/css">
.input-group{
    margin-right: 10px;
}
table{
    margin-left: 10px;
    margin-right: 10px;
}
</style>
<div class="app-main__inner">
<div class="app-main__outer">  
                            <div class="main-card mb-3 ">
                                <div class="card-header bg-slick-carbon text-white">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><span class="badge badge-pill badge-success" style="color: black">My</span>Files
                                </div>
                            </div>
                            <div class="table-responsive"  style="padding-left: 10px; padding-bottom: 20px; padding-right: 15px; margin-top: 20px;">
                                <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                                    <thead>
                                        <tr>
                                            <th>File Name</th>
                                            <th class="text-center" width="20%">Date Uploaded</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                                $id = $_SESSION['examineeSession']['exmne_id'];
                                                $selExam = $conn->query("SELECT * FROM examinee_files WHERE uploader= $id");
                                                if($selExam->rowCount() > 0)
                                                {
                                                while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                        <tr>
                                            <td><?php echo $selExamRow['file_name']; ?></td>
                                            <td class="text-center"><?php echo $selExamRow['date']?></td>
                                            <td class="text-center">
                                                <button class="border-0 btn-transition btn btn-outline-success">
                                                    <a href="query/downloadfile.php?file_id=<?php echo $selExamRow['file_id']; ?>"><i class="pe-7s-download" style="height: 50%"></i></a>
                                                </button>
                                                <button class="border-0 btn-transition btn btn-outline-danger">
                                                    <a href="query/deletefile.php?file_id=<?php echo $selExamRow['file_id']; ?>"><i class="pe-7s-trash"></i></a>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php }
                                    }
                                    
                                   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
<script>
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