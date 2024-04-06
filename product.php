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

  <title>Productos</title>
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
  <link rel="shortcut icon" href="/site/images/logoDasha.png" type="image/x-icon">
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'php/header.php'; ?> <!-- Incluyendo el archivo header.php -->
    
    <!-- end header section -->
  </div>

   <!-- products section -->
   <section class="products_section">
        <div class="heading_container">
            <h2>
                Productos mas vendidos
            </h2>
            <p>
                Para el cuidado de tu cabello
            </p>
        </div>
        <div class="container layout_padding">
            <div class="product_container">

                <?php
                // Establecer conexión a la base de datos
                include 'conexion.php';

                // Consulta SQL para obtener la información de los productos
                $sql = "SELECT * FROM productos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Iterar sobre los resultados y mostrar la información de cada producto
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="">
                                <div class="product_box">
                                    <div class="product_img-box">
                                        <img height="260px" src="products/' . $row['imagen'] . '" alt="" />
                                    </div>
                                    <div class="product_detail-box">
                                        <span>$' . $row['precio'] . '</span>
                                        <p>' . $row['nombre'] . '</p>
                                    </div>
                                </div>
                            </a>';
                    }
                } else {
                    echo "No se encontraron productos.";
                }
                ?>

            </div>
            <div  class="text-center text-white" style="display: flex;justify-content: center;flex-direction: row;">
                
                  <ul>
                  <a href="php3/agregar_producto.php" class="btn btn-primary mr-2">Registrar Producto</a>
                  </ul>
                  <ul> 
                  <a href="php3/editar_datos.php" class="btn btn-primary mr-2">Editar Producto</a>
                  </ul>
                  <ul>
                  <a href="php3/eliminar_datos.php" class="btn btn-primary mr-2">Borrar Producto</a>
                  </ul>
                
            </div>
    </section>

  <!-- find section -->
  <section class="find_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2">
          <div class="find_container">
            <div class="row">
              <div class="col-sm-6">
                <div class="find_container-img">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d947.6694582962594!2d-93.08420039575118!3d18.178749072508253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ee7d4083b6fe05%3A0x9f99519f53acb317!2sDASHA-SAL%C3%93N!5e0!3m2!1ses-419!2smx!4v1708306235290!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
              </div>
              <div class="col-sm-6">
                <h3>
                  Visitanos!<br />
                  
                </h3>
              
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


  <!-- sign section -->
  <section class="sign_section layout_padding2">
    <div class="container">
      <div class="row">
        
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
    <div class="container">
      <div class="follow_container">
        <div class="row">
          
          <div class="col-md-3 ">
            <div class="info_social">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="">
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