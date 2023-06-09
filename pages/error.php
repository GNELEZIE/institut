<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>404 page introuvable </title>
    <link rel="icon" type="image/png" href="<?=$cdn_domaine?>/media/fav-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="page-404">
    <div class="outer">
        <div class="middle">
            <div class="inner text-center">

                <div class="inner-circle"><i class="fa fa-cogs"></i><span>404</span></div>
                <span class="inner-status">Oops! page introuvable </span>
                <span class="inner-detail">Nous ne pouvons pas trouver la page que vous recherchez.</span>
                <div class="text-center">
                    <a href="<?=$domaine?>" class="btn btn-orange mtl"><i class="fa fa-home"></i>&nbsp;Page d'accueil </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .text-center{
        text-align: center;
    }
    .text-center a:hover{
        color: #f29f05 !important;
        background: #ffffff;

    }
    .text-center a{
        padding: 6px 20px;
        border-radius: 6px;
        color: #fff !important;
        text-decoration: none;
        border : 1px solid #f29f05;
    }
    .btn-orange{
        background-color: #f29f05;
    }
    .btn-info{
        background-color: #008000 !important;
    }
    .clearfix:before,
    .clearfix:after {
        display: table;

        content: ' ';
    }
    .clearfix:after {
        clear: both;
    }
    body {
        background: #f0f0f0 !important;
    }
    .page-404 .outer {
        position: absolute;
        top: 0;

        display: table;

        width: 100%;
        height: 100%;
    }
    .page-404 .outer .middle {
        display: table-cell;

        vertical-align: middle;
    }
    .page-404 .outer .middle .inner {
        width: 300px;
        margin-right: auto;
        margin-left: auto;
    }
    .page-404 .outer .middle .inner .inner-circle {
        height: 300px;

        border-radius: 50%;
        background-color: #ffffff;
    }
    .page-404 .outer .middle .inner .inner-circle:hover i {
        color: #008000!important;
        background-color: #f5f5f5;
        box-shadow: 0 0 0 15px #008000;
    }
    .page-404 .outer .middle .inner .inner-circle:hover span {
        color: #008000;
    }
    .page-404 .outer .middle .inner .inner-circle i {
        font-size: 5em;
        line-height: 1em;

        float: right;

        width: 1.6em;
        height: 1.6em;
        margin-top: -.7em;
        margin-right: -.5em;
        padding: 20px;

        -webkit-transition: all .4s;
        transition: all .4s;
        text-align: center;

        color: #f5f5f5!important;
        border-radius: 50%;
        background-color: #008000;
        box-shadow: 0 0 0 15px #f0f0f0;
    }
    .page-404 .outer .middle .inner .inner-circle span {
        font-size: 11em;
        font-weight: 700;
        line-height: 1.2em;

        display: block;

        -webkit-transition: all .4s;
        transition: all .4s;
        text-align: center;

        color: #e0e0e0;
    }
    .page-404 .outer .middle .inner .inner-status {
        font-size: 20px;

        display: block;

        margin-top: 20px;
        margin-bottom: 5px;

        text-align: center;

        color: #008000;
    }
    .page-404 .outer .middle .inner .inner-detail {
        line-height: 1.4em;

        display: block;

        margin-bottom: 10px;

        text-align: center;

        color: #999999;
    }

</style>

<script type="text/javascript">

</script>
</body>
</html>