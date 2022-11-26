<?php 
  session_start();
  
  if(isset($_GET['logout'])){
      session_destroy();
      unset($_GET['logout']);
      header('Location: login.php');
      die();
  }

  require_once __DIR__ . '/../includes/processor/index-processor.php';

  //Get Company Information from Database
  $company = get_company_info($conn);

  //error_reporting(E_ALL ^ E_NOTICE);

  $invalidLogin = false;

  if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['pswd'];
    $userDetails = get_login_details($conn);
    $isLoggedIn = false; 
    
    $invalidLogin = true;

    if($userDetails){
      $db_username = $userDetails['username'];
      $isLoggedIn = password_verify($password, $userDetails['password']);
    }

    if($isLoggedIn){
      $_SESSION['user_id'] = $userDetails['company_id'];
      $invalidLogin = false;
      header("Location: admin/brand-cms.php");
      die();
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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <div class="px-4 pt-5 my-5 text-center">
      <div class="col-lg-6 mx-auto">
        <h1 class="display-4 fw-bold">Admin Login</h1>
        <form action='login.php' method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="username" name="username">
            <label for="username">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="userPassword" placeholder="Password" name="pswd">
            <label for="userPassword">Password</label>
          </div>
          <button type="submit" class="btn btn-primary w-100" name="method" value="login">Sign In</button>
          <?php if($invalidLogin) { ?>
            <div class="mt-3 text-danger">Invalid E-mail or Password. Please try again</div>
          <?php }?>
        </form>
      </div>
    </div>

    <script src="../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../asset/js/dashboard.js"></script>
  </body>
</html>
