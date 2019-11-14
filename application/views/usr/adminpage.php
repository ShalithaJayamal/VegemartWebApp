<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <link href="<?php $this->load->helper('url'); echo base_url() ?>assets/css/adminpage.css" rel="stylesheet" type="text/css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>"> -->
</head>

<body>
<div class="navbar navbar-default">
	<div class="container">
		<h2>Admin Page</h1>
	</div>
</div>		
<div class="container">
	<h3>users list</h3>
	<a href="<?php $this->load->helper('url'); echo site_url('cAuth/add'); ?>" class="btn btn-primary">Add New</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Firstname</td>
				<td>Lastname</td>
				<td>Username</td>
				<td>Password</td>
				<td>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			if($users){
				foreach($users as $user){
		?>			
			<tr>
				<td><?php echo $user->firstname; ?></td>
				<td><?php echo $user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
				<td><?php echo $user->password; ?></td>
				<td>
					<a href="<?php $this->load->helper('url'); echo site_url('cAuth/delete/'.$user->username)?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this user?');">Delete</a>
				</td>
			</tr>	
		<?php
			}
		}	
		?>	
		</tbody>
	</table>
	<a href="<?php $this->load->helper('url'); echo site_url('cAuth'); ?>" class="btn btn-primary">Login</a>	
</div>
				
</body>
</html>