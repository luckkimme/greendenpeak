<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/product.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/certification.css?d=<?php echo time(); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	
        <!-- Bootstrap core CSS -->
        <link href="../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
        <!-- Custom styles for offcanvas navbar -->
        <link href="../asset/css/heroes.css?d=<?php echo time(); ?>" rel="stylesheet">
    
    </head>
	<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
		<main id="div-product">
			<?php 
		        include_once("component/navbar.php");
		    ?>
            <nav id="div-main-tab" class="navbar navbar-light bg-light px-3 fixed-top">
                <a class="navbar-brand" href="#">Rainbow</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#product">rainbow vacuum cleaner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product-features">product features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#specifications">specifications / kit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#optional-accessories">optional accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#other-info">other information</a>
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
                <div id="product" class="tab-item">
                    <?php include_once("component/product-info.php"); ?>
                </div>
                
                <div id="product-features" class="tab-item">
                    <?php include_once("component/product-feature.php"); ?>
                </div> 

                <div id="specifications" class="tab-item">
                    <?php include_once("component/product-kit.php"); ?>
                </div> 
                
                <div id="optional-accessories" class="tab-item">
                    <?php include_once("component/product-accessories.php"); ?>    
                </div>
                
                <div id="other-info" class="tab-item">
                    <?php include_once("component/product-other-info.php"); ?>
                </div> 

                <div class="b-example-divider-v2"></div>

                <div id="reviews" class="tab-item">
                    <h4 id="scrollspyHeading5">Fifth heading</h4>
                    <p>Where can I get some?
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>

                <div class="b-example-divider-v2"></div>

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
        </main>
        <script src="../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="../asset/js/offcanvas.js"></script>
        <?php include_once("component/footer.php"); ?>
	</body>
</html>