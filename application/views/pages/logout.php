<?php $this->load->view('main/header');  ?>

<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url()?>file/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="<?php echo base_url()?>" method="POST">
					<span class="login100-form-title p-b-49">
						Home
					</span>
					<table border="1">
					<tr>
						<td><b>Username</b></td>
						<td><b>Password</b></td>
					</tr>
					
					<?php 

					$user = $this->session->user;

					for ($i=0; $i < count($user) ; $i++) { 
						echo "<tr><td>".$user[$i]['username']."<td>";
						echo $user[$i]['pass']."</tr>";

					}

					?>

					</table>

					<div class="container-login100-form-btn">
						
					</div>

					

	<?php $this->load->view('main/footer'); ?>