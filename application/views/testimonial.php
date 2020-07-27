<style>
    .testimonial-content-first-letter {
        font-size: 91px;
        line-height: 30px;
        padding-right: 12px;
        text-transform: uppercase;
        float: left;
        font-family: initial;
        color: #aaa;
    }
</style>
<div class="container-fluid">
    <div class="row about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 pull-right">
                        <h3>TESTIMONIALS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 link">
            <a href="<?= site_url() ?>">Home</a> > Testimonials
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2 style="padding-bottom: 10px; border-bottom: 1px solid rgba(170, 170, 170, 0.41);-webkit-box-shadow:     1px 6px 6px -3px rgba(0,0,0,0.2);-moz-box-shadow:     1px 6px 6px -3px rgba(0,0,0,0.2);box-shadow:     1px 6px 6px -3px rgba(0,0,0,0.2);">Read about our customers. They say <span style="color: #aaa">great things</span>.</h2>
        </div>
        <div class="clearfix"></div>
        <br/>
        <br/>
        <div class="col-sm-9 col-md-9 col-lg-9">
            <?php
            if ($testimonials) 

//print_r($testimonials);
            {
                foreach ($testimonials as $testimonial) {

                    ?>
                    <?=$testimonials->project?>
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                            <div class=""
                                 style="background-image: url('<?= base_url(($testimonial->image && is_file('uploads/testimonials/' . $testimonial->image)) ? 'uploads/testimonials/' . $testimonial->image : 'assets/img/logo.png') ?>');background-size: cover;background-repeat: no-repeat;height:130px;border: 3px solid #aaa;width: 133px; border-radius: 50%; background-position: 0 0;display: inline-block"></div>
                            <div class="text-center">
                                <strong><?= $testimonial->name ?></strong><br />
                                <span class="text-muted"><?=$testimonial->job_desc?></span>
                            </div>

                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9 testimonial-content">
                            <span class="testimonial-content-first-letter">&ldquo;</span><?=$testimonial->comment?><br>
                            <?php if($testimonial->slug)
                            {
                                ?>                          
                            Project : <a target="_blank"  href="<?=site_url(url_title($testimonial->city)."/".( url_title($testimonial->area) )."/$testimonial->slug/")?>"><?=$testimonial->project?></a>
                            <?php
                        }
                        ?>
                        </div>
                        <div class="clearfix"></div>
                        <hr/>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            <h4 style="font-weight: bold;">From the blog</h4>
            <?php
            if (($blogs = $this->properties_model->db->order_by('id',
                    'desc')->limit(3)->get('blog')->result()) != null) {
                foreach ($blogs as $recentBlog) {
                    ?>
                    <a style="color: #333" href="<?= site_url("blog/$recentBlog->slug") ?>" target="_blank"
                       class="blog-thumb">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class=""
                                     style="background-image: url('<?= base_url(($recentBlog->image && is_file('uploads/blog_images/' . $recentBlog->image)) ? 'uploads/blog_images/' . $recentBlog->image : 'assets/img/logo.png') ?>');background-size: cover;background-repeat: no-repeat;height:67px;border: 3px solid #aaa;width: 67px; border-radius: 50%; background-position: 0 0;display: inline-block"></div>

                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <h4 style="margin-top: 15px;"><?= strip_tags($recentBlog->title) ?></h4>
                                <span class="text-muted"><?= date('M d, Y', strtotime($recentBlog->date)) ?></span>
                            </div>
                            <div class="clearfix"></div>
                            <hr/>
                        </div>
                    </a>
                    <?php
                }
            }
            ?>
        </div>
    </div>
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
