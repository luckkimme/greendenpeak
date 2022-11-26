<?php 
   
    session_start();

    if(!$_SESSION['user_id']) {
        header("Location: login.php");
    }

    require_once __DIR__ . '/../../includes/processor/index-processor.php';
    require_once __DIR__ . '/../../includes/processor/admin-processor.php';

    //Get Company Information from Database
    $company = get_company_info($conn);

    error_reporting(E_ALL ^ E_NOTICE);

    $isSameNewPassword = true;
    $isSameCurrentPassword = true;

    if(isset($_POST['submit'])){
        $currentPassword = $_POST['currpswd'];
        $newPassword = $_POST['newpswd'];
        $confirmPassword = $_POST['confirmpswd'];
        $password = $company['password'];
        $isSameNewPassword = true;

        $isSameCurrentPassword = password_verify($currentPassword, $password);
        
        if($newPassword != $confirmPassword) {
            $isSameNewPassword = false;
        }
        
        if($isSameNewPassword && $isSameCurrentPassword){
            $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            update_password($conn, $newPassword);
            $updatedPassword = true;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $company['company_name']; ?></title>
        <link rel="icon" href="<?php echo $company['company_logo']; ?>">
        
        <link rel="stylesheet" href="../../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css">
        
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
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
        <link href="../../asset/css/dashboard.css?d=<?php echo time(); ?>" rel="stylesheet">

    </head>
    <body>

        <?php include_once('../component/admin_header.php');?>

        <div class="container-fluid">
            <div class="row">
                <?php include_once('../component/admin_nav.php'); ?>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div id='change-password' class="px-4 pt-2 my-1 text-center">
                        <div class="col-lg-6 mx-auto">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 mb-3 border-bottom">
                                <h1 class="h2">Change Password</h1>
                            </div> <!-- end user header -->
                            <form action="changepass-cms.php" method="POST">
                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" id="current-pwd" placeholder="Current password" name="currpswd" required>
                                    <label for="currpswd">Current Password</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" id="new-pwd" placeholder="New password" name="newpswd" required>
                                    <label for="newpswd">New Password</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" id="confirm-pwd" placeholder="Confirm password" name="confirmpswd" required>
                                    <label for="confirmpswd">Confirm Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-submit" name="submit">Submit</button>

                                <?php if(!$isSameCurrentPassword) { ?>
                                    <div class="mt-3 text-danger">Incorrect current password. Please try again</div>
                                <?php } else if(!$isSameNewPassword) { ?>
                                    <div class="mt-3 text-danger">New password do not match. Please try again</div>
                                <?php } else if($updatedPassword) { ?>
                                    <div class="mt-3 text-success">Password Successfully Updated!</div>
                                <?php }?>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script>
            let nav_password = document.getElementById("password-link");
            nav_password.className += " active";

            let nav_product = document.getElementById("product-link");
            nav_product.className = "nav-link";

            let nav_about = document.getElementById("about-link");
            nav_about.className = "nav-link";
        </script>
        <script src="../../asset/js/dashboard.js"></script>
        <script src="../../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../asset/js/dashboard.js"></script>
    </body>
</html>
