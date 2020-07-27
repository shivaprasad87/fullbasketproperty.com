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
</div><!-- /.modal -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>ABOUT US</h3>
                
                <p style="padding-top: 30px; text-align:justify;">We are Full Basket Property, established with the objective to serve you with any real estate support. Since inception, we have successfully improved our brand name by offering world-class services to our clients who have trusted us throughout the process of finding the properties and settling down the deed.</p>
                <br>
                <p class="address"><i class="fa fa-map-marker"></i> &nbsp;Corporate Office</p>
                <p>Sigma TridentNo - 11/2/1 , Hayes Road , Bengaluru

Karnataka - 560025</p>

<p>L: 080-40913468</p>
                <p class="address"><i class="icon ion-ios-email-outline"></i> &nbsp;<a href="mailto:sales@fullbasketproperty.com" style="color: #717171">sales@fullbasketproperty.com</p>
                <p class="address"><a href="tel:++919019011888"><i class="icon ion-ios-telephone-outline"></i> &nbsp;+91 901 901 1888</a> </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>QUICK LINKS</h3>
                
                <ul>
                    <li><a target="_blank" href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a target="_blank" href="<?=site_url('disclaimer')?>">Vastu</a></li>
                <li><a target="_blank" href="<?=site_url('disclaimer')?>">NRI Corner</a></li>
                    <li><a target="_blank" href="<?=site_url('blog')?>">BLOG</a></li>
                    <li><a target="_blank" href="<?=site_url('testimonials')?>">TESTIMONIALS</a></li>
                    <li><a target="_blank" href="<?=site_url('careers')?>">CAREERS</a></li>
                    <li><a target="_blank" href="<?=site_url('privacy-policy')?>">TERMS</a></li>
                    <li><a target="_blank" href="<?=site_url('disclaimer')?>">DISCLAIMER</a></li>
                     <li><a target="_blank" href="<?=site_url('contact')?>">CONTACT US</a></li>
                    <!--<li><a target="_blank" href="<?= site_url('user/register') ?>">SIGNUP</a></li>-->
                    
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 last_news hide">
                <h3>LAST NEWS</h3>
                
                <br><br>
                <?php foreach ($blogs as $blog) { ?>
                <div class="latest_news">
                    <div class="news">
                        <div style="background-image: url(<?= base_url('uploads/blog_images/'.$blog->image) ?>);">
                            <span><?= date('Y-m-d', strtotime($blog->date_added)) ?></span>
                        </div>
                    </div>
                    <div class="news-content">
                        <a href="#">
                            <h5><?= strlen(strip_tags($blog->title)) < 10 ? strip_tags($blog->title) : substr((strip_tags($blog->title)), 0, 10).'...' ?></h5>
                            <p><?= strlen(strip_tags($blog->content)) < 30 ? strip_tags($blog->content) : substr(strip_tags($blog->content), 0, 30).'...' ?></p>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-4 col-sm-4 social">
                <h3>STAY IN TOUCH</h3>
                
                <br><br>
                <!-- <p><?= $stay_in_touch->content ?></p><br> -->
                <form action="<?= site_url('subscribers') ?>" method="post">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <button type="submit" class="btn_submit"><i class="icon ion-ios-paperplane-outline"></i></button>
                </form>
                <div class="clearfix"></div>
                <ul>
                    <li><a target="_blank" href="<?= $social_links->twitter ?>"style="
    margin-right: 4px;
"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="<?= $social_links->facebook ?>"style="
    margin-right: 4px;
"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="<?= $social_links->google ?>"style="
    margin-right: 4px;
"><i class="fa fa-google-plus"></i></a></li>
                    <li><a target="_blank" href="<?= $social_links->instagram ?>"style="
    margin-right: 4px;
"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="<?= $social_links->dribble ?>"style="
    margin-right: 4px;
"><i class="fa fa-linkedin"></i></a></li>
                    <a class="btn btn-primary pull-right" style="border-radius: 13px;background: none;margin-top: 9px;color: black;" target="_blank" href="<?= site_url('user/register') ?>">Sign Up</a>
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
                        <p>&copy; <span style="color: #fff;">Fullbasket Property Services Pvt. Ltd.</span>, All Rights Reserved 2018</p>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.3/js/star-rating.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/jquery.flexslider.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyDHWvuZNsivQxVfbEMS6eilYwqPwlpuJQA"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script type="text/javascript"> var base_url = "<?= base_url() ?>" </script>
<script type="text/javascript"> var site_url = "<?= site_url() ?>"; if (typeof mapInit != 'undefined'){initMap();}</script>
<script id="dsq-count-scr" src="//fullbasket-property.disqus.com/count.js" async></script>
<script type="text/javascript" src="<?= base_url('assets/js/script.js') ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122622140-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122622140-1');
</script>
</body>
</html>