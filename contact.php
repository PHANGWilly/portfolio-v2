<?php include_once 'variables.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portoflio de PHANG Willy, Full-Stack Developer, Web Developer, Front-End Developer, Web-Integrator à la recherche d'une alternance pour 2022-2023 !">
    <link rel="icon" href="./assets/images/favicon.ico"  type="image/icon type">
    <title>PHANG Willy - Contact</title>
    <script src="https://kit.fontawesome.com/564f9d1433.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo $main_link;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $main_link;?>css/contact.css">
</head>
<body class="navbar-is-closed">
    <?php
        $is_active_contact = "active";
        include_once 'header.php';
    ?>

    <main class="main">
        <h1>Contact</h1>
         <?php
            if(isset($_POST["Envoyer"])){
                extract($_POST);

                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = $email;
                $to = "contact@phangwilly.com";
                $message = "Nom :" . "\r\n" . $nom . "\r\n \r\n" . "Prenom :" . "\r\n" . $prenom . "\r\n \r\n" . "Email :" . "\r\n" . $email . "\r\n \r\n" . "Sujet : " . "\r\n" . $sujet . "\r\n \r\n" . "Message" . "\r\n" . $message ;
                $headers = "[CONTACT] " . $sujet;
                mail($to, $headers, $message);
            }
        ?>

        <section class="section" id="contact">
            <div class="container">
                <h3>Des questions? Je serais ravis de vous répondre !</h3>
                <form action="" method="post">
                    <div class="ligne">
                        <div class="input">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" required>
                        </div>
                        <div class="input">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" required>
                        </div>
                    </div>
                    <div class="ligne">
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="input">
                            <label for="sujet">Sujet</label>
                            <input type="text" name="sujet" id="sujet" required>
                        </div>
                    </div>
                    <div class="textarea">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="15" required></textarea>
                    </div>
                    <input type="submit" value="Envoyer" name="Envoyer" class="button main-button">
                </form>
            </div>
        </section>

    </main>

    <?php include_once 'footer.php';?>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo $main_link;?>js/main.js"></script>
</body>
</html>