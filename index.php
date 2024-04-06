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

  <title>Estica Dasha</title>
<!-- Favicon-->
<link rel="shortcut icon" href="/site/images/logoDasha.png" type="image/x-icon">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'php/header.php'; ?> <!-- Incluyendo el archivo header.php -->
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            Ponte <br />
                            guapa
                          </h2>
                          <p>
                            En estetica dasha podras encontrar el tratamiento necesario para tu cabello
                          </p>
                          <div class="d-flex">
                          
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                          Ponte 
                            <br />
                          guapa
                          </h2>
                          <p>
                            Bienvenido/a a Salon Dasha, donde la elegancia se encuentra con la excelencia. Nos enorgullece ofrecer servicios de belleza excepcionales que resaltan tu estilo único y realzan tu belleza natural. Nuestro equipo de profesionales altamente capacitados se compromete a brindarte una experiencia indulgente y personalizada.
                          </p>
                          <div class="d-flex">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

  <!-- detail section -->
  <section class="detail_section">
    <div class="container-fluid">
      <h2>Marcas con la que trabajamos</h2>
      <div class="row">
        <div class="col-lg-3">
          <div class="detail_img-box">
            <img src="images/detail.png" alt="" class="w-100" />
          </div>
        </div>
        <div class=" col-lg-7">
          <div class="detail_container">
            <a href="https://www.chocolatto.mx">
              <div class="detail-box d-box-1">
                <div class="detail-content">
                  <img width="100px" src="images/logoChocolatto-removebg.png" alt="" />
                </div>
              </div>
            </a>
            <a href="https://www.terramartienda.com">
              <div class="detail-box d-box-2">
                <div class="detail-content">
                  <img src="images/logoTerramar.png" alt="" />
                </div>
              </div>
            </a>

            <div class="detail-box d-box-3">
              <a href="">
                <div class="detail-content">
                  <img width="109px" src="images/logoFirenze.png" alt="" />
                  <h5>
                    Baby girl
                  </h5>
                </div>
              </a>
            </div>   

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end detail section -->

  <!-- products section -->
  
  <!-- end products section -->

  <!-- find section -->
  <section class="find_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2">
          <div class="find_container">
            <div class="row">
              <div class="col-sm-6">
                <div class="find_container-img">
                  <img src="images/IconosBg.png" alt="" />
                </div>
              </div>
              <div class="col-sm-6">
                <ul>
                  <h5>            
                    Servicios Destacados:
                  </h5>
                  <li>
                    Cortes de Pelo y Peinados a la Moda
                  </li>
                  <li>         
                    Maquillaje Profesional para Todas las Ocasiones
                  </li>
                  <li>
                    Tratamientos Faciales Rejuvenecedores
                  </li>
                  <li>
                    Tratamientos Capilares de Alta Calidad
                  </li>
                </ul>
                
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-md-4">
          <div class="find_img-box">
            <img src="images/find-hero.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end find section -->
  <!-- client section -->
  <?php
include 'conexion.php'; // Incluir archivo de conexión a la base de datos

// Consulta SQL para obtener testimonios de clientes
$sql = "SELECT * FROM testimonios";
$result = $conn->query($sql);
?>

<section class="client_section layout_padding">
  <div class="container">
    <h2>Que dicen nuestros clientes</h2>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        $active = true; // Variable para controlar la clase 'active' en el primer elemento
        $counter = 0; // Variable para contar las tarjetas generadas
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if ($counter % 2 == 0) {
                echo ($counter == 0) ? '<div class="carousel-item active">' : '<div class="carousel-item">';
                echo '<div class="row layout_padding2">';
            }
            ?>
            <div class="col-md-6">
              <div class="client_box">
                <div class="client_id-box">
                  <div class="client_img-box">
                    <img src="images/client.png" alt="" />
                  </div>
                  <h4><?php echo $row['usuario']; ?></h4>
                </div>
                <div class="client_detail">
                  <p><?php echo $row['comentario']; ?></p>
                </div>
              </div>
            </div>
            <?php
            $counter++;
            if ($counter % 2 == 0) {
                echo '</div></div>'; // Cerrar la fila y el contenedor de la tarjeta
            }
          }
          // Si hay un número impar de testimonios, cerrar la fila y el contenedor final
          if ($counter % 2 != 0) {
            echo '</div></div>';
          }
        } else {
          echo "No se encontraron testimonios.";
        }
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <?php

if(isset($_SESSION['loggedin'])) {
    // El usuario está autenticado, puedes mostrar el botón para publicar un comentario
    echo '<button onclick="publicarComentario()">Publicar comentario</button>';
} else {
    // El usuario no está autenticado, muestra un mensaje o redirige a la página de inicio de sesión
    echo "<span class='iniciar_sesion' style='display: block; text-align: center; color: white;' aria-hidden='true'>Por favor inicia sesión para publicar un comentario.</span>";

}
?>
  </div>
</section>

<?php
$conn->close();
?>

  <!-- end client section -->

  <!-- sign section -->
  <section class="sign_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          
        </div>
        <div class="col-md-7">
          
        </div>
      </div>
    </div>
  </section>

  <!-- end sign section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container links_container">
      <div class="row ">
        <div class="col-md-3">
          <h3>
            CUSTOMER SERVICE
          </h3>
          <ul>
            <li>
              <a href="">
                International Help
              </a>
            </li>
            <li>
              <a href="">
                Contact Customer Care
              </a>
            </li>
            <li>
              <a href="">
                Return Policy
              </a>
            </li>
            <li>
              <a href="">
                Privacy Policy
              </a>
            </li>
            <li>
              <a href="">
                Shipping Information
              </a>
            </li>
            <li>
              <a href="">
                Promotion Terms
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            LET US HELP YOU
          </h3>
          <ul>
            <li>
              <a href="">
                Your Account
              </a>
            </li>
            <li>
              <a href="">
                Your Orders
              </a>
            </li>
            <li>
              <a href="">
                Shipping Rates & Policies
              </a>
            </li>
            <li>
              <a href="">
                Amazon Prime
              </a>
            </li>
            <li>
              <a href="">
                Returns & Replacements
              </a>
            </li>
            <li>
              <a href="">
                Help
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            INFORMATION
          </h3>
          <ul>
            <li>
              <a href="">
                About Us
              </a>
            </li>
            <li>
              <a href="">
                Careers
              </a>
            </li>
            <li>
              <a href="">
                Sell on shop
              </a>
            </li>
            <li>
              <a href="">
                Press & News
              </a>
            </li>
            <li>
              <a href="">
                Competitions
              </a>
            </li>
            <li>
              <a href="">
                Terms & Conditions
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            OUR SHOP
          </h3>
          <ul>
            <li>
              <a href="">
                Daily Deals
              </a>
            </li>
            <li>
              <a href="">
                App Only Deals
              </a>
            </li>
            <li>
              <a href="">
                Our Hottest Products
              </a>
            </li>
            <li>
              <a href="">
                Gift Vouchers
              </a>
            </li>
            <li>
              <a href="">
                Trending Product
              </a>
            </li>
            <li>
              <a href="">
                Hot Flash Sale
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024  By Carlos Chen & Emmanuel Contreras
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>