<style>
    .property-bg .btn.btn-link {
        color: #fff;
        font-size: 20px;
        margin-top: 10px;
    }
</style>
<div class="container-fluid">
    <div class="row property-bg" title="<?= $property->alt ?>"
         style="background-image: url('<?= base_url("uploads/$property->slug/$property->image") ?>')">
        <div class="row">
            <div class="col-sm-12 link">
                <a href="<?= site_url('listing') ?>">Properties</a> > <?= $property->title ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <h1><?= $property->title ?></h1>
                <h4>Project By: <?= $property->builder ?></h4>
                <p>RERA Registration: <?= $property->rera_number ?></p>
                <h3><i class="fa fa-map-marker"></i> At <?= $property->location . ', ' . $property->city_name ?></h3>
                <h1 class="sqft"><?= $property->budget ?>/sqft <span>onwards</span></h1>
            </div>
            <div class="col-sm-5">
                <form action="" method="post">
                    <div class="know_more col-sm-12">
                        <?php
                        if (isset($mail_sent) && $mail_sent) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" clasbs="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <span style="color: #3c763d;">We just sent a notification to the listing author about your enquiry.</span>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="col-sm-12" id="iwanttoknow">
                            <h3>I want to know more</h3>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Mobile</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="mobile" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="g-recaptcha" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="pull-right btn btn-link">Connect me</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row floor_plan">
        <div class="col-sm-12 text-center">
            <h3>Floor Plans:</h3><br>
        </div>
        <div class="col-sm-6">
            <div class="flexslider">
                <ul class="slides">
                    <?php

                    if (($floors = $this->properties_model->getPropertyFloorPlans($property->id)) != null) {
                        foreach ($floors as $floor) {
                            ?>
                            <li data-thumb="<?= base_url($floor->image) ?>">
                                <img src="<?= base_url($floor->image) ?>"/>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li data-thumb="https://placehold.it/250x300">
                            <img src="https://placehold.it/250x300"/>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="carousel slide slide-carousel" id="floor_plans" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    if (($flatTypes = $this->properties_model->getPropertyFlatType(null, $property->id)) != null) {
                        for ($i = 0; $i < count($flatTypes); $i++) {
                            ?>
                            <div class="item <?= $i === 0 ? 'active' : '' ?>">
                                <h4 class="animated fadeIn"><?= $flatTypes[$i]->name ?>
                                    , <?= $flatTypes[$i]->size ?> <?= $flatTypes[$i]->unit ?></h4>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="item active">
                            <h4 class="animated fadeIn">&nbsp;</h4>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div>
                <?= $property->description ?>
            </div>
            <p><i class="fa fa-bed"></i> &emsp;<?= $property->bedrooms ?> Bedrooms</p>
            <p><i class="fa fa-bath"></i>&emsp;<?= $property->bathrooms ?> Bathroom</p>
            <p><i class="fa fa-building-o"></i>&emsp;<?= $property->facades ?> Balconies</p>
            <p>Possession: <?= $property->property_status ?> </p>
            <div><strong><i>USP:</i></strong> <?= $property->usp ?></div>
            <a data-toggle="modal" href="#get-phone" class="btn btn-phone">Get Phone No.</a>
            <a data-toggle="modal" href="#prop-contact" class="btn btn-connect">Connect with Builder</a>
            <a href="<?= $this->properties_model->getPropertyParam(array('id' => $property->id), "properties",
                "facebook") ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="<?= $this->properties_model->getPropertyParam(array('id' => $property->id), "properties",
                "twitter") ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="<?= $this->properties_model->getPropertyParam(array('id' => $property->id), "properties",
                "google") ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
</div>

<!--Get Phone Modal-->
<div class="modal fade" id="get-phone">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">GET IN TOUCH THROUGH PHONE</h4>
            </div>
            <div class="modal-body text-center">
                <a href="tel:+19089675906" style="color: #333 !important;text-decoration: none"><h3><i
                                class="fa fa-phone-square" aria-hidden="true"></i> +91 901 901 1888</h3></a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--End Get Phone Modal-->

<!--Contact Builder Form-->
<div class="modal fade" id="prop-contact">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="<?= site_url('home/property_enquiry') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">GET IN TOUCH WITH US</h4>
                </div>
                <div class="modal-body">
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-user"
                                                                                            aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" type="text" name="name"
                                       placeholder="Name" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="property_id" value="<?= $property->id ?>"/>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-phone"
                                                                                            aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" type="text" name="phone"
                                       placeholder="Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-at"
                                                                                            aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" type="email" name="email"
                                       placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-envelope"
                                                                                            aria-hidden="true"></i></span>
                                <textarea style="border-radius: 0" class="form-control" name="message"
                                          placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button style="border-radius: 0" type="button" class="btn btn-flat btn-default"
                            data-dismiss="modal"><i
                                class="fa fa-times-circle"></i>
                        Close
                    </button>
                    <button style="border-radius: 0" type="submit" class="btn btn-flat btn-primary"><i
                                class="fa fa-paper-plane"
                                aria-hidden="true"></i>
                        Send
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--End Contact Builder form-->
<div class="container-fluid">
    <div class="row spec_section">
        <div class="col-sm-12">
            <h1 class="text-center">Project Specification You Should Know</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    if (($specifications = $this->properties_model->getPropertySpecification($property->id)) != null) {
                        foreach ($specifications as $k => $specification) {
                            ?>
                            <div class="item text-center <?= $k === 0 ? 'active' : '' ?>">
                                <div class="col-sm-12">
                                    <h2><?= $specification->name ?></h2>
                                    <p><?= $this->properties_model->getPropertySpecification($property->id,
                                            $specification->id) ?></p>
                                </div>
                                <!--                                <div class="col-sm-2 hidden-xs">-->
                                <!--                                    <img src="-->
                                <?//= base_url('assets/img/arrow.png') ?><!--" class="img-responsive">-->
                                <!--                                </div>-->
                                <!--                                <div class="col-sm-5">-->
                                <!--                                    <h2>Bedrooms</h2>-->
                                <!--                                    <p>Floor: Wooden Laminated in all Rooms</p>-->
                                <!--                                    <p>Walls: Acrylic Emulsion paint with pleasing shades</p>-->
                                <!--                                </div>-->
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <a class="btn btn-more" href="#iwanttoknow">Know More</a>
        </div>
    </div>
    <div class="row amenity-section">
        <div class="col-sm-12 text-center">
            <h2>Amenities</h2>
            <?php
            $logos = [
                'swimming',
                'cricket',
                'tennis',
                'basketball',
                'club',
                'garden',
                'jogging',
                'skating',
                'shopping',
                'bus'
            ];
            if (isset($property->amenities) && $property->amenities) {
                ?>
                <ul class="text-center">
                    <?php
                    foreach ($property->amenities as $amenity) {
                        ?>
                        <li>
                            <?php
                            if ($amenity->image) {
                                ?>
                                <img style="width: 45px" src="<?= base_url('uploads/amenities/' . $amenity->image) ?>">
                                <?php
                            } else {
                                ?>
                                <img src="https://placehold.it/58x58">
                                <?php
                            }
                            ?>
                            <p><?= ucwords($amenity->name) ?></p>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            } else {
                ?>
                <div class="alert alert-info text-center">
                    <strong> No amenities were listed for this facility </strong>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
    if (isset($property->gallery) && $property->gallery) {
        ?>
        <div class="row">
            <div class="carousel slide slide-carousel" id="propertyImages" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $i = 0;
                    foreach ($property->gallery as $gallery) {
                        if ($gallery->image && is_file(FCPATH . $gallery->image)) {
                            ?>
                            <li data-target="#propertyImages" data-slide-to="<?= $i ?>"
                                class="<?= $i === 0 ? 'active' : '' ?>"></li>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($property->gallery as $gallery) {
                        if ($gallery->image && is_file(FCPATH . $gallery->image)) {
                            ?>
                            <div class="item <?= $i === 0 ? 'active' : '' ?>">
                                <img style="width: 100%" src="<?= base_url($gallery->image) ?>"
                                     alt="<?= $property->title ?>">
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </div>
                <a class="left carousel-control" href="#propertyImages" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#propertyImages" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
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
