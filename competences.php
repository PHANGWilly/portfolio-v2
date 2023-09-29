<?php include_once 'variables.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portoflio de PHANG Willy, Full-Stack Developer, Web Developer, Front-End Developer, Web-Integrator à la recherche d'une alternance pour 2022-2023 !">
    <link rel="icon" href="./assets/images/favicon.ico"  type="image/icon type">
    <title>PHANG Willy - Compétences</title>
    <script src="https://kit.fontawesome.com/564f9d1433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $main_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $main_link;?>css/competences.css">
</head>
<body class="navbar-is-closed">
    <?php
        include_once 'variables.php';
        $is_active_competences = "active";
        include_once 'header.php';
    ?>

    <main class="main">    
        <h1>Compétences</h1>
        <section class="section" id="competences">
            <div class="container">
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-html.svg" alt="logo html">
                            <figcaption>HTML</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-css.svg" alt="logo css">
                            <figcaption>CSS</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-javascript.svg" alt="logo javascript">
                            <figcaption>JavaScript</figcaption>
                        </figure>
                    </article>
                </div>                
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-bootstrap.svg" alt="logo bootstrap">
                            <figcaption>BOOTSTRAP</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-sass.svg" alt="logo sass scss">
                            <figcaption>SASS <br> SCSS </figcaption>
                        </figure>
                    </article>
                </div>                
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-wordpress-woo.svg" alt="logo wordpress woocommerce">
                            <figcaption>WORDPRESS <br> WOOCOMMERCE</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-shopify-liquid.svg" alt="logo shopify liquid">
                            <figcaption>SHOPIFY <br> LIQUID</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-prestashop.svg" alt="logo prestashop">
                            <figcaption>PRESTASHOP</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-elementor.svg" alt="logo elementor">
                            <figcaption>ELEMENTOR</figcaption>
                        </figure>
                    </article>
                </div>
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-php.svg" alt="logo php">
                            <figcaption>PHP</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-apache.svg" alt="logo apache htaccess">
                            <figcaption>APACHE <br> HTACCESS</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-mysql.svg" alt="logo mysql">
                            <figcaption>MYSQL</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-mysql-workbench.svg" alt="logo mysql workbench">
                            <figcaption>MYSQL WORKBENCH</figcaption>
                        </figure>
                    </article>
                </div>
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-c.svg" alt="logo c">
                            <figcaption>C</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-csharp.svg" alt="logo c# sharp">
                            <figcaption>C#</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-csharp-form.svg" alt="logo c# sharp form">
                            <figcaption>C# FORM</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-java.svg" alt="logo java">
                            <figcaption>JAVA</figcaption>
                        </figure>
                    </article>
                </div>
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-github.svg" alt="logo git hub">
                            <figcaption>GITHUB</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-git.svg" alt="logo git">
                            <figcaption>GIT</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-docker.svg" alt="logo docker">
                            <figcaption>DOCKER</figcaption>
                        </figure>
                    </article>
                </div>
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-vs-code.svg" alt="logo visual studio code">
                            <figcaption>VISUAL STUDIO CODE</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-vs.svg" alt="logo visual studio">
                            <figcaption>VISUAL STUDIO</figcaption>
                        </figure>
                    </article>
                </div>
                <div class="articles">
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-figma.svg" alt="logo figma">
                            <figcaption>FIGMA</figcaption>
                        </figure>
                    </article>
                    <article>
                        <figure>
                            <img src="<?php echo $main_link;?>assets/images/logo-canva.svg" alt="logo canva">
                            <figcaption>CANVA</figcaption>
                        </figure>
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