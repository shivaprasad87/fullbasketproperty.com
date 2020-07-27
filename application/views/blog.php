<style>
    .blog-thumb,.blog-thumb:hover{
        color: #333;
    }
    .blog-thumb:hover{
        text-decoration: none;
    }
</style>
<div class="container-fluid hide">
    <div class="row about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 pull-right">
                        <h3><?= $blog->title ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 link">
            <a href="<?= site_url() ?>">Home</a> > <a href="<?= site_url('blog') ?>">Blogs</a> > <?= $blog->title ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <img class="item blog-item active img-responsive" src="<?= base_url('uploads/blog_images/' . $blog->image) ?>">

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h1 class="text-center">
            <?= $blog->title ?>
        </h1>
        <div class="text-center">
            <strong>By :</strong>&nbsp;<?= $blog->author ?>&emsp;&emsp;<strong>Date :</strong>&nbsp;<?= date('M d, Y',
                strtotime($blog->date ? $blog->date : $blog->date_added)) ?>
        </div>
        <br/>
        <div class="col-sm-2 col-md-2">


        </div>
        <div class="col-sm-8 col-md-8 ">
            <div class="blog-content">
                <?= $blog->content ?>
            </div>
            <br/>
            <div class="text-center">
                <?php
                if ($prev_blog) {
                    ?>
                    <a href="<?= site_url("blog/$prev_blog->slug") ?>" class="btn btn-primary"><i
                                class="fa fa-chevron-left" aria-hidden="true"></i> Previous</a> &emsp;
                    <?php
                } else {
                    ?>
                    <a href="#" class="btn btn-primary disabled" disabled><i class="fa fa-chevron-left"
                                                                             aria-hidden="true"></i> Previous</a> &emsp;
                    <?php
                }
                if ($next_blog) {
                    ?>
                    <a href="<?= site_url("blog/$next_blog->slug") ?>" class="btn btn-primary">Next <i
                                class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <?php
                } else {
                    ?>
                    <a href="#" class="btn btn-primary disabled" disabled>Next <i class="fa fa-chevron-right"
                                                                                  aria-hidden="true"></i></a>
                    <?php
                }
                ?>

                <br/>
            </div>
            <div class="clearfix"></div><br/><br/>
            <h4>Latest Blogs:</h4>
            <div class="row">
                <?php
                if (($blogs = $this->properties_model->db->where('id !=', $blog->id)->order_by('id',
                        'desc')->limit(3)->get('blog')->result()) != null) {
                    foreach ($blogs as $recentBlog) {
                        ?>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <a href="<?=site_url("blog/$recentBlog->slug")?>" target="_blank" class="blog-thumb">
                                <div class="" style="background-image: url('<?= base_url(($recentBlog->image && is_file('uploads/blog_images/' . $recentBlog->image)) ? 'uploads/blog_images/' . $recentBlog->image: 'assets/img/logo.png') ?>');background-size: cover;background-repeat: no-repeat;height:150px;width: 100%; min-height: 170px; background-position: center"></div>
                                <div style="margin-top: 5px; font-weight: bold !important;">
                                    <?= $recentBlog->title ?>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <br/>
            <div class="clearfix"></div><br/>
            <div class="pull-right"><!-- AddToAny BEGIN -->
              <!--  <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_plus"></a>
                    <a class="a2a_button_print"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_copy_link"></a>
                </div>-->
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END --></div>
        </div>
    <!--    <div class="col-sm-2 col-md-2 blog-sticky" style="">
            <button type="button" class="btn btn-primary btn-blog-connect">Connect Us</button>
            <form action="<?= site_url('home/sendmail') ?>" method="post" role="form">
                <div class="form-group text-center" style="font-size: 18px">
                    <strong>Connect Us</strong>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" style="border-radius: 0" name="name" required
                           placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" style="border-radius: 0" name="email" required
                           placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" style="border-radius: 0" name="phone" required
                           placeholder="Phone">
                    <input type="hidden" name="redirect" value="<?= current_url() ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="border-radius: 0" name="message" required
                              placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha"
                         style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;"
                         data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                </div>
                <div class="form-group">
                    <div class="pull-right">
                        <button type="submit" style="border-radius: 0" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <br/>

        <div class="col-sm-2 col-md-2 col-lg-2">

        </div>
        <div class="col-sm-8 col-md-8 col-lg-8">
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
    -->
    </div>
</div>
<script>
    var blog = true;
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