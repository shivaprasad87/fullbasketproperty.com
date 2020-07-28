<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title><?= str_replace(' ', ' ', substr(strip_tags($property->meta_title), 0, 1000)) ?></title>
    <meta name="description" content="<?= substr(strip_tags($property->meta_desc), 0, 1000) ?>"/>
    <meta name="keywords" content="<?= str_replace(' ', ' ', substr(strip_tags($property->meta_keywords), 0, 1000)) ?>"/>
    <meta property="og:url" content="<?= current_url() ?>"/>
    <meta property="og:title" content="<?= $property->title ? $property->title : '' ?>"/>
    <meta property="og:site_name" content="Fullbasket Property"/>
    <meta property="og:description" content="<?= substr(strip_tags($property->description), 0, 1000) ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?= base_url("uploads/$property->slug/$property->image") ?>"/>
    <?php $this->load->helper('directory');  $map = directory_map('uploads/'.$property->slug.'/logos');?>
    <meta property="og:locale" content="en_us"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Fullbasketproperty"/>
    <meta name="twitter:title" content="<?= $property->title ? $property->title : '' ?>"/>
    <meta name="twitter:description" content="<?= substr(strip_tags($property->description), 0, 1000) ?>"/>
    <meta name="twitter:image" content="<?= base_url("uploads/$property->slug/$property->image") ?>"/>
    <script type='text/javascript' src='<?= base_url() ?>assets/property/unitegallery/js/jquery-11.0.min.js'></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?= site_url('') ?>assets/img/logo.png"/>

    <link rel="canonical" href="<?= current_url() ?>">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
<script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/jquery.min.js"></script>
    <link rel="manifest" href="https://orchards.realatte.com/manifest.json">
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/copy_bootstrap_min.js"></script>
    <link href="<?= base_url() ?>assets/property/media/com_solidres/assets/css/jquery/themes/base/jquery-ui.minc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/bootstrap.minc619.js?v=1.0" rel="stylesheet" type="text/css"/>

    <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/font-awesome.minc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/animate.minc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/sppagebuilderc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/sppagecontainerc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/owl.carouselc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/owl.themec619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/owl.transitionsc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/slide-animatec619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/media/com_solidres/assets/css/main.minc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/magnific-popupc619.css?v=1.0" rel="stylesheet" type="text/css"/>

    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/bootstrap.minc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/font-awesome.minc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="templates/shaper_resort/css/legacy.css" rel="stylesheet" type="text/css" /> 
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/templatec619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/presets/preset1c619.css?v=1.0" rel="stylesheet" type="text/css" class="preset"/>
    <link href="<?= base_url() ?>assets/property/plugins/system/helix3/assets/css/pagebuilderc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/frontend-editc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/property/modules/mod_sp_weather/assets/css/flatc619.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/property/font/flaticonc619.css?v=1.0">
    <link href="<?= base_url() ?>assets/property/lightbox/light-boxc619.css?v=1.0" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/property/intl-tel-input/css/intlTelInputc619.css?v=1.0">
    <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/animatec619.css?v=1.0" rel="stylesheet" type="text/css">
    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"<?= base_url() ?>assets/property/>-->
    <script type='text/javascript' src='<?= base_url() ?>assets/property/unitegallery/js/unitegallery.min.js'></script>
    <link rel='stylesheet' href='<?= base_url() ?>assets/property/unitegallery/css/unite-gallery.css' type='text/css'/>
    <script type='text/javascript' src='<?= base_url() ?>assets/property/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js'></script>
    <script type="text/javascript"src="//platform-api.sharethis.com/js/sharethis.js#property=5ab1fa10a63ccf001315b0bf&product=inline-share-buttons"></script>
    <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<script type="text/javascript">
    window.onbeforeunload = function (e) {
    // Cancel the event
    e.preventDefault();

    // Chrome requires returnValue to be set
    e.returnValue = 'Really want to quit the game?';
};

//Prevent Ctrl+S (and Ctrl+W for old browsers and Edge)
document.onkeydown = function (e) {
    e = e || window.event;//Get event

    if (!e.ctrlKey) return;

    var code = e.which || e.keyCode;//Get key code

    switch (code) {
        case 83://Block Ctrl+S
        case 87://Block Ctrl+W -- Not work in Chrome and new Firefox
        case 67:
        case 88:

            e.preventDefault();
            e.stopPropagation();
            break;
    }
};
</script>
<style>
    
.morecontent span {
    display: none;

</style>
    <style type="text/css">
        #sppb-addon-1507611918 .sppb-addon-title {
            margin-bottom: 15px;
        }

        #sppb-addon-1507611918 .sppb-addon-cta {
            padding: 40px 20px;
        }

        #sppb-addon-1507611918 .sppb-cta-subtitle {
            color: #ffffff;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
        }

        .sp-page-builder .page-content #section-id-1507611919 {
            margin: 0 0 0 0;
        }

        .sp-page-builder .page-content #section-id-1507611922 .sppb-section-title .sppb-title-heading {
            font-size: 36px;
            line-height: 36px;
            font-weight: 700;
            /*margin-bottom: 100px;*/
        }

        #sppb-addon-1507611926 .sppb-empty-space {
            padding-bottom: 38px;
        }

        #sppb-addon-1507611927 .sppb-addon-title {
            margin-bottom: 35px;
            color: #FFC51A;
        }

        #sppb-addon-1507611927 .sppb-addon-cta {
            padding: 40px 20px;
        }

        #sppb-addon-1507611927 .sppb-cta-subtitle {
            font-size: 30px;
            line-height: 30px;
        }

        #sppb-addon-1507611928 .sppb-empty-space {
            padding-bottom: 60px;
        }

        .sp-page-builder .page-content #section-id-1507611930 {
            /*margin: 90px 0 90px 0;*/
            padding-top: 100px;
            padding-bottom: 50px;
        }

        #sppb-addon-1507611932 .sppb-empty-space {
            padding-bottom: 38px;
        }

        #sppb-addon-1507611933 .sppb-addon-title {
            margin-bottom: 35px;
        }

        #sppb-addon-1507611933 .sppb-addon-cta {
            padding: 40px 20px;
        }

        #sppb-addon-1507611933 .sppb-cta-subtitle {
            font-size: 30px;
            line-height: 30px;
        }

        #sppb-addon-1507611934 .sppb-empty-space {
            padding-bottom: 60px;
        }

        .sp-page-builder .page-content #section-id-1507611938 {
            /*padding: 80px 0;*/
            background-image: url(<?= base_url().'assets/property/images/demo/specification-bg.jpg' ?>);
            background-size: cover;
            background-attachment: fixed;
            background-position: 50% 50%;
        }

        #sppb-addon-1507611940 .sppb-addon-title {
            margin-bottom: 40px;
            font-size: 47px;
            line-height: 47px;
            color: #fff;
        }

        #sppb-addon-1507611940 .sppb-addon-cta {
            padding: 40px 20px;
        }

        #sppb-addon-1507611940 .sppb-cta-subtitle {
            color: #ffffff;
            font-size: 25px;
            line-height: 24px;
            font-weight: 600;
        }

        .sp-page-builder .page-content #section-id-1507611941 {
            margin: 0 0 15px 0;
        }

        .sp-page-builder .page-content #section-id-1507611941 .sppb-section-title .sppb-title-heading {
            font-size: 36px;
            line-height: 36px;
            font-weight: 700;
            /*  margin-bottom: 100px;*/
        }

        .sp-page-builder .page-content #section-id-1507611944 {
            /*padding: 110px 0px 0px 0px;*/
            /*background-image: url(images/demo/testimonial-bg.png);*/
            background-size: cover;
            background-attachment: fixed;
            background-position: 50% 50%;
            background: #fff;
            margin-top: 0px;
        }

        #column-id-1507611945 {
            color: #ffffff;
        }

        .sp-page-builder .page-content #section-id-1507611947 {
            /*margin: 0 0 110px 0;*/
        }

        .sp-page-builder .page-content #section-id-1507611947 .sppb-section-title .sppb-title-heading {
            font-size: 36px;
            line-height: 36px;
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 100px;
        }

        #sppb-addon-1507611954 .sppb-addon-gmap-canvas {
            height: 450px;
        }

        body {
            font-family: Fira Sans, sans-serif;
            font-size: 16px;
            font-weight: 300;
        }

        h1 {
            font-family: Cinzel, sans-serif;
            font-weight: 700;
        }

        h2 {
            font-family: Cinzel, sans-serif;
            font-weight: 700;
        }

        h3 {
            font-family: Cinzel, sans-serif;
            font-size: 30px;
            font-weight: 700;
        }

        h4 {
            font-family: Fira Sans, sans-serif;
            font-size: 16px;
            font-weight: 300;
        }

        h5 {
            font-family: Open Sans, sans-serif;
            font-weight: 600;
        }

        h6 {
            font-family: Open Sans, sans-serif;
            font-weight: 600;
        }

        .sp-megamenu-parent {
            font-family: Fira Sans, sans-serif;
            font-weight: 300;
        }

        .rooms-suits .sppb-cta-subtitle {
            font-family: Fira Sans, sans-serif;
            font-weight: 300;
        }

        #sp-top-bar {
            color: #ffffff;
        }

        #sp-bottom {
            background-color: #493e3e;
            padding: 35px 0 0 0;
        }
    </style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105570977-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105570977-1');
