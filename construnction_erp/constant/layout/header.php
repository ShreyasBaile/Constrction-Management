<?php 
   include('./constant/check.php');
    include('./constant/connect.php');
   ?>
<div id="main-wrapper">
 
<header>

<div id="loading"></div>
<div id="page">
<div class="header"> 
  <div class="container">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
         <a class="navbar-brand" href="">
         <b><img src="./assets/uploadImage/Logo/logo.png" style="width:250px;" alt="homepage" class="dark-logo" style="width:100%;height:auto;"/></b>
         </a>
         <div class="navbar-collapse">
         <!--   <ul class="navbar-nav mr-auto mt-md-0">
               <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
               <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
               
               
               
               </ul> --> 
               
                <div class="col-md-9 align-self-center justify-content-end">
                     
            <div class="text-center"><p style="color:#000; font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;"  class="f-s-25 f-w-500"><?php echo date('l') .' '.date('d').'- '.date('m').'- '.date('Y'); ?></p></div>
                    </div>
                
            
            <ul class="navbar-nav nav ml-auto">
            <li><div id="google_translate_element"></div></li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="./assets/uploadImage/Profile/young-woman-avatar-facial-features-stylish-userpic-flat-cartoon-design-elegant-lady-blue-jacket-close-up-portrait-80474088.jpg" alt="user" class="profile-pic" /></a>
                  <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                     <ul class="dropdown-user">
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li><a href="#"><i class="fa fa-key"></i> Changed Password</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Add user</a></li>
                        <?php }?>
                        <li><a href="./constant/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
          </nav>
   </div> 
  
</div>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  id="navbar_top" >
      <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample07">
          <ul class="navbar-nav nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php"><i class="fa fa-home mr-2"></i> Dashboard</a>
            </li>
            <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-university mr-2"></i> Company</a>
              <div class="dropdown-menu animated zoomIn" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="add-brand.php">Add Company</a>
                <a class="dropdown-item" href="brand.php">Manage Company</a>
                <a class="dropdown-item" href="importbrand.php">Import Company</a>
              </div>
            </li>
             <?php }?>
              <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list mr-2"></i> Categories</a>
              <div class="dropdown-menu animated zoomIn" aria-labelledby="dropdown02">
                <a class="dropdown-item" href="add-category.php">Add Category</a>
                <a class="dropdown-item" href="categories.php">Manage Categories</a>
              </div>
            </li>
            <?php }?>
            <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript(ov" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-rub mr-2"></i> Material/Services</a>
              <div class="dropdown-menu animated zoomIn" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="add-product.php">Add Material</a>
                <a class="dropdown-item" href="product.php">Manage Material</a>
                
              </div>
            </li>
            <?php }?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-newspaper-o mr-2"></i> Project</a>
              <div class="dropdown-menu animated zoomIn" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="add_project.php">Add Project</a>
                <a class="dropdown-item" href="view_project.php">Manage Project</a>
                <a class="dropdown-item" href="status_project.php">Project Status</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-newspaper-o mr-2"></i> Utilization</a>
              <div class="dropdown-menu animated zoomIn" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="add-order.php">Add Utilization</a>
                <a class="dropdown-item" href="Order.php">Manage Utilization</a>
              </div>
            </li>
            <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item">
                <a class="nav-link" href="report.php"><i class="fa fa-flag-o mr-2"></i> Reports <span class="sr-only">(current)</span></a>
            </li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav>
</header>

</div>
<script>

</script>
<script>


    document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      }
  });
}); 


</script>
