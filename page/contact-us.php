<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="../asset/css/contact-us.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php 
	        include_once("component/navbar.php");
	    ?>
	    <div class="div-header">
	    	<h4>contact us</h4>
	    </div>
	    <div id="div-contact-select">
	    	<div>Select the reason for contacting us</div>
	    	<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
				<option selected>Open this select menu</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
			<button type="button" class="btn btn-primary">Proceed</button>
	    </div>
	    <div id="div-form">
    		<h4>Please fill out the form</h4>
	    	<form>
	    		<div class="form-floating mb-3 mt-3">
				    <input type="text" class="form-control" id="floatingInput" placeholder="Full Name">
				    <label for="floatingInput">Full Name</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				    <input type="num" class="form-control" id="floatingInput" placeholder="Phone Number">
				    <label for="floatingInput">Phone Number</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				    <label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
				    <label for="floatingTextarea2">Comments</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				    <input type="date" class="form-control" id="floatingPassword" placeholder="date">
				    <label for="floatingPassword">Select date for appointment</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
	    	</form>
	    </div>
	</body>
</html>