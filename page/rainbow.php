<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="/greendenpeak/asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="/greendenpeak/asset/css/rainbow.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="/greendenpeak/asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <script type="text/javascript" src="/greendenpeak/asset/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php 
	        include_once("navbar.php");
	    ?>
	    <nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <button class="nav-link nav-product active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">rainbow</button>
		    <button class="nav-link nav-product" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">thermostar</button>
		    <button class="nav-link nav-product" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">md solution</button>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		    	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				    <li class="nav-item nav-rainbow-item" role="presentation">
				    	<button class="nav-link btn-rainbow-item active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">vacuum cleaner</button>
				    </li>
				    <li class="nav-item nav-rainbow-item" role="presentation">
				    	<button class="nav-link btn-rainbow-item" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">rainmate</button>
				    </li>
				    <li class="nav-item nav-rainbow-item" role="presentation">
				    	<button class="nav-link btn-rainbow-item" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">fragrances</button>
				    </li>
				    <li class="nav-item nav-rainbow-item" role="presentation">
				    	<button class="nav-link btn-rainbow-item" id="pills-cert-tab" data-bs-toggle="pill" data-bs-target="#pills-cert" type="button" role="tab" aria-controls="pills-cert" aria-selected="false">cleaning solutions</button>
				    </li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
				    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">vacuum cleaner</div>
				    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">rainmate</div>
				    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">fragrances</div>
				    <div class="tab-pane fade" id="pills-cert" role="tabpanel" aria-labelledby="pills-cert-tab">cleaning solution</div>
				</div>
		    </div>
		    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
		    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
	</body>
</html>