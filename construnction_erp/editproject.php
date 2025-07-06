<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>



<?php include('./constant/connect.php');

$sql="SELECT * from project where id='".$_GET['id']."'";
//echo $sql;exit;
  $result=$connect->query($sql)->fetch_assoc();  
  ?> 


  

 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Project Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Project</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    

                                       
                                     <form class="form-horizontal" method="POST"  id="submitProductForm" action="php_action/editProject.php?id=<?php echo $_GET['id'];?>"enctype="multipart/form-data">

                                    <fieldset>
                                        <h1>Project Info</h1>

                                       

                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Client Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="clientname" placeholder="Client name" name="clientname"  value="<?php echo $result['clientname']?>" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">client Number</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control"  placeholder="client number" name="clientno" autocomplete="off"  required=""   value="<?php echo $result['clientno']?>"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Project Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="projectname" placeholder="Client name" name="projectname"  value="<?php echo $result['projectname']?>" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                   <input type="text" class="form-control" id="rate" placeholder="Address" name="address" autocomplete="off"  value="<?php echo $result['address']?>" required="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Project Manager</label>
                                                <div class="col-sm-9">
                                                   <input type="text" class="form-control" id="rate" placeholder="Project Manager" name="pmanager"  value="<?php echo $result['pmanager']?>" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Start Date</label>
                                                <div class="col-sm-9">
                                                   <input type="date" class="form-control" id="date" placeholder="date1" name="date1" autocomplete="off"  value="<?php echo $result['date1']?>" required="" pattern="^[0-9]+$"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Deadline Date</label>
                                                <div class="col-sm-9">
                                                   <input type="date" class="form-control"  placeholder="deadline" name="deadline"  value="<?php echo $result['deadline']?>" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        


                                        <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                        </fieldset>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>

<script src="custom/js/product.js"></script>
