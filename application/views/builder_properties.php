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
                <div class="<?= $i ? '' : 'active' ?> item fadeInRight animated" style="background: url(<?= base_url('uploads/'.$slider->slug.'/' . $slider->image) ?>);">
                   <!--  <div class="carousel-caption fadeInUp animated">
                        <h1><b><?= $slider->title ?></b></h1>
                        <p><?= $slider->heading ?></p>
                    </div> -->
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
        <div class="col-sm-2">
            <img src="<?=base_url("uploads/builders/".$builders[0]->image);?>" alt="" style="width:auto;">
            <br>
            <center>
            <p style="white-space: nowrap;"><b><?=$builders[0]->name;?></b></p>
            </center>
        </div>
       <div class="col-sm-2"></div>
        <div class="col-sm-8">
             <?=$builders[0]->description;?>
        </div> 
</div> 
 
    <?php
 

if($this->input->get('builder') || $this->input->get('location')) {
        
    ?>
    <div class="container-fluid">
        <?php
        if($similar_builder_property){
            //print_r($similar_builder_property);
            ?>
            <div class="shead text-center">Other Project from <?=$this->input->get('builder');?>  </div>
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
            <div class="shead text-center">Similar Projects At <?=$this->input->get('location');?>  </div>
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