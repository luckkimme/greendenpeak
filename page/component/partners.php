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
		<link href="../../asset/css/product-and-services.css" rel="stylesheet">

	</head>
	<body>
  		<?php 
	        include_once __DIR__ . '/navbar.php';
	    ?>
		<div class="container px-4 py-5" id="hanging-icons">
			<h2 class="pb-2 border-bottom">Products and Services</h2>
		</div>
	    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
			<?php 
				foreach($brand as $b) {
					echo '<div class="div-prod-service me-md-3 pt-3 px-3 pt-md-5 px-md-5 mb-4 text-center text-white overflow-hidden">';
					echo '<div class="my-3 py-3">';
					echo '<h2 class="display-5 h-brand">' . $b['brand_name'] . '</h2>';
					echo '<p class="lead p-brand-desc">' . $b['description'] . '</p>';
					echo '</div>';
					echo '</div>';
				}
			?>
			<!-- <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 py-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div>
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div>
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div> -->
		</div>

		<script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

		<script src="../../asset/js/offcanvas.js"></script>
		<?php include_once __DIR__ . '/footer.php'; ?>
	</body>
</html>