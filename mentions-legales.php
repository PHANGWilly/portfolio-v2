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
    <link rel="stylesheet" href="<?php echo $main_link;?>css/mentions-legales.css">
</head>
<body class="navbar-is-closed">
    <?php
        $is_active_index = "active";
        include_once 'header.php';
    ?>

    <main class="main">
        <h1>Mentions Légales</h1>
        <section class="section" id="mentions-legales">
            <div class="container">
                <article>
                    <h2>Directeur de la publication</h2>
                    <p>Phang Willy</p>
                </article>
                <article>
                    <h2>Adresse</h2>
                    <p>40 rue auguste poullain</p>
                    <p>93200</p>
                    <p>Saint-Denis</p>
                    <p>France</p>
                </article>
                <article>
                    <h2>Hébergement</h2>
                    <p>Hostinger</p>
                    <p>61 Lordou Virinos Street</p>
                    <p>6023</p>
                    <p>Larcana</p>
                    <p>Cyprus</p>
                </article>
                <article>
                    <h2>Contact</h2>
                    <p><a href="tel:+33698259462"><span class="fa-solid fa-phone"></span>+33 6 98 25 94 62</a></p>
                    <p><a href="mailto:contact@phangwilly.com"><span class="fa-solid fa-envelope"></span>contact@phangwilly.com</a></p>
                    <p><a href="<?php echo $main_link?>contact"><span class="fa-solid fa-pen"></span>me contacter</a></p>
                </article>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>