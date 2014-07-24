<html>
	<head>
		<title>
			Register
		</title>
		
		<style>
			form li {
				list-style: none;
			}
		</style>
	</head>
	
	<body>
		<h1>User Registration</h1>
		
		<p>Please fill in the details below</p>
		
		<?php
		$base_url = base_url();
		echo form_open($base_url . 'index.php/user/register');
		
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
				<div>
					<?php echo form_input($username); ?>
				</div>
			</li>
			
			<li>
				<label for="email">Email Address</label>
				<div>
					<?php echo form_input($email); ?>
				</div>
			</li>

			<li>
				<label for="password">Password</label>
				<div>
					<?php echo form_password($password); ?>
				</div>
			</li>			

			<li>
				<label for="password_conf">Confirm Password</label>
				<div>
					<?php echo form_password($password_conf); ?>
				</div>
			</li>
			
			<li>
				<div>
					<?php echo validation_errors(); ?>
				</div>
			</li>
					
			<li>
				<div>
					<?php echo form_submit(array('name' => 'register'), 'Register') ?>
				</div>
			</li>
		</ul>
	
	<?php echo form_close(); ?>
	</body>
</html>