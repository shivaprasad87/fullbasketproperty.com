<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php echo form_open('', array('class'=>'form-signin')); ?>
	<div class="row">
		<div class="col-sm-5 col-sm-offset-4">
			<div class="col-sm-12">
		    	<?php echo form_input(array('name'=>'username', 'id'=>'username', 'class'=>'form-control', 'placeholder'=>lang('users input username_email'), 'maxlength'=>256)); ?>
		    </div>
		    <div class="col-sm-12">
		    	<?php echo form_password(array('name'=>'password', 'id'=>'password', 'class'=>'form-control', 'placeholder'=>lang('users input password'), 'maxlength'=>72, 'autocomplete'=>'off')); ?>
		    </div>
		    <div class="col-sm-12">
		    	<?php echo form_submit(array('name'=>'submit', 'class'=>'btn btn-lg btn-success btn-block'), lang('core button login')); ?>
		    </div>
		    <div class="col-sm-6">
		    	<p><a href="<?php echo base_url('user/forgot'); ?>"><?php echo lang('users link forgot_password'); ?></a></p>
		    </div>
		    <div class="col-sm-6">
		    	<p class="pull-right"><a href="<?php echo base_url('user/register'); ?>"><?php echo lang('users link register_account'); ?></a></p>
		    </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-sm-5 col-sm-offset-4 text-center or_section">
	        <h5>
	            <span class="line"></span>
	            <span class="text">or</span>
	        </h5>
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-5 col-sm-offset-4">
            <div class="col-sm-6">
                <a href="<?= site_url('hauth/login/Google') ?>" class="google hidden-sm btn-block btn">Google</a>
            </div>
            <div class="col-sm-6">
                <a href="<?= site_url('hauth/fb_login') ?>" class="facebook hidden-sm btn-block btn">Facebook</a>
            </div>
	    </div>
	</div>
<?php echo form_close(); ?>
