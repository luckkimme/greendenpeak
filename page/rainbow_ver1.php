<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="/greendenpeak/asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="/greendenpeak/asset/css/rainbow_ver1.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="/greendenpeak/asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <script type="text/javascript" src="/greendenpeak/asset/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="div-rainbow">
			<?php 
		        include_once("navbar.php");
		    ?>
		    <div id="div-main-tab" class="sticky-top">
			    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				    <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="pills-vacuum-tab" data-bs-toggle="pill" data-bs-target="#pills-vacuum" type="button" role="tab" aria-controls="pills-vacuum" aria-selected="true">rainbow vacuum cleaner</button>
					</li>
				    <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-features-tab" data-bs-toggle="pill" data-bs-target="#pills-features" type="button" role="tab" aria-controls="pills-features" aria-selected="false">product features</button>
				    </li>
				    <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">specifications / kit</button>
				    </li>
				    <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-clean" type="button" role="tab" aria-controls="pills-clean" aria-selected="false">certifications</button>
				    </li>
				    <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-clean" type="button" role="tab" aria-controls="pills-clean" aria-selected="false">accessories</button>
				    </li>
				    <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-clean" type="button" role="tab" aria-controls="pills-clean" aria-selected="false">reviews</button>
				    </li>
				    <li class="nav-item" role="presentation">
					    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-clean" type="button" role="tab" aria-controls="pills-clean" aria-selected="false">user manual</button>
				    </li>
				</ul>
			</div>
			<div class="tab-content" id="pills-tabContent">
			    <div class="tab-pane fade show active" id="pills-vacuum" role="tabpanel" aria-labelledby="pills-vacuum-tab">
			    	<div class="div-main-container">
			    		<div class="container-fluid div-product-img">
					    	<img src="/greendenpeak/asset/img/placeholder/g.png">
				    	</div>
				    	<div class="div-product-desc">
				    		<div>
					    		<h1>rainbow vacuum cleaner</h1>
					    		<ul>
					    			<li>Eco-friendly</li>
					    			<li>Eco-friendly</li>
					    			<li>Eco-friendly</li>
					    			<li>Eco-friendly</li>
					    			<li>Eco-friendly</li>
					    			<li>Eco-friendly</li>
					    			<li>Eco-friendly</li>
					    		</ul>
				    		</div>
				    		<button class="btn btn-primary btn-order">get yours now!</button>
				    	</div>
			    	</div>
				</div>
			    <div class="tab-pane fade" id="pills-features" role="tabpanel" aria-labelledby="pills-features-tab">
			    	<div class="div-main-container div-features">
			    		<div class="div-feature-desc">
				    		<p>The Rainbow Cleaning System cleans your home the most natural way possible, using The Power of Water.</p>
			    		</div>
			    		<div class="container-fluid div-product-feature-img">
			    			<img src="/greendenpeak/asset/img/placeholder/k.png">
			    		</div>
			    	</div>
			    	<div class="div-features">
			    		<div class="div-feature-desc">
				    		<p>The Rainbow Cleaning System cleans your home the most natural way possible, using The Power of Water.</p>
			    		</div>
			    		<div class="container-fluid div-product-feature-img">
			    			<img src="/greendenpeak/asset/img/placeholder/k.png">
			    		</div>
			    	</div>
			    </div>
			    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">fragrance</div>
			    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">cleaning</div>
			    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">cleaning</div>
			    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">cleaning</div>
			    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">cleaning</div>
			</div>
		</div>
	</body>
</html>