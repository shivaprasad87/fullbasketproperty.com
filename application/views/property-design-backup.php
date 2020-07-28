<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $property->title ? $property->title : '' ?></title>
    <meta name="description" content="<?= substr(strip_tags($property->meta_desc), 0, 1000) ?>"/>
    <meta name="keywords" content="<?= str_replace(' ', ' ', substr(strip_tags($property->meta_keywords), 0, 1000)) ?>"/>
    <meta name="title" content="<?= str_replace(' ', ' ', substr(strip_tags($property->meta_title), 0, 1000)) ?>"/>
    <!--    <meta property="fb:admins" content="240978709438113"/>-->
    <meta property="og:url" content="<?= current_url() ?>"/>
    <meta property="og:title" content="<?= $property->title ? $property->title : '' ?>"/>
    <meta property="og:site_name" content="Fullbasket Property"/>
    <meta property="og:description" content="<?= substr(strip_tags($property->description), 0, 1000) ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?= base_url("uploads/$property->slug/$property->image") ?>"/>
    <meta property="og:locale" content="en_us"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@Fullbasketproperty"/>
    <meta name="twitter:title" content="<?= $property->title ? $property->title : '' ?>"/>
    <meta name="twitter:description" content="<?= substr(strip_tags($property->description), 0, 1000) ?>"/>
    <meta name="twitter:image" content="<?= base_url("uploads/$property->slug/$property->image") ?>"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?= site_url('') ?>assets/img/logo.png"/>
    <link rel="canonical" href="<?= current_url() ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="<?= base_url('assets/360assets') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?= base_url('assets/360assets') ?>/css/bootstrap-select.min.css">
    <link href="<?= base_url('assets/360assets') ?>/css/common.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/360assets') ?>/css/detail.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/360assets') ?>/css/slick.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/360assets') ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">

    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/slick.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/common.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/property.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/select-app.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/common-enquiry.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/ios-orientationchange-fix.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript"src="//platform-api.sharethis.com/js/sharethis.js#property=5ab1fa10a63ccf001315b0bf&product=inline-share-buttons"></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122242165-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122242165-1');
</script>
    <style>
        .builder_projects,
        .builder_projects:hover,
        .builder_projects:active {
            text-decoration: none;
            outline: none;
            color: initial;
        }

        .interested_unit {
            border: 1px solid rgba(170, 170, 170, 0.69);
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 8px 3px rgba(0, 0, 0, 0.2);
            padding: 8px 12px;
            text-align: center;
            line-height: 2;
            cursor: pointer;
            margin-top: 5px;
            width: 45%;
            float: left;
            margin-right: 3px;
        }

        .interested_unit h3 {
            font-size: 14px;
            font-weight: bold;
        }

        input[type='checkbox']:checked + .interested_unit {
            background-color: #00a65a;
            color: #fff !important;
        }

        .navCont {
            border-bottom: none !important;
        }

        .f-breadcrumb {
            margin-left: 2%;
            margin-bottom: 45px;
        }

        .f-breadcrumb a,
        .f-breadcrumb a:hover,
        .f-breadcrumb span {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }

        .f-breadcrumb span {
            color: #e5e5e5;
        }

        #test-of-chk {
            z-index: 99999 !important;
        }
    </style>
</head>
<body class="modal-openPadding" data-spy="scroll" data-target=".navbar" data-offset="50">

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

