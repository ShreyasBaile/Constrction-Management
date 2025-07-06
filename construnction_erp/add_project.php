<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>



 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Project</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Project</li>
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
                                    <form class="form-horizontal" method="POST"  id="submitProductForm" action="php_action/save_project.php" method="POST" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <!-- <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Product Image:</label>
                                                <div class="col-sm-9">
                                                 <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>                         
                        <div class="kv-avatar center-block">                            
                            <input type="file" class="form-control" id="productImage" placeholder="Product Name" name="productImage" class="file-loading" style="width:auto;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class=" control-label">Client Name</label><br>
                                                  <input type="text" class="form-control" id="clientname" placeholder="Client name" name="clientname" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                         <div class="col-md-6">
                                                    <div class="form-group">
                                                <label class=" control-label">Client Number</label>
                                            
                                                  <input type="text" class="form-control" id="clientno" placeholder="client number" name="clientno" autocomplete="off"  required="" pattern="^[0-9]+$"/>
                                                </div>
                                            </div>
                                   

                                         <div class="col-md-6">
                                                    <div class="form-group">
                                                <label class=" control-label">Project Name</label>
                                               
                                                  <input type="text" class="form-control" id="projectname" placeholder="Project Name" name="projectname" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                         <div class="col-md-6">
                                                    <div class="form-group">
                                                <label class=" control-label">Address</label>
                                                
                                                   <input type="text" class="form-control" id="rate" placeholder="Address" name="address" autocomplete="off" required="" />
                                                </div>
                                            </div>

                                         <div class="col-md-6">
                                                    <div class="form-group">
                                                <label class="control-label">Project Manager</label>
                                               
                                                   <input type="text" class="form-control" id="rate" placeholder="Project Manager" name="pmanager" autocomplete="off" required="" />
                                                </div>
                                            </div>

                                         <div class="col-md-6">
                                                    <div class="form-group">
                                                <label class="col-sm-3 control-label">Start Date</label>
                                               
                                                   <input type="date" class="form-control" id="date" placeholder="Rate" name="date1" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                                </div>
                                            </div>

                                         <div class="col-md-6">
                                                    <div class="form-group">
                                                <label class="control-label">Deadline Date</label>
                                                
                                                   <input type="date" class="form-control" id="rate" placeholder="Rate" name="deadline" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                                </div>
                                            </div>
                                        
                                                 <div class="col-md-12 text-center">

                                        <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>


