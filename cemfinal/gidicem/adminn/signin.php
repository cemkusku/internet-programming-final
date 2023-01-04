<?php 

session_start();
 if(isset($_SESSION['username'])){
   header("Location: index.php");
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gidicem-Giriş</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">



    <div class="bg-light min-vh-100 d-flex flex-row align-items-center" style="    width: 100%;
    background-color: #323962 !important;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0" style="width: 700px;

    text-align: center;">
              <div class="card-body">
                <form action="" method="post">
                  <h1 style="color: black; text-align: left;">Giriş</h1>
                  <p class="text-medium-emphasis" style="text-align: left;">Hesabınıza giriş yapın</p>
      
                    <input class="form-control" name="username" type="text" placeholder="Kullanıcı Adı" style="margin: 2rem; width:300px;">

 
                    <input class="form-control" name="pwd" type="password" placeholder="Şifre" style="margin: 2rem; width:300px;">
                  
                  <div class="row" style="    margin-top: 2rem;">
                    <div class="col-6">
                      <input class="btn btn-primary px-4" type="submit" value="Giris">
                    </div>
                    </form>
                    
                  </div>
                
                <?php 
                $conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");
                if(isset($_POST['username']) && isset($_POST['pwd'])){
                  $username = $_POST['username'];
                  $pwd = $_POST['pwd'];
                  //echo $username;
                    $bakim = $conn
                    ->query("SELECT * FROM kullanicilar WHERE username = '".$_POST['username'] ."'")
                    ->fetch();

                    if($bakim[1] == $_POST[''] && $bakim[3] == $_POST['']){
                      echo "<p class='text-danger'>Lütfen Bilgilerinizi Doğru Giriniz</p>";
                    }

                    else if($bakim[1] == $_POST['username'] && $bakim[3] == $_POST['pwd']){
                      echo "<p class='text-success'>Giris Basarili</p>";
                      $_SESSION['username'] = $_POST['username'];
                      echo("<script> window.location.href='index.php'; </script>");
                    }
                    
                    else{
                      echo "<p class='text-danger'>Parola Veya Kullanici Adi yanlis</p>";
                    }
                    
                  }
                
                ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>