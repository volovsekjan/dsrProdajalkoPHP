<!-- php-implementacija -->

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

<!-- end php-implementacija -->

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

  <title>Prodajalko - Home</title>


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

<body>
  <div class="hero_area">

    <!-- header section strats -->

    <div class="brand_box">
      <a class="navbar-brand" href="index.php">
      <font size="+8" style="color:white" >PRODAJALKO</font>
      </a>
    </div>

    <!-- end header section -->

    </div>

    <!-- slider section -->

    <section class=" slider_section position-relative ">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="images/3.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/2.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/1.jpg" alt="">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <!-- end slider section -->
 
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

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            Nakup Kart
          </h2>
          <p>
           Široka in pestra izbira kart
          </p>
        </div>
        <div class="img-box">
          <img src="images/karte.png" alt="">
        </div>
        <div class="btn-box">
          <a href="koncerti.php">
            Kupi Zdaj
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0 orangee" >
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
                O PODJETJU PRODAJALKO 
              </h2>
            </div>
            <p>
              Podjetje Prodajalko je eden izmed vodilnih prodajalcev vstopnic v Sloveniji z več kot 500.000 izdanimi vstopnicami letno. Sodelovali smo z več kot 200 organizatorji.
            </p>
            <a href="onas.php">
              Preberi več
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Najbolj prodajano:
        </h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="fruit_container">
        <div class="box">
          <img src="images/rollingstones.jpg" alt="">
          <div class="link_box">
            <h5>
              Rolling Stones
            </h5>
            <a href="">
              Kupi zdaj
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/gunsnroses2.jpg" alt="">
          <div class="link_box">
            <h5>
             Guns N Roses
            </h5>
            <a href="">
              Kupi zdaj
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/queen.jpg" alt="">
          <div class="link_box">
            <h5>
              Queen
            </h5>
            <a href="">
              Kupi zdaj
            </a>
          </div>
        </div>
		</div>
    </div>
  </section>
  
   <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
          <div class="detail-box">
            <a href="koncerti.php">
              Prikaži vse
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
	<br/>
	<br/>
	<br/>

  <!-- end fruit section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Pišite nam
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Uporabniško ime" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" class="message_input" placeholder="Sporočilo" />
                  </div>
                  <div>
                    <button type="submit">
                      Pošlji
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2743.543186267794!2d15.648153596731897!3d46.55672271258276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476f77a802695381%3A0x8d4622f342a0d002!2sKinobox!5e0!3m2!1ssl!2ssi!4v1670268983234!5m2!1ssl!2ssi" width="500" height="300" frameborder="0" style="border:0; width: 70%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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
              <input type="text" placeholder="Vpiši email">
              <button>
                Naroči se takoj!
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

</body>

</html>