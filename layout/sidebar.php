<nav class="side-menu-area">
    <nav class="sidebar-nav">
        <ul id="sidebar-menu" class="sidebar-menu">
            <li class="<?=page_active('')?>">
                <a href="<?=$domaine?>" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <i class="ri-dashboard-line"></i>
                    </div>
                    <span class="menu-title">Tableau de bord</span>
                </a>
            </li>
            <li class="<?=page_active('courses')?>">
                <a href="<?=$domaine?>/courses" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <i class="ri-takeaway-line"></i>
                    </div>
                    <span class="menu-title">Courses</span>
                </a>
            </li>
            <li class="<?=page_active('commandes')?>">
                <a href="<?=$domaine?>/commandes" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <i class="ri-shopping-bag-3-line"></i>
                    </div>
                    <span class="menu-title">Commandes</span>
                    <span class="badge bg-jaune rounded-pill nbr-cmd ml-5">0</span>
                </a>
            </li>
            <li class="<?=page_active('produits')?>">
                <a href="<?=$domaine?>/produits" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <i class="ri-dropbox-line"></i>
                    </div>
                    <span class="menu-title">Produits</span>
                </a>
            </li>
            <?php
            if($_SESSION['_userivoirebox3647']['statut'] == 1){
                ?>
                <li class="<?=page_active('stock')?>">
                    <a href="<?=$domaine?>/stock" class="box-style d-flex align-items-center">
                        <div class="icon">
                            <i class="ri-survey-line"></i>
                        </div>
                        <span class="menu-title">Gestion de stocks</span>
                    </a>
                </li>
            <?php
            }
            ?>
            <li class="<?=page_active('tresorerie')?>">
                <a href="<?=$domaine?>/tresorerie" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <i class="ri-wallet-3-line"></i>
                    </div>
                    <span class="menu-title">Trésorerie</span>
                </a>
            </li>
            <li class="<?=page_active('parametres')?>">
                <a href="javascript:void(0)" class="has-arrow box-style d-flex align-items-center" aria-expanded="false">
                    <div class="icon">
                        <i class="ri-settings-2-line"></i>
                    </div>
                    <span class="menu-title">Paramètres</span>
                </a>
                <ul class="sidemenu-nav-second-level mm-collapse">
                    <li>
                        <a href="<?=$domaine?>/parametres/profil">
                            <span class="menu-title">Mon profil</span>
                        </a>
                    </li>
                    <?php
                    if($_SESSION['_userivoirebox3647']['statut'] == 1){
                    ?>
                    <li>
                        <a href="<?=$domaine?>/parametres/boutique">
                            <span class="menu-title">Ma boutique</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="https://boutique.ivoirebox.com/<?=$_SESSION['_userivoirebox3647']['slug']?>" target="_blank">
                            <span class="menu-title">Boutique en ligne</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$domaine?>/parametres/password">
                            <span class="menu-title">Mot de passe</span>
                        </a>
                    </li>
                    <?php
                    if($_SESSION['_userivoirebox3647']['statut'] == 1){
                        ?>
                        <li>
                            <a href="<?=$domaine?>/parametres/membres">
                                <span class="menu-title">Membres</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </li>

        </ul>
    </nav>
</nav>