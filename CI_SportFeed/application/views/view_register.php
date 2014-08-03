<div id="registerbox">
	<h2>User Registration</h2>
		
	<?php
	$attributes = array('class' => 'registerform', 'ng-submit' => 'register.submitForm($event)');
	$base_url = base_url();
	echo form_open($base_url . 'index.php/user/register', $attributes);		

	$username = array(
		'name' => 'username',
		'id' => 'username',
		'value' => set_value('username')
	);
	
	$email = array(
		'name' => 'email',
		'id' => 'email',
		'value' => set_value('email')
	);		

	$password = array(
		'name' => 'password',
		'id' => 'password',
		'value' => ''
	);			
	
	$password_conf = array(
		'name' => 'password_conf',
		'id' => 'password_conf',
		'value' => ''
	);	
			
	?>
	
	<ul>
		<li>
			<label for="username">Username</label>
				<?php echo form_input($username); ?>
		</li>
		
		<li>
			<label for="email">Email Address</label>
				<?php echo form_input($email); ?>
		</li>

		<li>
			<label for="password">Password</label>
				<?php echo form_password($password); ?>
		</li>			

		<li>
			<label for="password_conf">Confirm Password</label>
				<?php echo form_password($password_conf); ?>
		</li>
		
		<li>
				<?php echo validation_errors(); ?>
		</li>
				
		<li>
				<?php echo form_submit(array('name' => 'register','class' => 'regsubmit'), 'Register') ?>
		</li>
	</ul>
	<?php echo form_close(); ?>
</div>