<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
$productId = $_GET['id'];
if($_POST) {
	
	
  $status =$_POST['status'];

				
	$sql = "UPDATE project SET status = '$status' WHERE id = $productId ";
//echo $sql;exit;
	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
		header('location:../status_project.php');
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating product info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
