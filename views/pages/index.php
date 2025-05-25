<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tienda</title>
  <link rel="stylesheet" href="styles/navbar.css"/>
  <link rel="stylesheet" href="styles/footer.css"/>
  <link rel="stylesheet" href="styles/index.css"/>
</head>

<body>

  <?php include '../../scripts/navbar.php'; ?>

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

  <?php include '../../scripts/footer.html'; ?>

  <!-- Scripts -->
  <script src="script.js"></script>
  
</body>

</html>