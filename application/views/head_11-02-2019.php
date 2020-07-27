<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= strip_tags($title) ?></title>
        <link rel="canonical" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="description" content="<?= $description ?>">
        <meta name="image" content="<?= isset($image) ? $image : "" ?>">
    <?php
    //echo '<pre>';print_r($this->uri->segment_array());echo '</pre>';
    
    ?>
        <!-- Open Graph data -->
        <meta prefix="og: https://ogp.me/ns#"  property="og:title" content="<?=$title?>" />
        <meta prefix="og: https://ogp.me/ns#"  property="og:type" content="article" />
        <meta prefix="og: https://ogp.me/ns#"  property="og:url" content="<?=current_url()?>" />
        <meta prefix="og: https://ogp.me/ns#"  property="og:image" content="<?=isset($image) ? $image : ""?>" />
        <meta prefix="og: https://ogp.me/ns#"  property="og:description" content="<?= $description ?>" />
        <meta prefix="og: https://ogp.me/ns#"  property="og:site_name" content="FullBasket Property" />
        <meta prefix="og: https://ogp.me/ns#"  property="article:published_time" content="2017-05-11T12:46:52Z" />
        <meta prefix="og: https://ogp.me/ns#"  property="article:modified_time" content="2017-05-11T12:46:52Z" />
        <meta prefix="og: https://ogp.me/ns#"  property="article:section" content="Real Estate" />

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@fullbasket">
        <meta name="twitter:title" content="<?= $title ?>">
        <meta name="twitter:description" content="<?= $description ?>">
        <meta name="twitter:creator" content="@way2vineeth">
        <meta name="twitter:image:src" content="<?= isset($image) ? $image : "" ?>">
        <meta name="google-site-verification" content="HcMoEpoLRr3V3ma7TFsqXaEmzHBt5TGNVUZgYC_XJVE" />

        <link rel="author" href="FullBasket Property">
        <link rel="publisher" href="">
        <link rel="icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/gif" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/line/yellow.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ionicons.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.3/css/star-rating.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/flexslider.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5a548257b885430012beaac7&product=inline-share-buttons' async='async'></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Lato:100i,300,300i,400,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,600,700|Catamaran:800,900" rel="stylesheet">
        
    </head>
    <body>