</script>
    <link href="<?= base_url('assets/360assets') ?>/css/common.css" rel="stylesheet" type="text/css"/>

    <!--<script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/select-app.js"></script>
 
</head>

<body class="site com-sppagebuilder view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid">
    <?php


    // echo $property->walkthrough ? $property->walkthrough :'null';die;?>
<div class="body-innerwrapper">
     <section id="sp-top-bar">
         <div class="container">
             <div class="row">
                 <div id="sp-top2" class="col-sm-12 col-md-12">
                     <div class="sp-column ">
                         <ul class="sp-contact-info">
                             <li class="sp-contact-phone"><i class="fa fa-phone"></i><a href="tel:+919019000400">+91
                                     9019000400</a>
                             </li>
                         </ul>
                     </div>
                 </div>

             </div>
         </div>
     </section>
    <span id="home-c" style="height: 0px;"></span>
    <header id="sp-header">
        <div class="container">
            <div class="row">
                <div id="sp-logo" class="col-xs-8 col-sm-2 col-md-2">
                    <div class="sp-column ">
                        <a class="logo" href="">
                            <h1>
                                <?php
if(($logos = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_logo')) != null)
{
    $logos=json_decode( json_encode($logos), true);
    //builder_image;
    ?>
<img class="sp-default-logo" src="<?= base_url().'uploads/'.$property->slug.'/logos/'.$map[0] ?>" >
                                <img class="sp-retina-logo" src="<?= base_url().'uploads/'.$property->slug.'/logos/'.$map[0]?>" 
                                     width="111" height="36">
    <?php

}
else
{
    $map[0]= $property->builder_image;
?>

    <img class="sp-default-logo" src="<?= base_url().'uploads/builders/'.$map[0] ?>" >
                                <img class="sp-retina-logo" src="<?= base_url().'uploads/builders/'.$map[0] ?>" 
                                     width="111" height="36">

<?php
}


                                ?>
                                
                            </h1>
                        </a>
                    </div>
                </div>
                <div id="sp-menu" class="col-xs-4 col-sm-10 col-md-10">
                    <div class="sp-column ">
                        <div class='sp-megamenu-wrapper'>
                            <a id="offcanvas-toggler" class="visible-xs" href="#"><i class="fa fa-bars"></i></a>
                            <ul class="sp-megamenu-parent menu-fade hidden-xs">
                                <li class="sp-menu-item current-item active"><a href="#home-c"
                                                                                class="m-link">Home</a>
                                </li>
                                <li class="sp-menu-item"><a href="#section-id-1507611922" class="m-link">About</a>
                                </li>
                                <li class="sp-menu-item"><a href="#section-id-1507611938"
                                                            class="m-link">Configuration</a>
                                </li>
                                <li class="sp-menu-item"><a href="#section-id-1507611991" class="m-link">amenities</a>
                                </li>
                                <li class="sp-menu-item"><a href="#section-id-1507611941" class="m-link">Gallery</a>
                                </li>
                                <li class="sp-menu-item"><a href="#section-id-1507611944" class="m-link">location</a>
                                </li>
                                <li class="sp-menu-item"><a href="#section-id-1507611947" class="m-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="sp-page-title">
        <div class="row">
            <div id="sp-title" class="col-sm-12 col-md-12">
                <div class="sp-column "></div>
            </div>
        </div>
    </section>
    <section id="sp-main-body">
        <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div id="system-message-container">
                    </div>
                    <div id="sp-page-builder" class="sp-page-builder  page-1">
                        <div class="page-content">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">                                    
                                    <?php
                                        if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_desktop_banners')) != null ) {
                                            if(($m_images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_mobile_banners')) != null)
                                            {

                                            $images = json_decode( json_encode($images), true);
                                            $m_images = json_decode( json_encode($m_images), true);
                                            $total_images =array_merge($images);
                                          //  print_r($m_images);die;

                                            $ban=0;
                                            $side_image='';
                                            //print_r($total_images);die;
                                            foreach ($total_images as $image) {

                                            
                                                if($ban==0)
                                                {
                                                ?>

                                                <div class="item active">
                                                    <?php  
             echo '<img class="d-banner" src="'. base_url().$images[$ban]['banner_path'] .'"   style="width: 100%">';
            echo '<img class="m-banner" src="'. base_url().$m_images[$ban]['mobile_banner_path'].'" alt="" style="width: 100%">';
                        $side_image=base_url().$m_images[$ban]['mobile_banner_path'];
                //echo $side_image;die;                           ?>
                                             

                                       </div>
                                                <?php
                                            }
                                           /* else
                                            {
                                                ?>
                                                    <div class="item">
                                                        <?php

             echo '<img class="d-banner" src="'. base_url().$images[$ban]['banner_path'] .'"   style="width: 100%">';
            echo '<img class="m-banner" src="'. base_url().$m_images[$ban]['mobile_banner_path'].'" alt="" style="width: 100%">';
                                                        ?>

                                       </div>
                                                <?php
                                               
                                            }*/
                                            $ban++;
                                            }
                                        }
                                    }
                                    else
                                    {

             echo '<img class="d-banner" src="'. base_url('uploads/'.$property->slug.'/'.$property->image).'"   style="width: 100%">';
            echo '<img class="m-banner" src="'. base_url('uploads/'.$property->slug.'/'.$property->image).'" alt="" style="width: 100%">';

                                        ?>
                                        <?php
                                    }
                               ?>

                                </div>
                            </div>   
                            <br>
                            <h2>
                            <div style="float: right" class="sharethis-inline-share-buttons"></div>
                            <a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug")?>" class="btn btn-primary btn-block" style="border-radius: 0;background-color: white;border-color: white;height: 33px;"></a>
                            </h2>
         <section id="section-id-1507611922"  class="sppb-section   rooms-suits resort-title-heading wow">
                                <div class="sppb-row-container">
                                    <div class="sppb-section-title sppb-text-center">
                                        <h2 class="sppb-title-heading delay-10s animated wow fadeInDown animated"
                                            style="visibility: visible; animation-name: fadeInDown;"> <?= $property->title ? $property->title : '' ?>
                                        </h2>
                                              <?php
                                    if (($flatTypes = $this->properties_model->getPropertyFlatType(null,
                                            $property->id)) != null) {
                                        $bhk='';
                                        $i=0;
                                        foreach ($flatTypes as $flatType) {
                                            if($i==0)
                                                $bhk.=$flatType->flat_type;
                                            else
                                            $bhk.=', '.$flatType->flat_type;
                                        $i++;
                                        }
                                    }

                                    //echo $side_image; die;
                                    $propType   = $this->properties_model->getPropertyType(['id'=>$property->property_type_id]);
                                            ?>
                                        <h4><b><?= $bhk.' '.$propType['name']?> </b></h4></br>
                                        <h4><b><?= $property->location . ', ' . $property->city_name ?></b></h4>
                                        <div class="underline">&nbsp;</div>


                                        <div class="row" style="padding-top: 50px;">
                                            <div class="col-md-4">
                                                
                                               <a class="btn  fix-link i-am" href="<?= $property->ref_domain ?>"> 
                                              
<?php if($side_image)
{
echo '<img src="'.$side_image.'"style="margin: 0px auto; margin-bottom: 20px;"></a>';
}
else 
    echo '<img src="'.base_url('uploads/'.$property->slug.'/'.$property->image).'" style="margin: 0px auto; margin-bottom: 20px;"></a>';
?>

                                                
                                            </div>
                                            <div class="col-md-8">
                                                <p style="text-align: justify;" class="comment more">
                                                  <?= $property->builder_description ?>
                                                <br/><br/>

                                                
                                                </p>
                                                <SCRIPT>
$(document).ready(function() {
    var showChar = 2000;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);

            var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</SCRIPT>

                                                     <p style="text-align: left; margin-bottom: 20px; font-size: 14px;"> <a class="btn interested fix-link i-am">
                                                     </a><br/>For assistance please call: <a href="tel:9019000400" title="call us"><font style="color: #08ad1e; font-weight: 600; font-size: 18px;">9019000400</font></a></p>
                                                 
                                            </div>
                                            
                                            

                                        </div>
                                    </div>
                                    <?php
                                    if($property->walkthrough)
                                    {
                                        ?>
                                    <div>
                                   <iframe width="100%" height="450" src="https://www.youtube.com/embed/<?= getYoutubeVideoId($property->walkthrough) ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                    <?php
                                }
                                    ?>
                                    
                <center><h2 class="sppb-title-heading delay-10s animated wow fadeInDown animated"
                                            style="visibility: visible; animation-name: fadeInDown;"> Project Snapshot
                                        </h2></center>
                                        <div class="underline">&nbsp;</div>
                                        <br/><br/>
                                <div class="banner-patch">
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                        <center><h4><b>No. Floors</b></h4></center>
                        <a data-link="#" class="myclick_link" ><center><img src="<?= base_url('assets/banner_patch/banner-patch-6.png') ?>" class="img-responsive"></center></a>
                        
                        <center><p><span> <?=$property->floors?> </span></p></center>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                        <center><h4><b>Location</b></h4></center>
                        <a data-link="#" class="myclick_link" ><center><img src="<?= base_url('assets/banner_patch/banner-patch-2.png') ?>" class="img-responsive"></center></a>
                        <center><p><span><?= $property->location . ', ' . $property->city_name ?></span></p></center>
                    </div>
                    <div class="clearfix hidden-lg hidden-md"></div>
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                        <center><h4><b>Types</b></h4></center>
                        <a data-link="#" class="myclick_link" ><center><img align="center" src="<?= base_url('assets/banner_patch/banner-patch-3.png') ?>" class="img-responsive"></center></a>
                        <center><p><span><?= $bhk?></span></p></center>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                            <center><h4><b>Project Stage</b></h4></center>
                        <a data-link="#" class="myclick_link" ><center><img src="<?= base_url('assets/banner_patch/banner-patch-4.png') ?>" class="img-responsive"></center></a>
                        <center><p><span><?= $property->issue_date; ?></span></p></center>
                    </div>
                    <div class="clearfix hidden-lg hidden-md"></div>
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                    <center><h4><b>No. of Towers</b></h4></center>
                        <a data-link="#" class="myclick_link" ><center><img src="<?= base_url('assets/banner_patch/banner-patch-5.png') ?>" class="img-responsive"></center></a>
                        
                    
                        <center><p><span> <?=$property->towers?> </span></p></center>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                        <center><h4><b>Whastapp</b></h4></center>
                        <a data-link="#" class="myclick_link" ><center><img src="<?= base_url('assets/banner_patch/banner-patch-7.png') ?>" class="img-responsive"></center></a>
                        
                        <center><p><span> Link </span></p></center>
                    </div>
                    

                                
                </div>
                 <center> <a class="btn btn-danger" id="down-brochure" style="margin-top: 50px;">Click here to Get
                                                        Brochure</a>
                                                    <a href="" id="down-brochure-1"
                                                       style="display: none;" download>Broucher</a></center><br/><br/>


                                 
                                </div>
                            </section>
                            
                            <section id="section-id-1507611938" class="sppb-section   resort-discount wow">
                                <div class="overlay">
                                    <div class="sppb-row-container">
                                        <div class="sppb-row">
                                            <div class="sppb-col-sm-12">
                                                <div class="sppb-section-title sppb-text-center">
                                                    <h2 class="sppb-title-heading myt delay-10s animated wow fadeInDown animated"
                                                        style="visibility: visible; animation-name: fadeInDown;">
                                                        Pricing Details</h2>
                                                    <div class="underline2" style="margin-bottom: 5px;">&nbsp;</div>
                                                </div>


                                                <div class="delay-10s animated wow fadeInDown animated"
                                                     style="visibility: visible; animation-name: fadeInLeft;">
                                                    <table class="table spe-table"
                                                           style="text-align: center; margin: auto; width: 100%;color: #fff;border-color: #fff;"
                                                           border="0" cellspacing="0" cellpadding="0">
                                                        <thead>
                                                        <tr>
                                                            <th class="her" style="background: #53ABBD;">Unit Type
                                                            </th>
                                                            <th class="her" style="background: #53ABBD;">Size(SBA)
                                                            </th>
                                                            <th class="her" style="background: #53ABBD;">Carpet Area</th>
                                                            <th class="her" style="background: #53ABBD;">Price</th>
                                                            <th class="her" style="background: #53ABBD;">Whatsapp</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody style="color: #5c5c5c;">
                                                                                                <?php
                                    if (($flatTypes = $this->properties_model->getPropertyFlatType(null,
                                            $property->id)) != null) {
                                        foreach ($flatTypes as $flatType) {
                                            ?>
                                            <tr style="background: #ededed;">
                                                <td>
                                                    <?= $flatType->flat_type ?>
                                                </td>
                                                <td><?= $this->properties_model->getPropertyRange(array(
                                                        'property_id' => $property->id,
                                                        'flat_type_id' => $flatType->flat_type_id
                                                    ), 'property_flat_types',
                                                        'size') ?> <?= $this->properties_model->getPropertyParam(array(
                                                        'property_id' => $property->id,
                                                        'flat_type_id' => $flatType->flat_type_id
                                                    ), 'property_flat_types', 'unit') ?></td>
                                                <td><?= $this->properties_model->getPropertyRange(array(
                                                        'property_id' => $property->id,
                                                        'flat_type_id' => $flatType->flat_type_id
                                                    ), 'property_flat_types', 'carpet_area') ?> Sq.ft
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($flatType->price_on_request) {
                                                        echo "Price on Request";
                                                    } else {
                                                        ?>
                                                        <i class="fa fa-inr"
                                                           aria-hidden="true"></i><?= (($row = $this->properties_model->getPropertyParam(array(
                                                                'property_id' => $property->id,
                                                                'flat_type_id' => $flatType->flat_type_id
                                                            ), 'property_flat_types', null,
                                                                'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                        - <?= (($row = $this->properties_model->getPropertyParam(array(
                                                                'property_id' => $property->id,
                                                                'flat_type_id' => $flatType->flat_type_id
                                                            ), 'property_flat_types', null,
                                                                'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>

                                                <td align="center"><a href="https://api.whatsapp.com/send?phone=918342063684&text=I'm%20interested.%20would%20like%20to%20know%20more%20about%20<?= $property->title ? $property->title : '' ?>%20Project%20 <?= $flatType->flat_type ?>" target="_blank"><img src="<?= base_url('assets/banner_patch/whatsapp.png') ?>"> </a></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr style="background: #ededed;">
                                            <td colspan="5" class="text-center">No data available</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>


                                </tbody>
                                                    </table>
                                                </div>


                                            </div>
                                            <div class="col-md-12">
                                            <br/><br/>                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="section-id-1507611991" class="sppb-section i-section resort-discount wow">
                                <div class="overlay" style="padding-bottom: 50px;">
                                    <div class="" style="width: 94%; margin: 0px auto;">
                                        <div class="sppb-row">
                                            <div class="sppb-col-sm-12 amenities-icon"
                                                 style="color: #fff;text-align: center;">
                                                <div class="sppb-section-title sppb-text-center">
                                                    <h2 class="sppb-title-heading myt delay-09s animated wow fadeInDown animated"
                                                        style="visibility: visible; animation-name: fadeInDown;">
                                                        Amenities</h2>
                                                    <div class="underline2">&nbsp;</div>
                                                </div>
                                                <div class="sppb-empty-space  clearfix" style="height: 50px;"></div>


                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities/dumbbell.png') ?>">
                                                        <p class="animated fadeInUp wow">Fitness Center</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/gamepad.png">
                                                        <p class="animated fadeInUp wow">Indoor Games Room</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/hall.png">
                                                        <p class="animated fadeInUp wow">Multipurpose Hall</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/pool.png">
                                                        <p class="animated fadeInUp wow">Swimming Pool</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/cheers.png">
                                                        <p class="animated fadeInUp wow">Party Area</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/clubhouse.png">
                                                        <p class="animated fadeInUp wow">Club House</p>
                                                    </div>
                                                </div>


                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/tennis-racket.png">
                                                        <p class="animated fadeInUp wow">Tennis Court</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/basketball.png">
                                                        <p class="animated fadeInUp wow">Half Basketball Court</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/park.png">
                                                        <p class="animated fadeInUp wow">Huge Landscaped Green</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/cplay.png">
                                                        <p class="animated fadeInUp wow">Children's Play Area</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/table-tennis.png">
                                                        <p class="animated fadeInUp wow">Table Tennis</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/billiard-ball.png">
                                                        <p class="animated fadeInUp wow">Pool Table</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/badminton.png">
                                                        <p class="animated fadeInUp wow">Badminton Court</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/meditation.png">
                                                        <p class="animated fadeInUp wow">Yoga / Meditation</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/bell.png">
                                                        <p class="animated fadeInUp wow">Convenience Store</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/skate.png">
                                                        <p class="animated fadeInUp wow">Skating Arena</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/running.png">
                                                        <p class="animated fadeInUp wow">Jogging Track</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/amphitheatre.png">
                                                        <p class="animated fadeInUp wow">Amphitheatre</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/toddler.png">
                                                        <p class="animated fadeInUp wow">Toddler's Pool</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/grill.png">
                                                        <p class="animated fadeInUp wow">Barbeque Counter</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/parking.png">
                                                        <p class="animated fadeInUp wow">Surface Parking</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/trees.png">
                                                        <p class="animated fadeInUp wow">Tree Plaza</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-xs-4">
                                                    <div class="i-holder">
                                                        <img class="animated fadeInUp wow"
                                                             src="<?= base_url('assets/banner_patch/amenities') ?>/elderly-person.png">
                                                        <p class="animated fadeInUp wow">Senior Citizen Sitting Area</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <section id="section-id-1507611941" class="sppb-section  resort-title-heading wow">
                                <div class="sppb-row-container">
                                    <div class="sppb-section-title sppb-text-center">
                                        <h2 class="sppb-title-heading delay-09s animated wow fadeInDown animated"
                                            style="visibility: visible; animation-name: fadeInDown;">Gallery</h2>
                                        <div class="underline2">&nbsp;</div>
                                    </div>
                                    <div class="sppb-row">
                                        <div class="sppb-col-sm-12">
                                            <div id="column-id-1507611942" class="sppb-column">
                                                <div class="sppb-column-addons">
                                                    <div id="sppb-addon-1507611943" class="clearfix">
                                                        <div class="sppb-addon sppb-addon-latest-posts ">
                                                            <div class="sppb-addon-content">
                                                                <div class="latest-posts clearfix">
                                                                    <div class="sppb-row">

                                                                        <!-- Nav tabs -->
                                                                        <ul class="nav nav-tabs mytab" role="tablist">

                                                                        <li role="presentation" class="active" ><a
                                                                                        href="#elevation"
                                                                                        aria-controls="profile"
                                                                                        role="tab"
                                                                                        data-toggle="tab">Elevation</a>
                                                                            </li>

<?php if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_master_plans')))
{
    ?>
                                                                            <li role="presentation"><a
                                                                                        href="#masterplan"
                                                                                        aria-controls="profile"
                                                                                        role="tab"
                                                                                        data-toggle="tab">Master Plan</a>
                                                                            </li>
                                                                        <?php } 
if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                    'property_floor_plans')))
{
                                                                        ?>
                                                                            <li role="presentation"><a
                                                                                        href="#floorplans"
                                                                                        aria-controls="profile"
                                                                                        role="tab"
                                                                                        data-toggle="tab">Floor Plans</a>
                                                                            </li>
                                                                            
                                                                         <?php
                                                                         }
                                                                         ?>  
                                                                        </ul>

                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content delay-09s animated wow fadeInDown animated"
                                                                             style="visibility: visible; animation-name: fadeInDown;">


                                                                            <div role="tabpanel"
                                                                                 class="tab-pane fade in active"
                                                                                 id="elevation">

                                                                               
                                                                                <?php
                                        if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_elevations')) != null) {
                                            foreach ($images as $i => $image) {
                                                ?>
                                                 <div class="latest-post sppb-col-sm-3">
                                                                                    <div class="latest-post"
                                                                                         style="background-image: url(<?= base_url($image->image) ?>);">
                                                                                        <div class="latest-post-inner match-height l-box">
                                                                                             <span class="link-icon">
                                                                                                 <a href="<?= base_url($image->image) ?>">
                                                                                                     <i class="fa fa-chain"></i>
                                                                                                 </a>
                                                                                             </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                <?php
                                            }
                                        }
                                         else
                                        {
                                            echo  "<center>No Image Found<center>";
                                        }
                                        ?>
                                                                                
                                                                            </div>

                                                                            <!---------------- --------------------->
                                                                            <div role="tabpanel"
                                                                                 class="tab-pane fade in"
                                                                                 id="layout">

                                                                                <div id="gallery" style="display:none;">
                                                                                    <img alt="Floor Plan"
                                                                                         src="images/gallery/ml1.png"
                                                                                         data-image="images/gallery/ml1.png"
                                                                                         data-description=""
                                                                                         style="display:none">                                                                                  
                                                                                </div>


                                                                            </div>


                                                                            <div role="tabpanel"
                                                                                 class="tab-pane fade in "
                                                                                 id="masterplan">


                   <?php
                                       if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_master_plans'))) {

                                            foreach ($images as $i => $image) {
                                                ?>
                                           
                                             <div id="gallery1"
                                                                                     >
                                                                                    <img alt="master Plan"
                                                                                         src="<?= base_url($image->image) ?>"
                                                                                         data-image="<?= base_url($image->image) ?>"
                                                                                         alt="<?=$property->master_alt?>"
                                                                  title="<?= $property->master_desc ?>"
                                                                                         data-description=""
                                                                                        >

                                                                                   

                                                                                </div>

                                                <?php
                                            }
                                        }
                                       
                                        ?>


                                                                            </div>
                                                                            
                                                                          
                                                                <div role="tabpanel" class="tab-pane" id="floorplans">
                                                                
                                                                  <?php
                                        if (($images =                                                 $this->properties_model->getWhere(array('property_id' => $property->id),
                                                    'property_floor_plans'))) {
                                            ?>
                                            <?php
                                            foreach ($images as $i => $image) {
                                                ?>
                                                  <div class="latest-post sppb-col-sm-3">
                                                                    <div class="latest-post"
                                                                         style="background-image: url(<?= base_url($image->image) ?>);" 
                                                                  alt="<?=$property->master_alt?>"
                                                                  title="<?= $property->master_desc ?>">
                                                                        <div class="latest-post-inner match-height l-box">
                                                                             <span class="link-icon">
                                                                                 <a href="<?= base_url($image->image) ?>">
                                                                                     <i class="fa fa-chain"></i>
                                                                                 </a>
                                                                             </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                                                            </div>



                                                                            <!-- ========================================= -->
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <br/>
                                                </div>


                                    </div>
                                </div>


                            </section>

                            <section id="section-id-1507611947"
                                     class="sppb-section resort-title-heading resort-location-wrapper resort-discount wow">
                                <div class="overlay" style="padding-bottom: 50px;">
                                    <div class="sppb-row-container">
                                        <div class="sppb-text-center">
                                            <h2 class="sppb-title-heading myt2 delay-09s animated wow fadeInDown animated"
                                                style="color: #fff;margin-bottom: 15px; visibility: visible; animation-name: fadeInDown;">
                                                Contact Us</h2>
                                            <div class="underline2">&nbsp;</div>
                                        </div><br/><br/>
                                         <p class="foo-txt">For More Information Please Call</p>
                                                                <p class="footer-call"><i class="fa fa-phone"></i>
                                                                    <a href="tel:9019000400">9019000400</a>
                                                                </p>
                                                                 <a href="https://api.whatsapp.com/send?phone=918342063684&text=I'm%20interested%20in%20<?= $property->title ? $property->title : '' ?>%20please%20send%20me%20the%20details" target="_blank"><p class="foo-txt"><img src="<?= base_url('assets/banner_patch/whatsapp.png') ?>" style="margin: 0px auto;">Get Details by Whatsapp</p></a><br/><br/>
                                          <div class="sppb-row">
                                            <?php
if($property->map)
{
   ?>
   <div class="sppb-col-sm-6" style="background: #f1f1f1;">
                                            <div class="patch-wrap">
                                                <h5 class="nearby-head">Location</h5>
                                                <a class="map-btn" href="<?= base_url("uploads/$property->slug/map/$property->map") ?>">
                                                    <img src="<?= base_url("uploads/$property->slug/map/$property->map") ?>" class="small-map">
                                                    <div class="middle">
                                                        <div class="text">View Map</div>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="sppb-col-sm-6">
   <?php 
}                                           


   else
   {
    echo '<div class="sppb-col-sm-2"></div>';
    echo '<div class="sppb-col-sm-8">';
   } ?>
                            
                                        
                                        <div id="column-id-1507611950"
                                                     class="sppb-column  office-location-active">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-1507611951" class="clearfix">
                                                            <div class="sppb-addon-office-location-wrapper  active">
                                                                <form id="contact-form" action=""
                                                                      name="contact-form" method="POST">
<input type="hidden" name="property_id" value="<?= $property->id ?>">
                                                                    <div class="form-group col-md-12">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i
                                                                                        class="fa fa-user form-ico"
                                                                                        aria-hidden="true"></i></div>
                                                                            <input type="text" class="form-control"
                                                                                   name="name"
                                                                                   placeholder="Your Name">
                                                                        </div>
                                                                        <label for="fname" generated="true"
                                                                               class="error"></label>
                                                                    </div>
                                                                   <div class="form-group col-md-12">
                                                                        
                                                                        <input type="tel" placeholder="Phone*"
                                                                               name="phone" class="validate"
                                                                               id="contctform-phone3" required>
                                                                        <span class="hide valid-msg">✓ Valid</span>
                                                                        <span class="hide error-msg">Invalid number</span>

                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i
                                                                                        class="fa fa-envelope"
                                                                                        aria-hidden="true"></i></div>
                                                                            <input type="email" class="form-control"
                                                                                   name="email" placeholder="Email ID*">
                                                                        </div>
                                                                        <label for="email" generated="true"
                                                                               class="error"></label>
                                                                    </div>
                                                                    <div class="form-group col-md-12"
                                                                         style="height: initial;">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i
                                                                                        class="fa fa-commenting"
                                                                                        aria-hidden="true"></i></div>
                                                                            <textarea class="form-control" rows="3"
                                                                                      name="sugg"
                                                                                      placeholder="Your Message"></textarea>
                                                                           
                                                                        </div>
                                                                    </div>

                                                                    <button type="submit"
                                                                            class="btn btn-default form-btn">Submit
                                                                    </button>
                                                                </form>
                                                               

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        </div>
                                        <div class="sppb-col-sm-12">

                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>ABOUT US</h3>
                <!--<hr>-->
                <p style="padding-top: 30px; text-align:justify;"> We are Full Basket Property, established with the objective to serve you with any real estate support. 
Since inception, we have successfully improved our brand name by offering world-class services to our clients who 
have trusted us throughout the process of finding the properties and settling down the deed.</p>
                <br>
                <p class="address"><i class="fa fa-map-marker"></i> &nbsp;Corporate Office</p>
                <p>Sigma Trident,No - 11/2/1 , Hayes Road , Bangaluru, Karnataka - 560025</p>
                <p>L: 080-40913468</p>
                <p class="address"><i class="icon ion-ios-email-outline"></i> &nbsp;<a
                            href="mailto:sales@fullbasketproperty.com" style="color: #717171">sales@fullbasketproperty.com
                </p>
                <p class="address"><a href="tel:+919019000400"><i class="icon ion-ios-telephone-outline"></i> &nbsp;+91
                        901 900 0400</a></p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>QUICK LINKS</h3>
                <!--<hr>-->
                <ul>
                    <li><a href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a data-toggle="modal" href="#submitContact">SUBMIT PROPERTY</a></li>
                    <li><a href="<?= site_url('contact') ?>">CONTACT US</a></li>
                    <li><a href="<?= site_url('blog') ?>">BLOG</a></li>
                    <li><a href="<?= site_url('careers') ?>">CAREERS</a></li>
                    <li><a href="<?= site_url('testimonials') ?>">TESTIMONIALS</a></li>
                    <li><a href="<?= site_url('privacy-policy') ?>">TERMS</a></li>
                    <li><a href="<?= site_url('disclaimer') ?>">DISCLAIMER</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 last_news hide">
                <h3>LAST NEWS</h3>
                <!--<hr>-->
                <br>
                <?php foreach ($blogs as $blog) { ?>
                    <div class="latest_news">
                        <div class="news">
                            <div style="background-image: url(<?= base_url('uploads/blog_images/' . $blog->image) ?>);">
                                <span><?= date('Y-m-d', strtotime($blog->date_added)) ?></span>
                            </div>
                        </div>
                        <div class="news-content">
                            <a href="#">
                                <h5><?= strlen(strip_tags($blog->title)) < 10 ? strip_tags($blog->title) : substr((strip_tags($blog->title)),
                                            0, 10) . '...' ?></h5>
                                <p><?= strlen(strip_tags($blog->content)) < 30 ? strip_tags($blog->content) : substr(strip_tags($blog->content),
                                            0, 30) . '...' ?></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4 col-sm-4 social">
                <h3>STAY IN TOUCH</h3>
                <!--<hr>-->
                <br>
                <!-- <p><?= $stay_in_touch->content ?></p><br> -->
                <form action="<?= site_url('subscribers') ?>" method="post">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <button type="submit" class="btn_submit"><i class="icon ion-ios-paperplane-outline"></i>
                    </button>
                </form>
                <div class="clearfix"></div>
                <ul>
                    <li><a target="_blank" href="<?= $social_links->twitter ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a target="_blank" href="<?= $social_links->facebook ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a target="_blank" href="<?= $social_links->youtube ?>"style="margin-right: 4px;">
                        <i class="fa fa-youtube-play"></i></a></li>
                    <li><a target="_blank" href="<?= $social_links->instagram ?>"><i
                                    class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="<?= $social_links->dribble ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
                <img src="<?= base_url('assets/img/footer-logo.png') ?>" class="img-responsive center-block">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; <span style="color: #fff;">Fullbasket Property Services Pvt Ltd</span>, All rights reserved 2018</p>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li><a href="<?= site_url() ?>">Home</a></li>
                            <li><a href="https://fullbasketproperty.com/listing">Property</a></li>
                            <!--<li><a href="#">Faq</a></li>-->
                            <li><a href="https://fullbasketproperty.com/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



    <div class="offcanvas-menu wow">
        <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
        <div class="offcanvas-inner">

            <div class="sp-module ">
                <div class="sp-module-content">
                    <ul class="nav menu">
                        <li class="item-437 default current active"><a href="#home-c" class="m-link">Home</a>
                        </li>
                        <li class="item-561"><a href="#section-id-1507611922" class="m-link">About</a>
                        </li>
                        <li class="item-550"><a href="#section-id-1507611938" class="m-link">Configuration</a>
                        </li>
                        <!--<li class="item-550"><a href="#section-id-1507611930" class="m-link">Specifications</a>
                        </li>-->
                        <li class="item-548"><a href="#section-id-1507611991" class="m-link">Amenities</a>
                        </li>
                        <li class="item-548"><a href="#section-id-1507611941" class="m-link">Gallery</a>
                        </li>
                        <li class="item-548"><a href="#section-id-1507611944" class="m-link">Location</a>
                        </li>
                        <li class="item-548"><a href="#section-id-1507611947" class="m-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 col-sm-12 col-xs-12 fixed-footer-cust hidden-md hidden-lg hidden-sm">
    <div class="container">
        <div class="col-lg-6 col-sm-6 col-xs-6 div-line pd0">
            <a href="tel:9019000400" class="fix-link callme"><i class="fa fa-phone f-icon" aria-hidden="true"></i>
                CALL NOW</a>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 pd0">
           <!-- <button class="btn interested fix-link i-am"><i class="fa fa-envelope"></i> ENQUIRE NOW</button> -->
           <button class="btn fix-link i-am"><i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=918342063684&text=I'm%20interested%20in%20<?= $property->title ? $property->title : '' ?>%20please%20send%20me%20the%20details" target="_blank"><font color=white> Whatsapp</font></a></button>
        </div>
    </div>
</div>
<div class="modal fade in" tabindex="-1" role="dialog" id="price-model" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>

                <h4 class="modal-title">Floor Plan</h4>
            </div>
            <div class="modal-body">
                <p>Please enter the details below to get the floor plan information.</p>
                <form id="price-popup" action="" name="price-popup" method="POST" novalidate
                      onsubmit="return save_landing_pageinfo('price-popup');">
                    <div class="form-group col-md-12 pd">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                            
                        </div>
                        <label for="p_fname" generated="true" class="error"></label>
                    </div>
                    <div class="form-group col-md-12 pd">
                        <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone9"
                               required>
                        
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <label for="email" generated="true" class="error"></label>
                    </div>
                    

                    <button type="submit" class="btn btn-default price-btn">SUBMIT</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- ============================================= -->

<!-- ================ download popup ==================== -->


<div class="modal fade in" tabindex="-1" role="dialog" id="download-model" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>

                <h4 class="modal-title">Download Brochure</h4>
            </div>
            <div class="modal-body">
                <p>Please enter the details below to get the Brochure.</p>
                <form id="download-popup" action="" name="download-popup" method="POST"
                      novalidate="novalidate"
                      onsubmit="return save_landing_pageinfo('download-popup');">
                    <div class="form-group col-md-12 pd">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                            
                        </div>
                        <label for="p_fname" generated="true" class="error"></label>
                    </div>
                    <div class="form-group col-md-12 pd">
                        <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone8"
                               required>
                        
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <label for="email" generated="true" class="error"></label>
                    </div>

                    <button type="submit" class="btn btn-default price-btn">DOWNLOAD BROCHURE</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- ============================================= -->


<!-- ================ i am ==================== -->


<div class="modal fade in" tabindex="-1" role="dialog" id="interested" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>

                <h4 class="modal-title"><?= $property->title ? $property->title : '' ?></h4>
            </div>
            <div class="modal-body">
                <p>Please enter the details below to get the detailed information.</p>
                <form id="float-form" action="" name="price-popup" method="POST" novalidate
                      onsubmit="return save_landing_pageinfo('float-form');">
                    <div class="form-group col-md-12 pd">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                            
                        </div>
                        <label for="p_fname" generated="true" class="error"></label>
                    </div>
                    <div class="form-group col-md-12 pd">
                        <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone7"
                               required>                       
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            
                        </div>
                        <label for="email" generated="true" class="error"></label>
                    </div>
                    <div class="form-group col-md-12">
                          <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
                              <textarea class="form-control" rows="2" name="sugg" placeholder="Your Message"></textarea>
                               
                             </div>
                          </div>
                    <button type="submit" class="btn btn-default price-btn">SUBMIT</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!------------------------------------------submit Property------------------------------------------------->
<div class="modal fade" id="submitContact">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= site_url('home/send') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-transform: uppercase">SUBMIT PROPERTY</h4>
                </div>
                <div class="modal-body">
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" type="text" name="name" placeholder="Name" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="redirect" value="<?= current_url() ?>">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Property Location</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="property_location" placeholder="Property Location" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Property Type</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="property_type" placeholder="Property Type" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Area</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-area-chart" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="area" placeholder="Area" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Property Status</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="property_status" placeholder="Property Status" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Preferred Time of Contact</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="preferred_contact_time" placeholder="Preferred Time of Contact" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <center><div class="g-recaptcha" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div></center>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button style="border-radius: 0" type="button" class="btn btn-flat btn-default" data-dismiss="modal"><i
                                class="fa fa-times-circle"></i>
                        Close
                    </button>
                    <button style="border-radius: 0" type="submit" class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"
                                                                                                       aria-hidden="true"></i>
                        Send
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-------------------------------------------------------------------------------------------------------------------------------->

<!-- ============================================= -->


<!-- ================ I'm interested ==================== -->

<button class="btn btn-danger interested hidden-xs">Enquire</button>
<!-- ==================================== -->

<script src="<?= base_url() ?>assets/property/media/jui/js/jquery-noconflictbb68bb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/media/com_solidres/assets/js/noconflictc619.js?v=1.0" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/media/com_solidres/assets/js/jquery/ui/jquery-ui.minc619.js?v=1.0" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/media/com_solidres/assets/js/validate/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/media/system/js/corebb68bb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/js/parallax.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/templates/shaper_resort/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/media/system/js/mootools-corebb68bb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/templates/shaper_resort/js/bootstrap.minc619.js?v=1.0" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/templates/shaper_resort/js/jquery.stickyc619.js?v=1.0" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/property/templates/shaper_resort/js/mainc619.js?v=1.0" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var $slideFullwidth = $("#sppb-addon-1507611917 .slide-fullwidth");

        // Autoplay
        var $autoplay = $slideFullwidth.attr("data-sppb-slide-ride");
        if ($autoplay == "true") {
            var $autoplay = true;
        } else {
            var $autoplay = false
        }
        ;

        // controllers
        var $controllers = $slideFullwidth.attr("data-sppb-slide-controllers");
        if ($controllers == "true") {
            var $controllers = true;
        } else {
            var $controllers = true
        }
        ;


        $slideFullwidth.owlCarousel({
            margin: 0,
            loop: true,
            autoplay: $autoplay,
            animateIn: "slideInRight",
            animateOut: "fadeOutLeft",
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            },
            dots: $controllers,
        });


        $("#sppb-addon-1507611917 .sppbSlidePrev").click(function () {
            $slideFullwidth.trigger("prev.owl.carousel", [400]);
        });

        $("#sppb-addon-1507611917 .sppbSlideNext").click(function () {
            $slideFullwidth.trigger("next.owl.carousel", [400]);
        });
    });
</script>

<script type="text/javascript" src="<?= base_url() ?>assets/property/lightbox/light-box5152.js?ver=1.0"></script>
<script src="<?= base_url() ?>assets/property/intl-tel-input/js/intlTelInput5152.js?ver=1.0"></script>
<script src="<?= base_url() ?>assets/property/js/jquery.validate5152.js?ver=1.0"></script>
<script src="<?= base_url() ?>assets/property/js/mobilevalidate5152.js?ver=1.0"></script>
<script src="<?= base_url() ?>assets/property/js/vai5152.js?ver=1.0"></script>
<script src="<?= base_url() ?>assets/property/js/cookie5152.js?ver=1.0"></script>
<script src="<?= base_url() ?>assets/property/js/popout5152.js?ver=1.0"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/property/js/wow.min5152.js?ver=1.0"></script>


<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#gallery").unitegallery({
            tile_width: 350,                        //tile width
            tile_height: 230,
            gallery_theme: "tilesgrid",             //choose gallery theme (if more then one themes includes)
            gallery_width: "100%",
            tile_enable_border: false,
            tile_overlay_opacity: 0.6,          //tile overlay opacity
            tile_overlay_color: "#53ABBD"
        });
        jQuery("#gallery1").unitegallery({
            tile_width: 350,                        //tile width
            tile_height: 230,
            gallery_theme: "tilesgrid",             //choose gallery theme (if more then one themes includes)
            gallery_width: "100%",
            tile_enable_border: false,
            tile_overlay_opacity: 0.6,          //tile overlay opacity
            tile_overlay_color: "#53ABBD"
        });
    });
