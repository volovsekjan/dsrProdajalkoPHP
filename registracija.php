<!-- php implementacija-->

<?php
require 'config.php';

/*if(!empty($_SESSION["id"])){
  header("Location: registracija.php");
}*/

if(isset($_POST["submit"])){
  $ime = $_POST["ime"];
  $uporabniskoime = $_POST["uporabniskoime"];
  $email = $_POST["email"];
  $geslo = $_POST["geslo"];
  $ponovnogeslo = $_POST["ponovnogeslo"];
  $duplicate = mysqli_query($conn, "SELECT * FROM uporabnik WHERE uporabniskoime = '$uporabniskoime' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($geslo == $ponovnogeslo){

      $geslo = md5($geslo);
      $query = "INSERT INTO uporabnik VALUES('','$ime','$uporabniskoime','$email','$geslo')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}

?>

<!-- end php-implementacije-->

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

  <title>Prodajalko - Registracija</title>

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
  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--  -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  

</head>

<body class="sub_page">
  <div class="hero_area">

    <!-- header section strats -->

    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
      <a class="navbar-brand" href="index.php">
      <font size="+8" style="color:white" >PRODAJALKO</font>
      </a>
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

                <li class="nav-item">
                </li>

              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- about section -->

  <hr>
    
  <br>

  <section>

  <div class="container">

      <div class="card bg-light">
          <article class="card-body mx-auto" style="max-width: 400px;">
            <h2 class="card-title mt-3 text-center">Ustvari račun</h2>
            <br>
       
            <p>
          <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> Prijava preko aplikacije Twitter</a>
          <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Prijava preko aplikacije Facebook</a>
           </p>
        
           <p class="divider-text">
              <span class="bg-light">ALI</span>
          </p>
        
          <form method="post">
          <div class="form-group input-group">
          <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
          </div>
          <input id = "ime" name="ime" class="form-control" placeholder="ime" type="text">
            
          </div> 

         
          <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fab fa-php"></i> </span>
             </div>
                <input id = "uporabniskoime" name="uporabniskoime" class="form-control" placeholder="Uporabniško Ime" type="text" required>     
            </div> 

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
           </div>
              <input name="email" id = "email" class="form-control" placeholder="Email" type="email" required>
          </div> 

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
              <input name="geslo" id = "geslo" class="form-control" placeholder="Geslo" type="password" required>
          </div>
          
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-key"></i> </span>
          </div>
              <input name="ponovnogeslo" id = "ponovnogeslo" class="form-control" placeholder="Ponovno geslo" type="password" required>
          </div>

           <br>

          <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-block"> Ustvari račun </button>
          </div>    
        
          <p class="text-center">Ste že registrirani? <a href="prijava.php">Prijavi se</a> </p>                                                                 
      
        </form>
      
      </article>
      </div> 
      </div> 

      <br>
      <hr>

  </section>

  <!-- end about section -->

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

  <section class="container-fluid footer_section">
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