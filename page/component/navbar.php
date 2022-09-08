<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" aria-label="Main navigation" id="nav-main">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-main" href="/greendenpeak/index.php">
            <img src="/greendenpeak/asset/img/logo/logo-brand.png" alt="Logo" class="d-inline-block">
            greendenpeak
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse div-navbar-offcanvas">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/greendenpeak/index.php" id="nav-home">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/greendenpeak/page/about-us.php" id="nav-about">about us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#" id="nav-product">products</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <?php display_brand_products($available, $brand, $product); ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/greendenpeak/page/contact-us.php" id="nav-contact">contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>