</script>

<script>
    jQuery(document).ready(function ($) {

        var telInput = $(".validate"),
            errorMsg = $(".error-msg"),
            validMsg = $(".valid-msg");
// initialise plugin
        telInput.intlTelInput({
            initialCountry: "in",
            utilsScript: "<?= base_url() ?>assets/property/intl-tel-input/js/utils.js",
            separateDialCode: "true"
        });
        var reset = function () {
            $(this).removeClass("error");
            $(this).parent().parent().find(errorMsg).addClass("hide");
            $(this).parent().parent().find(validMsg).addClass("hide");
        };
// on blur: validate
        telInput.blur(function () {
            reset();
            if ($.trim($(this).val())) {
                if ($(this).intlTelInput("isValidNumber")) {
                    $(this).parent().parent().find(validMsg).removeClass("hide");
                } else {
                    $(this).addClass("error");
                    $(this).parent().parent().find(errorMsg).removeClass("hide");
                }
            }
        });
// on keyup / change flag: reset
        telInput.on("keyup change", reset);
// Manual Reset on flag change.
        telInput.on("countrychange", function (e, countryData) {
            $(this).removeClass("error");
            $(this).parent().parent().find(errorMsg).addClass("hide");
            $(this).parent().parent().find(validMsg).addClass("hide");

            var elm = e.currentTarget.id + '-cc';
            $('#' + elm).val('+' + countryData.dialCode);

        });

        $("#calling_code6").val($("#contctform-phone6").intlTelInput("getSelectedCountryData").dialCode);
        $("#contctform-phone6").on("countrychange", function (e, countryData) {
            $("#calling_code6").val($("#contctform-phone6").intlTelInput("getSelectedCountryData").dialCode);
        });

        $("#calling_code7").val($("#contctform-phone7").intlTelInput("getSelectedCountryData").dialCode);
        $("#contctform-phone7").on("countrychange", function (e, countryData) {
            $("#calling_code7").val($("#contctform-phone7").intlTelInput("getSelectedCountryData").dialCode);
        });

        $("#calling_code2").val($("#contctform-phone2").intlTelInput("getSelectedCountryData").dialCode);
        $("#contctform-phone2").on("countrychange", function (e, countryData) {
            $("#calling_code2").val($("#contctform-phone2").intlTelInput("getSelectedCountryData").dialCode);
        });

        $("#calling_code3").val($("#contctform-phone3").intlTelInput("getSelectedCountryData").dialCode);
        $("#contctform-phone3").on("countrychange", function (e, countryData) {
            $("#calling_code3").val($("#contctform-phone3").intlTelInput("getSelectedCountryData").dialCode);
        });

        $("#calling_code8").val($("#contctform-phone8").intlTelInput("getSelectedCountryData").dialCode);
        $("#contctform-phone8").on("countrychange", function (e, countryData) {
            $("#calling_code8").val($("#contctform-phone8").intlTelInput("getSelectedCountryData").dialCode);
        });

        $("#calling_code9").val($("#contctform-phone9").intlTelInput("getSelectedCountryData").dialCode);
        $("#contctform-phone9").on("countrychange", function (e, countryData) {
            $("#calling_code9").val($("#contctform-phone9").intlTelInput("getSelectedCountryData").dialCode);
        });

    });
