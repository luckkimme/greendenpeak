<!DOCTYPE>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->

<link href="/../greendenpeak/asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

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
<script>
document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
</script>

    
    <!-- Custom styles for this template -->
    <link href="/../greendenpeak/asset/css/dashboard.css?d=<?php echo time(); ?>" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-lsg flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GREENDENPEAK, OPC</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column pb-3 border-bottom">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/../greendenpeak/page/index.php"> <span data-feather="home"></span> Dashboard </a>
          </li>
          <li class="nav-item has-submenu">
              <a class="nav-link" href="#"><span data-feather="mail"></span> Messages </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="#"> <span data-feather="help-circle"></span> Client Question</a></li>
                <li><a class="nav-link" href="#"> <span data-feather="video"></span> Demo Request</a></li>
              </ul>
	        </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <span data-feather="bar-chart-2"></span> Reports </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="h7">Content Management</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="/../greendenpeak/page/admin/landing-cms.php">
              <span data-feather="file"></span>
              Landing Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="user-check"></span>
              About Us Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/greendenpeak/page/admin/product-cms.php">
              <span data-feather="shopping-cart"></span>
              Products Page
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Content Management > About Us Page</h1>
      </div>
    </main>
  </div>
</div>


    <script src="/../greendenpeak/asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/../greendenpeak/asset/js/dashboard.js"></script>
  </body>
</html>
