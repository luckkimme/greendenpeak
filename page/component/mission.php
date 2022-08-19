<?php 

    session_start();

    //Includes Scripts
    require_once __DIR__ . '/../../includes/connection.php';
    require_once __DIR__ . '/../../includes/processor/product-processor.php';
    require_once __DIR__ . '/../../includes/processor/index-processor.php';

    //Product Brands
    $brand = get_brand($conn);
    $product = get_products($conn);
    $company = get_company_info($conn);

    //View Scripts
    require_once __DIR__ . '/../../includes/view/product-view.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">
		<link href="../../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
		<link href="../../asset/css/about-us.css?d=<?php echo time(); ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		
		<!-- Bootstrap core CSS -->
		<link href="../../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap 5 icons -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
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
		<link href="../../asset/css/offcanvas.css?d=<?php echo time(); ?>" rel="stylesheet">
    
		<!-- Custom styles for this template -->
		<link href="../../asset/css/features.css" rel="stylesheet">

	</head>
	<body>
  		<?php 
	        include_once __DIR__ . '/navbar.php';
	    ?>
	    <div class="container px-4 py-5" id="hanging-icons">
			<h2 class="pb-2 border-bottom"><?php echo $company['company_name']; ?></h2>
			<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
				<div class="col d-flex align-items-start">
					<div class="icon-square text-dark flex-shrink-0 me-3 div-icon">
						<i class="bi bi-graph-up-arrow"></i>
					</div>
					<div>
						<h2>Vision</h2>
						<p><?php echo $company['company_vision']; ?></p>
					</div>
				</div>
				<div class="col d-flex align-items-start">
					<div class="icon-square text-dark flex-shrink-0 me-3 div-icon">
						<i class="bi bi-bullseye"></i>
					</div>
					<div>
						<h2>Mission</h2>
						<p><?php echo $company['company_mission']; ?></p>
					</div>
				</div>
				<div class="col d-flex align-items-start">
					<div class="icon-square text-dark flex-shrink-0 me-3 div-icon">
						<i class="bi bi-star-fill"></i>
					</div>
					<div>
						<h2>Core Values</h2>
						<p><?php echo $company['company_core_values']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

		<script src="../../asset/js/offcanvas.js"></script>
		<?php include_once __DIR__ . '/footer.php'; ?>
	</body>
</html>