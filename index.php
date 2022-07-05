<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/index.css?d=<?php echo time(); ?>" rel="stylesheet">
    <link href="asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
    <link href="asset/css/about-us.css?d=<?php echo time(); ?>" rel="stylesheet">

    <style>
        body {
            overflow-y: hidden;
        }
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
    <!-- Custom styles for this template -->
    <link href="asset/css/offcanvas.css?d=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
    <?php include_once("page/component/navbar.php"); ?>

    <div class="index-content" id="indexPage1">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.48,154.44 C452.93,153.45 204.62,64.64 503.72,87.32 L501.46,-2.46 L-2.48,-1.48 Z" style="stroke: none; fill: #72B01D;"></path></svg>
        <div id="div-indexPage1-txt">
            <h1>Authorized Partner of Rainbow and Thermostar Philippines</h1>
        </div>
        <div id="div-img">
            <img src="asset/img/placeholder/e.png">
        </div>
    </div>
    <div class="index-content div-product" id="indexPage2">
        <svg style="height: 100%; width: 100%;">
            <rect/>
        </svg>
        <h3>featured products</h3>
        <div>
            <span>
                <h4>Rainbow Vacuum</h4>
                <p>Great technology for dust-free cleaning for all surfaces with the power of water.</p>
            </span>
            <img src="asset/img/placeholder/g.png">
        </div>
        <a href="page/rainbow.php">Learn More ></a>
    </div>
    <div class="index-content div-product" id="indexPage3">
        <svg style="height: 100%; width: 100%;">
            <rect/>
        </svg>
        <h3>featured products</h3>
        <div>
            <span>
                <h4>Thermostar Dry Cleaner</h4>
                <p>At least 180°C micro dry steam perfect for DIY heat sterilization and disinfection on surfaces.</p>
            </span>
            <img src="asset/img/placeholder/h.png">
        </div>
        <a href="page/thermostar.php">Learn More ></a>
    </div>
<!--  asked by client to be removed
    <div class="index-content div-product" id="indexPage4">
        <svg style="height: 100%; width: 100%;">
            <rect/>
        </svg>
        <h3>featured products</h3>
        <div>
            <span>
                <h4>MD Solution</h4>
                <p>MD Solution has distinct properties compared with other traditional disinfectants in the market today ideal most especially for emerging infectious diseases.</p>
            </span>
            <img src="/greendenpeak/asset/img/placeholder/i.webp">
        </div>
        <a href="/greendenpeak/page/mdsolution.php">Learn More ></a>
    </div>
-->
    <div class="index-content" id="indexPage5">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M189.69,160.49 C348.83,111.12 355.60,84.44 406.95,-3.45 L507.41,-3.45 L507.97,166.41 Z" style="stroke: none; fill: #72B01D;"></path></svg>
        <h3>Check out what other customers have to say</h3>
        <img src="asset/img/placeholder/j.png" style="height: 300px; width: 500px; margin: 3% 25%;">
    </div>
    <div id="div-faq">
        <div class="div-header">
            <h4>frequently asked questions (faq)</h4>
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Question 1
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Question 2
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Question 3
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/offcanvas.js"></script>
</body>
</html>
