<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>


<?php 


$lowStockSql = "SELECT * FROM product WHERE status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$lowStockSql1 = "SELECT * FROM brands WHERE brand_status = 1";
$lowStockQuery1 = $connect->query($lowStockSql1);
$countLowStock1 = $lowStockQuery1->num_rows;

$lowStockSql2 = "SELECT * FROM orders WHERE delete_status = 0";
$lowStockQuery2 = $connect->query($lowStockSql2);
$countLowStock2 = $lowStockQuery2->num_rows;
$connect->close();

?>
  
<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
        
        <div class="page-wrapper">
          
          <!--   <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                     
            <div class="text-center"><h3 style="color:black;"><p style="color:black;"><?php echo date('l') .' '.date('d').'- '.date('m').'- '.date('Y'); ?></p></h3></div>
                    </div>
                
            </div> -->
            
            
            <div class="container-fluid">
                
                
        

                      <div class="row">
                    
                <div class="col-md-4">
                       <div class="card p-48" style="background: #626ed4">
                           <div class="media widget-ten">
                               <div class="media-left meida media-middle">
                                   <span><i class="ti-agenda f-s-50"></i></span>
                               </div>
                               <div class="media-body media-text-right">
                                
                           
                                   <h2 class="color-white f-s-30"><?php echo $countLowStock; ?></h2>
                                   <a href="product.php"><p class="m-b-0" >Total Material/Services</p></a>
                               </div>
                           </div>
                       </div>
                   </div> 
                   <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                    <div class="col-md-4">
                        <div class="card p-48" style="background: #626ed4">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-widget f-s-50 color-white"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                                        
                    
                    
                            
                                    <h2 class="color-white f-s-30"><?php echo $countLowStock1; ?></h2>
                                     <a href="product.php"><p class="m-b-0">Total Company</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                       <?php }?>
                                       <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                   <div class="col-md-4">
                      <div class="card p-48" style="background-color:#626ed4">
                          <div class="media widget-ten">
                              <div class="media-left meida media-middle">
                                  <span><i class="ti-vector f-s-50 color-white"></i></span>
                              </div>
                              <div class="media-body media-text-right">
                                  
                          <h2 class="color-white f-s-30"><?php echo $countLowStock2; ?></h2>
                                  <a href="Order.php"><p class="m-b-0">Total Utilization</p></a>
                              </div>
                          </div>
                      </div>
                  </div>
                                 <?php }?>
                     
                   
                  
     <div class="col-md-12">
<div class="card">
                            <div class="card-header">
                                <strong class="card-title">User Wise Utilization</strong>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                        <th>Utilization Date</th>
                        <th>Client Name</th>
                        <th>Contact</th>
                        
                        <th>Payment Status</th>
                                                
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        //include('./constant/connect');
 $sql = "SELECT  uno, orderDate, clientName, clientContact,paymentStatus,id FROM orders WHERE delete_status = 0";
 //echo $sql;exit;
$result=$connect->query($sql);
//print_r($result);exit;
foreach ($result as $row) {
     
$no+=1;
    ?>
                                        <tr>
                                            <td><?=$no; ?></td>
                                            <td><?php echo $row['orderDate'] ?></td>
                                             <td><?php echo $row['clientName'] ?></td>
                                              <td><?php echo $row['clientContact'] ?></td>
                                             
                                               
                                            <td><?php  if($row['paymentStatus']==1)
                                            {
                                                 
                                                 $paymentStatus = "<label class='label label-success' ><h4>Full Payment</h4></label>";
                                                 echo $paymentStatus;
                                            }
                                            else if($row['payment_status']==2){
                                                $paymentStatus = "<label class='label label-danger'><h4>Advance Payment</h4></label>";
                                                echo $paymentStatus;
                                            }else {
                                                $paymentStatus = "<label class='label label-warning'><h4>No Payment</h4></label>";
                                                 echo $paymentStatus;
                                                } // /els
                                            ?></td>
                                            
                                        </tr>
                                     
                                    </tbody>
                                   <?php    
}

?>
                               </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <div id="piechart" style="width: 100%; height: 500px;"></div>
                </div> -->
                </div>
            
                     
                 
                  
                
        
    

                
            
        </div>
    </div>

            
            <?php include ('./constant/layout/footer.php');?>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['xyz',     11],
          ['abc',      2],
          ['bca',  2]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>