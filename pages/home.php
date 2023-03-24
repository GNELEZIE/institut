<?php
require_once $layout.'/header.php';
?>
<main>
<?php
include_once $layout.'/slider.php';
?>
<section class="visa-area theme-bg">
    <div class="container">
        <div class="row g-0">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="visa__items br-none">
                    <div class="visa__items-single d-flex align-items-center">
                        <div class="visa__items-single-icon">
                            <i class="flaticon-passport"></i>
                        </div>
                        <h4 class="visa__items-single-title">
                            <a href="#">BTS</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="visa__items">
                    <div class="visa__items-single d-flex align-items-center">
                        <div class="visa__items-single-icon">
                            <i class="flaticon-content"></i>
                        </div>
                        <h4 class="visa__items-single-title">
                            <a href="#">Licence Pro</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="visa__items">
                    <div class="visa__items-single d-flex align-items-center">
                        <div class="visa__items-single-icon">
                            <i class="flaticon-customer"></i>
                        </div>
                        <h4 class="visa__items-single-title">
                            <a href="#">Master</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="visa__items">
                    <div class="visa__items-single d-flex align-items-center">
                        <div class="visa__items-single-icon">
                            <i class="flaticon-passport-1"></i>
                        </div>
                        <h4 class="visa__items-single-title">
                            <a href="#">Doctorat</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tagent__area grey-bg-3 pt-110 pb-40">
    <div class="tagent__bg" style="background-image: url(<?=$cdn_domaine?>/media/03.jpeg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 d-flex align-items-center">
                <div class="section_title_wrapper pr-70">
                    <h2 class="section-title">
                       Qui nous sommes ?
                    </h2>
                    <p class="pt-30 mb-40">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="<?=$domaine?>/a-propos" class="theme-btn radius-6 btn-slider">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="scholarship-area d-flex align-items-center mt100 py-5" style="background-image: url(<?=$cdn_domaine?>/media/scholarship-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title text-white py-3">
                   Nos formations
                </h2>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <article class="blog mb-30 radius-6">
                    <div class="blog__thumb">
                        <a href="#">
                            <img src="<?=$cdn_domaine?>/media/batimentlarge.jpg"  class="radius-top-6 cover230" alt="">
                        </a>
                    </div>
                    <div class="blog__content border-none bg-white radius-bottom-6">
                        <div class="blog-text">
                            <h3 class="blog__content__title">
                                <a href="#">Génie Civil Option Bâtiment</a>
                            </h3>
                            <p> Cette option donne à l’étudiant, les compétences pour la conception...</p>
                            <div class="read-more">
                                <a href="#">En savoir plus <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <article class="blog mb-30 radius-6">
                    <div class="blog__thumb">
                        <a href="#">
                            <img src="<?=$cdn_domaine?>/media/app.jpg"  class="radius-top-6 cover230" alt="">
                        </a>
                    </div>
                    <div class="blog__content border-none bg-white radius-bottom-6">
                        <div class="blog-text">
                            <h3 class="blog__content__title">
                                <a href="#">Informatique & Développeur</a>
                            </h3>
                            <p>Le titulaire du BTS Informatique : Développeur d’Application (IDA) met ...</p>
                            <div class="read-more">
                                <a href="#">En savoir plus <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <article class="blog mb-30 radius-6">
                    <div class="blog__thumb">
                        <a href="#">
                            <img src="<?=$cdn_domaine?>/media/gc.jpeg"  class="radius-top-6 cover230" alt="">
                        </a>
                    </div>
                    <div class="blog__content border-none bg-white radius-bottom-6">
                        <div class="blog-text">
                            <h3 class="blog__content__title">
                                <a href="#">Gestion commerciale</a>
                            </h3>
                            <p>La gestion commerciale repose sur l’ensemble des tâches liées à l’activité...</p>
                            <div class="read-more">
                                <a href="#">En savoir plus <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-12">
                <div class="read-more">
                    <a href="#" class="theme-btn radius-6">Voir plus de formation</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="about-area pt-120 pb-90">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                <div class="section_title_wrapper">
                    <h2 class="section-title about-span mb-30">
                        <span>3+</span> ans de confiance et de recommandation
                    </h2>
                    <div class="section_title_wrapper-about-content">
                        <h5>ISO Certified & Best Immigration Award 2018 Winner </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="<?=$domaine?>/a-propos" class="theme-btn radius-6">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                <div class="about_wrapper">
                    <div class="about_wrapper__certificate">
                        <img src="<?=$cdn_domaine?>/assets/img/about/certificate.png" alt="">
                    </div>
                    <div class="about_wrapper__group">
                        <div class="about_wrapper__group-top mb-15">
                            <img src="<?=$cdn_domaine?>/assets/img/about/about-1.jpg" alt="">
                        </div>
                        <div class="about_wrapper__group-btm d-flex align-items-center justify-content-end">
                            <div class="about_wrapper__group-btm-img1 ml-30">
                                <img src="<?=$cdn_domaine?>/assets/img/about/about-2.jpg" alt="">
                            </div>
                            <div class="about_wrapper__group-btm-img2 ml-15">
                                <img src="<?=$cdn_domaine?>/assets/img/about/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fact-area pb-90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="fact text-center">
                    <h1 class="counter-count"><span class="counter">25</span>k+</h1>
                    <span>Etudiants heureux</span>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="fact text-center ">
                    <h1 class="counter-count"><span class="counter">3</span>+</h1>
                    <span>Ecoles</span>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="fact text-center ">
                    <h1 class="counter">360</h1>
                    <span>Partenaires</span>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="fact text-center ">
                    <h1 class="counter-count"><span class="counter">7</span>k+</h1>
                    <span>Formations</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="global-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="section_title_wrapper global-text mb-30">
                    <h2 class="section-title">
                        Nous travaillons à l'échelle national avec des partenaires dans plus de 3 villes populaires.
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="global-area-img">
                    <img src="<?=$cdn_domaine?>/media/Map-ci.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calltoaction-area d-flex align-items-center" style="background-image: url(<?=$cdn_domaine?>/media//cl-bg.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-3 col-lg-3">
                <div class="calltoaction-img ">
                    <img src="<?=$cdn_domaine?>/media/cl-1.png" alt="">
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                <h4 class="calltoaction-title pt-80 pb-75">
                    Obtenez un emploi qualifié à l'étranger en suivant nos cours techniques.
                </h4>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                <div class="calltoaction-btn text-right">
                    <a href="<?=$domaine?>/contact" class="theme-btn cl-btn radius-6">S'inscrire maintenant</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners-area pt-120 pb-100" style="background-image: url(<?=$cdn_domaine?>/assets/img/partners/partners-1.png);">
    <div class="container">
        <div class="row ">
            <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="section_title_wrapper partners-65 mb-30">
                    <h2 class="section-title">
                        Nos partenaires
                    </h2>
                    <p class="mt-30 mb-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                    <a href="<?=$domaine?>/partenaire" class="theme-btn partner-btn">Voir tous les partenaires</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="row g-0">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="partner-img">
                            <a href="partners.html"><img src="<?=$cdn_domaine?>/assets/img/partners/pt-1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="partner-img">
                            <a href="partners.html"><img src="<?=$cdn_domaine?>/assets/img/partners/pt-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="partner-img">
                            <a href="partners.html"><img src="<?=$cdn_domaine?>/assets/img/partners/pt-3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="partner-img">
                            <a href="partners.html"><img src="<?=$cdn_domaine?>/assets/img/partners/pt-4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="partner-img">
                            <a href="partners.html"><img src="<?=$cdn_domaine?>/assets/img/partners/pt-5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="partner-img">
                            <a href="partners.html"><img src="<?=$cdn_domaine?>/assets/img/partners/pt-6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pt-120 pb-90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-xxl-12 col-xl-12col-lg-12">
                <div class="section_title_wrapper mb-50">
                    <h2 class="section-title">
                       Notre actualité
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <article class="blog mb-30 art-shadow">
                    <div class="blog__thumb">
                        <a href="#"><img src="<?=$cdn_domaine?>/media/blog3.jpg" alt=""></a>
                    </div>
                    <div class="blog__content">
                        <div class="blog-meta">
                            <span> <i class="far fa-calendar-day"></i>02 mars 2023 </span>
                            <span><i class="far fa-comments"></i><a href="#">(36)</a></span>
                        </div>
                        <div class="blog-text">
                            <h3 class="blog__content__title">
                                <a href="#">France Extend Health Insurance  Requirement</a>
                            </h3>
                            <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                            <div class="read-more">
                                <a href="#">Lire la suite <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <article class="blog mb-30 art-shadow">
                    <div class="blog__thumb">
                        <a href="#"><img src="<?=$cdn_domaine?>/media/blog3.jpg" alt=""></a>
                    </div>
                    <div class="blog__content">
                        <div class="blog-meta">
                            <span> <i class="far fa-calendar-day"></i>02 mars 2023 </span>
                            <span><i class="far fa-comments"></i><a href="#">(36)</a></span>
                        </div>
                        <div class="blog-text">
                            <h3 class="blog__content__title">
                                <a href="#">France Extend Health Insurance  Requirement</a>
                            </h3>
                            <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                            <div class="read-more">
                                <a href="#">Lire la suite <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <article class="blog mb-30 art-shadow">
                    <div class="blog__thumb">
                        <a href="#"><img src="<?=$cdn_domaine?>/media/blog3.jpg" alt=""></a>
                    </div>
                    <div class="blog__content">
                        <div class="blog-meta">
                            <span> <i class="far fa-calendar-day"></i>02 mars 2023 </span>
                            <span><i class="far fa-comments"></i><a href="#">(36)</a></span>
                        </div>
                        <div class="blog-text">
                            <h3 class="blog__content__title">
                                <a href="#">France Extend Health Insurance  Requirement</a>
                            </h3>
                            <p>We have helped students, business persons, tourists, clients with medical needs......</p>
                            <div class="read-more">
                                <a href="#">Lire la suite <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-12">
                <div class="read-more">
                    <a href="#" class="theme-btn radius-6">Voir plus d'actualités</a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php
require_once $layout.'/footer.php';
?>