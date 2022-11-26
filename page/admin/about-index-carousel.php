<?php 
    session_start();

    if(!$_SESSION['user_id']) {
        header("Location: login.php");
    }

    require_once('../../includes/connection.php');
    require_once('../../includes/processor/index-processor.php');
    require_once('../../includes/view/admin-carousel.php');

    $carousel = get_index_carousel($conn);
    
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
                    <h1 class="h3">Content Management > Landing Page Carousel</h1>
                </div>
                    
                <div>
                    <div class="d-flex flex-row justify-content-between">
                        <h5>Images</h5>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImg">
                                Add New Image
                            </button>
                        </div>
                    </div>
                    <div class="container my-3">
                        <div class="row row-cols-2 row-cols-md-3 g-4">
                            <?php
                                if($carousel) {
                                    foreach($carousel as $img) {
                                        echo create_carousel_item($img['carousel_title'], $img['carousel_img'], intval($img['carousel_id']));    
                                    }
                                } else {    
                                    echo "<br>No images added yet";
                                }
                            ?>
                        </div>    
                    </div>
                </div>
            </main>
      </div>
      <?php include_once ("../component/modals/company-info-modals.php");?>
    </div>
   
    <script>
        let nav_password = document.getElementById("password-link");
        nav_password.className = "nav-link";

        let nav_product = document.getElementById("product-link");
        nav_product.className = "nav-link";
        
        let nav_about = document.getElementById("about-link");
        nav_about.className += " active";
    </script>

    <script src="../../asset/js/dashboard.js"></script> 
    <script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const bullet = "\u2022";
        const bulletWithSpace = `${bullet} `;
        const enter = 13;

        let descList = document.getElementById("proDescList");
        if(descList) {
            descList.addEventListener("keyup", insertBullet);
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
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/../greendenpeak/asset/js/dashboard.js"></script>
    
    <script>
        let nav_about = document.getElementById("about-link");
        nav_about.className += " active ";

        let nav_product = document.getElementById("product-link");
        nav_product.className = "nav-link";
    </script>

</body>
</html>
