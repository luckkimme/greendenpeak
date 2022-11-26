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
  
  if(isset($_GET['product_id']) && intval($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']);
    $product_details = get_product_by_id($conn, $product_id);

    // Goes to error page if product does not exist
    if(!$product_details) {
      header('Location: ../component/error.php');
      exit();
    }

    $product_features = get_product_feature_by_id($conn, $product_id);
    $product_carousel = get_product_carousel_by_id($conn, $product_id);
    $product_kit = get_product_kit_by_id($conn, $product_id);
    $product_accessories_details = get_product_accessories_details_by_id($conn, $product_id);
    if($product_accessories_details) $product_accessories_items = get_product_accessories_items_by_id($conn, $product_accessories_details['product_accessory_id']);
    $product_user_manual = get_product_user_manual_by_id($conn, $product_id);
  } else {
    header('Location: ../component/error.php');
  }
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
    <script>
      document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
          
          element.addEventListener('click', function (e) {

            let nextEl = element.nextElementSibling;
            let parentEl  = element.parentElement;	

              if(nextEl) {
                  e.preventDefault();	
                  let mycollapse = new bootstrap.Collapse(nextEl);
                  
                  if(nextEl.classList.contains('show')){
                    mycollapse.hide();
                  } else {
                      mycollapse.show();
                      // find other submenus with class=show
                      var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                      // if it exists, then close all of them
                      if(opened_submenu){
                        new bootstrap.Collapse(opened_submenu);
                      }
                  }
              }
          }); // addEventListener
        }) // forEach
      }); 
    </script>
    
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
            <h1 class="h3">Content Management > 
              <a href="/greendenpeak/page/admin/brand-cms.php">Product Page</a> > <?php echo $product_details['product_name']; ?></h1>
          </div>
              
          <div class="table-responsive-lg">
            <table class="table table-striped">
              <h3><?php echo $product_details['product_name']; ?></h3>
              <thead>
                <tr>
                  <th scope="col" class="h5">Component</th>
                  <th scope="col" class="alignment h5">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="tdproduct">Product Information</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editProductModal">Edit</a></td>
                </tr>            
                <tr>
                  <td class="tdproduct">Features</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editFeaturesModal">Edit</a></td>
                </tr>
                <tr>
                  <td class="tdproduct">Specification / Kit</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editKitModal">Edit</a></td>
                </tr>            
                <tr>
                  <td class="tdproduct">Accessories</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editAccessoriesModal">Edit</a></td>
                </tr>
                <tr>
                  <td class="tdproduct">Other Information</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  href="product-other-info-cms.php?product_id=<?php echo $product_id?>">Edit</a></td>
                </tr>
                <tr>
                  <td class="tdproduct">User Manual</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editUserManual">Edit</a></td>
                </tr>
                <tr>
                  <td class="tdproduct">Gallery</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding"
                  href="product-gallery-cms.php?product_id=<?php echo $product_id?>">Edit</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
      <?php include_once ("../component/modals/product-details-modals.php");?>
    </div>
    <script src="../../asset/js/modal-edit.js"></script> 
    <script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const bullet = "\u2022";
        const bulletWithSpace = `${bullet} `;
        const enter = 13;

        let descList = document.getElementById("proDescList");
        let kitStandardDescList = document.getElementById("kit_standard_desc");
        let kitOptionalDescList = document.getElementById("kit_optional_desc");
        
        if(descList) {
            descList.addEventListener("keyup", insertBullet);
        }
        if(kitStandardDescList) {
          kitStandardDescList.addEventListener("keyup", insertBullet);
        }
        if(kitOptionalDescList) {
          kitOptionalDescList.addEventListener("keyup", insertBullet);
        }

        function insertBullet(event) {
            const { keyCode, target } = event;
            const { selectionStart, value } = target;
            
            if (keyCode === enter) {
              target.value = [...value]
                  .map((c, i) => i === selectionStart - 1
                  ? `\n${bulletWithSpace}`
                  : c
                  )
                  .join('');
                  console.log(target.value);
                  
              target.selectionStart = selectionStart+bulletWithSpace.length;
              target.selectionEnd = selectionStart+bulletWithSpace.length;
            }
            
            if (value[0] !== bullet) {
              target.value = `${bulletWithSpace}${value}`;
            }
        }
    </script>
    
    <script>
        let nav_password = document.getElementById("password-link");
        nav_password.className = "nav-link";

        let nav_product = document.getElementById("product-link");
        nav_product.className += " active";
        
        let nav_about = document.getElementById("about-link");
        nav_about.className = "nav-link";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/../greendenpeak/asset/js/dashboard.js"></script>
  </body>
</html>
