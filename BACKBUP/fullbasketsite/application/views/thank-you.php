<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>

<div id="carousel" class="carousel slide home-slider" data-ride="carousel">
    <div class="carousel-inner">
        <?php 
        if($sliders) {
            $i = 0;
            foreach ($sliders as $slider) { ?>
                <div class="<?= $i ? '' : 'active' ?> item fadeInRight animated" style="background: url(<?= base_url('uploads/sliders/' . $slider->image) ?>);">
                    <div class="carousel-caption fadeInUp animated">
                        <h1><b><?= $slider->title ?></b></h1>
                        <p><?= $slider->heading ?></p>
                    </div>
                </div>
                <?php 
                $i++;
            }
        }
        else {
            ?>
            <div class="active item fadeInRight animated" style="background: url(<?= base_url('../../assets/img/demo-slider.jpg') ?>);"></div>
            <?php
        }
        ?>
    </div>
</div>
<div class="col-sm-12 bread_wrap">
   <div class="bredcrm">
        <a href="https://www.fullbasketproperty.com/">Home</a> &gt; <a href="#">Thank you</a>
    </div>
</div>

<div class="container">
    <div class="thank_wrap text-center">
        <div class="tpic">
            <img src="assets/img/thankpic.png" alt="">
        </div>
        <h3 class="thank_head">Thank you for your interest<?= ($this->input->get('title')) ? ' in '.$this->input->get('title').'!' : '!' ?></h3>
        <div class="th2">
            If you neeed immediate Assistance  <span class="phoneno"><a href="tel:+919019011888" style="text-decoration:none;color:#333">+919019011888</a></span>
        </div>
    </div>
