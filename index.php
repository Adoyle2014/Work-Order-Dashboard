<?php include('core/init.php'); ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>H and S Medical | Dashboard</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Michroma|Comfortaa:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="large-2 columns brand">
          <img src="img/HandSMedicalLogoBar.png">
        </div>
        <div class="large-9 columns title">
          <h2>Welcome To Your Dashboard</h2>
        </div>
      </div><!--Row-->
      
      <div class="main-content">
        <div class="row">
          <div class="large-2 columns side-nav">

            <div class="side-nav-btn-group">
              <a class="side-nav-btn button small left" id="customer-btn" data-module-id="customers.php" href="#">Customers</a>
              <a href="customer.php" data-reveal-id="addCustomerModal" data-reveal-ajax="true"<i class="fa fa-plus-square-o right add-icon fa-2x addModal"></i></a>
            </div>
            <div id="addCustomerModal" class="reveal-modal" data-reveal></div>

            <div class="side-nav-btn-group">
              <a class="side-nav-btn button small left" id="vendor-btn" data-module-id="vendors.php" href="#">Vendors</a>
              <a href="vendor.php" data-reveal-id="addVendorModal" data-reveal-ajax="true"<i class="fa fa-plus-square-o right add-icon fa-2x addmodal"></i></a>
            </div>
            <div id="addVendorModal" class="reveal-modal" data-reveal></div>

          </div><!--Side Nav-->
          <div class="large-9 columns dashboard">
            <div id="pageContent"></div><!-- Main Content -->
          </div><!--Large-9-->
        </div><!--Row-->
      </div><!--main-content-->
    </div><!--Container-->
    <!-- Loading Image -->
    <div id="loaderImage">
      <img src="img/ajax-loader.gif">
    </div>
    
    <div id="deleteConfirmDialog"></div>
    
    

    
    
    <script src="js/vendor/jquery.js"></script> 
    <script src="js/vendor/jquery-ui.min.js"></script>   
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.reveal.js"></script>
        
    
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
