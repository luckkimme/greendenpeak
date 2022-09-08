<?php 

    session_start();

    //Includes Scripts
    require_once __DIR__ . '/../includes/connection.php';
    require_once __DIR__ . '/../includes/processor/product-processor.php';
    require_once __DIR__ . '/../includes/processor/index-processor.php';

    //Product Brands
	$available = get_available($conn);
    $brand = get_brand($conn);
    $product = get_products($conn);

	//Company Information
	$company = get_company_info($conn);

    //View Scripts
    require_once __DIR__ . '/../includes/view/product-view.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="../asset/css/contact-us.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
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
    <link href="../asset/css/offcanvas.css?d=<?php echo time(); ?>" rel="stylesheet">
    
	</head>
	<body>
		<?php 
	        include_once __DIR__ . '/component/navbar.php';
	    ?>
	    <div class="div-header">
	    	<h4>contact us</h4>
	    </div>
		<div class="d-flex flex-column justify-content-center text-center px-5 mx-auto mt-3">
            <p><i class="bi bi-house-fill mr-3"></i> <?php echo $company['address']; ?></p>
            <p><i class="bi bi-envelope-fill mr-3"></i> <?php echo $company['email']; ?></p>
            <p><i class="bi bi-phone-fill mr-3"></i> <?php echo $company['phone_no']; ?></p>
            <p><i class="bi bi-telephone-fill mr-3"></i> <?php echo $company['tel_no']; ?></p>
		</div>
		<form action="/greendenpeak/page/sendemail.php" method="post">
			<div id="div-contact-select">
				<div class="h3">Select the reason for contacting us</div>
					<select class="form-select form-select-lg mb-3" id="reasonForContact" onchange="selectedReason()" name="purpose" aria-label=".form-select-lg example">
						<option value="placeholder">...</option>	
						<option value="Request Demo">Request Demo</option>
						<option value="Inquire">Inquire</option>
					</select>
				</div>
			</div>

			<div id="div-form">
				<h4>Please fill out the form</h4>
				
				<div class="form-floating mb-3 mt-3">
					<input type="text" name="fname" class="form-control" id="floatingInput" placeholder="Full Name">
					<label for="floatingInput">Full Name</label>
				</div>
				<div class="form-floating mb-3 mt-3">
					<input type="num" name="phone" class="form-control" id="floatingInput" placeholder="Phone Number">
					<label for="floatingInput">Phone Number</label>
				</div>
				<div class="form-floating mb-3 mt-3">
					<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating mb-3 mt-3">
					<textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
					<label for="floatingTextarea2">Message</label>
				</div>
				<!--
					<div class="form-floating mb-3 mt-3">
					<input type="date" class="form-control" id="floatingPassword" placeholder="date">
					<label for="floatingPassword">Select date for appointment</label>
				</div>
				-->
				<button type="submit" class="btn btn-primary" name="send">Submit</button>
			</div>
		</form>
		<?php include_once("component/footer.php"); ?>

		<script>
			function selectedReason(){
				var reason = document.getElementById("reasonForContact");
				if(reason.value == "Request Demo"){
					document.getElementById("div-form").style.display="block";
				} else if(reason.value == "Inquire"){
					document.getElementById("div-form").style.display="block";
				} else if(reason.value == "placeholder"){
					document.getElementById("div-form").style.display="none";
				}
			}
		</script>

		<script src="../asset/js/offcanvas.js"></script>
		<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../asset/js/jquery.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$("#nav-main ul li a").removeClass("active");
				$("#nav-contact").addClass("active");
			})
		</script>
	</body>
</html>