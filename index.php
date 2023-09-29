<?php include_once 'variables.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portoflio de PHANG Willy, Full-Stack Developer, Web Developer, Front-End Developer, Web-Integrator à la recherche d'une alternance pour 2022-2023 !">
    <link rel="icon" href="./assets/images/favicon.ico"  type="image/icon type">
    <title>PHANG Willy - Home</title>
    <script src="https://kit.fontawesome.com/564f9d1433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $main_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $main_link;?>css/index.css">
</head>
<body class="navbar-is-closed">
    <?php
        $is_active_index = "active";
        include_once 'header.php';
    ?>

    <main class="main">
        <section class="section" id="accueil">
            <div class="container">
                <div class="content-accueil">
                    <h2>Bonjour !</h2>
                    <h2>moi c'est, Phang Willy, </h2>
                    <h1 class="swap_text" id="profiles">Full-Stack Developer !</h1>
                    <p>
                        <strong>À la recherche d’une alternance</strong> <br>
                        d'une 1 semaine - 3 semaines dans votre entreprise <br>
                        à l’ <a href="https://www.esgi.fr/programmes/ingenierie-web.html" class="link">ESGI PARIS</a> (B3 Ingénierie du Web) dès maintenant !
                    </p>
                    <nav>
                        <ul>
                            <li>
                                <a href="<?php echo $main_link;?>contact" class="button main-button">Me Contacter</a>
                            </li>
                            <li>
                                <a href="<?php echo $main_link;?>assets/uploads/cv-phang-willy.pdf" class="button secondary-button">Mon CV</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="img-container">
                    <img src="./assets/images/coding.svg" alt="phang willy full-stack developer" class="coding-img">
                </div>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>