</script>
<script>
    jQuery(document).ready(function ($) {
        var $gallery = $('.l-box a').simpleLightbox();
        $('.map-btn').simpleLightbox();
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        Delete_Cookie('formfilled');
        // ---------------for model only-----
        $(".price-click").click(function () {
            $('#price-model').modal('show');
        });
        // ---------------for model only-----
        $("#down-brochure").click(function () {
            $('#download-model').modal('show');
        });

        $(".interested").click(function () {
            $('#interested').modal('show');
        });

    });
</script>
<script>
    jQuery(document).ready(function ($) {
        // Add smooth scrolling to all links
        $(".m-link").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    // window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

<script type="text/javascript">
    function save_landing_pageinfo(elm) {
        jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', true);
        setTimeout(function () {
            jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', false);
        }, 5000);
        var name = jQuery('#' + elm + ' input[name="fname"]').val();
        var mobileno = jQuery('#' + elm + ' input[name="mobile"]').val();
        var emailid = jQuery('#' + elm + ' input[name="email"]').val();
        var fsource = jQuery('#' + elm + ' input[name="source"]').val();
        var message = jQuery('#' + elm + ' textarea[name="message"]').val();
        var howuknow = jQuery('#' + elm + ' input[name="visit_from"]').val();
        var current_url = location.hostname;

        if (name == "") {
            //alert("Please Enter Your Name");
            return false;
        }


        mobileno = mobileno.replace(/[^0-9]/g, '');
        if (mobileno.length != 10) {
            //alert("Please Enter 10 Digit Mobile Number");
            return false;
        }


//        if (elm == 'price-popup') {
//            emailid = "";
//        } else if (elm == 'main-popup') {
//            emailid = "";
//        }
//        else {
        var atpos = emailid.indexOf("@");
        var dotpos = emailid.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailid.length) {
            return false;
        }
//        }

        if (message == undefined) {
            message = "";
        }

        if (howuknow == "") {
            //alert("select option");
            return false;
        }

        if (name != "" && mobileno != "") {
            var tags = '';
            var webToLeadData = {
                'firstname': name,
                'email': emailid,
                'mobile': mobileno,
                'tags': tags,
                'cstm_fsource': fsource,
                'cstm_current_url': current_url,
                'cstm_query': message,
                'cstm_howuknow': howuknow
            }


            MTI.webToLead(webToLeadData,
                function () {
                    submitForm(elm);
                    if (elm == 'download-popup') {
                        document.getElementById('down-brochure-1').click();
                    }
                },
                function (respone) {
                    //console.log("There was an error saving the lead to the marketing automation system. ");
                    console.log(respone);
                    submitForm(elm);
                }
            );
        }
        return false;
    }

    function submitForm(elm) {
        document.createElement('form').submit.call(document.getElementById(elm));
    }
</script>

</body>

</html>
