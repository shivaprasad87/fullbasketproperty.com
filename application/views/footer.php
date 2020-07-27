<style>
    .last_news{
        display:none;
    }
    .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 .selected-flag {
    width: 89px!important;
    background-color: #eeeeee!important;
}
.footer_property{
    font-size: 13px!important;
}
.footer_property .col-md-2{
    width: 19.666667%;
}
.footer_property h4{
    color: #1b1a1a;
    font-size: 16px;
    border-bottom: 1px solid #565252;
    padding-bottom: 5px;
    margin-bottom: 15px;
    
}
/* .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input, .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text], .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
    padding-left: 25px!important;
} */
.social-top .fa-linkedin:hover {
    background-color: #0da1bb ;
    color:white;
    border-radius:100%;
 
}

.social input.separate-dial-code .selected-dial-code {
   color: #1f1d1d !important;
}

}
</style>
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
                            <label>Project Name</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-area-chart" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="area" placeholder="Project Name" required>
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
                            <label>Project Price</label>
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control"  type="text" name="preferred_contact_time" placeholder="Project Price" required>
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

    <div class="modal fade" id="submitcallback">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= site_url('home/sendEmail') ?>" method="post">

                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <form id="contact-form" action="" name="contact-form" method="POST" onsubmit="return save_landing_pageinfo('contact-form');">
                     
    <input type="hidden" name="property_id" value="<?= $property->id ?>">
                                                                        <div class="form-group col-md-12" style="margin-top: 43px;">
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
                                                                       <div class="form-group col-md-12" style="margin-bottom:35px">
                                                                       <div class="input-group">
                                                                           <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                            <input type="tel" class="" placeholder=" " style="display: block;height: 37px;    width: 100%; font-size: 14px; line-height: 1.42857143; background-color: #fff; padding: 17px 48px; border: 1px solid #ccc; border-radius: 4px;" 
                                                                                   name="phone" class="validate" id="contctform-phone3" required>
                                                                                   <input type="hidden" name="countrycode" id="cplusm" value="">
                                                                             </div>

                                                                        </div>

                                                                

                                                                        <button type="submit"
                                                                                class="btn btn-default form-btn">Call Back
                                                                        </button>
                                                                    </form>
                                                                   
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    </div>
<footer>
<style type="text/css">
    .colorblack p 
    {
        color:black;
        font-weight: 500;

    }
      .colorblack h3
    {
        color:black;

    }
     .colorblack a
    {
        color:black !important;

    }
    .col-sm-4{
        
    }
