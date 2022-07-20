<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="../asset/css/navbar-test.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/thermostar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/thermostar-avantgarde.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/thermostar-professional.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
		<div id="div-rainbow">
            <?php 
		        include_once("component/navbar-test.php");
		    ?>

			<nav id="div-main-tab" class="navbar navbar-light bg-light px-4 sticky-top">
                <a class="navbar-brand" href="#"></a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#drysteamcleaner">Dry Steam Cleaner</a>
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="#avantgarde">Thermostar Avantgarde S4</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#professional">Thermostar Professional S4</a>
							</li>
						</ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#productsetkit">Product Set/Kit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accessoriesthermo">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#otherinfo">Other Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#user-manual">User Manual</a>
                    </li>
                </ul>
            </nav>
            <div id="tab-content">
                <div id="drysteamcleaner" class="tab-item">
                    <div class="div-main-container" >
			    		<div class="container-fluid">
					    	<img class="div-product-img" src="../asset/img/placeholder/thermostar_media/thermostar.png">
				    	</div>
				    	<div class="div-product-desc">
				    		<div>
					    		<h1>dry steam products</h1>
                                <p>With Thermostar Dry Steam System, you can clean:</p>
					    		<ul>
					    			<li>Beds, upholstery, mattresses, carpets and sofas</li>
					    			<li>Flat surfaces in the living room, children’s rooms and offices</li>
					    			<li>Bathrooms and toilets</li>
					    			<li>Kitchens</li>
					    			<li>Glass doors, windows and blinds</li>
					    			<li>Gardens</li>
					    			<li>Cars and bicycles</li>
					    		</ul>
				    		</div>
				    		<button class="btn btn-primary btn-order">get yours now!</button>
				    	</div>
			    	</div>
                </div> 

                <div id="avantgarde" class="tab-item">
                    <?php include_once("component/thermostar-avantgarde.php"); ?>
                </div> 

                <div id="professional" class="tab-item">
                    <?php include_once("component/thermostar-professional.php"); ?>
                </div> 

                <div id="accessoriesthermo" class="tab-item">
                    <?php include_once("component/accessoriesthermo.php"); ?>
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