<div class="wrapper">
    <aside data-sidebar>
        <div class="menubar">
            <ul>
                <li><a target="_blank" href="<?= site_url('') ?>">Home</a></li>
                <li><a target="_blank" href="<?= site_url('') ?>listing">Properties</a></li>
                <li><a target="_blank" href="<?= site_url('') ?>about">About</a></li>
                <li><a target="_blank" href="<?=site_url('vastu')?>">Vastu</a></li>
                <li><a target="_blank" href="<?=site_url('disclaimer')?>">NRI Corner</a></li>
                <li><a target="_blank" href="<?= site_url('') ?>blog">Blogs</a></li>
                <li><a target="_blank" href="<?=site_url('careers')?>">Careers</a></li>
                <li><a target="_blank" href="<?= site_url('') ?>contact">Contact</a></li>
                <li><a target="_blank" href="<?=site_url('testimonials')?>">Testimonials</a></li>
                <li><a target="_blank" href="<?=site_url('privacy-policy')?>">Terms</a></li>
                    <li><a target="_blank" href="<?=site_url('disclaimer')?>">Disclaimer</a></li>
                    
                <li><a target="_blank" href="<?= site_url('user/register') ?>">Signup</a></li>


            </ul>
            <a href="#" class="hideBtn" data-sidebar-button><i class="fa fa-times"></i></a></div>


        <div class="divider side_menu_link"><a target="_blank" class="menu_fb_bg"
                                               href="#"><i
                        class="fa fa-facebook"></i></a> <a target="_blank" class="menu_tw_bg"
                                                           href="#"><i
                        class="fa fa-twitter"></i></a> <a target="_blank" class="menu_gp_bg"
                                                          href="#"><i
                        class="fa fa-google-plus"></i></a> <a target="_blank" class="menu_pn_bg"
                                                              href="#"><i
                        class="fa fa-pinterest"></i></a></div>


    </aside>


    <div class="lightBgdrop1">
        <div class="posR img--big">


            <div class="topdetail--bg"></div>

            <img class="big--im" alt="<?= $property->alt ? $property->alt : '' ?>"
                 title="<?= $property->image_desc ? $property->image_desc : '' ?>"
                 src="<?= base_url("uploads/$property->slug/$property->image") ?>" height="493"/>
            <div class="shwH--bud"><a href="#sticky_navigation" class="scrollBtn"><!--<i class="fa fa-angle-down"
                                                                                     aria-hidden="true"></i>--></a></div>

            <div class="bckStp"></div>


            <div class="fixImage">
                <div class="mainContentWidth container">
                    <div class="row hidden-xs">
                        <div class="col-md-3 col-xs-12 changehomeLogo paddingLR0">
                            <h4>
                                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?= $property->location . ', ' . $property->city_name ?>
                            </h4>
                            <h4><i>&emsp;</i>Starting From</h4>
                            <h2><i>&nbsp;</i>
                                <?php
                                if ($this->properties_model->hasPriceRequest($property->id)) {
                                    echo "Price on Request";
                                } else {
                                    ?>
                                    <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                                            'property_flat_types', null,
                                            'MIN(total) as amount')) != null) ? '<i class="fa fa-inr"
                                                aria-hidden="true"style="font-size: 22px;">&nbsp; </i>' . number_format_short($row->amount) : 0 ?>
                                    <?php
                                }
                                ?>
                            </h2>
                        </div>
                        <div class="col-md-9 ch--h0--rt paddingLR0">
                            <div class="dheaderRight floatR">
                                <div class="floatR navMenu"><a href="#" data-sidebar-button class="showBtn"><i
                                                class="fa fa-bars"></i>Menu</a></div>

                                <?php
                                if (!$this->session->userdata('logged_in')) {
                                    ?>
                                    <div class="floatR logInS"><a href="<?= site_url('user/login') ?>">Login</a></div>
                                    <?php
                                }
                                ?>

                                <div class="floatR csr--icon--detail ">

                                    <div class="row">
                                        <div class="col-md-4 hide paddingLR5" onclick="recentlyPropertyView()">
                                            <div class="headIcon" data-toggle="tooltip" data-placement="bottom"
                                                 title="Recently Viewed Properties"><i class="fa fa-eye"></i>

                                                <span class="headIcon--count">1</span>

                                            </div>
                                        </div>

                                        <div class="col-md-4 hide paddingLR5" onclick="comparePopupShow();">
                                            <div class="headIcon" data-toggle="tooltip" data-placement="bottom"
                                                 title="Compared Properties"><i class="fa fa-balance-scale"></i>
                                                <span id="comp_project_count"></span>
                                            </div>
                                        </div>


                                        <div class="col-md-4 hide paddingLR5" onclick="shortlistProperties('','');">

                                            <div class="headIcon" data-toggle="tooltip" data-placement="bottom"
                                                 title="Shortlisted Properties"><i class="fa fa-heart"></i>

                                                <span id="head_shortlist_icon"></span>
                                            </div>
                                        </div>


                                    </div>


                                </div>


                                <div class="floatR numberFmrt"><i
                                            class="fa fa-phone"></i> <?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?>
                                </div>
                                <div class="floatR numberFmrt">
                                    &emsp;&emsp;&emsp;&emsp;&emsp;
                                </div>
                                <div class="floatR searchField">
                                    <form method="post" action="<?= site_url('listing') ?>">
                                        <div class="form-group">
                                            <input type="text" name="keyword"
                                                   placeholder="Search Project, Location, Builder" class="form-control">
                                            <button class="btn btn-default"><img
                                                        src="<?= base_url('assets/img/lens.png') ?>"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row visible-xs">
                        <div class="col-md-9 ch--h0--rt paddingLR0">
                            <div class="dheaderRight floatR">
                                <div class="floatR navMenu"><a href="#" data-sidebar-button class="showBtn"><i
                                                class="fa fa-bars"></i>Menu</a></div>

                                <?php
                                if (!$this->session->userdata('logged_in')) {
                                    ?>
                                    <div class="floatR logInS"><a href="<?= site_url('user/login') ?>">Login</a></div>
                                    <?php
                                }
                                ?>

                                <div class="floatR csr--icon--detail ">

                                    <div class="row">
                                        <div class="col-md-4 hide paddingLR5" onclick="recentlyPropertyView()">
                                            <div class="headIcon" data-toggle="tooltip" data-placement="bottom"
                                                 title="Recently Viewed Properties"><i class="fa fa-eye"></i>

                                                <span class="headIcon--count">1</span>

                                            </div>
                                        </div>

                                        <div class="col-md-4 hide paddingLR5" onclick="comparePopupShow();">
                                            <div class="headIcon" data-toggle="tooltip" data-placement="bottom"
                                                 title="Compared Properties"><i class="fa fa-balance-scale"></i>
                                                <span id="comp_project_count"></span>
                                            </div>
                                        </div>


                                        <div class="col-md-4 hide paddingLR5" onclick="shortlistProperties('','');">

                                            <div class="headIcon" data-toggle="tooltip" data-placement="bottom"
                                                 title="Shortlisted Properties"><i class="fa fa-heart"></i>

                                                <span id="head_shortlist_icon"></span>
                                            </div>
                                        </div>


                                    </div>


                                </div>


                                <div class="floatR numberFmrt"><i
                                            class="fa fa-phone"></i> <?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?>
                                </div>
                                <div class="floatR numberFmrt">
                                    &emsp;&emsp;&emsp;&emsp;&emsp;
                                </div>
                                <div class="floatR searchField">
                                    <form method="post" action="<?= site_url('listing') ?>">
                                        <div class="form-group">
                                            <input type="text" name="keyword"
                                                   placeholder="Search Project, Location, Builder" class="form-control">
                                            <button class="btn btn-default"><img
                                                        src="<?= base_url('assets/img/lens.png') ?>"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 changehomeLogo">
                            <h4>
                                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?= $property->location . ', ' . $property->city_name ?>
                            </h4>
                            <h4><i>&emsp;</i>Starting From</h4>
                            <h2><i>&nbsp;</i>
                                <?php
                                if ($this->properties_model->hasPriceRequest($property->id)) {
                                    echo "Price on Request";
                                } else {
                                    ?>
                                    <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                                            'property_flat_types', null,
                                            'MIN(total) as amount')) != null) ? '<i class="fa fa-inr"
                                                aria-hidden="true"></i>' . number_format_short($row->amount) : 0 ?>
                                    <?php
                                }
                                ?>

                            </h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="projectNameDetail">
                <h1><?= $property->title ? $property->title : '' ?></h1>
            </div>
            <div class="blckStrip1">
                <div class="f-breadcrumb">
                    <a href="<?= site_url() ?>">Home</a> / <span><?= $property->title ?></span>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12 paddingLR0 changehomeLogo builderLogo">
                            <div class=""><a href="#"><img
                                            src="<?= base_url('uploads/builders/' . $property->builder_image) ?>"
                                            class="devpLogo img-responsive" alt="<?= $property->builder_alt_title ?>"
                                            title="<?= $property->builder_image_desc ?>" /></a></div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12 paddingLR0">
                            <div class="detail_right_part">
                                <ul>
                                    <li>
                                        <div class="col-cont-gl">type<span><?= $property->prop_type ?> </span></div>
                                    </li>
                                    <li>
                                        <div class="col-cont-gl">
                                            Possession<span><?= date('M, Y', strtotime($property->possession_date)) ?></span></div>
                                    </li>
                                    <li>
                                        <div class="col-cont-gl">
                                            STATUS<span><?= $property->property_status ?></span></div>
                                    </li>
                                    <li>
                                        <div class="col-cont-gl">Price<span>
                                                <?php
                                                if ($this->properties_model->hasPriceRequest($property->id)){
                                                    ?>
                                                    Price On Request
                                                    <?php
                                                }else{
                                                ?>
                                                <i
                                                        class="fa fa-inr"></i> <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                                                        'property_flat_types', null,
                                                        'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                - <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                                                        'property_flat_types', null,
                                                        'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?> </span>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-cont-gl">
                                            <div class="col-cont-gl detail-rera">RERA ID.</div>
                                            <font><?= $property->rera_number ?></font>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-cont-gl">
                                            <div class="col-cont-gl detail-rera">Last Updated on</div>
                                            <font><?= date('d M, Y', strtotime($property->date_added)) ?></font>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 ch--h0--rt paddingLR0 changehomeLogo"
                             style="">
                            <a href="<?= site_url('') ?>"><img
                                        src="<?= base_url('assets/img/logo2.png') ?>" class="devpLogo pull-right"
                                        alt="Provident" title="Provident" style="padding: 3px 50px;width: 170px;"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bgWhite glpadmad">
            <nav class="navbar navbar-inverse navCont" id="sticky_navigation">
                <div class="mainContentWidth container cf posR">
                    <a href="<?= site_url('') ?>"><img src="<?= site_url('') ?>assets/img/logo.png" class="hideVislogo"
                                                       id="Fullbasket Logo" alt="Fullbasketproperty"
                                                       title="Fullbasketproperty"/></a>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span
                                    class="icon-bar"></span> <span class="icon-bar"></span> <span
                                    class="icon-bar"></span></button>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse paddingLR0" id="myNavbar">
                            <ul class="nav navbar-nav navBarsction">
                                <li class="stick_logo" style="display: none;"><a href="<?= site_url('') ?>"><img
                                                src="<?= base_url('assets/img/logo2.png') ?>" class="img-responsive"
                                                alt="Provident" style="width: 38px;" title="Provident"/></a></li>
                                <li class="active"><a href="#project_heighlights">Project Highlights</a></li>
                                <li><a href="#floor_plan">Floor Plan</a></li>
                                <li><a href="#amenities">Amenities</a></li>
                                <li><a href="#price">Price</a></li>
                                <li><a href="#specifications">Specifications</a></li>
                                <!--                                <li><a href="#section7">Payment plan</a></li>-->
                                <!--                                <li><a href="#section9">Home Loan</a></li>-->
                                <li><a href="#homeloan">Home Loan</a></li>
                                <!--                                <li><a href="#review_user">Reviews</a></li>-->

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>


        </div>

        <!--        Notification-->
        <?php
        if ($this->session->userdata('city')) {
            $cityDetails = $this->home_model->getOneWhere(array('name' => $this->session->userdata('city')), 'cities');
        } ?>
        <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('message'); ?>
            </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php elseif ($this->session->flashdata('info')) : ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('info'); ?>
            </div>
        <?php endif; ?>
        <!--End Notifications-->
        <div class="mainContentWidth container">
            <div class="marginT15"></div>
            <div class="row">
                <div class="col-md-3 col-md-push-9 fixedRightSection hidden-xs hidden-sm">
                    <div id="test-of-chk" style="overflow: hidden;z-index: 9999999">
                        <div class="bgWhite contactformLeft">
                            <font>Interested In this Project</font>

                            <div class="padding20">
                                <div class="contactFormNumber"><i
                                            class="fa fa-phone"></i><?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?>
                                </div>
                                <div class="orIconsection"><b>OR</b>
                                    <div class="or_h"></div>
                                </div>

                                <form action="" method="post">

                                    <input type="hidden" name="property_id" value="<?= $property->id ?>">
                                    <div class="posR">
                                        <input type="text" required placeholder="Enter Name" value=""
                                               id="detail_enquire_username"
                                               name="name"
                                               onfocus="if(this.value==this.defaultValue)this.value='';"
                                               onblur="if(this.value=='')this.value=this.defaultValue;"
                                               class="user-name-field"/>
                                        <div id="fname-error-detail-enquiry" style="display:none"></div>
                                    </div>
                                    <div class="posR">
                                        <input type="text" required value="" placeholder="Enter Email ID"
                                               id="detail_enquire_email"
                                               name="email"
                                               onfocus="if(this.value==this.defaultValue)this.value='';"
                                               onblur="if(this.value=='')this.value=this.defaultValue;"
                                               class="user-email-field"/>
                                        <div id="email-error-detail-enquiry" style="display:none"></div>
                                    </div>

                                    <div class=" posR">

                                        <input type="text" value="" placeholder="Enter Phone Number"
                                               id="detail_enquire_mobile" required
                                               name="phone"
                                               minlength="10"
                                               maxlength="10"
                                               onfocus="if(this.value==this.defaultValue)this.value='';"
                                               onblur="if(this.value=='')this.value=this.defaultValue;"
                                               class="user-fone-field"/>

                                    </div>


                                    <div class=" posR">

                                        <?php
                                        if (($flatTypes = $this->properties_model->getPropertyFlatType(null,
                                                $property->id)) != null) {
                                            echo "<h5 style='border-bottom: 5px; margin-top: 5px; font-weight: bold'>Unit Interested In</h5>";
                                            foreach ($flatTypes as $flatType) {
                                                ?>
                                                <input type="checkbox" name="flat_types[]" value="<?= $flatType->id ?>"
                                                       class="hide" id="flat_<?= $flatType->id ?>">
                                                <label for="flat_<?= $flatType->id ?>" style="display: inline-block"
                                                       class="interested_unit">
                                                    <div class=" ">
                                                        <h3><?= $flatType->flat_type ?></h3>
                                                    </div>
                                                </label>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div id="upperDiv"></div>

                                    <div class="posR">
                                        <input type="hidden" name="no-captcha" value="true"/>
                                    </div>

                                    <div id="lowerDiv">
                                        <br/>

                                        <button type="submit" class="btn btn-block btn-success"
                                                style="background-color: #a64686;border-color: #a64686; border-radius: 0">
                                            SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="mostVisitedProperties"></div>


                    </div>
                </div>
                <div class="col-md-9 col-md-pull-3 paddingLR5">

                    <div class="bgWhite overViewDetail" style="padding: 2px;" id="project_heighlights">

                        <h2><?= $property->title ? $property->title : '' ?> Highlights
                            <div style="float: left" class="sharethis-inline-share-buttons"></div>
                        </h2>
                        <br>
                        <div class="row" style="border: 1px solid #ddd;box-shadow: 0 0 10px 5px #ddd;">
                            <div class="col-md-12">
                                <div class="kiFet" style="background-color: white: 10px 5px">
                                    <?= $property->usp ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="bgWhite overViewDetail" style="padding: 2px;" id="floor_plan">
                        <h2><?= $property->title ? $property->title : '' ?> Floor Plans & Gallery</h2><br>
                        <div class="row">
                            <div class="col-md-12"style="border: 1px solid #ddd;box-shadow: 0 0 10px 5px #ddd;">
                                <ul id="tabs" class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#elevation" role="tab"
                                                                              data-toggle="tab">Elevations</a></li>
                                    <li role="presentation"><a href="#master" role="tab" data-toggle="tab">Master &
                                            Floor Plans</a></li>
                                    <!--<li role="presentation"><a href="#construction" role="tab" data-toggle="tab">Construction
                                            Update</a></li>-->
                                    <li role="presentation"><a href="#project" role="tab" data-toggle="tab">Project
                                            Walkthrough</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="elevation">
                                        <?php
                                        if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_elevations')) != null) {
                                            foreach ($images as $i => $image) {
                                                ?>
                                                <a href="<?= base_url($image->image) ?>"
                                                   data-lightbox="elevation"
                                                   class="gallery_<?= $i ?> <?= $i > 4 ? 'hide' : '' ?> <?= ($i === 4 && count($images) > 4) ? 'more_images' : '' ?>">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img src="<?= base_url($image->image) ?>"
                                                                  alt="<?=$property->elevations_alt?>"
                                                                  title="<?= $property->elevations_desc ?>"
                                                                  class="img-responsive">

                                                            <?php
                                                            if ($i === 4 && count($images) > 4) {
                                                                ?>
                                                                <h3>+<?= count($images) - 5 ?></h3>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="master">
                                        <?php
                                        if (($images = array_merge($this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_master_plans'),
                                                $this->properties_model->getWhere(array('property_id' => $property->id),
                                                    'property_floor_plans'))) != null) {
                                            ?>
                                            <?php
                                            foreach ($images as $i => $image) {
                                                ?>
                                                <a href="<?= base_url($image->image) ?>"
                                                   data-lightbox="master"
                                                   class="gallery_<?= $i ?> <?= $i > 4 ? 'hide' : '' ?> <?= ($i === 4 && count($images) > 4) ? 'more_images' : '' ?>">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img src="<?= base_url($image->image) ?>"
                                                                  alt="<?=$property->master_alt?>"
                                                                  title="<?= $property->master_desc ?>"
                                                                 class="img-responsive">
                                                            <?php
                                                            if ($i === 4 && count($images) > 4) {
                                                                ?>
                                                                <h3>+<?= count($images) - 5 ?></h3>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="construction">
                                        <?php
                                        if (($images = $this->properties_model->getWhere(array('property_id' => $property->id),
                                                'property_construction_updates')) != null) {
                                            foreach ($images as $i => $image) {
                                                ?>
                                                <a href="<?= base_url($image->image) ?>"
                                                   data-lightbox="construction"
                                                   class="gallery_<?= $i ?> <?= $i > 4 ? 'hide' : '' ?> <?= ($i === 4 && count($images) > 4) ? 'more_images' : '' ?>">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img src="<?= base_url($image->image) ?>"
                                                                  alt="<?=$property->construction_alt?>"
                                                                  title="<?= $property->construction_desc ?>"
                                                                 class="img-responsive">
                                                            <?php
                                                            if ($i === 4 && count($images) > 4) {
                                                                ?>
                                                                <h3>+<?= count($images) - 5 ?></h3>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="project">
                                        <?php
                                        if ($property->walkthrough) {
                                            ?>
                                            <iframe width="100%" height="450"
                                                    src="https://www.youtube.com/embed/<?= getYoutubeVideoId($property->walkthrough) ?>?rel=0&amp;showinfo=0"
                                                    frameborder="0" allow="autoplay; encrypted-media"
                                                    allowfullscreen></iframe>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="alert alert-info text-center">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <strong>Walkthrough not available</strong>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br/>
                        <div class="bgWhite floorplanDetail " style="padding: 2px;" id="amenities">
                            <h2><?= $property->title ?> Amenities</h2>
                            <div class="row marginT20">
                                <div class="col-md-12">
                                    <div class="amenities" style="width: 100%">
                                        <?php
                                        if (isset($property->amenities) && $property->amenities) {
                                            foreach ($property->amenities as $amenity) {
                                                ?>
                                                <div class='col-md-2 col-sm-4 col-xs-6 paddingLR5 text-center'>
                                                    <div class='amenitiesContent posR'>
                                                        <?php
                                                        if ($amenity->image) {
                                                            ?>
                                                            <img class='am-club' 
                                                                    alt="<?= $amenity->alt_title ?>"
                                                                    title="<?=$amenity->image_desc?>"
                                                                  
                                                                  src="<?= base_url('uploads/amenities/' . $amenity->image) ?>">
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <img class='am-club' alt="<?= $amenity->image ?>"
                                                                 src="https://placehold.it/58x58">
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <p class='ameni_content'><?= ucwords($amenity->name) ?></p>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br/>
                        <div class="bgWhite priceSection " style="padding: 2px;" id="price">
                            <h2><?= $property->title ?> Price</h2>
                            <div class="table-responsive"
                                 style="border: 3px solid #9e9e9e;padding: 10px;margin-top: 10px;border: 1px solid #ddd;box-shadow: 0 0 10px 5px #ddd;">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Unit</th>
                                        <th>Size(SBA)</th>
                                        <th>Carpet Area</th>
                                        <th>Builder Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (($flatTypes = $this->properties_model->getPropertyFlatType(null,
                                            $property->id)) != null) {
                                        foreach ($flatTypes as $flatType) {
                                            ?>
                                            <tr>
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
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="4" class="text-center">No data available</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <span style="color: #fff;background-color: #a64686;font-size: 10px;padding: 3px 6px;width: 100%;display: inline-block;text-align: center;">* Price are only Indicative, Actual price and availability may vary at the time of booking. Fullbasket Property Service Pvt. Ltd. is not responsible for any changes.</span>
                        </div>
                        <div class="clearfix"></div>
                        <br/>

                        <?php
                        if (($specifications = $this->properties_model->getPropertySpecification($property->id)) != null) {
                            ?>
                            <div class="bgWhite priceSection " style="padding: 2px;" id="specifications">
                                <h2><?= $property->title ?> Specifications</h2>
                                <div class="col-md-12"
                                     style="border: 3px solid #9e9e9e;padding: 10px;margin-top: 10px;border: 1px solid #ddd; box-shadow: 0 0 10px 5px #ddd;">
                                    <div class="col-md-6 specification-list" style="
    width: 100%;
">
                                        <?php
                                        foreach ($specifications as $k => $specification) {

                                            if (($items = $this->properties_model->getPropertySpecification($property->id,
                                                    $specification->id)) != null) {
                                                ?>

                                                <h4 class="text-uppercase"><?= $specification->name ?></h4>
                                                <?php
                                                echo "<ul>";
                                                foreach (explode(',', $items) as $item) {
                                                    ?>
                                                    <li><?= $item ?></li>
                                                    <?php
                                                }
                                                echo "</ul>";
                                            }
                                        }

                                        ?>

                                    </div>
                                </div>
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

<div class="mainContentWidth container">
    <div class="row">
        <div class="col-md-12">
            <div class="bgWhite priceSection marginT15" id="homeloan">
                <!-- EMI Calculator Widget START -->
                <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js"
                        type="text/javascript"></script>
                <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                    <div id="ecww-widget" style="position:relative;overflow:hidden;">&nbsp;</div>

                    <div id="ecww-more"
                         style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;">
                        <a href="https://emicalculator.net/" rel="nofollow"
                           style="background:#333;color:#FFF;text-decoration:none;border-bottom:1px dotted #ccc;"
                           target="_blank" title="Loan EMI Calculator">emicalculator</a></div>
                </div>
                <!-- EMI Calculator Widget END -->
            </div>
            <div class="clearfix"></div>
            <br/>
            <br/>
            <div class="col-md-12">
                <div class="builder_info">
                    <h4 class="text-center">Builder Information</h4>
                    <img src="<?= base_url('uploads/builders/' . $property->builder_image) ?>"
                         class="img-responsive center-block"
                          alt="<?=$property->builder_alt_title?>" title="<?=$property->builder_image_desc?>">
                    <p><?= $property->builder_description ?></p>
                    <a id="view_more" class="hide">View More</a>
                    <div class="clearfix"></div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Builder</h5>
                                    <h4><?= $property->builder ?></h4>
                                    <div class="clearfix"></div>
                                    <br>
                                    <!--<h5>Total Experience</h5>
                                    <h4><?= $property->builder_experience ? $property->builder_experience : 0 ?></h4>-->
                                </div>
                                <div class="col-md-6">
                                    <!--<h5>Builder City</h5>
                                    <h4><?= $property->builder_location ?></h4>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 history">
                            <!--<div style="background-color: #f8f8f8;padding: 20px 20px;">
                                <h4>Projects History</h4><br>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <h5>Ongoing</h5>
                                        <h4><?= $property->builder_ongoing ? $property->builder_ongoing : 0 ?></h4>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h5>Upcoming</h5>
                                        <h4><?= $property->builder_upcoming ? $property->builder_upcoming : 0 ?></h4>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h5>Completed</h5>
                                        <h4><?= $property->builder_completed ? $property->builder_completed : 0 ?></h4>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Builder project available with us</h4>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <?php

                        if (($projects = $this->home_model->getBuilderProjects($property->builder_id, $property->id,
                                3)) != null) {
                            foreach ($projects as $project) {
                                ?>
                                <a href="<?= site_url(url_title($project->city_name) . "/" . (url_title($project->area)) . "/$project->slug/") ?>"
                                   class="builder_projects">
                                    <div class="col-md-4">
                                        <img src="<?= base_url("uploads/$project->slug/$project->image") ?>"
                                             class="img-responsive" style="padding: 0" alt="<?=$project->alt?>"
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
                                </a>
                                <?php
                            }
                        } else {
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="disqus_thread"></div>
            <script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function () { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://fullbasket-property.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by Disqus.</a></noscript>
        </div>
    </div>
</div>
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
                    <li><a target="_blank" href="<?= $social_links->google ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
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
<script>
    $(document).ready(function () {

        if ($('.selectpicker').length > 0) {

            var userCountry = $("#userCountryCode").val();

            $('.selectpicker').selectpicker("val", userCountry);

            var cityId = $("#userCityId").val();


            $('.cityslt').selectpicker("val", cityId);
        }

    });
</script>


<div class="overlay" data-sidebar-overlay></div>

</div>


<div id="myModal_4279" class="modal fade" role="dialog"></div>

<div id="myModalIcons" class="modal fade" role="dialog"></div>

<script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/jquery.barrating.min.js"></script>


<script type="text/javascript" src="<?= base_url('assets/360assets') ?>/js/picturefill.min.js"></script>

<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>


<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script src="<?= base_url('assets/360assets') ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    $(function () {
        var startOffset = 10;
        var endOffset = $("#homeloan").offset().top - 500;
        $(window).scroll(function (e) {
            if ($(window).scrollTop() >= endOffset) {
                $("#test-of-chk").unstick();
                $("#test-of-chk").css({
                    'position': 'relative',
                    'top': endOffset - ($("#test-of-chk").height() + 50)
                })
            } else {
                $("#test-of-chk").sticky({topSpacing: startOffset});
            }
        });

        var tab = $(".tab-pane.fade").first();
        if (!tab.hasClass('active')) {
            tab.addClass('active in');
        }

        setTimeout(function(){
            if($('.specification-list').children().length <= 0){
                $("#specifications").hide();
            }
        },500);
    })
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c877834c37db86fcfcd4ad0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- WhatsHelp.io widget --
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+918342063684 ", // WhatsApp number
            call: "+918342063684 ", // Call phone number
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>

</html>
