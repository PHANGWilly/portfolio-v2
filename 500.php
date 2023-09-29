<?php include_once 'variables.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portoflio de PHANG Willy, Full-Stack Developer, Web Developer, Front-End Developer, Web-Integrator à la recherche d'une alternance pour 2022-2023 !">
    <link rel="icon" href="./assets/images/favicon.ico"  type="image/icon type">
    <title>PHANG Willy - Error 505</title>
    <script src="https://kit.fontawesome.com/564f9d1433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $main_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $main_link;?>css/error.css">
</head>
<body class="navbar-is-closed">
    <?php
        include_once 'header.php';
    ?>

    <main class="main">
        <section class="section" id="accueil">
            <div class="container">
                <h2>Error</h2>
                <h1>500</h1>
                <h3>Internal Server Error ...</h3>
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo $main_link;?>" class="button main-button">Retourner à l'accueil</a>
                        </li>
                        <li>
                            <a href="<?php echo $main_link;?>contact" class="button secondary-button">contacter le support</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>