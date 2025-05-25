<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tienda</title>
  <link rel="stylesheet" href="styles/base.css" />
</head>
<body>

<?php include 'scripts/nav.php'; ?>
  <!-- 
  
  QUE QUEDE CLARO QUE PACO PUSO UN HEADER DENTRO DEL HEADER, NO SE PORQUE, PERO LO HIZO:

  <header>
    <div class="PacoTech">
      <h1>PacoTech</h1>
    </div>

    <header class="navbar">    
      <img src="imagen de la company" alt="Logo" class="logo" />
      <nav class="nav-links nav-icons">
        <a href="index.html" class="nav-btn">Inicio</a>
        <a href="index.html" class="nav-btn publicar-btn">Agrega Producto</a>
        <a href="index.html" class="nav-btn">Iniciar Sesión</a>
        <a href="index.html" class="nav-btn">Registrarse</a>
        
      </nav>
      <div class="icon-cart">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
        </svg>
        <span>0</span>
      </div>
    </header>
  </header>
  -->

  <!-- CONTENEDOR PRODUCTOS -->
<div class="container-items">
  
  <div class="item">
    <figure><img src="images/Rtx 3036 Asus.jpg" alt="producto"/></figure>
    <div class="info-product">
      <h2>Rtx 3060 Asus</h2>
      <p class="price">$85</p>
      <button class="addToCart">Añadir al carrito</button>
    </div>
  </div>

</div>


  <!-- CARRITO DE COMPRAS -->
  <div class="cartTab">
    <h1>Shopping Cart</h1>
    <div class="listCart"></div>
    <div class="btn">
      <button class="close">CLOSE</button>
      <button class="checkOut">Check Out</button>
    </div>
  </div>


<?php include 'scripts/footer.php'; ?>


<!-- 

<footer class="footer">
  <div class="main">
    <div class="about">
      <img src="images/5060 ti Msi.jpg" class="logo" />
      <p>Más de 15 años de experiencia, lavando dinero xd.</p>
      <div class="social">


        <a href="#"><img src="img\gorjeo.jpg" ></a>
        <a href="#"><img src="img\tik-tok.png" ></a>
        <a href="#"><img src="img\whatsapp_1.png" ></a>
        <a href="#"><img src="img\youtube_1.png" ></a>


      </div>
    </div>
    <div class="menu">
      <h3>Enlaces rápidos</h3>
      <ul>
        <li><a href="landing_page.php">Inicio</a></li>
        <li><a href="index.php">Propiedades</a></li>
        <li><a href="#about-us">Nosotros</a></li>
      </ul>
    </div>
    <div class="contact">
      <h3>Contáctanos</h3>
      <p><i class="i-map"></i> Epigmeo Gonzales 209</p>
      <p><i class="i-phone"></i> +52 442 594 3653</p>
      <p><i class="i-mail"></i> inmobiliariavazquez@inmvaz.com</p>
    </div>
  </div>
  <div class="copy">
    <p>&copy; 2025 Inmobiliaria Vázquez. Un lugar para lavar dinero.</p>
  </div>
</footer>
-->


  <!-- Scripts -->
  <script src="script.js"></script>
  
</body>
</html>
