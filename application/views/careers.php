<div class="container career">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>We Are Hiring</h2>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <p style="border-bottom: 2px dashed #002b74">
                <!--<strong style="color: rgba(0, 43, 116, 0.38);">Total Vacancy: 30</strong>-->
                <span class="clearfix"></span>
                <br/>
            </p>

            <!--            Opening Accordion-->
            <div class="panel-group accrd job_openings" id="accordion">

                <?php
                if ($careers){
                    foreach ($careers as $i => $career) {
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle <?=$i === 0 ? '' : 'collapsed'?>" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse<?=$career->id?>" aria-expanded="<?=$i === 0 ? 'true' : 'false'?>">
                                        Hiring! <?=$career->title?> </a>
                                </h4>
                            </div>
                            <div id="collapse<?=$career->id?>" class="panel-collapse collapse <?=$i === 0 ? 'in' : ''?>" aria-expanded="<?=$i === 0 ? 'true' : 'false'?>">
                                <div class="panel-body">
                                    <div class="section-title text-left">
                                        <h5><strong>Available Positions</strong></h5>

                                        <p><strong>Bangalore: <?=$career->bangalore_vacancy?$career->bangalore_vacancy:0?>&nbsp;, Pune: <?=$career->pune_vacancy?$career->pune_vacancy:0?></strong></p>
                                        <p><strong> Posted On: <?=date("jS F Y", strtotime($career->created_at)); ?> </strong>
                                        </p>
                                        <hr>
                                        <div style="text-align: justify;"><strong>Job Role</strong> - <?=$career->role?></div>

                                        <div style="text-align: justify;"><strong>Qualities -</strong> <?=$career->qualities?></div>
                                    </div>

                                    <div class="position-details">
                                        <h4><strong>Position Details</strong></h4>

                                        <ul class="list-unstyled list-block">
                                            <?php
                                            if ($career->type){
                                                ?>
                                                <li><strong>Job Type: </strong> <?=$career->type?>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                            <li><strong>Experience: </strong> <?=$career->experience?></li>
                                            <li><strong>Qualification: </strong> <?=$career->qualification?></li>
                                        </ul>
                                    </div>
                                    <p><a  onclick="$('#application_for').val('<?=$career->title?>')"  href="<?= site_url() ?>careers#en-application" class="read-more">Apply Now</a></p>
                                </div>

                            </div>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <!--            end opening accordion-->
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8">
            <div class="panel-group accrd job_article" id="accordion_2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_2"
                               href="#collapse_art4">
                                Are you interested to be part of our excellent team? Full Basket Property Pvt Ltd! is
                                looking for Competent Candidate. </a>
                        </h4>
                    </div>
                    <div id="collapse_art4" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p style="text-align: justify;">If you are a people’s person, with excellent communication
                                skill, and dynamic enough to face any challenge at the workplace, real estate is the
                                ideal domain to kick start your career. We here at Full Basket Property are open to
                                welcome smart and super enthusiastic taskmasters, ready to try their luck to enter the
                                threshold of real estate paradigm.</p>

                            <p style="text-align: justify;">Career as a realtor is elegant and challenging by helping
                                out the clients with the properties they are looking from. Mostly, they have to filter
                                the listings that we maintain and have to find out the most sought-after lands and homes
                                for our trusted clienteles we have maintained so far.</p>

                            <p style="text-align: justify;">Apart from retaining the old business relationships, we are
                                equally passionate in drawing attention the new home buyers. At Full Basket Property, we
                                aim to support out esteem clients with the plethora of properties we have in our
                                listings that are pretty more upgraded and sorted by perfectionists.</p>

                            <p style="text-align: justify;">We are happy to make the home hunting process a little less
                                complicated for the new residence searchers. For that, we look for young and passionate
                                employees in our multiple positions. Depending on the experience we offer jobs. But, at
                                the same time, we score on the talent quotient while hiring professionals as well as
                                fresher’s for the positions.</p></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_2"
                               href="#collapse_art5">
                                Life at Full Basket Property </a>
                        </h4>
                    </div>
                    <div id="collapse_art5" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <p style="text-align: justify;">Full Basket Property houses some of the finest realtor
                                specialists working in this generation. We are proud of our existing sets of employees
                                who are 100% dedicated to their jobs. You being a part of the Full Basket Property
                                family will be abided with the opportunity to learn more. If you have a disciplined
                                learner inside you, within a very short while you will be elevated from the fresher to a
                                taskmaster.</p>

                            <p style="text-align: justify;">But for that, you will have to upgrade your knowledge and
                                understanding of the latest real estate market expectations. From our end, the teams
                                often arrange meetings and seminars where the team leads discuss on various topics
                                regarding the latest growths and developments in the realm of real estate. With the help
                                of Audio-Video and Slide shares, the discussions are carried on.</p></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_2"
                               href="#collapse_art6">
                                Why Join Full Basket Property </a>
                        </h4>
                    </div>
                    <div id="collapse_art6" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <p style="text-align: justify;">Following the philosophy of our company, we are focused on
                                maintaining an amiable atmosphere in the workplace. Employees work as teams and the team
                                leaders and managers are in the constant process to boost the juniors by providing
                                resources and ideas.</p>

                            <p style="text-align: justify;">Full Basket Property is run like a family where we focus
                                deeply on maintaining excellent relationship within teams and senior management. Often
                                the senior management strategizes plans and decisions by interacting with teams, which
                                we consider viable for the betterment of the company to a certain extent.</p>

                            <p style="text-align: justify;">If the team members work shoulder-to-shoulder, they can
                                possibly fuel the best of the growth of any organization. Like corporate houses, such
                                behavior is also expected in the real estate domain as well.</p></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_2"
                               href="#collapse_art7">
                                Career Growth </a>
                        </h4>
                    </div>
                    <div id="collapse_art7" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <p style="text-align: justify;">Our training teams will help you scale yourself by learning
                                the use of proper tools and strategies to satisfy the clients. If you are a fresher, do
                                follow the footsteps of your seniors in the firm and learn how they work. Above all, to
                                develop your career with us you have to be ready to handle both the paperwork as well as
                                fieldwork jobs. We here at Full Basket Property want our employees to have sound legal
                                ideas of the properties they are handling.</p>

                            <p style="text-align: justify;">Before elaborating the project to the clients, you are
                                expected to be upgraded with every single detail of the properties. Without your own
                                understanding, it will become difficult for you to make the customers elaborate the
                                details when you will take them to the site. Thus, we ask to give extra effort on a
                                detailed study of the projects.</p></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_2"
                               href="#collapse_art8">
                                How We Change Your Career </a>
                        </h4>
                    </div>
                    <div id="collapse_art8" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <p style="text-align: justify;">We at Full Basket Property ensure the best of your career
                                growth. Within a few years, you will fly high in the booming real estate sector.
                                Starting from discussing the listings to communicating with the clients, you will
                                understand how dedicatedly we help in finding the properties to our clients.</p>

                            <p style="text-align: justify;">We will help you learn how you can go beyond your
                                limitations in not only finding the right domestic or commercial property to the
                                customers, but also to support them by post-sales service. We boast on our flagship
                                post-sales service for which we stand out of the crowd. Unlike our market competitors,
                                we don’t end the relationship with our clients soon after closing a deal.Employees at
                                Full Basket Property ensure post-sales service to the clients whenever they seek any
                                professional guidance starting from legal to renovation and more.</p>

                            <p style="text-align: justify;">At Full Basket Property, you will be trained to be a
                                prolific realtor and at the same time, a trusted and dependable real estate professional
                                who is aided with all the latest equipment to guide the customers to find the homes of
                                their dreams.</p>

                            <p style="text-align: justify;">Seeking career growth in real estate? Join Full Basket
                                Property now! We are responsible for building the career of many professional realtors
                                till date. If you aspire to be a superstar realtor and earn the reputation by
                                instigating the finest ideas you have, don’t let it go in vain! Send us your CV at our
                                (email id) and let our HR-Recruitment Manager give you a call for a face-to-face
                                interview.</p></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row" id="en-application">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <br />
            <br />
            <br />
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="section-title text-left"> <!-- Left Section Title -->
                <h3>Fill in the Form <br>to Apply</h3>
                <hr>
                <p>For an optimum career growth in our esteemed firm, do send your portfolio or any idea that you have
                    to share with us regarding your understanding of anything in real estate. </p>
            </div>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8">
            <form action="" method="post" role="form" enctype="multipart/form-data">
                <?php
                if ($this->session->flashdata('message')) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="alert alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <strong><?= $this->session->flashdata('message') ?></strong>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php
                }
                ?>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group <?= form_error('name') ? 'has-error' : '' ?>">
                        <input type="text" required class="form-control" name="name" id="name"
                               placeholder="Your Fullname">
                        <span class="text-danger"><?=form_error('name')?></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group <?= form_error('email') ? 'has-error' : '' ?>">
                        <input type="email" required class="form-control" name="email" id="email"
                               placeholder="Your Email">
                        <span class="text-danger"><?=form_error('email')?></span>
                    </div>
                </div>

                <input type="hidden" id="application_for" name="application_for" value="General">

                <div class="clearfix"></div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group <?= form_error('phone') ? 'has-error' : '' ?>">
                        <input type="text" title="Please provide integer phone number with maximum length 10"
                               minlength="10" required class="form-control" maxlength="10" pattern="\d+" name="phone"
                               id="phone" placeholder="Your Mobile Number">
                        <span class="text-danger"><?=form_error('phone')?></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <input type="file" accept=".doc,.docx,.pdf" class="form-control" name="resume" id="resume">
                        <p class="help-block">Attach .doc, .pdf files only (Min of 3MB)</p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group <?= form_error('address') ? 'has-error' : '' ?>">
                        <textarea minlength="5" rows="5" required name="address" class="form-control"
                                  placeholder="Your Address"></textarea>
                        <span class="text-danger"><?=form_error('address')?></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <textarea rows="5" name="self_introduction" class="form-control"
                                  placeholder="Tell Us Amazing about You..."></textarea>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div  class=" col-sm-12 col-md-12 col-lg-12">
                    <div class="g-recaptcha" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <button type="submit" class="btn pull-right btn-default">Send Message</button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br />
            </form>
        </div>
    </div>
</div>