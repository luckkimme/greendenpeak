<?php 
    session_start();

    //Includes Scripts for database connection
    require_once __DIR__ . '/../includes/connection.php';
    require_once __DIR__ . '/../includes/processor/product-processor.php';
    require_once __DIR__ . '/../includes/processor/index-processor.php';

    //Get Product Brands from Database
    $available = get_available($conn);
    $brand = get_brand($conn);
    $product = get_products($conn);

    //Get Company Information from Database
    $company = get_company_info($conn);

    //View Scripts
    require_once __DIR__ . '/../includes/view/product-view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company['company_name']; ?></title>
    <link rel="icon" href="<?php echo $company['company_logo']; ?>">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">
    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
    <link href="../asset/css/about-us.css?d=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- Bootstrap core CSS -->
    <link href="../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <!-- Custom styles for offcanvas navbar -->
    <link href="../asset/css/offcanvas.css?d=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
    <?php 
        include_once __DIR__ . '/component/navbar.php';
    ?>
    <main>
        <div class="container py-3">
            <header class="pb-3 mb-4 border-bottom">
                <a class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">ABOUT US</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-lsg rounded-3 text-white div-history">
                <div class="container-fluid py-2">
                    <h1 class="display-5 fw-bold">Company History</h1>
                    <p id="p-history" class="h-100 mt-3">
                        <img src="<?php echo $company['company_history_img']; ?>" class="mb-2 ms-3">
                        <?php echo $company['company_history']; ?>
                    </p>
                    <input type="text" class="filler">
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6 mb-4">
                    <div class="h-100 p-5 text-white bg-lsg rounded-3">
                        <h2>“<?php echo $company['company_slogan']; ?>”</h2>
                        <p>Know what we stand for and what we consider important, our mission, vision, and core values.</p>
                        <a class="btn btn-outline-light" href='component/mission.php'>Find Out More!</a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="h-100 p-5 bg-lsg text-white border rounded-3">
                        <h2>Products and Services</h2>
                        <p>Know about our partners:</p>
                        <ul>
                            <?php 
                                foreach($brand as $b) {
                                  echo '<li class="txt-brand ms-5">' . $b['brand_name'] . '</li>';
                                }
                            ?>
                        </ul>
                        <a class="btn btn-outline-light" href='component/partners.php'>Find Out More!</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- script for offcanvas navbar -->
    <script src="../asset/js/offcanvas.js"></script>
    <!-- script for bootstrap -->
    <script src="../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery -->
    <script type="text/javascript" src="../asset/js/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- script for highlighting menu of the current page -->
    <script>
        $(document).ready(function(){
            $("#nav-main ul li a").removeClass("active");
            $("#nav-about").addClass("active");
        })
    </script>

    <!-- including the footer of the page -->
    <?php include_once __DIR__ . '/component/footer.php'; ?>
</body>
</html>
