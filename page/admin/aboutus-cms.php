<?php 
  session_start();

  
  if(!$_SESSION['user_id']) {
    header("Location: login.php");
}

  require_once __DIR__ . '/../../includes/connection.php';
  require_once __DIR__ . '/../../includes/processor/index-processor.php';
  require_once __DIR__ . '/../../includes/processor/admin-processor.php';

  $company = get_company_info($conn);
  $company_link = get_company_links($conn);
  
  require_once __DIR__ . '/../component/modals/company-info-modals.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $company['company_name'];?> | Admin</title>
    <link rel="icon" href="<?php echo $company['company_logo']; ?>">

    <link rel="stylesheet" href="/greendenpeak/asset/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="/greendenpeak/asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

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
    <link href="/greendenpeak/asset/css/dashboard.css?d=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
    
    <?php include_once('../component/admin_header.php');?>

    <div class="container-fluid">
      <div class="row">
        <?php include_once('../component/admin_nav.php'); ?>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Content Management > About Us Page</h1>
          </div>
          <div class="table-responsive-lg">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" class="h5">Component</th>
                  <th scope="col" class="alignment h5">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="tdproduct">Company Profile</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editCompanyProfileModal">Manage</a></td>
                </tr>            
                <tr>
                  <td class="tdproduct">Social Media Links</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" 
                  data-bs-toggle="modal" data-bs-target="#editSocmedModal">Manage</a></td>
                </tr>         
                <tr>
                  <td class="tdproduct">Main Carousel Images</td>
                  <td class="alignment"><a type="button" class="btn btn-secondary button-padding" href="/greendenpeak/page/admin/about-index-carousel.php">Manage</a></td>
                </tr>
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
        nav_product.className = "nav-link";
        
        let nav_about = document.getElementById("about-link");
        nav_about.className += " active";
    </script>
    <script src="/greendenpeak/asset/js/modal-edit.js"></script>
    <script src="/greendenpeak/asset/js/dashboard.js"></script>
    <script src="/greendenpeak/asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/../greendenpeak/asset/js/dashboard.js"></script>
    
  </body>
</html>
