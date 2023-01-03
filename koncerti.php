<!-- implementacija-php -->

<?php

require("config.php");
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM uporabnik WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: prijava.php");
}

?>


<?php

if(isset($_POST["submit1"])){
  $ime_karte = $_POST["submit1"];
    $query = "INSERT INTO karte VALUES('','$ime_karte')";
    mysqli_query($conn, $query);
    header("Location: kosarica.php");
die();

}
else if(isset($_POST["submit2"])){
  $ime_karte = $_POST["submit2"];
    $query = "INSERT INTO karte VALUES('','$$ime_karte')";
    mysqli_query($conn, $query);
    header("Location: https://example.com/myOtherPage.php");
die();
}
else if(isset($_POST["submit3"])){
  $ime_karte = $_POST["submit3"];
    $query = "INSERT INTO karte VALUES('','$$ime_karte')";
    mysqli_query($conn, $query);
}
else if(isset($_POST["submit4"])){
  $ime_karte = $_POST["submit4"];
    $query = "INSERT INTO karte VALUES('','$ime_karte')";
    mysqli_query($conn, $query);
}
else if(isset($_POST["submit5"])){
  $ime_karte = $_POST["submit5"];
    $query = "INSERT INTO karte VALUES('','$ime_karte')";
    mysqli_query($conn, $query);
}
else if(isset($_POST["submit6"])){
  $ime_karte = $_POST["submit6"];
    $query = "INSERT INTO karte VALUES('','$ime_karte')";
    mysqli_query($conn, $query);
}
else{

  "<script> alert('NI sLO SKOZ'); </script>";
}

?>

<!-- end implementacija-php -->

<!DOCTYPE html>

<html>

<head>

  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Prodajalko - Koncerti</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body class="sub_page">
  <div class="hero_area">

    <!-- header section strats -->

    <div class="brand_box">
    <a class="navbar-brand" href="index.php">
      <font size="+8" style="color:white" >PRODAJALKO</font>
      </a>
    </div>

    <!-- end header section -->
  
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Domov<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="onas.php">O nas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="koncerti.php">Koncerti</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="kontakt.php">Kontaktiraj nas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="kosarica.php">Košarica</a>
                </li>

                <li class="nav-item" style="padding:10px 30px; color:red;">
                
                <a style="color:orange" href="profil.php"> <i class='far fa-user-circle' style='font-size:20px; padding-right:5px'></i> <?php echo $row["uporabniskoime"]; ?> </a> 
               </li>

              </ul>
             
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- koncerti section -->

    <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Izbira kart:
        </h2>
      </div>
    </div>
    <div class="container-fluid">

    <form method="post">

      <div class="fruit_container">
        <div class="box">
          <img src="images/rollingstones.jpg" alt="">
          <div class="link_box">
            <h5>
              Rolling Stones
            </h5>
          <a>
            <button type="submit"  id="sumbit" name="submit1" class="btn btn btn-block" value="RollingStones"> <strong> Kupi zdaj </strong> </button>
          </a>
          </div>
        </div>
        <div class="box">
          <img src="images/gunsnroses2.jpg" alt="">
          <div class="link_box">
            <h5>
             Guns N Roses
            </h5>
            <a>
            <button type="submit2" name="submit2" class="btn btn btn-block" value="GunsNRoses"> <strong> Kupi zdaj </strong> </button>
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/queen.jpg" alt="">
          <div class="link_box">
            <h5>
              Queen
            </h5>
            <a>
            <button type="submit3" name="submit3" class="btn btn btn-block" value="Queen"> <strong> Kupi zdaj </strong> </button>
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/coldplay.jpg" alt="">
          <div class="link_box">
            <h5>
              Coldplay
            </h5>
            <a>
            <button type="submit4" name="submit4" class="btn btn btn-block" value="ColdPlay"> <strong> Kupi zdaj </strong> </button>
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/ledzeppelin.jpg" alt="">
          <div class="link_box">
            <h5>
            Ledzeppelin
            </h5>
            <a>
            <button type="submit5" name="submit5" class="btn btn btn-block" value="Ledzeppelin"> <strong> Kupi zdaj </strong> </button>
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/slayer.jpg" alt="">
          <div class="link_box">
            <h5>
              Slayer
            </h5>
            
            <a>
            <button type="submit6" name="submit6" class="btn btn btn-block" value="Slayer"> <strong> Kupi zdaj </strong> </button>
            </a>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end koncerti section -->

  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          Prodajalko
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Maribor
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +040883922
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                prodajalko@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                Naroči se
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->

  <section class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Prodajalko.si</a>
    </p>
  </section>
  
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

  <script type="text/javascript">
    document.getElementById("sumbit").onclick = function () {
        location.href = 'kosarica.php';
    };
</script>

</body>

</html>