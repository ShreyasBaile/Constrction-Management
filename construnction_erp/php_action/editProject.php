<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
$productId = $_GET['id'];
if($_POST) {
	
	$clientname= $_POST['clientname']; 
  $clientno=$_POST['clientno'];
  $projectname= $_POST['projectname'];
  $address = $_POST['address'];
  $pmanager = $_POST['pmanager'];
  $date1 = $_POST['date1'];
  $deadline = $_POST['deadline'];

				
	$sql = "UPDATE project SET clientname = '$clientname',clientno = '$clientno', projectname= '$projectname',address = '$address', pmanager = '$pmanager',date1 = '$date1',deadline = '$deadline' WHERE id = $productId ";
//echo $sql;exit;
	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
		header('location:../view_project.php');
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating product info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
