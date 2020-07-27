<style>
    .clients table {
        border-collapse: collapse;
        width: 100%;
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
        position:absolute;right: -6.2%;
        font-weight: bold;
        top: 40%;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .aboutContent{
        border-left: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
    }
    .secondContent{
        border-right: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
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
            text-align: justify;
        }
        .secondContent{
            border-right: none; position:relative;
            text-align: justify;
        }

    }

</style>
<div class="container-fluid">
    <div class="row about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 pull-right">
                        <h3>About us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 link">
            <a href="<?= site_url() ?>">Home</a> > About
        </div>
    </div>
</div>
<div class="container">
    <div class="row about-content">
        <div class="col-sm-12">
            <?php
            //            if (($images = $this->aboutUs_model->getWhere(array('name' => 'first_images'),
            //                    'about_us_images')) != null) {
            //                foreach ($images as $image) {
            ?>
            <!--                    <img src="--><?php //= base_url($image->image) ?><!--" class="img-responsive">-->
            <?php
            //                }
            //            } else {
            ?>
            <!--                <img src="https://placehold.it/527x388" class="img-responsive" style="width:100%;">-->
            <?php
            //            }
            ?>

            <div class="aboutContent text-center"
                 style="">
                <h3 class="first-title"><?= $this->aboutUs_model->getOption('first_title') ?></h3>
                <?= $this->aboutUs_model->getOption('first_content') ?>
                <br><br>
                <!--<a href="<?= $this->aboutUs_model->getOption('first_facebook') ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?= $this->aboutUs_model->getOption('first_twitter') ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?= $this->aboutUs_model->getOption('first_google') ?>"><i class="fa fa-google-plus"></i></a>-->
            </div>
        </div>
        <div class="clearfix"></div>
        <hr style="border-top-color: #a9a9a9"/>

        <div class="clearfix"></div>
        <div class="col-sm-12">

            <?php
            //            if (($images = $this->aboutUs_model->getWhere(array('name' => 'second_images'),
            //                    'about_us_images')) != null) {
            //                foreach ($images as $image) {
            //                    ?>
            <!--                    <img src="--><?php //= base_url($image->image) ?><!--" class="img-responsive">-->
            <!--                    --><?php
            //                }
            //            } else {
            //                ?>
            <!--                <img src="https://placehold.it/527x388" class="img-responsive" style="width:100%;">-->
            <!--                --><?php
            //            }
            ?>
            <div class=" secondContent text-center"
                 style="">
                <h3 class="second-title"><?= $this->aboutUs_model->getOption('second_title') ?></h3>
                <?= $this->aboutUs_model->getOption('second_content') ?>
                <br><br>
                <!--<a href="<?= $this->aboutUs_model->getOption('second_facebook') ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?= $this->aboutUs_model->getOption('second_twitter') ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?= $this->aboutUs_model->getOption('second_google') ?>"><i class="fa fa-google-plus"></i></a>-->
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                    if (($option = $this->aboutUs_model->getOption('client_title')) != null) {
                        ?>
                        <h2 class="text-center"><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
                    <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?= $this->aboutUs_model->getOption('client_content') ?>
                        </div>
                    </div>
                    <div class="text-center hide">
                        <?php
                        if (($images = $this->aboutUs_model->getWhere(array('name' => 'client_images'),
                                'about_us_images')) != null) {
                            foreach ($images as $image) {
                                ?>
                                <img style="display: inline-block; margin-right: 1%"
                                     src="<?= base_url($image->image) ?>" class="img-responsive">
                                <?php
                            }
                        } else {
                            ?>
                            <!-- <img style="display: inline-block; margin-right: 1%" src="https://placehold.it/120x350" class="img-responsive">-->
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php
                    if (($option = $this->aboutUs_model->getOption('client_title_2')) != null) {
                        ?>
                        <h2 class="text-center"><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
                    <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?= $this->aboutUs_model->getOption('client_content_2') ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php
                    if (($option = $this->aboutUs_model->getOption('client_title_3')) != null) {
                        ?>
                        <h2 class="text-center"><?= $option ?></h2><br>
                        <?php
                    }
                    ?>
                    <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                            <?= $this->aboutUs_model->getOption('client_content_3') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row img-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><?= $this->aboutUs_model->getOption('closer_look_title') ?></h2>
                <?php
                if (($images = $this->aboutUs_model->getWhere(array('name' => 'closer_look_images'),
                        'about_us_images')) != null) {
                    if (isset($images[0]) && $images[0]) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                               <img src="<?=base_url($images[0]->image)?>" class="img-responsive" style="display: inline-block; width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold; text-align: left"><?=$images[0]->title?></h2>
                        </div>
                        <?php
                    }
                    if (isset($images[1]) && $images[1]) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                            <img src="<?=base_url($images[1]->image)?>" class="img-responsive" style="display: inline-block; width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold; text-align: right"><?=$images[1]->title?></h2>
                        </div>
                        <?php
                    }
                    if (isset($images[2]) && $images[2]) {
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top: -10%; margin-bottom: -9%">
                            <img src="<?=base_url($images[2]->image)?>" class="img-responsive" style="display: inline-block; width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold"><?=$images[2]->title?></h2>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>