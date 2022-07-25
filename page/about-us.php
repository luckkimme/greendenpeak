<?php 

    session_start();

    //Includes Scripts
    require_once __DIR__ . '/../includes/connection.php';
    require_once __DIR__ . '/../includes/processor/product-processor.php';

    //Product Brands
    $brand = get_brand($conn);
    $product_name = get_product_name($conn);

    //View Scripts
    require_once __DIR__ . '/../includes/view/product-view.php';

?>

<!DOCTYPE>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">
	<link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	<link href="../asset/css/about-us.css?d=<?php echo time(); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    
  </head>
  <body>
  		<?php 
	        include_once("component/navbar.php");
	    ?>
<main>
  <div class="container py-3">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">ABOUT US</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-lsg rounded-3 text-white">
      <div class="container-fluid py-2">
        <h1 class="display-5 fw-bold">Company History</h1>
        <p class="col-md-8 fs-5">Founded by Dennis Tupas Salamanca in 2019, Greendenpeak,
								OPC is committed to delivering top-of-the-line cleaning
								equipment and quality cleaning services. While focusing on
								only two products, Rainbow Cleaning System and Thermostar
								Dry Steam System, the founder added cleaning services using
								these two cleaning equipment to attain the quality cleaning
								service the customers deserve.</p>
        <a class="btn btn-outline-light btn-lg" href='/greendenpeak/page/component/history.php'>Find Out More!</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-lsg rounded-3">
          <h2>“Built to last. Clean and convenient at the same time.”</h2>
          <p>Know what we stand for and what we consider important, our mission, vision, and core values.</p>
          <a class="btn btn-outline-light" href='/greendenpeak/page/component/mission.php'>Find Out More!</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-lsg text-white border rounded-3">
          <h2>Products and Services</h2>
          <p>Know about our partners, Thermostar, Rainbow Vaccuum, and Doulos Cleaning Services.</p>
          <a class="btn btn-outline-light" href='/greendenpeak/page/component/partners.php'>Find Out More!</a>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2020 Greendenpeak - Allright Reserved
    </footer>
  </div>
</main>

  </body>
</html>
