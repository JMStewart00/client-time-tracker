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
		include '../category.php';
		?>
		<div class="container w-50 d-block mx-auto">
			<p><a href="/">Home</a></p>
			<h1 class="text-center">Manage Clients</h1>
			<?php
			if ($status_message['text']) {
			?>
			<div class="alert <?php echo $status_message['style']; ?>" role="alert">
				<strong>Heads up!</strong> <?=$status_message['text'];?>
			</div>
			<?php
			}
			?>
			<?php include('../components/new_client_form.php'); ?>
			<?php
			foreach (getClients() as $client) {
			?>
			<form method="get" class="form-inline pb-3">
				<label class="sr-only" for="clientName">Name</label>
				<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="clientName" name="name" value="<?=$client['name'];?>">
				<input type="hidden" name="id" value="<?=$client['id'];?>">
				<button type="submit" class="btn btn-primary mr-2" name="submit" value="save"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
				<button type="submit" class="btn btn-success mr-2" name="submit" value="edit_categories"><i class="fa fa-list" aria-hidden="true"></i></button>
				<button type="submit" class="btn btn-danger" name="submit" value="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
			</form>
			<?php
			$categories = getCategories($client['id']);
			global $active_client;
			if ($active_client == $client['id']) {
			include('../components/category_list.php');
			}
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