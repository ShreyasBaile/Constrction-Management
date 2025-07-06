<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

//$productId = $_POST['productId'];
$productId = $_GET['id'];
if($productId) { 

 $sql = "UPDATE project SET delete_status = 1 WHERE id = {$productId}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../view_project.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST