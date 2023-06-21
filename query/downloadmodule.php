<?php 
session_start();
include("../conn.php");
$myID = $_SESSION['examineeSession']['exmne_id'];
if (isset($_REQUEST['filename'])) {
      $id = $_GET['filename'];
      $lessid = $_GET['lessid'];
      $topicid = $_GET['topicid'];
      echo "../instructor/panel/assets/files/module/$lessid/$topicid/";
    // fetch file to download from database
      $select_stmt=$conn->prepare('SELECT * FROM topics_tbl WHERE topic_id = :id');
      $select_stmt->bindParam(':id',$topicid); 
      $select_stmt->execute();
/*      while($result=$select_stmt->fetch(PDO::FETCH_ASSOC)){
    $sql = "SELECT * FROM examinee_files WHERE file_id=$id";
/*    $result = mysqli_query($conn, $sql);*/
    $file = $select_stmt->fetch(PDO::FETCH_ASSOC);
    $filepath = "../instructor/panel/assets/files/module/$lessid/$topicid/" . $id;

    if (file_exists($filepath)) {
      	header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize("../instructor/panel/assets/files/module/$lessid/$topicid/" . $id));
        readfile("../instructor/panel/assets/files/module/$lessid/$topicid/" . $id);
        exit;
    }

}


?>