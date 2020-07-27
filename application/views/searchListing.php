<?php
	$bhk = explode(',', $store_content['bhk']);
	$baths = explode(',', $store_content['baths']);
	?>

<!--Contact Builder Form-->
<div class="modal fade" id="prop-contact">
    <div class="modal-dialog">
        <div class="modal-content">

            <form id="prop-form" action="<?= site_url('home/property_enquiry') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-transform: uppercase">GET A CALL BACK FOR <span class="prop-name">PROPERTY</span></h4>
                </div>
                <div class="modal-body">
                    <input name="property_id" id="prop-id" value="" type="hidden" />
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" id="prop-name" type="text" name="name" placeholder="Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" id="prop-phone" type="text" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                                <input style="border-radius: 0" class="form-control" id="prop-email" type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span style="border-radius: 0" class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <textarea style="border-radius: 0" class="form-control" id="prop-message" name="message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button style="border-radius: 0" type="button" class="btn btn-flat btn-default" data-dismiss="modal"><i
                                class="fa fa-times-circle"></i>
                        Close
                    </button>
                    <button style="border-radius: 0" type="submit" class="btn btn-flat btn-primary"><i class="fa fa-paper-plane"
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
	<div class="row list-header" style="background-image: url('<?= base_url('assets/img/list-bg.jpg') ?>');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-12">
                        <h3>&nbsp;</h3>
					</div>					
				</div>
			</div>
		</div>

        <div class="row menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <ul class="hide">
                            <li style="color: #fff">Refine Search : </li>
                            <li>
                                <div  class="link-dropdown refine-filter bed">
                                    <a href="#"><span class="filter-label">BED(s)</span>  <i class="fa fa-sort-down"></i></a>
                                    <ul>
                                        <li><a href="#" data-bed="0">All Bed(s)</a></li>
                                        <?php for ($i = 1; $i<6;$i++){
                                            ?>
                                            <li><a href="#" data-bed="<?=$i?>"><?=$i?></a></li>
                                            <?php
                                        }?>

                                        <li><a href="#" data-bed="Multiple">Multiple</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div  class="link-dropdown refine-filter budget">
                                    <a href="#"><span class="filter-label">BUDGET</span>  <i class="fa fa-sort-down"></i></a>
                                    <ul>
                                        <li><a href="#" data-budget="0">All Budget</a></li>
                                        <li><a href="#" data-budget="<1500000">Less than <?=number_format_short(1500000)?></a></li>
                                        <li><a href="#" data-budget="1500000-2000000"><?=number_format_short(1500000)?> - <?=number_format_short(2000000)?></a></li>
                                        <li><a href="#" data-budget="2000000-3000000"><?=number_format_short(2000000)?> - <?=number_format_short(3000000)?></a></li>
                                        <li><a href="#" data-budget="3000000-5000000"><?=number_format_short(3000000)?> - <?=number_format_short(5000000)?></a></li>
                                        <li><a href="#" data-budget="5000000-10000000"><?=number_format_short(5000000)?> - <?=number_format_short(10000000)?></a></li>
                                        <li><a href="#" data-budget="10000000-100000000"><?=number_format_short(10000000)?> - <?=number_format_short(100000000)?></a></li>
                                        <li><a href="#" data-budget=">100000000">More than <?=number_format_short(100000000)?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div  class="link-dropdown refine-filter status">
                                    <a href="#"><span class="filter-label">Property Status</span>  <i class="fa fa-sort-down"></i></a>
                                    <ul>
                                        <li><a href="#" data-status="0">All Status</a></li>
                                        <?php
                                        if (($property_status = $this->properties_model->getPropertyStatus()) != null) {
                                            foreach ($property_status as $status) {
                                                ?>
                                                <li><a href="#" data-status="<?=$status->id?>"><?=$status->name?></a></li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 listing-section" style="padding: 0;background-color: transparent">
                        <div class="pull-right">
                            <span id="list" class="<?= (isset($showPattern) && $showPattern == 'list-group-item') ? 'active' : '' ?>"><i class="glyphicon glyphicon-th-list"></i></span>&nbsp;
                            <span id="grid" class="<?= (isset($showPattern) && $showPattern == 'grid-group-item') ? 'active' : '' ?>"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="row city-section" style="margin-top: 0;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-7">
							<p><a href="#">India Property</a>&emsp;>>&emsp;<a href="#">Property in All Cities</a>&emsp;>>&emsp;<span>Property for sale in All Cities</span></p>
							<p class="hide">All Cities <span class="percentage">14.6%</span> More about Property in All Cities</p>
						</div>
						<div class="col-sm-5">
							<p class="pull-right">Property for Sale in All Cities (<?= isset($total) ? $total : 0 ?>)</p>
							<form method="post" action="">
								<div class="form-group">
									<input type="text" name="keyword" placeholder="Enter a Location, Builder or a Project" class="form-control" value="<?= $keyword ? $keyword : '' ?>">
									<input type="hidden" id="showPattern" name="showPattern" value="">
									<button type="submit" class="btn btn-loc">Search</button>
                                    <a href="#" onclick="$('.toggleSearch').slideToggle();return false;" class="btn pull-right btn-link">Advance Search</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container toggleSearch">
				<div class="col-sm-12">
					<div class="search-area listing-search">
						<form action="<?= site_url('searchListing') ?>" method="post">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<input type="text" name="keyword" placeholder="Key Word" class="form-control" style="height: 34px;" value="<?= !empty($store_content['keyword']) ? $store_content['keyword'] : '' ?>"> 
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<select class="form-control" name="location">
											<option selected="" disabled="">Select Your City</option>
											<?php
											foreach ($cities as $city) { ?>
											<option <?= !empty($store_content['city']) ? ($store_content['city'] == $city->id ? 'selected' : '') : '' ?> value="<?= $city->id ?>"><?= $city->name ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control" name="location">
                                            <option selected="" disabled="">Select Your Location</option>
                                            <?php
                                            foreach ($locations as $location) { ?>
                                            <option <?= !empty($store_content['location']) ? ($store_content['location'] == $location->id ? 'selected' : '') : '' ?> value="<?= $location->id ?>"><?= $location->name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
								<div class="col-sm-2">
									<div class="form-group">
										<select class="form-control" name="property_type">
											<option selected="" disabled="">Property Type</option>
											<?php
											foreach ($property_types as $property) { ?>
											<option <?= !empty($store_content['property_type']) ? ($store_content['property_type'] == $property->id ? 'selected' : '') : '' ?> value="<?= $property->id ?>"><?= $property->name ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<select class="form-control">
											<option selected="" disabled="">-Status-</option>
                                            <?php
                                            if (($property_status = $this->properties_model->getPropertyStatus()) != null) {
                                                foreach ($property_status as $status) {
                                                    ?>
                                                    <option value="<?= $status->id ?>"><?= $status->name ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label>Price Range($):</label>
									<input id="price" name="price" data-slider-value="[<?=$store_content['price']?>]" type="text"/><br/>
									<span class="pull-left">₹<?= $price_range->min ?></span>
									<span class="pull-right">₹<?= $price_range->max ?></span>
									<div class="clearfix"></div><br>
								</div>
								<div class="col-sm-4">
									<label>BHK</label>
									<input id="property" name="bhk" data-slider-value="[<?=$store_content['bhk']?>]" type="text"/><br/>
									<span class="pull-left">1</span>
									<span class="pull-right">4</span>
									<div class="clearfix"></div><br>
								</div>
								<div class="col-sm-4">
									<label>Size</label>
									<input id="baths" name="baths" data-slider-value="[<?=$store_content['baths']?>]" type="text"/><br/>
									<span class="pull-left">1</span>
									<span class="pull-right">120</span>
									<div class="clearfix"></div><br>
								</div>
							</div>
							<div class="row">
								<?php foreach ($amenities as $k => $amenity) { ?>
								<div class="col-sm-3 amenity-group <?= $k > 9 ? 'hide' : '' ?>">
									<div class="mb10">
										<input <?= !empty($store_content['amenities']) ? (in_array($amenity->id, $store_content['amenities']) ? 'checked' : '') : '' ?> type="checkbox" name="amenities[]" value="<?= $amenity->id ?>" class="price_range"> <?= $amenity->name ?>
									</div>
								</div>
								<?php } ?>
							</div>

                            <div class="row text-center <?= count($amenities) < 11 ? 'hide' : '' ?>">
                                <button type="button" onclick="$('.amenity-group').removeClass('hide');$(this).remove()"
                                        class="btn btn-primary"><i class="fa fa-chevron-down"></i> Show All Amenities
                                </button>
                            </div>
							<div class="row">
								<div class="col-sm-12 text-center">
									<button class="btn btn-submit" type="submit"><img src="<?= base_url('assets/img/home.png') ?>"></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-12">
						<div id="products" class="row list-group">
							<?php
							if($properties){
							 foreach ($properties as $k => $property) { ?>
							<div class="item col-xs-12 col-sm-6 col-lg-6 list-group-item <?= $k > 9 ? 'hide' : ''?>">
								<div class="thumbnail">
									<div class="row">
										<div class="prop-img col-md-3 col-sm-4">
											<a target="_blank"  href="<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?>">
                                                <div class="group list-group-image img-responsive" style="background-image:url('<?= base_url('uploads/'.$property->slug.'/'.$property->image) ?>'"></div>
                                            </a>
											<input class="input-3" name="input-3" value="4" class="rating-loading">
                                            <span class="prop-badge" <?= $property->rera_status ? '' : 'style="color: #de553a"' ?>><?= $property->rera_status ? 'RERA Approved' : 'RERA Not Approved' ?></span>
											<div class="img-count"><i class="fa fa-camera"></i> <?=count($this->properties_model->getPropertyImages($property->id))?></div>
											<div class="launching"><span><?= $property->property_status ? $property->property_status : '&emsp;&emsp;&emsp;&emsp;' ?></span></div>
										</div>
										<div class="prop-content col-sm-8 col-md-4">
											<div class="caption">
                                                <a target="_blank"  href="<?=site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug/")?>">
                                                    <h3 class="group inner list-group-item-heading">
                                                        <?= $property->title ?></h3>
                                                </a>

													<p class="group inner list-group-item-text">
														by <?= $property->builder ?>
													</p>
													<p><?= $property->location ?></p>
												</div>
												<div class="prop-details">
													<p>
														&#8377; <?=$property->budget?><br>
														<span>Avg Price/sq.ft</span>
													</p>
													<p><?= date('M, Y', strtotime($property->possession_date)) ?><br><span>Possession</span></p>
													<p><?= $property->prop_type ?></p>

												</div>
											</div>
											<div class="col-md-5 col-sm-12 prop-book">
												<div class="table-responsive">
													<table class="table table-striped">
														<thead>
															<tr>
																<th>Unit</th>
																<th>Size</th>
																<th>Carpet Area</th>
																<th>Builder Price</th>
															</tr>
														</thead>
                                                        <tbody>
                                                        <?php
                                                        if (($flatTypes = $this->properties_model->getPropertyFlatType(null,$property->id)) != null){
                                                            foreach ($flatTypes as $flatType) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?=$flatType->flat_type?>
                                                                    </td>
                                                                    <td><?=$this->properties_model->getPropertyRange(array('property_id' => $property->id, 'flat_type_id' => $flatType->flat_type_id), 'property_flat_types', 'size')?> <?=$this->properties_model->getPropertyParam(array('property_id' => $property->id, 'flat_type_id' => $flatType->flat_type_id), 'property_flat_types', 'unit')?></td>
                                                                    <td><?=$this->properties_model->getPropertyRange(array('property_id' => $property->id, 'flat_type_id' => $flatType->flat_type_id), 'property_flat_types', 'carpet_area')?> Sq.ft</td>
                                                                    <td><?php if($flatType->price_on_request){ echo "Price on Request"; }else{ ?> <?=( ($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id, 'flat_type_id' => $flatType->flat_type_id), 'property_flat_types', null, 'MIN(total) as amount')) != null ) ? number_format_short($row->amount) : 0 ?> - <?= ( ($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id, 'flat_type_id' => $flatType->flat_type_id), 'property_flat_types', null, 'MAX(total) as amount')) != null ) ? number_format_short($row->amount) : 0?> <?php } ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }else{
                                                            ?>
                                                            <tr>
                                                                <td colspan="4" class="text-center">No data available</td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                        </tbody>
													</table>
												</div>
												<div class="price-details pull-right">
													<h4>
                                                        <?php
                                                        if($this->properties_model->hasPriceRequest($property->id)){
                                                            ?>
                                                            Price On Request
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <i
                                                                    class="fa fa-inr"></i> <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                                                                'property_flat_types', null,
                                                                'MIN(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?>
                                                            - <?= (($row = $this->properties_model->getPropertyParam(array('property_id' => $property->id),
                                                                'property_flat_types', null,
                                                                'MAX(total) as amount')) != null) ? number_format_short($row->amount) : 0 ?> </span>
                                                            <?php
                                                        }
                                                        ?>
														<i class="fa <?= (isset($property->class_heart) && $property->class_heart) ? $property->class_heart : 'fa-heart-o' ?> favourite" data-id="<?= $property->id ?>" data-access="<?= $this->session->userdata('logged_in') ? '' : 'denied' ?>" data-url="<?= $this->session->userdata('logged_in') ? site_url('home/manage_favourites') : site_url('user/login') ?>" style="cursor: pointer"></i>
														<button class="btn btn-call btn-call-back" data-id="<?=$property->id?>">GET CALL BACK</button>
													</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php } 
							}else{?>
								<div class="col-md-6">
									<span style="color: red">Sorry!!!No Listings Found</span>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center <?= count($properties) < 11 ? 'hide':'' ?>">
					<button type="button" onclick="$('.list-group-item.item').removeClass('hide');$(this).remove()" class="btn btn-warning"><i class="fa fa-chevron-down"></i> Show All</button>
				</div>
				<div class="row text-center hide">
					<?= isset($pagination) && $pagination ? $pagination : '' ?>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		<?php if ($this->input->post()) {
			?>
			var search = true;
			<?php
		} ?>
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