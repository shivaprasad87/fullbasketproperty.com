<style>
    .clients table {
        border-collapse: collapse;
        width: 100%;
    }
    
    /* footer {
    background: #e9e5e4;
    padding-top: 40px;
    opacity: 0.9;
    background-image: url("<?=base_url();?>assets/img/img1.jpg");
    background-position: 100% 100%;
    background-size: cover;
    } */
    .grid { 
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-gap: 20px;
    align-items: stretch;
    }
    .grid > article {
    border: 1px solid #ccc;
    box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
    }
    .clients table td {
        padding: 5px 15px;
    }
    .first-title{
        background-color: #fff;
        color: #d57d3d !important;
        padding: 0 2%;
        position:absolute;
        left: -10.3%;
        font-weight: bold;
        top: 44%;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }
    .second-title{
        background-color: #fff;
        color: #d57d3d !important;
        padding: 0 2%;
        position:absolute;
        right: -6.2%;
        font-weight: bold;
        top: 40%;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .about img{
        width:100%;
    }
    .aboutbg1 img{
        width:80%;
    }
    .aboutContent{
        border-left: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
    }
    .secondContent{
        border-right: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
    }
    .about-content {
    padding-top: 5px; 
    padding-bottom: 5px;
}

    @media (min-width: 320px) and (max-width: 1024px) {
        .first-title{
            text-align: center;
            position:relative;
            left: 0;
            font-weight: bold;
            top: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .second-title{
            text-align: center;
            position:relative;
            top: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .aboutContent{
            border-left: none; position:relative;
           /*text-align: justify;*/
        }
        .secondContent{
            border-right: none; position:relative;
           /* text-align: justify;*/
        }

    }
    @media (min-width: 768px){
       .text-center{
        font-size: 25px;
       }
       .about img{
        width:100%;
        }
        .aboutbg1 img{
            width:80%;
        }
        .about-para li{
        margin-bottom:8px;
        font-weight: 400;
        font-size: 13px;
        }
        .about-para p{
            font-size: 13px;
            font-weight: 400;
        }
        
        .orange-text{
        text-align: center;
        padding: 8px;
        width: 109% !important;
        margin: 48px -35px 24px;
        /* margin: 116px -30px 36px; */
        background: #f7771b;
        color: white;
    }
    .service-content{
        margin-top:15px;
    }

    }

    .service-content{
        margin-top:25px;
    }
    .orange-text{
        text-align: center;
        padding: 10px;
        width: 109% !important;
        /* margin: 5px -30px -2px; */
        margin: 22px -30px 0px;
        background: #f7771b;
        color: white;
    }

    .orangeText
    {
        color:#f7771b;
        font-size: 23px;
        font-weight: bold;
    }
    .blackText
    {
        color:black;
        font-size: 23px;
        font-weight:bold;
    }

    .about-para li{
      margin-bottom:8px;
      /* font-weight: 500; */
      font-size: 15px;
    }
    .about-para p{
        font-size: 15px;
        /* font-weight: 500; */
    }
    .aboutContent {
    border-left: 2px solid #00000012;
    
}
    .secondContent {
        border-right: 2px solid #00000012;
        font-size: 18px;
        
    }

    .clients:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(white,#dededb61, #ededec4a);
    background-color: #f3f1f100;
    opacity: .7;
   
}

.clients > * {
    z-index: 100;
}

.clients {
    position: relative;
    min-height: 60vh;
    /* background-color: #e4eaea; */
    background-size: cover;
    display: flex;
    z-index: 1;
  
}

h1 {
    margin: auto;  
}
/* body {
    margin: 10px;
} */


</style>



    <div class="container-fluid">
        <div class="row about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="col-sm-12 col-md-12 pull-right">
                            <h3>About us</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 link">
                <a href="<?= site_url() ?>">Home</a> > About
            </div>
        </div>
    </div>

    <br>
    <br>
<?php
$images = $this->aboutUs_model->getWhere(array('name' => 'first_images'), 'about_us_images');
 $who_we_are_image = $images[0]->image;
?>
    <div class="container-fluid">
        <div class="row" style=" margin-bottom: 10px;">
                <div class="col-xs-12 col-sm-6 col-md-8 about">
                    <img src="<?= base_url(). $who_we_are_image;?>">
                </div>
                
            
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="text-center" ><?= $this->aboutUs_model->getOption('first_title') ?></h1><br>
                            <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="about-para">
                                            <p><?= $this->aboutUs_model->getOption('first_content') ?> <p>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <br>
                                        <div style="position: absolute; right: 5px;/* position: absolute;*/width: 100%"><a class="btn btn-primary" style="border-radius: 0; " href="#">Read More</a>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center"> -->
                                      
                                        <!-- <div class="orange-text">
                                            <div class="link">
                                                    <h4>Home-- About-us</h4>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                        
                        </div>
                            
                    
                    </div>
                </div>
        </div> 
        <br>
        <?php
$images = $this->aboutUs_model->getWhere(array('name' => 'third_images'), 'about_us_images');
 $who_we_are_image = $images[0]->image;
?>
  <!-- SERVICES WE OFFER-->
  <div class="container" style=" margin-bottom: 10px;">
    <div class="Services">
       <span class="orangeText">SERVICES &nbsp;</span>&nbsp;<span class="blackText"><?= $this->aboutUs_model->getOption('third_title') ?></span>
         <div class="row service-content" >
            <div class="col-xs-12 col-sm-8 col-md-8">
           
          
           <div class="about-para">
          <?= $this->aboutUs_model->getOption('third_content') ?> 
                </div> 
               
            </div>
            
        
            <div class="col-xs-12 col-sm-4 col-md-4 about">
            
                <img src="<?= base_url(). $who_we_are_image;?>" class="" alt="Table Setting">
            </div>
           
             
        </div>
    </div>
    </div>
  <br>
 <!-- SERVICES-End -->

<br>
<br>
<!-- Third -->
<?php
$images = $this->aboutUs_model->getWhere(array('name' => 'second_images'), 'about_us_images');
 $who_we_are_image_2 = $images[0]->image;
?>
<div class="container" style=" margin-bottom: 10px;">
     <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-4 about">
                
                    <img src="<?= base_url().$who_we_are_image_2;?>" class="" style="">
                </div>
                
            
                <div class="col-xs-6 col-sm-8 col-md-8">
                <div class="about-para">
                    <h1 class="text-center" ><?= $this->aboutUs_model->getOption('second_title') ?></h1><br>
                       <?= $this->aboutUs_model->getOption('second_content') ?>
                    </div>
                
                    <br>
                    <br>

                   <!-- <div class="about-para">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                    </div>-->
                    
                
                </div>
        </div>
    </div>

    <br>
    <!-- End of third -->
    <div class="clearfix"></div>

    <!-- Fourth -->
    <div class="container" style=" margin-bottom: 10px;">
    <div class="row about-content">
        <div class="col-xs-12 col-sm-12 col-md-12">
           

        <div class="aboutContent text-center" >
                <h3 class="first-title"><?= $this->aboutUs_model->getOption('vision_title') ?></h3>
               <p><?= $this->aboutUs_model->getOption('vision_content') ?></p>
                <br>
                <br>
              
            </div>
        </div>
        <div class="clearfix"></div>

      
      

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class=" secondContent text-center">
                <h3 class="second-title"><?= $this->aboutUs_model->getOption('mision_title') ?></h3>
               <p><?= $this->aboutUs_model->getOption('mision_content') ?> </p>
                <br><br>
               
            </div>
        </div>
    </div>
</div>
<!-- End of Fourth -->

<!-- Six -->
<!-- <div class="container">
<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="row ">
                <div class="col-sm-6 col-md-4 col-lg-4 text-center">
                    <div class="" style="background-image: url('<?= base_url('assets/img/trust4.png');?>');background-size: cover;background-repeat: no-repeat;height:130px;border: 3px solid #aaa;width: 133px;background-position: 0 0;"></div>
                     <div class="text-center">
                       
                        <span class="text-muted">Recognising clients Requirement</span>
                      </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 text-center">
                    <div class="" style="background-image: url('../assets/img/trust1.png');background-size: cover;background-repeat: no-repeat;height:130px;border: 3px solid #aaa;width: 133px;background-position: 0 0;"></div>
                     <div class="text-center">
                        
                        <span class="text-muted">Comprehension and Evaluation</span>
                      </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 text-center">
                    <div class="" style="background-image: url('../assets/img/trust2.png');background-size: cover;background-repeat: no-repeat;height:130px;border: 3px solid #aaa;width: 133px;background-position: 0 0;"></div>
                     <div class="text-center">
                       
                        <span class="text-muted">Offering relevant services</span>
                      </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 text-center">
                    <div class="" style="background-image: url('../assets/img/trust3.png');background-size: cover;background-repeat: no-repeat;height:130px;border: 3px solid #aaa;width: 133px;background-position: 0 0;"></div>
                     <div class="text-center">
                       
                        <span class="text-muted">Arrange special discount</span>
                      </div>
              </div>   
         </div>
    </div>
</div> -->


<!-- End of Fifth -->
<div class="clearfix"></div>

<!-- Fifth -->
 <div class="container">

       <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
            <span class="blackText"><?= $this->aboutUs_model->getOption('core_title') ?></span><span class="orangeText">&nbsp;VALUES </span>
           <br>
           <br>
           <div class="about-para">
          <?= $this->aboutUs_model->getOption('core_content') ?> 

                </div> 
               
            </div>
            
        <?php
$images = $this->aboutUs_model->getWhere(array('name' => 'core_images'), 'about_us_images');
 $who_we_are_image_2 = $images[0]->image;
?>
            <div class="col-xs-12 col-sm-4 col-md-4 aboutbg1">
            
                <img src="<?= base_url().$who_we_are_image_2;?>" class="" alt="Table Setting" >
            </div>
           
             
        </div>
</div>

<br>
<br>
<br>
<!-- End of Fifth -->

 <section class="container">
    <div class="row">
        <div class="clients">
            <div class="row">
                <div class="col-sm-12">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?php
                    if (($option = $this->aboutUs_model->getOption('client_title')) != null) {
                        ?>
                        <h2 class="text-center"><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
                          <!--<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                            n unknown printer took a galley.</p>-->
                        </div>
                       <!-- <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                           <span style="font-weight: 500;font-size: 17px;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</span>
                        </div>
                    </div>  -->
                    <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?= $this->aboutUs_model->getOption('client_content') ?>
                        </div>
                    </div>
                    <!--<div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                           <span style="font-weight: 400;font-size: 17px;">Lorem Ipsum has been </span>
                        </div>
                    </div>  -->

                   
            </div>
                 <div class="col-sm-12">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?php
                    if (($option = $this->aboutUs_model->getOption('client_title_3')) != null) {
                        ?>
                        <h2 class="text-center"><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
                          <!--<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                            n unknown printer took a galley.</p>-->
                        </div>
                       <!-- <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                           <span style="font-weight: 500;font-size: 17px;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</span>
                        </div>
                    </div>  -->
                    <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?= $this->aboutUs_model->getOption('client_content_3') ?>
                        </div>
                    </div>
                    <!--<div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                           <span style="font-weight: 400;font-size: 17px;">Lorem Ipsum has been </span>
                        </div>
                    </div>  -->

                   
            </div>
        </div>
    </div>

</div>

</section>  
    <div class="clearfix"></div>
      <br>          

    
    <div class="clearfix"></div>
    <!--<div class="row img-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><?= $this->aboutUs_model->getOption('closer_look_title') ?></h2>
                <?php
                if (($images = $this->aboutUs_model->getWhere(array('name' => 'closer_look_images'),
                        'about_us_images')) != null) {
                    if (isset($images[0]) && $images[0]) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                               <img src="<?=base_url($images[0]->image)?>" class="img-responsive" style=" width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold; text-align: left"><?=$images[0]->title?></h2>
                        </div>
                        <?php
                    }
                    if (isset($images[1]) && $images[1]) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                            <img src="<?=base_url($images[1]->image)?>" class="img-responsive" style=" width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold; text-align: right"><?=$images[1]->title?></h2>
                        </div>
                        <?php
                    }
                    if (isset($images[2]) && $images[2]) {
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top: -10%; margin-bottom: -9%">
                            <img src="<?=base_url($images[2]->image)?>" class="img-responsive" style=" width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold"><?=$images[2]->title?></h2>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>  -->
</div>
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