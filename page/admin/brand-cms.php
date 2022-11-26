<?php 
  
  session_start();

  if(!$_SESSION['user_id']) {
      header("Location: login.php");
  }

  require_once('../../includes/connection.php');
  require_once('../../includes/processor/admin-processor.php');
  require_once('../../includes/processor/index-processor.php');
  require_once('../../includes/view/admin-product.php');
  
  //Get Company Information from Database
  $company = get_company_info($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $company['company_name'];?> | Admin</title>
    <link rel="icon" href="<?php echo $company['company_logo']; ?>">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->

<link href="../../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="../../asset/css/dashboard.css?d=<?php echo time(); ?>" rel="stylesheet">
  </head>
  <body>
    
    <?php include_once('../component/admin_header.php');?>

    <div class="container-fluid">
      <div class="row">
        <?php include_once('../component/admin_nav.php'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Content Management > Product Page</h1>
          </div>
              
          <div class="table-responsive-lg">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" class="h4">Brand Names</th>
                  <th scope="col" class="alignment"><a type="button" 
                  class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#newbrandmodal">+ New Brand</a></th>
                  <?php include ('../component/modals/brand-modals.php');?>
                </tr>
              </thead>
              <tbody>
                <?php
                  $brands = get_all_brands($conn);
                  if($brands) {
                    foreach($brands as $brand) {
                      echo create_brand_item($brand['brand_id'], $brand['brand_name']);
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    
    <script>
        let nav_password = document.getElementById("password-link");
        nav_password.className = "nav-link";

        let nav_product = document.getElementById("product-link");
        nav_product.className += " active";
        
        let nav_about = document.getElementById("about-link");
        nav_about.className = "nav-link";
    </script>
    <script src="../../asset/js/modal-edit.js"></script>
    <script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/../greendenpeak/asset/js/dashboard.js"></script>
  </body>
</html>
