<?php
// Define la base URL del proyecto
$base_url = "/petfoot_landing";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($pageTitle)): ?>
        <title><?php echo $pageTitle; ?></title>
    <?php else: ?>
        <title>PetFoot</title>
    <?php endif; ?>

    <!--fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--ALL CSS-->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/nav.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/footer.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>
    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo $base_url; ?>/assets/images/logo/logo.png" alt="">
            </div>
            <div class="menu">
                <nav class="links">
                    <ul>
                        <li><a href="#home" id="inicio">Inicio</a></li>
                        <li><a href="#service" id="nosotros">¿Qué hacemos?</a></li>
                        <li><a href="#about" id="obras">¿Quienes somos?</a></li>
                    </ul>
                </nav>
                <a href="#" class="btn__start" id="start">Empieza ya!</a>
            </div>
        </div>
    </header>
    <script src="<?php echo $base_url; ?>/assets/js/menu.js"></script>
