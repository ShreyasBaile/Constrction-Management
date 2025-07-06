<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>


<?php include('./constant/connect');

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Project</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Project</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                           
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                                                           
                            <th>Client Name</th>
                            <th>Client NO</th>                           
                            <th>Project Name</th>
                            <th>Project Manager</th>
                            <th>Project Status</th>
                            <th>Date</th>
                            
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        $sql="SELECT * from project where delete_status=0";
    $result1 = $connect->query($sql);
    //$no +=1;
foreach ($result1 as $row1) {
    
     $no +=1;
   


    
    
    
    ?>
                                        <tr>
                                            <td><?= $no;?></td>
                                            <td><?php echo $row1['clientname'] ?></td>
                                            
                                            <td><?php echo $row1['clientno'] ?></td>
                                            
                                              <td><?php echo $row1['projectname'] ?></td>
                                              <td><?php echo $row1['pmanager'] ?></td>
                                              <td><?php  if($row1['status']=='Completed')
                                            {
                                                 
                                                 $status = "<label class='label label-success' ><h4>Completed</h4></label>";
                                                 echo $status;
                                            }
                                            else if($row1['status']=='In-Progress'){
                                                $status = "<label class='label label-danger'><h4>In-Progress</h4></label>";
                                                echo $status;
                                            }else {
                                                $status = "<label class='label label-warning'><h4>Not-Started</h4></label>";
                                                 echo $status;
                                                } // /els
                                            ?>
                                              </td>
                                              <td><?php echo $row1['date1'] ?></td>
                                             
                                            
                                            <td>
            
                                                <a href="editprojectstatus.php?id=<?php echo $row1['id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i>Update Status</button></a>
                                              

             
                                               
                                           
                                                
                                                </td>
                                        </tr>
                                      
                                    </tbody>
                                   <?php    
}
?>
                               </table>
                                </div>
                            </div>
                        </div>

<?php include('./constant/layout/footer.php');?>


