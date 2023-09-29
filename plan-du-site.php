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
    <link rel="stylesheet" href="<?php echo $main_link;?>css/plan-du-site.css">
</head>
<body class="navbar-is-closed">
    <?php
        $is_active_index = "active";
        include_once 'header.php';
    ?>

    <main class="main">
        <h1>Plan du Site</h1>
        <section class="section" id="mentions-legales">
            <div class="container">
                <article>
                    <h2><a href="<?php echo $main_link;?>" class="link">ACCUEIL</a></h2>
                </article>
                <article>
                    <h2><a href="<?php echo $main_link;?>presentation" class="link">PRÉSENTATION</a></h2>
                    <p><a href="<?php echo $main_link;?>presentation#a-propos">À Propos</a></p>
                    <p><a href="<?php echo $main_link;?>presentation#formations">Formations</a></p>
                </article>
                <article>
                    <h2><a href="<?php echo $main_link;?>competences" class="link">Compétences</a></h2>
                </article>
                <article>
                    <h2><a href="<?php echo $main_link;?>projets" class="link">Projets</a></h2>
                </article>
                <article>
                    <h2><a href="<?php echo $main_link;?>contact" class="link">Contact</a></h2>
                </article>
                <article>
                    <h2><a href="<?php echo $main_link;?>mentions-legales" class="link">Mentions Légales</a></h2>
                </article>
                <article>
                    <h2><a href="<?php echo $main_link;?>plan-du-site" class="link">Plan du site</a></h2>
                </article>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>