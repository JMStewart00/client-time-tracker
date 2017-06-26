<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TRACKr | Manage Clients</title>
		<?php include '../links_cdns.html' ?>
	</head>
	<body>
		<?php
		include '../common.php';
		include '../client.php';
		// include 'activity.php';
		// include 'category.php';
		?>
		<div class="container w-70 mx-auto">
			
			<h1 class="text-center pt-3">Manage Clients</h1>



			<?php if ($status_message['text']) { ?>
			<div class="alert <?=$status_message['style'];?>" role="alert">
				<strong>Head's up! </strong><?=$status_message['text'];?>
			</div>
			<?php } ?>
			
			<?php include ('../components/new_client_form.php') ?>
			<?php foreach (getClients() as $client) { ?>
				<form class="form-inline pb-3 mx-auto text-center">

				  <label class="sr-only" for="clientName">Name</label>
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="clientName" name="name" value="<?=$client['name'];?>" >

					<input type="hidden" name="id" value="<?=$client['id'];?>">
				  <button type="submit" class="btn btn-outline-primary mr-2"  name="submit" value="save"><i class="fa fa-save" aria-hidden="true"></i></button>
				  <button type="submit" class="btn btn-outline-success mr-2" name="submit" value="editCategories"><i class="fa fa-list" aria-hidden="true" ></i></button>
				  <button type="submit" class="btn btn-outline-danger mr-2"  name="submit" value="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</form>

			<?php 
}

			 ?>



			<footer>
				<nav class="text-center navbar fixed-bottom d-inline-block bg-inverse">
					<a href="/clients"><h4>Manage Clients</h4></a>
					<a class="pl-5 pr-5" href="#">&copy; 2017 The Oreons</a>
					<a class="pl-5 pr-5">About</a>
					<a class="pl-5 pr-5">Contact</a>
				</nav>
			</footer>
			</div> <!-- container -->
			
			<?php include '../scripts.html' ?>
		</body>
	</html>