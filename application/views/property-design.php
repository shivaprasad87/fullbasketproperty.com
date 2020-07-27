
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= str_replace(' ', ' ', substr(strip_tags($property->meta_title), 0, 1000)) ?>
    </title>
    <meta name="description" content="<?= substr(strip_tags($property->meta_desc), 0, 1000) ?>" />
    <meta name="keywords" content="<?= str_replace(' ', ' ', substr(strip_tags($property->meta_keywords), 0, 1000)) ?>" />
    <meta property="og:url" content="<?= current_url() ?>" />
    <meta property="og:title" content="<?= $property->title ? $property->title : '' ?>" />
    <meta property="og:site_name" content="Fullbasket Property" />
    <meta property="og:description" content="<?= substr(strip_tags($property->description), 0, 1000) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?= base_url(" uploads/$property->slug/$property->image") ?>"/>
    <?php $this->load->helper('directory');  $map = directory_map('uploads/'.$property->slug.'/logos');?>
        <meta property="og:locale" content="en_us" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@Fullbasketproperty" />
        <meta name="twitter:title" content="<?= $property->title ? $property->title : '' ?>" />
        <meta name="twitter:description" content="<?= substr(strip_tags($property->description), 0, 1000) ?>" /> 
        <link rel="shortcut icon" type="image/x-icon" href="<?= site_url('') ?>assets/img/sp-logo.png" />

        <link rel="canonical" href="<?= current_url() ?>">
        <link rel="icon" href="https://www.fullbasketproperty.com/assets/img/favicon.ico" type="image/gif" sizes="16x16">

        <link rel="manifest" href="https://orchards.realatte.com/manifest.json"> 
        <link href="<?= base_url() ?>assets/property/media/com_solidres/assets/css/jquery/themes/base/jquery-ui.minc619.css?v=1.0" rel="stylesheet" type="text/css" />      
        <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/font-awesome.minc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/animate.minc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/sppagebuilderc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/sppagecontainerc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/owl.carouselc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/owl.themec619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/owl.transitionsc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/slide-animatec619.css?v=1.0" rel="stylesheet" type="text/css" />
       
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ionicons.min.css') ?>">

        <link href="<?= base_url() ?>assets/property/media/com_solidres/assets/css/main.minc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/components/com_sppagebuilder/assets/css/magnific-popupc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/360assets') ?>/css/common.css" rel="stylesheet" type="text/css" />

        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/bootstrap.minc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/font-awesome.minc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="templates/shaper_resort/css/legacy.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/templatec619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/presets/preset1c619.css?v=1.0" rel="stylesheet" type="text/css" class="preset" />
        <link href="<?= base_url() ?>assets/property/plugins/system/helix3/assets/css/pagebuilderc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/frontend-editc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/property/modules/mod_sp_weather/assets/css/flatc619.css?v=1.0" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/property/font/flaticonc619.css?v=1.0">
        <link href="<?= base_url() ?>assets/property/lightbox/light-boxc619.css?v=1.0" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/property/intl-tel-input/css/intlTelInputc619.css?v=1.0">
        <link href="<?= base_url() ?>assets/property/templates/shaper_resort/css/animatec619.css?v=1.0" rel="stylesheet" type="text/css"> 
        <link rel='stylesheet' href='<?= base_url() ?>assets/property/unitegallery/css/unite-gallery.css' type='text/css' />

        <style>
                       h4 {
  color: black !important;
}
            span {
  color: black !important;
}
            p {
  color: black !important;
}
            .carousel .item {
                height: 580px;
                margin-bottom: -193px;
                /* margin-top: 125px; */
            }
            
            .carousel .d-banner {
                /* margin-top: -120px; */
                height: 600px;
            }
            
            .item img,
            .carousel .d-banner img {
                position: absolute;
                top: 0;
                left: 0;
                min-height: 450px;
            }
            
            .property-list {
                border: 1px solid #ddd;
                box-shadow: 2px 2px 2px #ddd;
                position: relative;
                display: inline-block;
                width: 100%;
                margin-bottom: 20px;
                -webkit-transition: 0.6s ease;
                transition: 0.6s ease;
            }
            
            .builder_info img {
                box-shadow: 2px -2px 0px #e1ad4f;
                width: 333px;
                height: 200px;
            }
            
            @media (max-width: 1600px) {
                .phone {
                    margin-left: 0px!important;
                    width: 100%!important;
                    height: 41px!important;
                }
            }
            
            .whtsapp {
                padding: 10px;
                background: #03a84e;
                color: white;
            }
            
            .whtsapp span,
            .whtsapp .fa {
                color: white;
            }
            
            .whtsapp:hover {
                box-shadow: 5px 8px 16px 0px green;
            }
            
            .zoom {
                /* padding: 50px; */
                background-color: green;
                transition: transform .2s;
                /* Animation */
                /* width: 200px;
  height: 200px; */
                margin: 0 auto;
            }
            
            .zoom:hover {
                transform: scale(1.1);
                /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                z-index: 2;
            }
            
            .youtube {
                padding: 10px;
                background: #ef0525;
                color: white;
            }
            
            .youtube span,
            .youtube .fa {
                color: white;
            }
            
            .youtube:hover {
                box-shadow: 5px 8px 16px 0px #ef0525;
               
            }
            
            .pinterest {
                padding: 10px;
                background: #cb2027;
                color: white;
            }
            
            .pinterest span,
            .pinterest .fa {
                color: white;
            }
            
            .pinterest:hover {
                box-shadow: 5px 8px 16px 0px #cb2027;
            }
            
            .facebook {
                padding: 10px;
                background: #5b7ec0;
                ;
                color: white;
            }
            
            .facebook span,
            .facebook .fa {
                color: white;
            }
            
            .facebook:hover {
                box-shadow: 5px 8px 16px 0px #5b7ec0;
            }
            
            .twitter {
                padding: 10px;
                background: #55acee;
                color: white;
            }
            
            .twitter span,
            .twitter .fa {
                color: white;
            }
            
            .twitter:hover {
                box-shadow: 5px 8px 16px 0px #55acee;
            }
            
            .linkedIn {
                padding: 10px;
                background: #5b7ec0;
                ;
                color: white;
            }
            
            .linkedIn span,
            .linkedIn .fa {
                color: white;
            }
            
            .linkedIn:hover {
                box-shadow: 5px 8px 16px 0px #5b7ec0;
            }
            /* .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
    padding-left: 84px!important;
} */
            
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input,
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text],
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
                padding-left: 90px!important;
            }

            @media only screen and (max-width: 750px) and (min-width: 320px)
            {.footer_property .col-sm-12 {
                width: 100%!important;
            }
            footer ul {
       padding-top: 0px;   
       padding: 0;
       list-style: none;
    }
            }

            .footer_property li a{
            font-size: 14px;
        }
     

            @media only screen and (min-width: 320px) and (max-width: 650px) {
                .container .prop-img{
                    padding-right: 0px;
    padding-left: 0px;
                }
                .phone {
                    width: 97%;
                }
                .fa-3x {
                    font-size: 1.3em!important;
                }
                .whtsapp {
                    padding: 5px;
                }
                .whtsapp span,
                .whtsapp .fa {
                    font-size: 12px;
                }
                .youtube {
                    padding: 5px;
                }
                .youtube span,
                .youtube .fa {
                    font-size: 12px;
                }
                .pinterest {
                    padding: 5px;
                }
                .pinterest span,
                .pinterest .fa {
                    font-size: 12px;
                }
                .facebook {
                    padding: 5px;
                }
                .facebook span,
                .facebook .fa {
                    font-size: 12px;
                }
                .twitter {
                    padding: 5px;
                }
                .twitter span,
                .twitter .fa {
                    font-size: 12px;
                }
                .linkedIn {
                    padding: 5px;
                }
                .linkedIn span,
                .linkedIn .fa {
                    font-size: 12px;
                }
            }
            
            #contact-form .input-group-addon {
                padding: 6px 12px;
                font-size: 14px;
                font-weight: normal;
                line-height: 1;
                color: #555;
                text-align: center;
                background-color: #eee;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            
            .morecontent span {
                display: none;
            }
        </style>
        <style type="text/css">
       
       .cust-accordion .panel-body p {
            font-size: 14px;
            font-family: 'Raleway', sans-serif;
            /* font-weight: 600; */
            color: white!important;
        }

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
                padding-top: 50px;
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

          
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
                font-family: proxima_nova_rgregular,Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Segoe UI,sans-serif,Arial;
                 line-height: 1.1;
                color: inherit;
            }
       
            .sp-megamenu-parent {
                font-family: proxima_nova_rgregular,Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Segoe UI,sans-serif,Arial;
                font-weight: 600;
            }
            
            .rooms-suits .sppb-cta-subtitle {
                font-family: proxima_nova_rgregular,Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Segoe UI,sans-serif,Arial;
                font-weight: 300;
            }
            
            #sp-top-bar {
                color: #ffffff;
            }
            
            #sp-bottom {
                background-color: #493e3e;
                padding: 35px 0 0 0;
            }
            
            .fa-youtube:hover {
                color: red;
                background-color: white;
            }
            
            input.separate-dial-code .selected-dial-code {
                color: #1f1d1d !important;
            }
            
            .form-btn {
                text-align: center;
                /* font-size: 18px; */
                color: #333;
                background-color: #fff;
                font-size: 14px!important;
                border-color: #ccc;
                padding: 4px 13px 6px;
            }
        </style>
        <style>
            .rooms-suits .sppb-addon-cta .text-center {
                text-align: left;
                position: relative;
            }
            
            .rooms-suits .sppb-addon-cta .text-center h3.sppb-cta-title {
                /*font-size: 30px;*/
                font-size: 19px;
            }
            
            .rooms-suits .sppb-addon-cta .text-center .sppb-cta-subtitle {
                position: absolute;
                top: 0;
                right: 0;
            }
            
            .rooms-suits .sppb-addon-cta .text-center .sppb-cta-subtitle span {
                font-size: 20px;
            }
            
            .rooms-suits .sppb-addon-cta .text-center .sppb-btn-primary {
                margin-top: 40px;
            }
            
            .rooms-suits .sppb-carousel ol.sppb-carousel-indicators li {
                margin-right: 5px;
                border: solid 1px transparent;
                background-color: #fff;
            }
            @media only screen and (max-width: 992px) {
                .banner-patch h4,   .banner-patch .h4 {
                    
                    font-size: 17px;
                }
                .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
                    padding: 5px;
                    font-weight: 500;
                    line-height: 1.42857143;
                    vertical-align: top;
                    border-top: 1px solid #ddd;
                }
               #section-id-1507611938  .sppb-col-sm-12 {
                    position: relative;
                    min-height: 1px;
                    padding-left: 2px;
                    padding-right: 5px;
                }

            }
            @media only screen and (min-width: 992px) {

                .banner-patch .col-lg-2 {
                  width: 13.666667%;
                }

               .prop-img {
                width: 337px;
                background-position: 50% 50%;
                position: relative;
                height: 200px;
                background: #ededed;
                margin-left: -1px;
                    padding-left: 0px; 
                padding-right: 0px;
                }
                .banner-icon{
                    height: 160px;
                }
            }
            @media only screen and (max-width: 992px) {

                .banner-icon{
                    height: 100%;
                }
                .rooms-suits .sppb-addon-content img {
                    height: 100%;
                }
                .rooms-suits .sppb-addon-cta .text-center .sppb-btn-primary {
                    margin-top: 70px;
                }
                .reservation_asset_item .other-photos .sr-photo-wrapper {
                    margin-bottom: 40px;
                }
                .reservation_asset_item .other-photos .sr-photo-wrapper a img {
                    width: 100%;
                }
                .reservation_asset_item .carousel .item img {
                    max-height: 100%;
                    height: 100%;
                }
            }
            @media only screen and (min-width: 651px) {
            .fa-3x {
                font-size: 3em;
                padding: 10px
            }
        }
            /*----------------accordition-----------*/
            
            .cust-accordion .panel {
                border: none;
                box-shadow: none;
                background: #f3f3f3;
                border-radius: 0;
                margin-bottom: 5px
            }
            
            .cust-accordion .panel-heading {
                padding: 0;
                border-radius: 0;
                border: none
            }
            
            .cust-accordion .panel-title a {
                display: block;
                padding: 15px 15px 15px 15px;
                font-size: 16px;
                font-weight: 700;
                color: #fff;
                background: #949494;
                text-decoration: none;
                transition: all .5s ease 0s;
                position: relative;
            }
            
            .cust-accordion .panel-title a:hover {
                background: #2AB3D2;
            }
            
            .cust-accordion .panel-body {
                font-size: 14px;
                color: #fff;
                background: #6f6f6f;
                padding: 15px 20px;
                line-height: 25px;
                border: none !important;
                position: relative
            }
            
            .cust-accordion .panel-body:after {
                content: "";
                position: absolute;
                top: -19px;
                left: 40px;
                border: 10px solid transparent;
                border-bottom: 10px solid #6f6f6f
            }
         
            
            .cust-accordion .panel-title a .down-arrow {
                width: 25px;
                float: right;
                position: relative;
                top: -5px
            }
            
            .loc-icon {
                position: absolute;
                left: 8px;
                width: 33px;
                top: 6px;
            }
            
            .specification {
                list-style: circle;
                padding-left: 16px;
                font-size: 15px;
            }
            
            .cust-accordion .panel-body p {
                font-size: 14px;
                font-family: 'Raleway', sans-serif;
                /*font-weight: 600;*/
            }
            
            .cust-accordion .panel-body h3 {
                font-family: 'Raleway', sans-serif;
                font-size: 16px;
                margin-top: 15px;
                margin-bottom: 5px;
            }
            
            .cust-accordion {
                margin-bottom: 5px !important;
            }
            
            .sub-ami {
                color: #fff;
                font-size: 21px !important;
                text-align: center;
                margin-bottom: 50px;
                border-bottom: 2px solid;
                padding-bottom: 10px;
            }
            
            .cust-container {
                width: 85%;
                margin: 0px auto;
            }
            .line {
                border-right: 1px solid #555;
                position: relative;
                top: 1px;
                padding: 3px;
                margin-right: 9px;
            }
            #sp-header .sp-megamenu-parent >li >a {
                color: #53ABBD;
                margin-left: 15px;
               
            }
            .contact .form{
                margin-bottom: 14px;
            }
            .menu-fixed-out {
                 width: 100%;
                 box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
                 opacity: .95;
                 z-index: 9999;
                 background-color: #fff;
                 position: relative;
             }
             .menu-fixed {
                 width: 100%;
                 box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
                 opacity: .95;
                 z-index: 9999;
                 background-color: #fff;
                 position: fixed;
                 top:0;

                   
             }
             .intl-tel-input .selected-flag .iti-arrow {
            border-top: 4px solid rgb(255, 255, 255) !important;
                }
                #float-form .selected-flag {
                    background: #53abbd!important;
                }
                 .intl-tel-input.separate-dial-code .selected-dial-code {
                    color: white;
                }
                .social .intl-tel-input.separate-dial-code .selected-dial-code ,
                #contact-form .intl-tel-input.separate-dial-code .selected-dial-code{
                    color: #555555;
                }
                .social .intl-tel-input .selected-flag .iti-arrow,
                #contact-form .intl-tel-input .selected-flag .iti-arrow{
            border-top: 4px solid rgb(0, 0, 0) !important;
                }
         
            /*---------------------------*/
        </style>

