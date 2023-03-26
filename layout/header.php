<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Institut is2g - <?=ucfirst($page)?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$cdn_domaine?>/media/log.png">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/custom-animation.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/backToTop.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/default.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/main.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/font-size.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/intltelinput/css/intlTelInput.min.css"/>
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/sweetalert/sweetalert.css"  type="text/css">

    <style>
        :root{
            --color-default : #e43a3b;
        }
        .main-menu ul li a, .mean-container .mean-nav ul li a, a,h1,h2,h3,h4,h5,p {
            text-transform: initial  !important;
        }
        .main-menu ul li {
            margin-left: 30px !important;
        }
        .call-header{
            transform: rotate(108deg);
            font-size: 17px;
        }
        .color-orange{
            color: var(--color-default);
        }
        .theme-bg {
            background: var(--color-default) !important;
        }
        .theme-btn{
            background: var(--color-default);
        }
        .main-menu-wrapper__call-number h5 {
            color: var(--color-default) !important;
        }
        .radius-6{
            border-radius: 6px;
        }
        .btn-slider{


        }
        .tagent__bg {
            height: 100% !important;
        }
        .mt100{
            margin-top: 100px;
        }
        .radius-top-6{
            border-radius: 6px 6px 0 0 !important;
        }
        .radius-bottom-6{
            border-radius: 0 0 6px 6px !important;
        }
        .border-none{
            border: none !important;
        }
        .blog:hover .blog__thumb a img{
            border-radius: 6px 6px 0 0 !important;
        }
        .art-shadow{
            box-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px;
        }
        .my-log{
            width: 75px;
        }
        .cover230{
            object-fit: cover;
            height: 300px !important;
        }
        .section-formation article{
            box-shadow: rgba(50, 50, 93, 0.25) 0 13px 27px -5px, rgba(0, 0, 0, 0.3) 0 8px 16px -8px;
        }
        .iti{
            width: 100% !important;
        }
        .current a{
            color: var(--color-default) !important;
        }









    </style>

</head>
<body>

<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-8 col-lg-6">
                    <div class="header-top-left">
                        <ul>
                            <li><span>Heure d'ouverture  :</span> 8:30h</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6">
                    <div class="topheader-info">
                        <div class="header-location f-right">
                            <ul>
                                <li><i class="flaticon-pin"></i><a href="<?=$domaine?>/contact">Groupement foncier, yopougon Bel Air</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-8">
                    <div class="header-logo">
                        <a href="<?=$domaine?>"><img src="<?=$cdn_domaine?>/media/log.png" class="img-fluid my-log" alt="img"></a>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-4">
                    <div class="main-menu d-none d-lg-block ">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="<?= page_active('') ;?>"><a href="<?=$domaine?>">Accueil</a></li>
                                <li class="<?= page_active('a-propos') ;?>"><a href="<?=$domaine?>/a-propos">A propos</a></li>
                                <li class="<?= page_active('formations') ;?>"><a href="<?=$domaine?>/formations">Formations</a></li>
                                <li class="<?= page_active('blog') ;?>"><a href="<?=$domaine?>/blog">Actualité</a></li>
                                <li class="<?= page_active('contact') ;?>"><a href="<?=$domaine?>/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="side-menu-icon d-lg-none text-end">
                        <button class="side-toggle"><i class="far fa-bars"></i></button>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3">
                    <div class="main-menu-wrapper d-flex align-items-center justify-content-end">
                        <div class="main-menu-wrapper__call-number d-flex align-items-center">
                            <div class="main-menu-wrapper__call-icon mr-10">
                              <i class="fa fa-headset font-17 color-orange"></i>
                            </div>
                            <div class="main-menu-wrapper__call-text">
                                <h5><a href="tel:2723449231" class="font-15">27 23 44 92 31</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
<div class="search-wrap">
    <div class="search-inner">
        <i class="fal fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                </div>
            </form>
        </div>
    </div>
</div>
