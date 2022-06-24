<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/rainbow-vacuum.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/rainbow-kit.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/certification.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
	</head>
	<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
		<div id="div-rainbow">
			<?php 
		        include_once("component/navbar.php");
		    ?>
            <nav id="div-main-tab" class="navbar navbar-light bg-light px-3 sticky-top">
                <a class="navbar-brand" href="#">Rainbow</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#rainbow-vacuum-cleaner">rainbow vacuum cleaner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product-features">product features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#specifications">specifications / kit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certifications">certifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accessories">accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#user-manual">user manual</a>
                    </li>
                </ul>
            </nav>
            <div id="tab-content">
                <div id="rainbow-vacuum-cleaner" class="tab-item">
                    <div class="div-main-container">
			    		<div class="container-fluid div-product-img">
					    	<img src="../asset/img/placeholder/g.png">
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
                <div id="product-features" class="tab-item">
                    <h4 id="scrollspyHeading2">Second heading</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div> 
                <div id="specifications" class="tab-item">
                    <?php include_once("component/rainbow-kit.php"); ?>
                </div> 
                <div id="certifications" class="tab-item">
                    <?php include_once("component/certification.php"); ?>
                </div> 
                <div id="accessories" class="tab-item">
                    <h4 id="scrollspyHeading5">Fifth heading</h4>
                    <p>Where can I get some?
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
                <div id="reviews" class="tab-item">
                    <h4 id="scrollspyHeading5">Fifth heading</h4>
                    <p>Where can I get some?
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
                <div id="user-manual" class="tab-item">
                    <h4>In need of assistance for using the Rainbow Vacuum Cleaner?</h4>
                    <h5>You may download these user manuals for better user experience</h6>
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="p-3 border bg-light">
                                    <h6>rainbow srx - Manual</h6>
                                    <a href="../asset/img/placeholder/k.png" target="_blank" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                        download
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light">
                                    <h6>rainbow e2 black - manual</h6>
                                    <a href="../asset/img/placeholder/k.png" target="_blank" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                        download
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light">
                                    <h6>rainbow e2 silver - manual</h6>
                                    <a href="../asset/img/placeholder/k.png" target="_blank" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                        download
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 border bg-light">
                                    <h6>rainbow e2 gold - manual</h6>
                                    <a href="../asset/img/placeholder/k.png" target="_blank" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                        download
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
	</body>
</html>