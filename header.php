<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KG2JGNP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <div class="container">
        <nav class="navbar" id="navbar">
            <ul>
                <li>
                    <a href="<?php echo $main_link;?>" class="nav-link <?php if(isset($is_active_index)){echo $is_active_index;}?>">
                        <span class="icon fa-solid fa-house"></span>
                        <span class="text">Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $main_link;?>presentation" class="nav-link <?php if(isset($is_active_presentation)){echo $is_active_presentation;}?>">
                        <span class="icon fa-solid fa-user"></span>
                        <span class="text">Présentation</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $main_link;?>competences" class="nav-link <?php if(isset($is_active_competences)){echo $is_active_competences;}?>">
                        <span class="icon fa-solid fa-desktop"></span>
                        <span class="text">Compétences</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $main_link;?>projets" class="nav-link <?php if(isset($is_active_projets)){echo $is_active_projets;}?>">
                        <span class="icon fa-regular fa-calendar"></span>
                        <span class="text">Projets</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $main_link;?>contact" class="nav-link <?php if(isset($is_active_contact)){echo $is_active_contact;}?>">
                        <span class="icon fa-solid fa-comments"></span>
                        <span class="text">Contact</span>
                    </a>
                </li>
            </ul>

        </nav>
    </div>
    <div class="mobile">
        <div class="mobile-container">
            <div class="btn-container">
                <button class="btn-menu">
                    <span class="icon-mobile-btn fa-solid fa-bars"></span>
                </button>
            </div>
        </div>
    </div>
</header>