</head>

<body class="site com-sppagebuilder view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>
    <div class="body-innerwrapper">
        <section id="sp-top-bar">
            <div class="container">
                <div class="row">
                    <div id="sp-top2" class="col-sm-12 col-md-12">
                        <div class="sp-column ">
                            <ul class="sp-contact-info">
                                <li class="sp-contact-phone"><i class="fa fa-phone"></i><a href="tel:+919019011888">+91
                                         9019011888</a>
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
                    <div id="sp-logo" class="col-xs-8 col-sm-1 col-md-2">
                        <div class="sp-column ">
                            <a class="logo" href="<?=base_url();?>">
                                <h1>
                                    <img class="sp-default-logo" src="<?= base_url('assets/images/logo.png')?>" style=" max-height: 111px; width: 111px;   float: right;  top: 10px;  position: absolute;background: white; padding-right: 5px; padding-left: 5px;border-radius: 26px;"> 
                                    <img class="sp-retina-logo" src="<?=base_url();?>assets/img/logo.png"
                                         style=" height: 60px;width: 60px !important;">

                                </h1>
                            </a>
                        </div>
                    </div>

                    <div id="sp-menu" class="col-xs-4 col-sm-10 col-md-10" style="">
                        <div class="sp-column ">
                            <div class='sp-megamenu-wrapper'>
                                <a id="offcanvas-toggler" class="visible-xs" href="#"><i class="fa fa-bars"></i></a>
                                <ul class="sp-megamenu-parent menu-fade hidden-xs">
                                    <li class="sp-menu-item current-item active">
                                        <a href="#home-c" class="m-link">Home</a>
                                    </li>
                                    <li class="sp-menu-item">
                                         <a href="#section-id-1507611922" class="m-link">About</a>
                                    </li>
                                    <li class="sp-menu-item">
                                         <a href="#section-id-1507611938" class="m-link">Configuration</a>
                                    </li>
                                    <li class="sp-menu-item">
                                          <a href="#section-id-1507611991" class="m-link">amenities</a>
                                    </li>
                                    <li class="sp-menu-item"><a href="#section-id-1507611941" class="m-link">Gallery</a>
                                    </li>
                                    <li class="sp-menu-item"><a href="#section-id-1507611944" class="m-link">location</a>
                                    </li>
                                    <li class="sp-menu-item"><a href="#section-id-1507611947" class="m-link">Contact</a>
                                    </li>
                                    <li class="sp-menu-item">
                                        <?php
                                                if(($logos = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                                                                'property_logo')) != null)
                                                {
                                                    $logos=json_decode( json_encode($logos), true);
                                                    //builder_image;
                                                    ?>
                                                     <img class="sp-default-logo" src="<?= base_url().'uploads/'.$property->slug.'/logos/'.$map[0] ?>" style="    margin-left: 113px;
                                                margin-right: -83px; margin-top: 13px;">
                                                                <?php

                                                }
                                                else
                                                {
                                                    $map[0]= $property->builder_image;
                                                ?>

                                                                    <img class="sp-default-logo" src="<?= base_url().'uploads/builders/'.$map[0] ?>" style="    margin-left: 113px;
                                                margin-right: -83px; margin-top: 13px;">

                                                                    <?php
                                                }

                                                ?>
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

                                                $ban=0;
                                                $side_image=''; 
                                                foreach ($total_images as $image) {

                                                    if($ban==0)
                                                    {
                                                    ?>

                                            <div class="item active">
                                                <?php  
                                        echo '<img class="d-banner" src="'. base_url().$images[$ban]['banner_path'] .'"   style="width: 100%">';
                                        echo '<img class="m-banner" src="'. base_url().$m_images[$ban]['mobile_banner_path'].'" alt="" style="width: 100%">';
                                                    $side_image=base_url().$m_images[$ban]['mobile_banner_path'];
                                                                ?>

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

                                <!-- <br> -->

                                <div class="col-md-12">
                                
                                </div>

                                <div class="container-fluid text-center ">
                                    <div class="row">

                                        <div class="col-md-2 col-xs-2 whtsapp zoom">
                                            <div class="">
                                                <a target="_blank" href="https://api.whatsapp.com/send?phone=918342063684&text=Hi Team FBP, I would be interested in%20<?= $property->title ? $property->title : '' ?>%20please%20send%20me%20the%20details">
                                                    <!-- <span>Whatsapp</span>
                                                    <br> -->
                                                    <i class="fa fa-whatsapp fa-3x" title="Whatsapp"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-xs-2 youtube zoom">
                                            <div class="">
                                                <a target="_blank" href="https://www.youtube.com/channel/UCGr-on8k7dRMKBFW-X2G05A" class="">
                                                    <!-- <span>Youtube</span>
                                                    <br> -->
                                                    <i class="fa fa-youtube fa-3x" title="Youtube"></i>

                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-xs-2 facebook zoom">
                                            <div class="">
                                                <a target="_blank" href="https://www.facebook.com/fullbasketpropertypage/" class="">
                                                    <!-- <span>Facebook</span>
                                                    <br> -->
                                                    <i class="fa fa-facebook fa-3x" title="Facebook"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-xs-2 pinterest zoom">
                                            <div class="">
                                                <a target="_blank" href="https://in.pinterest.com/fullbasketpropertyservices/" class="">
                                                    <!-- <span>Pinterest</span>
                                                    <br> -->
                                                    <i class="fa fa-pinterest fa-3x" title="Pinterest"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-xs-2 twitter zoom">
                                            <div class="">
                                                <a target="_blank" href="https://twitter.com/fbptweets" class="">
                                                    <!-- <span>Twitter</span>
                                                    <br> -->
                                                    <i class="fa fa-twitter fa-3x" title="Twitter"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-xs-2 linkedIn zoom">
                                            <div class="">
                                                <a target="_blank" href="https://www.linkedin.com/company/full-basket-property-services-pvt-ltd/" class="">
                                                    <!-- <span>LinkedIn</span>
                                                    <br> -->
                                                    <i class="fa fa-linkedin fa-3x" title="LinkedIn"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <section id="section-id-1507611922" class="sppb-section   rooms-suits resort-title-heading wow">
                                    <div class="sppb-row-container">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h1 class="sppb-title-heading delay-10s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <?= $property->title ? $property->title : '' ?>
                                            </h1>
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
                                                        echo '<img src="'.$side_image.'"style="margin: 0px auto; margin-bottom: 20px;"></a>'; } else echo '<img src="'.base_url('uploads/'.$property->slug.'/'.$property->image).'" style="margin: 0px auto; margin-bottom: 20px;"></a>'; ?>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <p style="text-align: justify;" class="comment more">
                                                            <?= $property->builder_description ?>

                                                        </p>

                                                        <p style="text-align: left; margin-bottom: 20px; font-size: 14px;">
                                                            <a class="btn interested fix-link i-am">
                                                            </a>
                                                            <br/>For assistance please call: <a href="tel:9019011888" title="call us"><font style="color: #08ad1e; font-weight: 600; font-size: 18px;">9019011888</font></a></p>

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

                                                <center>
                                                    <h2 class="sppb-title-heading delay-10s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; margin-top: 26px;"> Project Snapshot</h2></center>
                                                <div class="underline">&nbsp;</div>

                                                <br/>
                                                <br/>
                                                <div class="banner-icon">
                                                    <div class="banner-patch">
                                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>No. Floors</b></h4></center>
                                                            <a data-link="#" class="myclick_link">
                                                                <center><img src="<?= base_url('assets/banner_patch/banner-patch-6.png') ?>" class="img-responsive"></center>
                                                            </a>

                                                            <center>
                                                                <p><span> <?=$property->floors?> </span></p>
                                                            </center>
                                                        </div>

                                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>Location</b></h4></center>
                                                            <a data-link="#" class="myclick_link">
                                                                <center><img src="<?= base_url('assets/banner_patch/banner-patch-2.png') ?>" class="img-responsive"></center>
                                                            </a>
                                                            <center>
                                                                <p><span><?= $property->location . ', ' . $property->city_name ?></span></p>
                                                            </center>
                                                        </div>

                                                        <div class="clearfix hidden-lg hidden-md"></div>

                                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>Types</b></h4></center>
                                                            <a data-link="#" class="myclick_link">
                                                                <center><img align="center" src="<?= base_url('assets/banner_patch/banner-patch-3.png') ?>" class="img-responsive"></center>
                                                            </a>
                                                            <center>
                                                                <p><span><?= $bhk?></span></p>
                                                            </center>
                                                        </div>

                                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>Project Stage</b></h4></center>
                                                            <a data-link="#" class="myclick_link">
                                                                <center><img src="<?= base_url('assets/banner_patch/banner-patch-4.png') ?>" class="img-responsive"></center>
                                                            </a>
                                                            <center>
                                                                <p><span><?= $property->issue_date; ?></span></p>
                                                            </center>
                                                        </div>

                                                        <div class="clearfix hidden-lg hidden-md"></div>

                                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>No. of Towers</b></h4></center>
                                                            <a data-link="#" class="myclick_link">
                                                                <center><img src="<?= base_url('assets/banner_patch/banner-patch-5.png') ?>" class="img-responsive"></center>
                                                            </a>

                                                            <center>
                                                                <p><span> <?=$property->towers?> </span></p>
                                                            </center>
                                                        </div>

                                                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>Possession</b></h4></center>
                                                           
                                                                <center><img src="<?= base_url('assets/banner_patch/banner-patch-6.png') ?>" class="img-responsive"></center>
                                                          

                                                            <center>
                                                                <p><span>  <?=$property->possession_date?$property->possession_date:'-'?> </span></p>
                                                            </center>
                                                        </div>

                                                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 no-padding banner-patch-content">
                                                            <center>
                                                                <h4><b>Whatsapp</b></h4></center>
                                                            <a href="https://api.whatsapp.com/send?phone=918342063684&text=Hi Team FBP, I would be interested in%20<?= $property->title ? $property->title : '' ?>%20please%20send%20me%20the%20details" target="_blank">
                                                                <center><img src="<?= base_url('assets/banner_patch/banner-patch-7.png') ?>" class="img-responsive"></center>
                                                            </a>

                                                            <center>
                                                                <p><span> Link </span></p>
                                                            </center>
                                                        </div>

                                                        

                                                    </div>
                                                    <br>
                                                <br>
                                                </div>
                                                
                                                <br>
                                                <br>
                                                <div class="broucher">
                                                    <center><a class="btn btn-danger" id="down-brochure" style="">Click here to Get Brochure</a></center>
                                                    <a href="" id="down-brochure-1" style="display: none;" download>Broucher</a>
                                                </div>

                                                <br>
                                                <br>

                                    </div>
                                </section>

                                <section id="section-id-1507611938" class="sppb-section   resort-discount wow">
                                    <div class="overlay">
                                        <div class="sppb-row-container">
                                            <div class="sppb-row">
                                                <div class="sppb-col-sm-12">
                                                    <div class="sppb-section-title sppb-text-center">
                                                        <h2 class="sppb-title-heading myt delay-10s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                                                            Pricing Details</h2>
                                                        <div class="underline2" style="margin-bottom: 5px;">&nbsp;</div>
                                                    </div>

                                                    <div class="delay-10s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInLeft;">
                                                        <table class="table spe-table" style="text-align: center; margin: auto; width: 100%;color: #fff;border-color: #fff;" border="0" cellspacing="0" cellpadding="0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="her" style="background: #53ABBD;">Unit Type
                                                                    </th>
                                                                    <th class="her" style="background: #53ABBD;">Size(SBA)
                                                                    </th>
                                                                    <th class="her" style="background: #53ABBD;">Carpet Area</th>
                                                                    <th class="her" style="background: #53ABBD;">Price</th>
                                                                    <th class="her" style="background: #53ABBD;">Floorplan</th>
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
                                                                        <td>
                                                                            <?= $this->properties_model->getPropertyRange(array(
                                                            'property_id' => $property->id,
                                                            'flat_type_id' => $flatType->flat_type_id
                                                        ), 'property_flat_types',
                                                            'size') ?>
                                                                                <?= $this->properties_model->getPropertyParam(array(
                                                            'property_id' => $property->id,
                                                            'flat_type_id' => $flatType->flat_type_id
                                                        ), 'property_flat_types', 'unit') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $this->properties_model->getPropertyRange(array(
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
                                                                                <i class="fa fa-inr" aria-hidden="true"></i>
                                                                                <?= (($row = $this->properties_model->getPropertyParam(array(
                                                                    'property_id' => $property->id,
                                                                    'flat_type_id' => $flatType->flat_type_id
                                                                ), 'property_flat_types', null,
                                                                    'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                                                    -
                                                                                    <?= (($row = $this->properties_model->getPropertyParam(array(
                                                                    'property_id' => $property->id,
                                                                    'flat_type_id' => $flatType->flat_type_id
                                                                ), 'property_flat_types', null,
                                                                    'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                                                        <?php
                                                        }
                                                        ?>
                                                                        </td>

                                                                        <td align="center" class="floorplan" id="down-brochure"><img src="<?= base_url('assets/images/download.png') ?>"></td>

                                                                        <td align="center"><a href="https://api.whatsapp.com/send?phone=918342063684&text=Hi Team FBP, I would be interested in%20<?= $property->title ? $property->title : '' ?>%20 <?= $flatType->flat_type ?>" target="_blank"><img src="<?= base_url('assets/banner_patch/whatsapp.png') ?>"> </a></td>
                                                                    </tr>
                                                                    <?php
                                            }
                                        } else {
                                            ?>
                                                                        <tr style="background: #ededed;">
                                                                            <td colspan="6" class="text-center">No data available</td>
                                                                        </tr>
                                                                        <?php
                                        }
                                        ?>

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <br/>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                        <?php
                        $items = $this->properties_model->getPropertySpecification($property->id,
                                                    $specifications->id) != null;
                        if($item)
                        {

                            ?>
                           
                                <section id="section-id-1507611930" class="sppb-section rooms-suits" style="background: #f3f3f3;">
                                    <div class="sppb-row-container">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h2 class="sppb-title-heading myt1">Specifications</h2>
                                            <div class="underline">&nbsp;</div>
                                        </div>

                                        <div class="sppb-row spe-head">
                                            <div class="row">
                                                <div class="panel-group cust-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default col-md-6">
                                                        <!----------start--------------->
                                                        <?php
                                                        $number=1;
                                                        foreach ($specifications as $k => $specification) {
                                                            if(($number%2==0))
                                                            {

                                                        if (($items = $this->properties_model->getPropertySpecification($property->id,
                                                                $specification->id)) != null) {

                                                            ?>
                                                            <div class="panel-heading" role="tab" id="heading<?=$this->numbertowordconvertsconver->convert_number($number)?>" style="border-style: groove;">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#collapse<?=$this->numbertowordconvertsconver->convert_number($number)?>" aria-expanded="false"
                                                                    aria-controls="collapse<?=$this->numbertowordconvertsconver->convert_number($number)?>"
                                                                    class="accordion-toggle">
                                                                        <?= $specification->name ?>
                                                                        <img src="<?= base_url('assets/img/down.png') ?>" class="down-arrow">
                                                                    </a>
                                                                 </h4>
                                                            </div>
                                                            <div id="collapse<?=$this->numbertowordconvertsconver->convert_number($number)?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$this->numbertowordconvertsconver->convert_number($number)?>" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">

                                                                    <p>
                                                                        <?php
                                                                            $s=1;
                                                                        foreach (explode(',', $items) as $item) {
                                                                            ?>
                                                                                                    <?= $s.". ".$item ."<br />"?>

                                                                                                        <?php
                                                                            $s++;
                                                                        }
                                                                        ?>
                                                                    </p>
 
                                                                </div>
                                                            </div>
                                                            <?php
                                                            }
                                                            }
                                                                $number++;
                                                            }
                                                            ?>
                                                                        <!--------------end----------------------->
                                                    </div>

                                                
                                                    <div class="panel panel-default col-md-6">
                                                                <!----------start--------------->
                                                                <?php
                                                            $number=1;
                                                            foreach ($specifications as $k => $specification) {
                                                                if(($number%2>0))
                                                                {

                                                                if (($items = $this->properties_model->getPropertySpecification($property->id,
                                                                $specification->id)) != null) {

                                                            ?>
                                                            <div class="panel-heading" role="tab" id="heading<?=$this->numbertowordconvertsconver->convert_number($number)?>" style="border-style: groove;">
                                                                <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse"
                                                               data-parent="#accordion"
                                                               href="#collapse<?=$this->numbertowordconvertsconver->convert_number($number)?>" aria-expanded="false"
                                                               aria-controls="collapse<?=$this->numbertowordconvertsconver->convert_number($number)?>"
                                                               class="accordion-toggle">
                                                                <?= $specification->name ?>
                                                                <img src="<?= base_url('assets/img/down.png') ?>" class="down-arrow">
                                                            </a>
                                                        </h4>
                                                            </div>
                                                            <div id="collapse<?=$this->numbertowordconvertsconver->convert_number($number)?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$this->numbertowordconvertsconver->convert_number($number)?>" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">

                                                                    <p>
                                                                        <?php
                                                             $s=1;
                                                            foreach (explode(',', $items) as $item) {
                                                                ?>
                                                                                        <?= $s.". ".$item ."<br />"?>

                                                                                            <?php
                                                                $s++;
                                                            }
                                                            ?>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <?php
                                                            }
                                                                }
                                                                    $number++;
                                                                }
                                                                ?>
                                                                <!--------------end----------------------->
                                                    </div>

                                                </div>
                                            </div>

                                            
                                        </div>

                                    </div>
                                </section>
 <?php
                        }


                        ?>
                                <section id="section-id-1507611991" class="sppb-section i-section resort-discount wow">
                                    <div class="overlay" style="padding-bottom: 50px;">
                                        <div class="" style="width: 94%; margin: 0px auto;">
                                            <div class="sppb-row">

 
                                                <div class="sppb-col-sm-12 amenities-icon" style="color: #fff;text-align: center;">
                                                    <div class="sppb-section-title sppb-text-center">
                                                        <h2 class="sppb-title-heading myt delay-09s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                                                            <?= $property->title ?> Amenities</h2>
                                                        <div class="underline2">&nbsp;</div>
                                                    </div>
                                                    <div class="sppb-empty-space  clearfix" style="height: 10px;"></div>

                            <div class="row marginT20">
                                <div class="col-md-12">
                                    <div class="amenities" style="width: 100%"> 
                                                         
                                         
                                            <?php
                                        if (isset($property->amenities) && $property->amenities) {
                                            foreach ($property->amenities as $amenity) {
                                                ?>
                                                    <div class="col-md-2 col-xs-4">
                                                        <div class="i-holder">
                                                            <?php
                                                        if ($amenity->image) {
                                                            ?>
                                                            <img class="animated fadeInUp wow"  alt="<?= $amenity->alt_title ?>"
                                                                    title="<?=$amenity->image_desc?>"
                                                                  
                                                                  src="<?= base_url('uploads/amenities/' . $amenity->image) ?>">
                                                                     <?php
                                                        } 
                                                        else {
                                                            ?>
                                                            <img class="animated fadeInUp wow" alt="<?= $amenity->image ?>"
                                                                 src="https://placehold.it/58x58">
                                                            <?php
                                                        }
                                                        ?>
                                                            <p class="animated fadeInUp wow"><?= ucwords($amenity->name) ?></p>
                                                        </div>
                                                    </div>
                                                           <?php
                                            }
                                        }
                                         else {
                                                           $this->load->view('amenities');
                                                        }
                                        ?>

                                                </div>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="section-id-1507611941" class="sppb-section  resort-title-heading wow">
                                    <div class="sppb-row-container">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h2 class="sppb-title-heading delay-09s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Gallery</h2>
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

                                                                                <li role="presentation" class="active"><a href="#elevation" aria-controls="profile" role="tab" data-toggle="tab">Elevation</a>
                                                                                </li>

                                                                                <?php if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                                                 'property_master_plans')))
    {
        ?>
                                                                                    <li role="presentation"><a href="#masterplan" aria-controls="profile" role="tab" data-toggle="tab">Master Plan</a>
                                                                                    </li>
                                                                                    <?php } 
                                                                                     if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                                                      'property_floor_plans')))
    {
                                                                            ?>
                                                                                        <li role="presentation"><a href="#floorplans"  aria-controls="profile" role="tab" data-toggle="tab">Floor Plans</a>
                                                                                        </li>

                                                                                        <?php
                                                                             }
                                                                             ?>
                                                                            </ul>

                                                                            <!-- Tab panes -->
                                                                            <div class="tab-content delay-09s animated wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">

                                                                                <div role="tabpanel" class="tab-pane fade in active" id="elevation">

                                                                                    <?php
                                                                                     if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                                                       'property_elevations')) != null) {
                                                                                          foreach ($images as $i => $image) {
                                                                                            ?>
                                                                                        <div class="latest-post sppb-col-sm-3">
                                                                                            <div class="latest-post" style="background-image: url(<?= base_url($image->image) ?>);">
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
                                                                               
                                                                                <div role="tabpanel" class="tab-pane fade in" id="masterplan">

                                                                                    <?php
                                                                                 if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                                                  'property_master_plans'))) {

                                                                                   foreach ($images as $i => $image) {
                                                                                    ?>

                                                                                        <div id="gallery1">
                                                                                            <img alt="master Plan" src="<?= base_url($image->image) ?>" data-image="<?= base_url($image->image) ?>" alt="<?=$property->master_alt?>" title="<?= $property->master_desc ?>" data-description="">

                                                                                        </div>

                                                                                        <?php
                                                }
                                            }

                                            ?>

                                                                                </div>

                                                                                <div role="tabpanel" class="tab-pane fade in" id="floorplans">

                                                                                    <?php
                                            if (($images =                                                 $this->properties_model->getWhere(array('property_id' => $property->id),
                                                        'property_floor_plans'))) {
                                                ?>
                                                                                        <?php
                                                foreach ($images as $i => $image) {
                                                    ?>
                                                                                            <div class="latest-post sppb-col-sm-3">
                                                                                                <div class="latest-post" style="background-image: url(<?= base_url($image->image) ?>);" alt="<?=$property->master_alt?>" title="<?= $property->master_desc ?>">
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
                                    <div class="clearfix"></div>
                                    <div class="mainContentWidth container">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="clearfix"></div>
                                                <br/>
                                                <br/>
                                                <div class="col-md-12">
                                                    <div class="builder_info">
                                                        <h4 class="text-center">Similar Properties</h4>
                                                        <div class="clearfix"></div>
                                                        <br>

                                                        <hr>

                                                        <div class="row">

                                                            <?php

                            if (($projects = $this->home_model->getsameLocationProjects($property->location_id, $property->id,
                                    3)) != null) {
                                        ?>
                                                                <div class="col-md-12">
                                                                    <h4>Similar Properties Near Your Search Location </h4>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <br>
                                                                <?php
                                foreach ($projects as $project) {
                                    ?>
                                                                    <a href="<?= site_url(url_title($project->city_name) . " / " . (url_title($project->area)) . "/$project->slug/") ?>"
                                       class="builder_projects">
                                        <div class="col-md-4">
                                          <div class="property-list">
                                               <img src="<?= base_url("uploads/$project->slug/$project->image") ?>"
                                                 class="img-responsive" style="padding: 0;width: 100%;background-position: 50% 50%;position: relative;height:260px;" alt="<?=$project->alt?>"  
                                                 title="<?=$project->image_desc?>"> 
                                                <div class="builder_proj">
                                                    <h4><?= $project->title ?></h4>
                                                    <span><?= $project->location ?></span>
                                                    <p><?= $project->prop_type . ' / ' . $project->property_status ?></p>
                                                    <h4>
                                                        <?php
                                                        if ($this->properties_model->hasPriceRequest($project->id->id)) {
                                                            echo "Price on Request";
                                                        } else {
                                                            ?>
                                                            &#8377; <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $project->id),
                                                                    'property_flat_types', null,
                                                                    'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                            - <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $project->id),
                                                                    'property_flat_types', null,
                                                                    'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                            <?php
                                                        }
                                                        ?>
                                                    </h4>
                                                    <a href="<?= site_url(url_title($project->city_name) . "/" . (url_title($project->area)) . "/$project->slug/") ?>" class="contact_builder">VIEW PROPERTY</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                                <?php
                                }
                            } 
                            elseif (($projects = $this->home_model->getBuilderProjects($property->builder_id, $property->id,
                                    3)) != null) {
                                        ?>
                                                    <div class="col-md-12">
                                                        <h4>Builder project available with us</h4>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                    <?php
                                foreach ($projects as $project) {
                                    ?>
                                                        <a href="<?= site_url(url_title($project->city_name) . " / " . (url_title($project->area)) . "/$project->slug/") ?>"
                                       class="builder_projects">
                                        <div class="col-md-4">
                                        <div class="container prop-img">
                                            <img src="<?= base_url("uploads/$project->slug/$project->image") ?>"  style="padding: 0; padding: 0px;"
                                                 class="img-responsive" style="padding: 0; " alt="<?=$project->alt?>"
                                                 title="<?=$project->image_desc?>"> 
                                          </div>       

                                            <div class="builder_proj">
                                                <h4><?= $project->title ?></h4>
                                                <span><?= $project->location ?></span>
                                                <p><?= $project->prop_type . ' / ' . $project->property_status ?></p>
                                                <h4>
                                                    <?php
                                                    if ($this->properties_model->hasPriceRequest($project->id->id)) {
                                                        echo "Price on Request";
                                                    } else {
                                                        ?>
                                                        &#8377; <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $project->id),
                                                                'property_flat_types', null,
                                                                'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                        - <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $project->id),
                                                                'property_flat_types', null,
                                                                'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                        <?php
                                                    }
                                                    ?>
                                                </h4>
                                                <a href="<?= site_url(url_title($project->city_name) . "/" . (url_title($project->area)) . "/$project->slug/") ?>" class="contact_builder">VIEW PROPERTY</a>
                                            </div>
                                        </div>
                                        </a>
                                        <?php
                                }
                            }else {
                                ?>
                                            <div class="alert alert-info text-center">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                                </button>
                                                <strong><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Currnelty no
                                        property listing available from <?= $property->builder ?>.</strong>
                                            </div>
                                            <?php
                            }
                            ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                </div>
            </div>
    </div>

    </section>
    <br/>
    </div>

    </div>
    </div>

    </section>
<?php
if($property->usp!='')
{
    ?>

      <section id="section-id-1507611944" class="sppb-section wow">
                                   <div class="container">

                                    <div class="sppb-row">
                                        <div class="sppb-section-title sppb-text-center">
                                            <h2 class="sppb-title-heading myt1 delay-09s animated wow fadeInDown animated"
                                                style="visibility: visible; animation-name: fadeInDown;">Project Highlights</h2>

                                            <div class="underline">&nbsp;</div>
                                        </div>
                                        <br>
                                          <br>
                                        <div class="sppb-col-sm-12">
										
                                        <?=$property->usp;?>
                                        </p>

                                       </div>
										<div class="col-md-12"><br/>
                                    <center><a class="btn interested fix-link i-am"><img src="<?=base_url('assets/images/enquiry.png');?>" style="margin: 0px auto; margin-bottom: 20px;"></a>
										    <p style="margin: 0;color: #fff;font-size: 14px;">
                                            </p></center><br/>
                                                </div>

                                    </div> 
                                </div>

                            </section>
                              <?php
}
?>

    <section id="section-id-1507611947" class="sppb-section resort-title-heading resort-location-wrapper resort-discount wow">
        <div class="overlay" style="padding-bottom: 50px;">
            <div class="sppb-row-container">
                <div class="sppb-text-center">
                    <h2 class="sppb-title-heading myt2 delay-09s animated wow fadeInDown animated" style="color: #fff;margin-bottom: 15px; visibility: visible; animation-name: fadeInDown;">
                                                    Contact Us</h2>
                    <div class="underline2">&nbsp;</div>
                </div>
                <br/>
                <center>
                    <div class="col-md-12">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <a href="https://twitter.com/intent/tweet?screen_name=fbptweets&ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Tweet to @fbptweets</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">

                            <script src="https://apis.google.com/js/platform.js"></script>

                            <div class="g-ytsubscribe" data-channelid="UCGr-on8k7dRMKBFW-X2G05A" data-layout="default" data-count="hidden"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="fb-like" data-href="https://www.facebook.com/fullbasketpropertypage/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="false"></div>
                    </div>
                </center>
                <div class="clearfix"></div>
                <p class="foo-txt">For More Information Please Call</p>
                <p class="footer-call"><i class="fa fa-phone"></i>
                    <a href="tel:9019011888">9019011888</a>
                </p>
                <a href="https://api.whatsapp.com/send?phone=918342063684&text=Hi Team FBP, I would be interested in%20<?= $property->title ? $property->title : '' ?>%20please%20send%20me%20the%20details" target="_blank">
                    <p class="foo-txt"><img src="<?= base_url('assets/banner_patch/whatsapp.png') ?>" style="margin: 0px auto;">Get Details by Whatsapp</p>
                </a>
                <br/>
                <br/>
                <div class="sppb-row">
                    <?php
    if($property->map)
    {
       ?>
                        <div class="sppb-col-sm-6" style="background: #f1f1f1;">
                            <div class="patch-wrap">
                                <h5 class="nearby-head">Location</h5>
                                <a class="map-btn" href="<?= base_url(" uploads/$property->slug/map/$property->map") ?>">
                                                        <img src="<?= base_url("uploads/$property->slug/map/$property->map") ?>" class="small-map" alt="<?= $property->location_alt?>">
                                                        <div class="middle">
                                                            <div class="text">View Large</div>
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

                                <div id="column-id-1507611950" class="sppb-column  office-location-active">
                                    <div class="sppb-column-addons">
                                        <div id="sppb-addon-1507611951" class="clearfix">
                                            <div class="sppb-addon-office-location-wrapper  active">
                                                <form id="contact-form" action="" name="contact-form" method="POST" onsubmit="return save_landing_pageinfo('contact-form');">
                                                    <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
                                                    <div class="contact form col-md-12">
                                                        <div class="input-group">
                                                            <center><img  src="<?=base_url('assets/images/snp.png');?>" alt="#SochoNahiPucho" /></center>
                                                        </div>

                                                    </div>
                                                    <input type="hidden" name="property_id" value="<?= $property->id ?>">
                                                    <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
                                                    <div class="form-group col-md-12">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user form-ico" aria-hidden="true"></i></div>
                                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                                        </div>
                                                        <label for="fname" generated="true" class="error"></label>
                                                    </div>
                                                    <div class="form-group col-md-12">

                                                        <input type="tel" placeholder="Phone*" name="phone" class="phone validate" id="contctform-phone3" required>
                                                        <input type="hidden" name="countrycode" id="cplusm" value="">
                                                        <span class="hide valid-msg">✓ Valid</span>
                                                        <span class="hide error-msg">Invalid number</span>

                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                                            <input type="email" class="form-control" name="email" placeholder="Email ID*">
                                                        </div>
                                                        <label for="email" generated="true" class="error"></label>
                                                    </div>
                                                    <div class="form-group col-md-12" style="height: initial;">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
                                                            <textarea class="form-control" rows="3" name="sugg" placeholder="Your Message"></textarea>

                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-default form-btn">Submit
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
    <?php $this->load->view('footer');?>

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
                    <a href="tel:9019011888" class="fix-link callme"><i class="fa fa-phone f-icon" aria-hidden="true"></i>
                    CALL NOW</a>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 pd0">
                    <!-- <button class="btn interested fix-link i-am"><i class="fa fa-envelope"></i> ENQUIRE NOW</button> -->
                    <button class="btn fix-link i-am"><i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=918342063684&text=Hi Team FBP, I would be interested in%20<?= $property->title ? $property->title : '' ?>%20please%20send%20me%20the%20details" target="_blank"><font color=white> Whatsapp</font></a></button>
                </div>
            </div>
        </div>
        <div class="modal fade in" tabindex="-1" role="dialog" id="price-model" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                        <h4 class="modal-title">Floor Plan</h4>
                    </div>
                    <div class="modal-body">
                        <p>Please enter the details below to get the floor plan information.</p>
                        <form id="price-popup" action="" name="price-popup" method="POST" novalidate onsubmit="return save_landing_pageinfo('price-popup');">
                            <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
                            <div class="form-group col-md-12 pd">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">

                                </div>
                                <label for="p_fname" generated="true" class="error"></label>
                            </div>
                            <div class="form-group col-md-12 pd">
                                <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone9" required>

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
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- ============================================= -->

        <!-- ================ download popup ==================== -->

        <div class="modal fade in" tabindex="-1" role="dialog" id="download-model" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                        <h4 class="modal-title">Download Brochure</h4>
                    </div>
                    <div class="modal-body">
                        <p>Please enter the details below to get the Brochure.</p>
                        <form id="download-popup" action="" name="download-popup" method="POST" novalidate="novalidate" onsubmit="return save_landing_pageinfo('download-popup');">
                            <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
                            <div class="form-group col-md-12 pd">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">

                                </div>
                                <label for="p_fname" generated="true" class="error"></label>
                            </div>
                            <div class="form-group col-md-12 pd">
                                <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone8" required>

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
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- ============================================= -->

        <!-- ================ i am ==================== -->

        <div class="modal fade in" tabindex="-1" role="dialog" id="interested" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                        <h4 class="modal-title"><?= $property->title ? $property->title : '' ?></h4>
                    </div>
                    <div class="modal-body">
                        <p>Please enter the details below to get the detailed information.</p>
                        <form id="float-form" action="" name="price-popup" method="POST" novalidate onsubmit="return save_landing_pageinfo('float-form');">
                            <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
                            <div class="form-group col-md-12 pd">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">

                                </div>
                                <label for="p_fname" generated="true" class="error"></label>
                            </div>
                            <div class="form-group col-md-12 pd">
                                <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone7" required>
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
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <!-- Floorplan -->
        <div class="modal fade in" tabindex="-1" role="dialog" id="floorplan" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                        <h4 class="modal-title">Download Floorplan</h4>
                    </div>
                    <div class="modal-body">
                        <p>Please enter the details below to get the detailed information.</p>
                        <form id="float-form" action="" name="price-popup" method="POST" novalidate onsubmit="return save_landing_pageinfo('float-form');">
                            <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
                            <div class="form-group col-md-12 pd">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">

                                </div>
                                <label for="p_fname" generated="true" class="error"></label>
                            </div>
                            <div class="form-group col-md-12 pd">
                                <input type="tel" placeholder="Phone*" name="phone" class="validate" id="contctform-phone7" required>
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
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!------------------------------------------submit Property------------------------------------------------->
        <div class="modal fade" id="submitContact">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= site_url('home/send') ?>" method="post">
                        <input type="hidden" name="city" value="<?=$this->uri->segment(1);?>">
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
                                        <input style="border-radius: 0" class="form-control" type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div class="input-group">
                                        <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                                        <input style="border-radius: 0" class="form-control" type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Property Location</label>
                                    <div class="input-group">
                                        <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                        <input style="border-radius: 0" class="form-control" type="text" name="property_location" placeholder="Property Location" required>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Property Type</label>
                                    <div class="input-group">
                                        <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                                        <input style="border-radius: 0" class="form-control" type="text" name="property_type" placeholder="Property Type" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Area</label>
                                    <div class="input-group">
                                        <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-area-chart" aria-hidden="true"></i></span>
                                        <input style="border-radius: 0" class="form-control" type="text" name="area" placeholder="Area" required>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Property Status</label>
                                    <div class="input-group">
                                        <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                        <input style="border-radius: 0" class="form-control" type="text" name="property_status" placeholder="Property Status" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Preferred Time of Contact</label>
                                    <div class="input-group">
                                        <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        <input style="border-radius: 0" class="form-control" type="text" name="preferred_contact_time" placeholder="Preferred Time of Contact" required>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <center>
                                        <div class="g-recaptcha" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                                    </center>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="modal-footer">
                            <button style="border-radius: 0" type="button" class="btn btn-flat btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close
                            </button>
                            <button style="border-radius: 0" type="submit" class="btn btn-flat btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-------------------------------------------------------------------------------------------------------------------------------->

        <!-- ============================================= -->

        <!-- ================ I'm interested ==================== -->

        <button class="btn btn-danger interested hidden-xs">Enquire</button>
        <!-- ==================================== -->
        <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/jquery.min.js"></script>

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
        <script type='text/javascript' src='<?= base_url() ?>assets/property/unitegallery/js/unitegallery.min.js'></script>

        <script type='text/javascript' src='<?= base_url() ?>assets/property/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js'></script>
        <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ab1fa10a63ccf001315b0bf&product=inline-share-buttons"></script>
        <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>assets/property/lightbox/light-box5152.js?ver=1.0"></script>
        <script src="<?= base_url() ?>assets/property/intl-tel-input/js/intlTelInput5152.js?ver=1.0"></script>
        <script src="<?= base_url() ?>assets/property/js/jquery.validate5152.js?ver=1.0"></script>
        <script src="<?= base_url() ?>assets/property/js/mobilevalidate5152.js?ver=1.0"></script>
        <script src="<?= base_url() ?>assets/property/js/vai5152.js?ver=1.0"></script>
        <script src="<?= base_url() ?>assets/property/js/cookie5152.js?ver=1.0"></script>
        <script src="<?= base_url() ?>assets/property/js/popout5152.js?ver=1.0"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/property/js/wow.min5152.js?ver=1.0"></script>

        <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/slick.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/select-app.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105570977-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-105570977-1');
        </script>

        <script type="text/javascript">
            //document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
        <script type="text/javascript">
            window.onbeforeunload = function(e) {
                // Cancel the event
                e.preventDefault();

                // Chrome requires returnValue to be set
                e.returnValue = 'Really want to quit the game?';
            };

            //Prevent Ctrl+S (and Ctrl+W for old browsers and Edge)
            document.onkeydown = function(e) {
                e = e || window.event; //Get event

                if (!e.ctrlKey) return;

                var code = e.which || e.keyCode; //Get key code

                switch (code) {
                    case 83: //Block Ctrl+S
                    case 87: //Block Ctrl+W -- Not work in Chrome and new Firefox
                    case 67:
                    case 88:

                        e.preventDefault();
                        e.stopPropagation();
                        break;
                }
            };
        </script>

        <script>
            $(document).ready(function() {
                var showChar = 2000;
                var ellipsestext = "...";
                var moretext = "more";
                var lesstext = "less";
                $('.more').each(function() {
                    var content = $(this).html();

                    if (content.length > showChar) {

                        var c = content.substr(0, showChar);
                        var h = content.substr(showChar - 1, content.length - showChar);

                        var html = c + '<span class="moreelipses">' + ellipsestext + '</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                        $(this).html(html);
                    }

                });

                $(".morelink").click(function() {
                    if ($(this).hasClass("less")) {
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
        </script>

        <script type="text/javascript">
            $(document).ready(function($) {
                var $slideFullwidth = $("#sppb-addon-1507611917 .slide-fullwidth");

                // Autoplay
                var $autoplay = $slideFullwidth.attr("data-sppb-slide-ride");
                if ($autoplay == "true") {
                    var $autoplay = true;
                } else {
                    var $autoplay = false
                };

                // controllers
                var $controllers = $slideFullwidth.attr("data-sppb-slide-controllers");
                if ($controllers == "true") {
                    var $controllers = true;
                } else {
                    var $controllers = true
                };

         
            });
        </script>
        

        <script>
            jQuery(document).ready(function($) {

               
                var telInput = $(".validate"),
                    errorMsg = $(".error-msg"),
                    validMsg = $(".valid-msg");
                // initialise plugin
                telInput.intlTelInput({
                    initialCountry: "in",
                    utilsscript: "<?= base_url() ?>assets/property/intl-tel-input/js/utils.js",
                    separateDialCode: "true"
                });
                var reset = function() {
                    $(this).removeClass("error");
                    $(this).parent().parent().find(errorMsg).addClass("hide");
                    $(this).parent().parent().find(validMsg).addClass("hide");
                };
                // on blur: validate
                telInput.blur(function() {
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
                telInput.on("countrychange", function(e, countryData) {
                    $(this).removeClass("error");
                    $(this).parent().parent().find(errorMsg).addClass("hide");
                    $(this).parent().parent().find(validMsg).addClass("hide");

                    var elm = e.currentTarget.id + '-cc';
                    $('#' + elm).val('+' + countryData.dialCode);
                    $("#cplusm").val('+' + countryData.dialCode);

                });

                $("#calling_code6").val($("#contctform-phone6").intlTelInput("getSelectedCountryData").dialCode);
                $("#contctform-phone6").on("countrychange", function(e, countryData) {
                    $("#calling_code6").val($("#contctform-phone6").intlTelInput("getSelectedCountryData").dialCode);
                });

                $("#calling_code7").val($("#contctform-phone7").intlTelInput("getSelectedCountryData").dialCode);
                $("#contctform-phone7").on("countrychange", function(e, countryData) {
                    $("#calling_code7").val($("#contctform-phone7").intlTelInput("getSelectedCountryData").dialCode);
                });

                $("#calling_code2").val($("#contctform-phone2").intlTelInput("getSelectedCountryData").dialCode);
                $("#contctform-phone2").on("countrychange", function(e, countryData) {
                    $("#calling_code2").val($("#contctform-phone2").intlTelInput("getSelectedCountryData").dialCode);
                });

                $("#calling_code3").val($("#contctform-phone3").intlTelInput("getSelectedCountryData").dialCode);
                $("#contctform-phone3").on("countrychange", function(e, countryData) {
                    $("#calling_code3").val($("#contctform-phone3").intlTelInput("getSelectedCountryData").dialCode);
                });

                $("#calling_code8").val($("#contctform-phone8").intlTelInput("getSelectedCountryData").dialCode);
                $("#contctform-phone8").on("countrychange", function(e, countryData) {
                    $("#calling_code8").val($("#contctform-phone8").intlTelInput("getSelectedCountryData").dialCode);
                });

                $("#calling_code9").val($("#contctform-phone9").intlTelInput("getSelectedCountryData").dialCode);
                $("#contctform-phone9").on("countrychange", function(e, countryData) {
                    $("#calling_code9").val($("#contctform-phone9").intlTelInput("getSelectedCountryData").dialCode);
                });

            });
        </script>
        <script>
            jQuery(document).ready(function($) {
                var $gallery = $('.l-box a').simpleLightbox();
                $('.map-btn').simpleLightbox();
            });
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                Delete_Cookie('formfilled');
                // ---------------for model only-----
                $(".price-click").click(function() {
                    $('#price-model').modal('show');
                });

                // ---------------for model only-----
                $("#down-brochure").click(function() {
                    $('#download-model').modal('show');
                });

                $(".interested").click(function() {
                    $('#interested').modal('show');
                });

                $(".floorplan").click(function() {
                    $('#floorplan').modal('show');
                });

            });
        </script>
        <script>
            // jQuery(document).ready(function ($) {
            //     // Add smooth scrolling to all links
            //     $(".m-link").on('click', function (event) {

            //         // Make sure this.hash has a value before overriding default behavior
            //         if (this.hash !== "") {
            //             // Prevent default anchor click behavior
            //             event.preventDefault();

            //             // Store hash
            //             var hash = this.hash;

            //             // Using jQuery's animate() method to add smooth page scroll
            //             // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            //             $('html, body').animate({
            //                 scrollTop: $(hash).offset().top
            //             }, 800, function () {

            //                 // Add hash (#) to URL when done scrolling (default click behavior)
            //                 // window.location.hash = hash;
            //             });
            //         } // End if
            //     });
            // });
        </script>

        <script type="text/javascript">
            function save_landing_pageinfo(elm) {
                jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', true);
                setTimeout(function() {
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
                        function() {
                            submitForm(elm);
                            if (elm == 'download-popup') {
                                document.getElementById('down-brochure-1').click();
                            }
                        },
                        function(respone) {
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
        <script type="text/javascript">
        
            jQuery(document).ready(function() {
                jQuery("#gallery").unitegallery({
                    tile_width: 350, //tile width
                    tile_height: 230,
                    gallery_theme: "tilesgrid", //choose gallery theme (if more then one themes includes)
                    gallery_width: "100%",
                    tile_enable_border: false,
                    tile_overlay_opacity: 0.6, //tile overlay opacity
                    tile_overlay_color: "#53ABBD"
                });
                jQuery("#gallery1").unitegallery({
                    tile_width: 350, //tile width
                    tile_height: 230,
                    gallery_theme: "tilesgrid", //choose gallery theme (if more then one themes includes)
                    gallery_width: "100%",
                    tile_enable_border: false,
                    tile_overlay_opacity: 0.6, //tile overlay opacity
                    tile_overlay_color: "#53ABBD"
                });
            });
        </script>
        <script type="text/javascript">
        var screenSize=0;
        var tabScreenSize=0;
           	jQuery(document).ready(function () {
    jQuery(document).on("scroll", onScroll);
    
    //smoothscroll
    jQuery('a[href^="#"]').on('click', function (e) {
        
        e.preventDefault();
        jQuery(document).off("scroll");

        if(jQuery(this).data('parent')=="#accordion"){
            
            var coll= jQuery(this).attr('aria-controls')
            setTimeout(() => {
                if(jQuery(this).attr('aria-expanded')=="true"){
                    tabScreenSize=screenSize;
                jQuery(this).attr('aria-expanded',false)
                
            }  
            }, 500);
            
            if(jQuery(this).attr('aria-expanded')=='false'&& jQuery("#"+coll).hasClass("in"))
            {
                setTimeout(() => {
                    
                    jQuery(this).addClass('collapsed')
                    $("#"+coll).removeClass('in');
                    $("body, html").animate({ 
                       scrollTop: tabScreenSize 
                      }, 300);
                   // window.scrollTo(0,tabScreenSize);
                }, 1000);
            }
                
        }

        
        
        jQuery('li').each(function () {
            jQuery(this).removeClass('current-item active');
        })
        jQuery(this).parent('li').addClass('current-item active');
         
 
            //check presentation role activation
            if(jQuery(this).parent('li').attr('role')=="presentation"){
                var divID=jQuery(this).attr('href')
              jQuery(".tab-pane").removeClass('active');
              jQuery(""+divID).addClass('active');
            }
               
               


        var target = this.hash,
            menu = target;
        $target = jQuery(target);
        jQuery('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
           // window.location.hash = target;
            jQuery(document).on("scroll", onScroll);
        });
    });
});

            function onScroll(event) {
                var scrollPos = jQuery(document).scrollTop();
                screenSize=scrollPos;
                jQuery('.sp-megamenu-parent a').each(function() {

                    var currLink = jQuery(this);
                    // console.log(currLink);
                    var refElement = jQuery(currLink.attr("href"));
                    // console.log(scrollPos)
                    if (scrollPos < 430) {
                        jQuery('.sp-megamenu-parent li').removeClass("current-item active");
                        jQuery('.sp-megamenu-parent li')[0].addClass("current-item active");
                    }
                    if(refElement.position()!=undefined){

                    
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        // console.log(refElement);
                        jQuery('.sp-megamenu-parent li').removeClass("current-item active");
                        jQuery(this).parent('li').addClass("current-item active");
                    } else {

                    }
                }
                });
            }
        </script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5c877834c37db86fcfcd4ad0/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

</body>

</html>