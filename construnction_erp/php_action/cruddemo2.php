<?php

require_once 'core.php';



if(isset($_POST['dept_id']) && !empty($_POST['dept_id'])){ 
    //echo "gfgh";exit;
$result=array();
        //echo "SELECT * FROM tbl_user where department_id ='".$_POST['dept_id']."'"; exit; 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $stmt = $db->prepare("SELECT * FROM lqrmaster ");
    // $stmt->execute();
    // $display = $stmt->fetchAll();
     //echo "SELECT * FROM tbl_supplier WHERE id='".$_POST['dept_id']."'";exit;
    $stmt = $conn->prepare("SELECT * FROM project WHERE id='".$_POST['dept_id']."'");
    $stmt->execute();
    $display1 = $stmt->fetchAll(); 

     //print_r($display1);
    //$result['display']=$display;
    $result['display1']=$display1;
            echo json_encode($result);

}
?>

        





