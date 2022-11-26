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

        $product_img = get_all_img($conn, $product_id);
        $product_vid = get_all_vid($conn, $product_id);
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
                    <h1 class="h3">Content Management > <a href="brand-cms.php">Product Page</a> > <?php echo $product_details['product_name'];?></h1>
                </div>
                    
                <div>
                    <div class="d-flex flex-row justify-content-between">
                        <h5>Gallery</h5>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImg">
                                Add New Image
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVid">
                                Add New Video
                            </button>
                        </div>
                    </div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-img-tab" data-bs-toggle="tab" data-bs-target="#nav-img" type="button" role="tab" aria-controls="nav-img" aria-selected="true">Images</button>
                            <button class="nav-link" id="nav-vid-tab" data-bs-toggle="tab" data-bs-target="#nav-vid" type="button" role="tab" aria-controls="nav-vid" aria-selected="false">Videos</button>
                        </div>
                    </nav>
                    <div class="tab-content py-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-img" role="tabpanel" aria-labelledby="nav-img-tab">
                            <div class="row row-cols-2 row-cols-md-3 g-4">
                                <?php
                                    if($product_img) {
                                        foreach($product_img as $img) {
                                            echo create_img_item($img['img_name'], $img['img_src'], intval($img['id']));    
                                        }
                                    } else {    
                                        echo "<br>No images added yet";
                                    }
                                ?>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="nav-vid" role="tabpanel" aria-labelledby="nav-vid-tab">
                            <div class="row row-cols-2 row-cols-md-3 g-4">
                                <?php
                                    if($product_vid) {
                                        foreach($product_vid as $vid) {
                                            echo create_video_item($vid['product_vid_name'], $vid['product_vid_src'], intval($vid['product_vid_id']));    
                                        }
                                    } else {    
                                        echo "<br>No videos added yet";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
      </div>
      <?php include_once ("../component/modals/gallery-modals.php");?>
    </div>
    <script src="../../asset/js/modal-edit.js"></script> 
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
