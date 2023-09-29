<?php include_once 'variables.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portoflio de PHANG Willy, Full-Stack Developer, Web Developer, Front-End Developer, Web-Integrator à la recherche d'une alternance pour 2022-2023 !">
    <link rel="icon" href="./assets/images/favicon.ico"  type="image/icon type">
    <title>PHANG Willy - Présentation</title>
    <script src="https://kit.fontawesome.com/564f9d1433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $main_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $main_link;?>css/presentation.css">
</head>
<body class="navbar-is-closed">
    <?php
        include_once 'variables.php';
        $is_active_presentation = "active";
        include_once 'header.php';
    ?>

    <main class="main">    
        <h1>Présentation</h1>
        <section class="section" id="a-propos">
            <div class="container">
                <h1>Qui-suis-je ?</h1>
                <article class="presentation">
                    <figure>
                        <img src="./assets/images/photo_phang_willy.png" alt="Photo de Phang Willy">
                    </figure>
                    <aside>
                        <h2>Phang Willy</h2>
                        <h1>Junior Full-Stack Developer</h1>
                        <h3>21 ans | 5 janvier 2001</h3>
                        <h3>Saint-Denis 93</h3>
                        <p>
                            B3 Ingénierie du Web à l' <a href="https://www.esgi.fr/programmes/ingenierie-web.html" class="link">ESGI</a> Paris 75 <br>
                            Entreprise : peut-être la votre 
                        </p>
                        <a href="./assets/uploads/CV-PHANG-Willy.pdf" class="button secondary-button">Mon CV</a>
                    </aside>
                </article>
            </div>
        </section>
        <section class="section" id="formations">
            <div class="container">
                <h1>Formations</h1>
                <article class="formations">
                    <div class="formation">
                        <div class="left">
                            <h3>B3 Ingénierie du Web - <a href="https://www.esgi.fr/programmes/ingenierie-web.html" class="link">ESGI</a> - Paris 12e </h3>
                            <p>
                                Apprentissage des technologies web et frameworks, analyse, conception et gestion de projet <br><br>
                                Entreprise : Recherche en cours
                            </p>
                        </div>
                        <div class="right">
                            <h1>Full-Stack Developer</h1>
                            <date>2022-2023</date>
                        </div>
                        
                    </div>
                    <div class="formation">
                        <div class="left">
                            <h3>BTS SIO - SLAM - <a href="https://www.campusmontsouris.fr/formation/bts-services-informatiques-aux-organisations-slam/" class="link">Campus Montsouris</a>  - Paris 14e</h3>
                            <p>
                                Apprentissage et Découverte des technologies dub web, CMS et programmation informatique <br><br>
                                Entreprise : <a href="https://www.logistib.fr" class="link">Logistib</a> 93 <br><br>
                                Admis : 12.66 / 20
                            </p>
                        </div>
                        <div class="right">
                            <h1>Full-Stack Developer</h1>
                            <date>2020-2022</date>
                        </div>
                        
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>