</style>
    <div class="container colorblack">
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
               <!-- <div class="foot_link">
                    <ul>
                        <li><a href="#">Safe link</a></li>
                        <li><a href="#">Safe link</a></li>
                        <li><a href="#">Safe link</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>QUICK LINKS</h3>
                <div class="col-md-6 col-sm-6">
                    <ul>
                        <li><a target="_blank" href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                        <li><a data-toggle="modal" href="#submitContact">SUBMIT PROPERTY</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a target="_blank" href="<?=site_url('vastu')?>">VASTU</a></li>
                        <li><a target="_blank" href="<?=site_url('nri')?>">NRI CORNER</a></li>
                        <li><a target="_blank" href="<?=site_url('blog')?>">BLOG</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                <ul>
                    <li><a target="_blank" href="<?=site_url('achievements')?>">ACHIEVEMENTS</a></li>
                    <li><a target="_blank" href="<?=site_url('testimonials')?>">TESTIMONIALS</a></li>
                    <li><a target="_blank" href="<?=site_url('careers')?>">CAREERS</a></li>
                    <li><a target="_blank" href="<?=site_url('privacy-policy')?>">TERMS</a></li>
                    <li><a target="_blank" href="<?=site_url('disclaimer')?>">DISCLAIMER</a></li>
                     <li><a target="_blank" href="<?=site_url('contact')?>">CONTACT US</a></li>
                     
                    
                </ul>
            </div>
            </div>
            <div class="col-md-4 col-sm-4 social">
                <h3>CONNECT WITH US</h3>
                
                <br><br>
                <!-- <p><?= $stay_in_touch->content ?></p><br> -->
                  <form id="contact-form" action="<?=base_url('home/sendEmail');?>" name="contact-form" method="POST" onsubmit="return save_landing_pageinfo('contact-form');">
                    <div class="row">
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
                           <div class="form-group col-md-12" style="">
                                
                                <input type="tel" placeholder="Phone*"
                                       name="phone" class="phone validate"
                                       id="contctform-phone3" style="display: block;height: 34px; font-size: 14px; line-height: 1.42857143; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;margin-left: 43px;" required>
                                <input type="hidden" name="countrycode" id="cplusm" value=""> 

                            </div>

                            <center>
                            <button type="submit"
                                    class="btn btn-default form-btn">Submit
                            </button>
                            </center>
                    </div>
                  </form>
                <div class="clearfix"></div>
               <br>
                <a href="<?=base_url();?>">
                <img src="<?= base_url('assets/img/logo.png') ?>" style="width: 35%;" class="img-responsive center-block" alt="footerlogo" discription="full basket Footer logo"></a>
               <!--  <div class="foot_link">
                   <ul>
                        <li><a href="#">Safe link</a></li>
                        <li><a href="#">Safe link</a></li>
                        <li><a href="#">Safe link</a></li>
                    </ul>
                </div> -->
                
                <div class="clearfix"></div>
                 <div class="social-top">
                    <ul style="text-align: center;">
                        <li><a target="_blank" href="<?= $social_links->twitter ?>"style=" margin-right: 4px;">
                        <i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="<?= $social_links->facebook ?>"style="margin-right: 4px; ">
                        <i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="<?= $social_links->youtube ?>"style="margin-right: 4px; ">
                        <i class="fa fa-youtube"></i></a>
                        </li>
                        <li><a target="_blank" href="<?= $social_links->instagram ?>"style="margin-right: 4px; ">
                            <i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a target="_blank" href="<?= $social_links->dribble ?>"style="margin-right: 4px; ">
                            <i class="fa fa-linkedin"></i></a>
                        </li>

                        <!-- <a class="btn btn-primary" style="border-radius: 13px;background: none;margin-top: 9px;color: black;"data-toggle="modal" href="#submitcallback">Call Back</a>
                   -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- Qiuck links -->
  
        <div class="row footer_property">
           <h3>Easy Links for your search</h3>
         
            <div class="col-md-2 col-sm-12">
            
              <ul> 
              <!-- <h4>Properties In Bangalore</h4> -->
                <?php
                $data = $this->home_model->where_order_by(array('status' => 1,'line'=>1),array('priority'=>'asc'), 'property_type');
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }

                ?>
              
                    
              </ul>
            </div>

            <div class="col-md-2 col-sm-12">
             <ul>
            <!--  <h4>Properties In Pune</h4> -->
                 <?php
                 $data = $this->home_model->where_order_by(array('status' => 1,'line'=>2),array('priority'=>'asc'), 'property_type');
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
                
                ?>
             </ul>
            </div>
            
            <div class="col-md-2 col-sm-12">
                <ul>
               <!--  <h4>Properties In Hyderabad</h4> -->
                   <?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>3),array('priority'=>'asc'), 'property_type');
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }

                ?>
                </ul>
            </div>
           
            <div class="col-md-2 col-sm-12">
                 <ul>
               <!--   <h4>Properties In Noida</h4> -->
                   <?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>4),array('priority'=>'asc'), 'property_type');
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }

                ?>
                </ul>
            </div>

            <div class="col-md-2 col-sm-12">
                 <ul>
               <!--   <h4>Properties In Mumbai</h4> -->
                   <?php
                   $data = $this->home_model->where_order_by(array('status' => 1,'line'=>5),array('priority'=>'asc'), 'property_type');
                foreach ($data as $data) {

                    if($data['city']=='')
                                    {
                echo " <li>
                 <a href=".base_url('listing')."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                                    }
                    else
                    {
                        echo " <li> <a href=".base_url('city/').$data['city']."?place=".$data['search_key']." target='_blank'>".$data['name']."</a></li>";
                    }
             
                             }
 
                ?>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12" style="    display: none;">
                 <ul><!-- 
                 <h4>Properties In India</h4> -->
                   <?php

                ?>
                </ul>
            </div>
        </div>
       
    </div>
    <div class="container-fluid">
        <div class="row copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>&copy; <span style="color: #fff;">Full Basket Property Services Pvt. Ltd.</span>, All Rights Reserved <?php echo date('Y'); ?></p>
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
<script type="text/javascript" src="<?= base_url('assets/js/script.js') ?>?v=<?=uniqid()?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122622140-1"></script>
<script src="<?= base_url() ?>assets/property/intl-tel-input/js/intlTelInput5152.js?ver=1.0"></script>

<script>
  jQuery(document).ready(function($){
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122622140-1');
});
</script>
  <script>
        jQuery(document).ready(function ($){
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
                $("#cplusm").val('+' + countryData.dialCode);


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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/property/intl-tel-input/css/intlTelInputc619.css?v=1.0">
</body>
</html>