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
<div class="container-fluid main-header">
    <div class="row top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-xs-3 col-sm-3 col-md-6">
                        <a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="fullbasketlogo" discription="Full Basket Logo image"></a>
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-6 mobile-view">
                        <div class="contact">
                            <i class="fa fa-paper-plane pull-left"></i> <span class="pull-left">&nbsp;<a href="tel:<?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?>"style=" color: white"><?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?></a> <br><a style="color: #c3c6cb" href="mailto:<?= (isset($cityDetails->email) && $cityDetails->email) ? $cityDetails->email : $all_cities->email ?>"><?= (isset($cityDetails->email) && $cityDetails->email) ? $cityDetails->email : $all_cities->email ?></a></span>
                        </div>
                        <?php if ($this->session->userdata('logged_in')) { ?>
                            <div class="btn-group pull-right  .visible-xs-block hidden-xs " style="margin-top: 5px;">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $this->session->userdata('logged_in')['first_name'].' '.$this->session->userdata('logged_in')['last_name'] ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('profile') ?>">Profile</a></li>
                                    <li><a href="<?= site_url('user/logout') ?>">Logout</a></li>
                                </ul>
                            </div>
                        <?php } else{ ?>
                            <div class="pull-right">
                                <a href="<?= site_url('user/login') ?>" class="login">Login</a>
                                <span class="line"></span>
                                <a class="signup" data-toggle="modal" href="#submitContact">Submit Property</a>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container sub-header">
    <div class="row menu-header">
        <div class="col-xs-3 col-sm-12 nopadding">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" onclick="openNav()">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> 
                </div>
                <div class="collapse navbar-collapse nopadding" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="<?= $this->uri->segment(1) == '' ? 'active' : '' ?>"><a href="<?= site_url() ?>">HOME</a></li>
                        <li class="<?= $this->uri->segment(1) == 'listing' ? 'active' : '' ?>"><a href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                        <li><a href="<?= site_url('about') ?>">ABOUT</a></li>
                        <li><a href="<?=site_url('blog')?>">BLOG</a></li>
                        <li><a href="<?=site_url('contact')?>">CONTACT</a></li>
                        <li class="city_select">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $this->session->userdata('city') ? htmlentities($this->session->userdata('city')) : 'Select Location' ?> <span class="fa fa-level-down pull-right" style="margin-top: 3px;"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                                    <?php foreach ($cities as $city) { ?>            
                                    <li class="<?= $this->session->userdata('city') == $city->name ? 'active' : '' ?>"><a href="<?= site_url('city/'.$city->url_name) ?>"><?= htmlentities(ucfirst($city->name)) ?></a></li>
                                        <?php } ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="<?= site_url() ?>">HOME</a>
                    <a href="<?= site_url('listing') ?>">PROPERTIES</a>
                    <a href="#">ABOUT</a>
                    <a href="<?=site_url('blog')?>">BLOG</a>
                    <a href="<?=site_url('contact')?>">CONTACT</a>
                </div>
            </nav>
        </div>
        <div class="col-xs-9 col-sm-9 nopadding visible-xs">
            <div class="city_select">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $this->session->userdata('city') ? htmlentities($this->session->userdata('city')) : 'Select City' ?> <span class="fa fa-level-down pull-right" style="margin-top: 3px;"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                        <?php foreach ($cities as $city) { ?>            
                        <li class="<?=/* $this->session->userdata('city') ==*/ $city->name ? 'active' : '' ?>"><a href="<?= site_url('city/'.$city->url_name) ?>"><?= htmlentities(ucfirst($city->name)) ?></a></li>
                            <?php
                            $this->session->unset_userdata('city');
                           // $this->session->unset_userdata('content');
                            } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="fb-login-button" data-max-rows="1" data-size="small" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div> -->