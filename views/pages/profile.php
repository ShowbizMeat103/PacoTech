<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PacoTech</title>

    <link rel="stylesheet" href="styles/nav.css"/>
    <link rel="stylesheet" href="styles/footer.css"/>
    <link rel="stylesheet" href="styles/profile.css"/>
</head>
<body>

    <?php include '../../scripts/nav.php'; ?>

    <main class="profile-container">
        <h1>Perfil de Javas</h1>
        <img src="profile-icon" alt="imagen de perfil" class="profile-image">
        <div class = profile-data>
            <p><strong>Nombre:</strong> Javas</p>
            <p><strong>Email:</strong>javierfsanvaz@hotmail.com</p>
            <p><strong>Teléfono:</strong> 123-456-7890</p>
            <p><strong>Dirección:</strong> Calle Falsa 123, Ciudad, País</p>
            <p><strong>Fecha de Registro:</strong> 2023-10-01</p>
            <p><strong>Último Inicio de Sesión:</strong> 2023-10-15</p>
            <p><strong>Pedidos Realizados:</strong> 5</p>
        </div>
    </main>

    <?php include '../../scripts/footer.php'; ?>

    <script src="script.js"></script>
  
</body>
</html>
