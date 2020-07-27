<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="container-fluid">
    <div class="row about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 pull-right">
                        <h3>Builders</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 link">
            <a href="<?= site_url() ?>">Home</a> > Builders > All Builders
        </div>
    </div>
</div>
<div class="container-fluid conwrap">
    <?php
    if($buildersData) {
        ?>
        <div class="shead text-center">All Builders</div>
        <div class="builder_row">
            <div class="row">
                <?php
                foreach($buildersData as $bd) {                    
                    ?>
                    <div class="col-sm-4">
                        <div class="bbox">
                            <div class="bbox_inner">
                               <div class="bpic_out">
                                    <div class="bpic">
                                        <?php 
                                        if($bd['propertyImage'] && file_exists('uploads/'.$bd['slug'].'/'.$bd['propertyImage'])) {?>
                                            <img src="<?= base_url('uploads/'.$bd['slug'].'/'.$bd['propertyImage']); ?>" alt="<?php echo $bd['name']; ?>">
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/img/bu1.jpg'); ?>" alt="<?php echo $bd['name']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="boverlay">
                                        <img src="<?php echo base_url('uploads/builders/'.$bd['image']); ?>" alt="<?php echo $bd['name']; ?>">
                                    </div>
                                </div>
                                <div class="bubottom text-center">
                                    <h3 class="btitle">Total Project : <?php echo $bd['totalProperty']; ?></h3>
                                    <a target="_blank" href="<?php echo base_url('listing/?builder='.urlencode($bd['name'])) ;?>" class="know_btn">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php echo $pagination; ?>
        </div>
        <?php
    }
    ?>
    
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