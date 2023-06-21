<?php 
session_start();
include("../conn.php");
$myID = $_SESSION['examineeSession']['exmne_id'];
if (isset($_REQUEST['foldername'])) {
      $id = $_GET['foldername'];
      $filename = $_GET['filename'];
    // fetch file to download from database
      $select_stmt=$conn->prepare('SELECT * FROM activities_tbl WHERE uid = :id');
      $select_stmt->bindParam(':id',$id); 
      $select_stmt->execute();
/*      while($result=$select_stmt->fetch(PDO::FETCH_ASSOC)){
    $sql = "SELECT * FROM examinee_files WHERE file_id=$id";
/*    $result = mysqli_query($conn, $sql);*/
    $file = $select_stmt->fetch(PDO::FETCH_ASSOC);
    $filepath = "../instructor/panel/assets/files/activity/$id/" . $filename;

    if (file_exists($filepath)) {
      	header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize("../instructor/panel/assets/files/activity/$id/" . $filename));
        readfile("../instructor/panel/assets/files/activity/$id/" . $filename);
        exit;
    }

}


?>