</div>
<?php
if($this->input->get('type') == 'home') {
    ?>
    <div class="container">
        <div class="row section2">
            <div class="col-sm-12 text-center">
                <h2 class="h2">TOP SUBMITTED PROPERTY</h2>
                <p>Best Hand Picked Property for You across<br> Bengaluru| Pune | Hyderabad</p>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="row">
                <?php foreach ($properties as $property) { ?>
                <div class="col-md-3 col-sm-4">
                    <div class="property-list">
                        <div class="list-city">
                            <?= $property->city_name ?>
                        </div>
                        <a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" style="text-decoration: none;">
                            <div class="property-img"
                                 style="background-image: url(<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>)"></div>
                            <div class="property-details">
                                <h4><?= $property->title ?></h4>
                                <div class="down"></div>
                                <p class="pull-left"><b>Area</b> : <?= $property->area ?></p>
                                <p class="pull-right">₹<?= $property->budget ?> /-</p>
                        </a>
                        <div class="clearfix"></div>
    <!--                    <div class="sharethis-inline-share-buttons"></div>-->
                        <a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug")?>" class="btn btn-primary btn-block" style="border-radius: 0">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="col-md-3 col-sm-8">
                <div class="all_prop text-center">
                    <i class="fa fa-th" href="#" data-toggle="modal" data-target="#exampleModal"></i>
                    <h3>CAN'T DECIDE ?</h3>
                    <p>Show all properties</p>
                    <a target="_blank" href="<?= site_url('allcities') ?>" class="btn btn-prop">All Properties</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
}

if($this->input->get('property')) {
    ?>
    <div class="container-fluid">
        <?php
        if($similar_builder_property){
            ?>
            <div class="shead text-center">Similar project you may be intrested</div>
            <div class="slide_wrap">
                <div id="slide1" class="owl-carousel owl-theme">
                    <?php 
                    foreach($similar_builder_property as $pData) :
                        $amenities  = $this->properties_model->getAmenities($pData['id']);
                        $price      = $this->properties_model->getPriceFromProperity(['property_id'=>$pData['id']]);
                        $propType   = $this->properties_model->getPropertyType(['id'=>$pData['property_type_id']]);
                        $flatTypes = $this->properties_model->getPropertyFlatType(null, $pData['id']);
                        if($this->session->userdata('logged_in')){
                           $fav = $this->properties_model->getPropertiesFav($pData['id'], $this->session->userdata('logged_in')['id']);
                        }
                        ?>
                        <div class="item">
                            <div class="pbox">
                               <div class="ppout">
                                    <div class="ppic">
                                        <img src="<?= base_url('uploads/'.$pData['slug'].'/'.$pData['image']) ?>" alt="<?= $pData['alt']; ?>">
                                    </div>
                                    <?php
                                    if($pData['rera_number'] !='N/A')
                                        echo '<span class="tagp">RERA APPROVED</span>';
                                    ?>
                                </div>
                                <div class="pbottom">
                                    <div class="pt_wrap clearfix">
                                        <div class="ptitle"><a target="_blank"  href="<?=site_url(url_title($pData['cityName'])."/".( url_title($pData['area']) )."/".$pData['slug']."/")?>"><?= $pData['title'];?></a></div>   
                                        <?php
                                        if($price['price_on_request'] > 0)
                                            echo '<span class="price_o_rqst">Price on Request</span>';
                                        else {
                                            ?>
                                            <div class="ptr"><?= ($price['amount']>0) ? number_format_short($price['amount']) : 0; ?></div> 
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <span class="pcity"><?= $pData['area'];?></span>
                                    <div class="prow1 clearfix">
                                        <span>Type: <?= $propType['name']; ?></span>
                                        <span>Bed: 
                                            <?php
                                            $tmp = [];
                                            foreach ($flatTypes as $k=>$flatType) {
                                                $tmp[] = chop($flatType->flat_type, 'BHK');
                                            }
                                            echo implode(', ', $tmp);
                                            ?>
                                        </span>                          
                                    </div>
                                    <div class="prow2 clearfix">
                                        <?php
                                        $i=0;
                                        foreach($amenities as $amn) {
                                            if($amn->image) {
                                                echo '<div class="img-amn" title="'.$amn->name.'">
                                                        <img class="am-club"  src="'.base_url('uploads/amenities/'.$amn->image).'" alt="'.$amn->name.'">
                                                      </div>';
                                                $i++;
                                            }
                                            if($i == 4)
                                                break;
                                        }
                                        ?>                        
                                    </div>
                                    <div class="pblast clearfix">
                                        <a href="javascript:void(0);" class="like_l <?= ($fav>0) ? 'fa-heart' : '' ?> favourite" data-id="<?= $pData['id'] ?>" data-access="<?= $this->session->userdata('logged_in') ? '' : 'denied' ?>" data-url="<?= $this->session->userdata('logged_in') ? site_url('home/manage_favourites') : site_url('user/login') ?>">
                                            Like
                                        </a>
                                        <a href="javascript:void(0);" class="cmnt_r">Comment</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <?php 
                    endforeach; ?>
                </div>

            </div>
        <?php
        }
        if($similar_location_property){
            ?>
            <div class="shead text-center">Similar project you may be location</div>
            <div class="slide_wrap">
                <div id="slide2" class="owl-carousel owl-theme">                
                    <?php 
                    foreach($similar_location_property as $pData) :
                        $amenities  = $this->properties_model->getAmenities($pData['id']);
                        $price      = $this->properties_model->getPriceFromProperity(['property_id'=>$pData['id']]);
                        $propType   = $this->properties_model->getPropertyType(['id'=>$pData['property_type_id']]);
                        $flatTypes = $this->properties_model->getPropertyFlatType(null, $pData['id']);
                        if($this->session->userdata('logged_in'))
                            $fav = $this->properties_model->getPropertiesFav($pData['id'], $this->session->userdata('logged_in')['id']);
                        ?>
                        <div class="item">
                            <div class="pbox">
                               <div class="ppout">
                                    <div class="ppic">
                                        <img src="<?= base_url('uploads/'.$pData['slug'].'/'.$pData['image']) ?>" alt="<?= $pData['alt']; ?>">
                                    </div>
                                    <?php
                                    if($pData['rera_number'] !='N/A')
                                        echo '<span class="tagp">RERA APPROVED</span>';
                                    ?>
                                </div>
                                <div class="pbottom">
                                    <div class="pt_wrap clearfix">
                                        <div class="ptitle"><a target="_blank"  href="<?=site_url(url_title($pData['cityName'])."/".( url_title($pData['area']) )."/".$pData['slug']."/")?>"><?= $pData['title'];?></a></div>   
                                        <?php
                                        if($price['price_on_request'] > 0)
                                            echo '<span class="price_o_rqst">Price on Request</span>';
                                        else {
                                            ?>
                                            <div class="ptr"><?= ($price['amount']>0) ? number_format_short($price['amount']) : 0; ?></div> 
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <span class="pcity"><?= $pData['area'];?></span>
                                    <div class="prow1 clearfix">
                                        <span>Type: <?= $propType['name']; ?></span>
                                        <span>Bed: 
                                            <?php
                                            $tmp = [];
                                            foreach ($flatTypes as $k=>$flatType) {
                                                $tmp[] = chop($flatType->flat_type, 'BHK');
                                            }
                                            echo implode(', ', $tmp);
                                            ?>
                                        </span>                          
                                    </div>
                                    <div class="prow2 clearfix">
                                        <?php
                                        $i=0;
                                        foreach($amenities as $amn) {
                                            if($amn->image) {
                                                echo '<div class="img-amn" title="'.$amn->name.'">
                                                        <img class="am-club"  src="'.base_url('uploads/amenities/'.$amn->image).'" alt="'.$amn->name.'">
                                                      </div>';
                                                $i++;
                                            }
                                            if($i == 4)
                                                break;
                                        }
                                        ?>                        
                                    </div>
                                    <div class="pblast clearfix">
                                         <a href="javascript:void(0);" class="like_l <?= ($fav>0) ? 'fa-heart' : '' ?> favourite" data-id="<?= $pData['id'] ?>" data-access="<?= $this->session->userdata('logged_in') ? '' : 'denied' ?>" data-url="<?= $this->session->userdata('logged_in') ? site_url('home/manage_favourites') : site_url('user/login') ?>"> 
                                            Like
                                        </a>
                                        <a href="javascript:void(0);" class="cmnt_r">Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    endforeach; ?>
                </div>
            </div>
            <?php
        }?>
    </div>
        <?php
}
?>
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

<!-- WhatsHelp.io widget -->
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