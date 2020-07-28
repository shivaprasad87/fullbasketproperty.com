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
              
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END --></div>
        </div>
    
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
 