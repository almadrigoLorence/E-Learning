<?php 
session_start();
include("../conn.php");
$myID = $_SESSION['examineeSession']['exmne_id'];
if (isset($_REQUEST['file_id'])) {
      $id = $_GET['file_id'];

    // fetch file to download from database
      $select_stmt=$conn->prepare('SELECT * FROM examinee_files WHERE file_id = :id');
      $select_stmt->bindParam(':id',$id); 
      $select_stmt->execute();

      $file = $select_stmt->fetch(PDO::FETCH_ASSOC);
/*      unlink("../pages/examinee_files/$myID/".$file['file_name']);*/

      $delete_stmt = $conn->prepare('DELETE FROM examinee_files WHERE file_id = :id');
      $delete_stmt->bindParam(':id',$id);
      $delete_stmt->execute();
      header("Location:../home.php?page=myfiles");
      exit;
/*    if (file_exists($filepath)) {
      	header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize("pages/examinee_files/$myID/" . $file['file_name']));
        readfile("pages/examinee_files/$myID/" . $file['file_name']);
        exit;
    }*/

}


?>