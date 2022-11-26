<?php 

    session_start();

    //Includes Scripts
    require_once __DIR__ . '/../../includes/connection.php';
    require_once __DIR__ . '/../../includes/processor/product-processor.php';
    require_once __DIR__ . '/../../includes/processor/index-processor.php';

    //Get product data from database
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
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $company['company_name']; ?></title>
		<link rel="icon" href="<?php echo $company['company_logo']; ?>">
		
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
		<!-- include the menu bar -->
  		<?php 
	        include_once __DIR__ . '/navbar.php';
	    ?>

		<!-- navigation for going back to main about uus page -->
		<div class="container px-4 py-2">
			<a href="../about-us.php" class="nav-link-about">< Go Back</a></li>
		</div>

		<!-- Page Heading -->
		<div class="container px-4 pb-5" id="hanging-icons">
			<h2 class="pb-2 border-bottom">Products and Services</h2>
		</div>

		<!-- Display the information from the database -->
	    <div class="container px-5">
			<div class="row pb-5 gap-3">
				<?php 
					foreach($brand as $b) {
						echo '<div class="div-prod-service col container text-center text-white">';
						echo '<div class="my-2 py-3">';
						echo '<h2 class="display-5 h-brand">' . $b['brand_name'] . '</h2>';
						echo '<p class="lead p-brand-desc">' . $b['description'] . '</p>';
						echo '</div>';
						echo '</div>';
					}
				?>
			</div>
		</div>
		<!-- script for bootstrap -->
		<script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
		<!-- script for offcanvas navbar -->
		<script src="../../asset/js/offcanvas.js"></script>
		<!-- Get Jquery -->
		<script type="text/javascript" src="../asset/js/jquery.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<!-- set the active link in menu bar -->
		<script>
			$(document).ready(function(){
				$("#nav-main ul li a").removeClass("active");
				$("#nav-about").addClass("active");
			})
		</script>

		<!-- include footer for this page -->
		<?php include_once __DIR__ . '/footer.php'; ?>
	</body>
</html>