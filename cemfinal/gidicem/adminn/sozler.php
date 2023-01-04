<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GidiCem-Admin</title>
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



        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>GidiCem</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../images/pp.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Cem Küskü</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Anasayfa Hero </a>
                    <a href="sozler.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Anasayfa Sözler</a>

                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            
        
  <?php
  
  $conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");

  
if(isset($_POST["guncelle"])){
  $soz_sahibi = $_POST["soz_sahibi"];
  $soz= $_POST["soz"];
  
  $sql = "UPDATE `ozlu` SET `soz_sahibi`='".$soz_sahibi."',`soz`='".$soz."' WHERE id = 1";
  $conn->exec($sql);


  echo "<script>alert('Güncelleme tamamlandı')</script>";
}
 


?>
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
      <div class="header-divider"></div>
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item active"><span>Anasayfa</span></li>
          </ol>
        </nav>
      </div>
    </header>
    <div class="body flex-grow-1 px-3">




    







    <?php
  $conn = new PDO("mysql:host=localhost;dbname=gidicem;charset=utf8", "root", "");



if(isset($_POST['delete'])){
  $id = $_POST['select'];
  $conn->prepare("DELETE FROM ozlu WHERE id = ?")->execute([$id]);
}

if(isset($_POST['submitHizmet'])){
    $soz_sahibi = $_POST["soz_sahibi"];
    $soz = $_POST["soz"];
    

  $guncelle = $conn->prepare("UPDATE ozlu SET soz_sahibi=:soz_sahibi,soz=:soz WHERE id=:id");
  $kontrol = $guncelle->execute(array(
      'soz_sahibi' => $soz_sahibi,
      'soz' => $soz,
      'id' => $_GET['duzenle']
  ));

}


 ?>
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
      <div class="container-fluid">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg></a>  
      </div>
      <div class="header-divider"></div>
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item active"><span>Sloganlar</span></li>
          </ol>
        </nav>
      </div>
    </header>
    <div class="body flex-grow-1 px-3">










<div class="secc"  style="display: flex; width:850px" >
    <div class="body flex-grow-1 px-3" style="width: 900px; border-right: 1px solid #0000003b;">
    <h2 style="margin: 20px 5px;">Sözleri Düzenle / Sil</h2>
    <hr>
    <?php
    $veri = $conn
        ->query("SELECT * FROM ozlu")
        ->fetchAll();
    ?>
    <?php

    foreach ($veri as $row) {

    ?>
    <div class="user-content" style="display: flex;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    justify-content: space-between;
    align-items:center;">
        <div class="user-name">
        <h6>başlık</h6>
        <textarea name="soz_sahibi" id="isim" cols="20" rows="4">  <?php echo $row['soz_sahibi'] ?></textarea>
        </div>
        <div class="user-nick">
        <h6>slogan</h6>
        <textarea name="soz" id="fiyat" cols="20" rows="4">  <?php echo $row['soz'] ?></textarea>
        </div>
        
        <a href="sozler.php?duzenle=<?php echo $row['id'] ?>" class="btn btn-info" style="width:90px; text-align: center;
    height: 40px;">Duzenle</a>  

        <a href="sozler.php?sil=<?php echo $row['id'] ?>" class="btn btn-danger" style="width: 90px;
    text-align: center;
    height: 40px;">Sil</a>
    </div>
    <hr>
    <?php
    }
    ?>
</div>






<div class="body flex-grow-1 px-3" style="width: 400px;
    /* border-right: 1px solid #0000003b; */
    position: fixed;
    right: 20px;
    top: 150px;
    padding-bottom:5px">

<h2 style="margin: 20px 5px;">Düzenle</h2>


<?php


if (isset($_GET['sil'])) {
    $sil = $conn->prepare("DELETE FROM ozlu WHERE id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['sil']
    ));

}


if (isset($_GET['duzenle'])) {
    $duzenle = $conn->prepare("SELECT * FROM ozlu WHERE id=:id");
    $duzenle->execute(array(
        'id' => $_GET['duzenle']
    ));

    $row = $duzenle->fetch(PDO::FETCH_ASSOC);
    
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="    margin-bottom:5px;">
            <label for="isim">Hizmet Ismi</label>
            <input type="text" class="form-control" name="soz_sahibi" id="soz_sahıbı" value="<?php echo $row['soz_sahibi'] ?>">
        </div>
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="unvan">Hizmet Fiyati</label>
            <input type="text" class="form-control" name="soz" id="soz" value="<?php echo $row['soz'] ?>">
        </div>
        
        <button type="submit" name="submitHizmet" class="btn btn-primary">Guncelle</button>
    </form>
    
    <?php
}
?>

<div class="body flex-grow-1 px-3" style="width: 400px;
    border-top: 1px solid #0000003b;
;">

<h2 style="margin: 20px 5px;">Ekle</h2>


<?php


if (isset($_GET['sil'])) {
    $sil = $conn->prepare("DELETE FROM ozlu WHERE id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['sil']
    ));

}


if (isset($_GET['duzenle'])) {
    $duzenle = $conn->prepare("SELECT * FROM ozlu WHERE id=:id");
    $duzenle->execute(array(
        'id' => $_GET['duzenle']
    ));

    $row = $duzenle->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['submitEkle'])){
        $soz_sahibi= $_POST['soz_sahibi'];
        $soz = $_POST['soz'];

  $conn->prepare("INSERT INTO `ozlu`(`soz_sahibi`,`soz`) VALUES (?,?)")->execute([$soz_sahibi,$soz]);

}
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="isim">soz sahibi</label>
            <input type="text" class="form-control" name="soz_sahibi" id="isim" value="" placeholder="soz sahibi">
        </div>
        <div class="form-group" style="    margin-bottom: 5px;">
            <label for="unvan">soz</label>
            <input type="text" class="form-control" name="soz" id="fiyat" value="" placeholder="soz">
        </div>
      
        <button type="submit" name="submitEkle" class="btn btn-success" style="width: 90px;">Ekle</button>
    </form>
    
    <?php
}
?>

</div>
</div>
</div>
</div>
 

































































            
        </div>
        <!-- Content End -->

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