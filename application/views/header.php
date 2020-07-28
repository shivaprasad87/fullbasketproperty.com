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
<style>
    p {
    margin: 0 10px 10px;
}
    .menu-header {
    padding: 0;
    background-color: #fff;
    position: relative;
    z-index: 9;
    margin: 0 0px!important;
}
.navbar-default .navbar-nav > li > a {
    padding-right: 26px;
    padding-left: 26px;
    /* font-family: 'Lato', sans-serif; */
    /* font-weight: bold; */
}
.sidenav >.active > a { 
    color: #ffffff;
    font-weight: 300;
}
    </style>
<div class="container-fluid main-header">
    <div class="row">
        <div class="">
        <div class=" sub-header">
    <div class="row menu-header">
        <div class="col-xs-3 col-sm-12 nopadding">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" onclick="openNav()">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> 
                </div>
                <div class="collapse navbar-collapse nopadding" id="bs-example-navbar-collapse-1">
                    <div class="row" style="margin-top: 15px; margin-bottom: 15px;">  
                        <div class="col-xs-3 col-sm-3 col-md-2">
                            <a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" style="float: right;
    width: 111px;
    position: absolute;
    background: white;
    margin-left: 52px;
    padding-left: 5px;
    padding-right: 5px;
    border-radius: 26px;"alt="fullbasketlogo" discription="Full Basket Logo image"></a>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-7">
                            <ul class="nav navbar-nav">
                            
                                <li class="<?= $this->uri->segment(1) == '' ? 'active' : '' ?>"><a href="<?= site_url() ?>">HOME</a></li>
                                <li class="<?= $this->uri->segment(1) == 'listing' ? 'active' : '' ?>"><a href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                                <li class="<?= $this->uri->segment(1) == 'about' ? 'active' : '' ?>"><a href="<?= site_url('about') ?>">ABOUT</a></li>
                                  <li class="blog-select">
                                    <div class="btn-group">
                                        <button type="button" id="" class="btn btn-blog dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        BLOG
                                        </button>
                                        <ul id="" class="dropdown-menu gradient">
                                            <?php 
                                            foreach ($blog_type as $blog) {
                                              echo "<li><a href=".base_url('blog/').$blog->slug.">".$blog->blog_type."</a></li>";
                                            }
                                            ?>
                                             
                                        </ul>
                                    </div>
                                </li>
                                <li class="<?= $this->uri->segment(1) == 'contact' ? 'active' : '' ?>"><a href="<?=site_url('contact')?>">CONTACT</a></li>
                                <li class="city_select">
                                    <div class="btn-group pull-right">
                                        <button type="button" id="Selectcity" class="btn btn-city dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $this->session->userdata('city') ? htmlentities($this->session->userdata('city')) : 'Select Location' ?> <!-- <span class="fa fa-level-down" style="margin-top: 3px;margin-left: 26px;"></span> -->
                                        </button>
                                        <ul id="cityul" class="dropdown-menu gradient">
                                            <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                                            <?php foreach ($cities as $city) { ?>            
                                            <li class="<?= $this->session->userdata('city') == $city->name ? 'active' : '' ?>"><a href="<?= strtolower(site_url('city/'.$city->url_name)); ?>"><?= htmlentities(strtolower($city->name)) ?></a></li>
                                                <?php } ?>
                                        </ul>
                                    </div>
                                </li>
                             
                            </ul>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-3" style="    margin-top: 5px;">
                                <div class="mobile-view">
                                      
                                  <?php if ($this->session->userdata('logged_in')) { ?>
                                    <div class="btn-group pull-right  .visible-xs-block hidden-xs "  style="margin-top: 5px;">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $this->session->userdata('logged_in')['first_name'].' '.$this->session->userdata('logged_in')['last_name'] ?> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= site_url('profile') ?>">Profile</a></li>
                                            <li><a href="<?= site_url('favourites') ?>">Favourates</a></li>
                                            <li><a href="<?= site_url('user/logout') ?>">Logout</a></li>
                                        </ul>
                                    </div>
                                 <?php } else{ ?>
                                    <div class="" style="color: black">
                                        <a style="color: black" href="<?= site_url('user/login') ?>" class="login">Login</a>
                                        <span class="line"></span>
                                        <a style="color: black" class="signup" data-toggle="modal" href="#submitContact">Submit Property</a>
                                    </div>
                                 <?php
                                 } ?>
                               </div>
                        </div>
                    </div>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" data-dismiss="modal" onclick="closeNav()">&times;</a>
                    <ul style='list-style: none;'>
                    <li class="<?= $this->uri->segment(1) == '' ? 'active' : '' ?>"> <a href="<?= site_url() ?>">HOME</a></li>
                    <li class="<?= $this->uri->segment(1) == 'about' ? 'active' : '' ?>"><a href="<?= site_url('about') ?>">ABOUT</a></li>
                    <li class="<?= $this->uri->segment(1) == 'listing' ? 'active' : '' ?>"><a href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                    <li class="blog-select">
                                    <div class="btn-group">
                                        <button type="button" id="" class="btn btn-blog dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        BLOG
                                        </button>
                                        <ul id="" class="dropdown-menu gradient">
                                            <?php 
                                            foreach ($blog_type as $blog) {
                                              echo "<li><a href=".base_url('blog/').$blog->slug.">".$blog->blog_type."</a></li>";
                                            }
                                            ?>
                                             
                                        </ul>
                                    </div>
                    </li>
                    <li class="<?= $this->uri->segment(1) == 'nri' ? 'active' : '' ?>"><a href="<?=site_url('nri')?>"> NRI CORNER</a></li>
                    <li class="<?= $this->uri->segment(1) == 'vastu' ? 'active' : '' ?>"><a href="<?=site_url('vastu')?>">VASTU</a></li>
                    <li class="<?= $this->uri->segment(1) == 'testimonials' ? 'active' : '' ?>"><a href="<?=site_url('testimonials')?>">TESTIMONIAL</a></li>
                    <li class="<?= $this->uri->segment(1) == 'achievements' ? 'active' : '' ?>"><a href="<?=site_url('achievements')?>">ACHIVEMENT</a></li>
                    <li class="<?= $this->uri->segment(1) == 'careers' ? 'active' : '' ?>"><a href="<?=site_url('careers')?>">CAREER</a></li>
                    <li class="<?= $this->uri->segment(1) == 'contact' ? 'active' : '' ?>"><a href="<?=site_url('contact')?>">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>
        </div>
         <?php $name = $this->uri->segment(2);?>
        <div class="col-xs-9 col-sm-9 nopadding visible-xs">
                  <div class="col-xs-3 col-sm-3 col-md-1">
                        <a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" style=" float: right; width: 70px;"alt="fullbasketlogo" discription="Full Basket Logo image"></a>
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-8"> 
                        <div class="city_select">
                            <div class="btn-group pull-right">
                                <button type="button" id="Selectcity" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #e82d8e;">
                                <?= $this->session->userdata('city') ? htmlentities($this->session->userdata('city')) : 'Select City' ?> <!-- <span class="fa fa-level-down pull-right" style="margin-top: 3px;color: blue;border: none;"></span> -->
                                </button>
                                <ul id="cityul" class="dropdown-menu gradient">
                                <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                                            <?php foreach ($cities as $city) { ?>            
                                            <li class="<?= $this->session->userdata('city') == $city->name ? 'active' : '' ?>"><a href="<?= site_url('city/'.$city->url_name) ?>"><?= htmlentities(ucfirst($city->name)) ?></a></li>
                                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script>
    $(window).scroll(function () {
     if ($(window).scrollTop() >= 200) {
         $('.sub-header').addClass('fixed-header');
     }
     else {
         $('.sub-header').removeClass('fixed-header');
     }
 });

 $( document ).ready(function() {
    //  if(window.location.href  )
    // #Selectcity
    if(window.location.pathname=="/listing"){
        $("#Selectcity").text("All Cities");
        $("#cityul li").removeClass("active");
        var li=$("#cityul li")[0];
        $(li).addClass("active");
        
    }

 })
    </script>
<!-- <div class="fb-login-button" data-max-rows="1" data-size="small" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div> -->