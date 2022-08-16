<?php 

    session_start();

    //Includes Scripts
    require_once __DIR__ . '/../includes/connection.php';
    require_once __DIR__ . '/../includes/processor/product-processor.php';

    //Product Brands
    $brand = get_brand($conn);
    $product = get_products($conn);

    //View Scripts
    require_once __DIR__ . '/../includes/view/product-view.php';

?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="../asset/css/contact-us.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php 
	        include_once("component/navbar.php");
	    ?>
	    <div class="div-header">
	    	<h4>contact us</h4>
	    </div>
			<form action="/greendenpeak/page/sendemail.php" method="post">
	    		<div id="div-contact-select">
	    			<div>Select the reason for contacting us</div>
	    				<select class="form-select form-select-lg mb-3" name="purpose" aria-label=".form-select-lg example">
							<option value="Request Demo" selected>Request Demo</option>
							<option value="Inquire">Inquire</option>
							<option value="Question">Question</option>
							<option value="Buying">Buying</option>
						</select>
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
				<div class="form-floating mb-3 mt-3">
				    <input type="date" class="form-control" id="floatingPassword" placeholder="date">
				    <label for="floatingPassword">Select date for appointment</label>
				</div>
				<button type="submit" class="btn btn-primary" name="send">Submit</button>
	    	</form>
	    </div>
		<?php include_once("component/footer.php"); ?>
	</body>
</html>