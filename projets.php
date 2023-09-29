<?php include_once 'variables.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portoflio de PHANG Willy, Full-Stack Developer, Web Developer, Front-End Developer, Web-Integrator à la recherche d'une alternance pour 2022-2023 !">
    <link rel="icon" href="./assets/images/favicon.ico"  type="image/icon type">
    <title>PHANG Willy - Projets</title>
    <script src="https://kit.fontawesome.com/564f9d1433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $main_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $main_link;?>css/projets.css">
</head>
<body class="navbar-is-closed">
    <?php
        include_once 'variables.php';
        $is_active_projets = "active";
        include_once 'header.php';
    ?>

    <main class="main">    
        <h1>Projets</h1>
        <section class="section" id="projets">
            <div class="container">
                <div class="articles">
                    <article>
                        <h2>
                            <a href="https://www.soeasylog.com">SoEasyLog.com</a>
                        </h2>
                        <p class="date">2021-2022</p>
                        <figure>
                            <a href="https://www.soeasylog.com">
                                <img src="<?php echo $main_link;?>assets/images/soeasylog.png" alt="screenshot soeasylog.com logistique e-commerce">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                                Création du site, Choix du thème et ajouts de fonctionnalités et animations
                            </div>
                            <div class="technologies">
                                WordPress, HTML, CSS, JS, Bootstrap, Spintech-Pro, Elementor
                            </div>
                        </figcaption>
                    </article>
                    <article>
                        <h2>
                            <a href="https://www.logistib.fr">Logistib.fr</a>
                        </h2>
                        <p class="date">2021-2022</p>
                        <figure>
                            <a href="https://www.logistib.fr">
                                <img src="<?php echo $main_link;?>assets/images/logistib.png" alt="screenshot logistib.fr logistique personnalisée">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                                Création du site, Choix du thème et ajouts de fonctionnalités et animations.
                            </div>
                            <div class="technologies">
                                WordPress, HTML, CSS, JS, Bootstrap, MesmerizePro, Elementor
                            </div>
                        </figcaption>
                    </article>
                    <article>
                        <h2>
                            <a href="https://www.ventedemasque.com" class="link">Ventedemasque.com</a>
                        </h2>
                        <p class="date">2021-2022</p>
                        <figure>
                            <a href="https://www.ventedemasque.com">
                                <img src="<?php echo $main_link;?>assets/images/ventedemasque.png" alt="screenshot ventedemasque.com achat et vente de masques en tissu">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                                Mise-à-jour de fiches produits, initations SEO et advertisings.
                            </div>
                            <div class="technologies">
                                Prestashop, HTML, CSS, SEO, Canva
                            </div>
                        </figcaption>
                    </article>
                    <article>
                        <h2>
                            <a href="https://www.biotyfit.com">Biotyfit.com</a>
                        </h2>
                        <p class="date">2021-2022</p>
                        <figure>
                            <a href="https://www.biotyfit.com">
                                <img src="<?php echo $main_link;?>assets/images/Logo_Biotyfit.png" alt="screenshot biotyfit.com thé et infusions">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                                Création du site, Choix du thème et ajout de fonctionnalités et animations.
                            </div>
                            <div class="technologies">
                                Shopify, HTML, CSS, JS, Liquid
                            </div>
                        </figcaption>
                    </article>
                </div>
                
                <div class="articles">
                    <article>
                        <h2>
                            <a href="https://github.com/PHANGWilly/Portail-BelleTable">Portail BelleTable</a>
                        </h2>
                        <p class="date">2020-2022</p>
                        <figure>
                            <a href="https://github.com/PHANGWilly/Portail-BelleTable">
                                <img src="<?php echo $main_link;?>assets/images/portail_belletable.png" alt="screenshot portail belletable e-commerce">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                                Création du site, BDD et ajouts de fonctionnalités et animations
                            </div>
                            <div class="technologies">
                                HTML, CSS, JS, PHP, MySQL
                            </div>
                        </figcaption>
                    </article>
                    <article>
                        <h2>
                            <a href="https://github.com/PHANGWilly/Gestion_Badges_Visiteurs_BelleTable">Badges D'accès BT</a>
                        </h2>
                        <p class="date">2021-2022</p>
                        <figure>
                            <a href="https://github.com/PHANGWilly/Gestion_Badges_Visiteurs_BelleTable">
                                <img src="<?php echo $main_link;?>assets/images/Badge_Acces_BelleTable.png" alt="screenshot badge d'acces salons belletable">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                            Création de l'interface, BDD, fonctionnalités.
                            </div>
                            <div class="technologies">
                                C# Form, SQL, QRCoder
                            </div>
                        </figcaption>
                    </article>
                    <article>
                        <h2>
                            <a href="#chatbox" class="link">ChatBox</a>
                        </h2>
                        <p class="date">2022</p>
                        <figure>
                            <a href="#chatbox">
                                <img src="<?php echo $main_link;?>assets/images/chatbox.png" alt="screenshot chatbox">
                            </a>
                        </figure>
                        <figcaption>
                            <div class="objectifs">
                                Création de l'interface, BDD, Gestion des messages.
                            </div>
                            <div class="technologies">
                                HTML, CSS, PHP, JS, SQL
                            </div>
                        </figcaption>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>