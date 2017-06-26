<!DOCTYPE html >
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TRACKr</title>
		<?php include 'links_cdns.html' ?>
	</head>
	<body>
		<?php
		include 'common.php';
		include 'client.php';
		include 'activity.php';
		include 'category.php';
		?>
		<div class="container">
			
			<h1 class="text-center pt-3">TRACKr</h1>
			<form method="get" action="">
				<div class="form-inline">
					<label for="clientSelect" class="sr-only">Select a Client</label>
					<select class="form-control form-control mb-2 mr-sm-2 mb-sm-0" id="clientSelect" name="clientId">
						<?php
						foreach (getClients() as $client) {
						print '<option value="' . $client['id'] . '">' . $client['name'] . "</option>\n";
						}
						?>
					</select>
				</div>
			</form>
			<form method="get" action="">
				<div class="form-inline">
					<label for="categorySelect" class="sr-only">Select a Category</label>
					<select class="form-control form-control mb-2 mr-sm-2 mb-sm-0" id="categorySelect" name="categoryId">
						<?php
						foreach (getCategories(42) as $category) {
						print '<option value="' . $category['id'] . '">' . $category['name'] . "</option>\n";
						}
						?>
					</select>
				</div>
			</form>
			<div class="form-group">
				<label for="starttime" class="sr-only">Start Date and time</label>
				<!--   <div class="input-group">
					<div class="input-group-addon">+</div> -->
					<input class="form-control" type="datetime-local" id="starttime">
					<!-- </div> -->
				</div>
				<div class="form-group">
					<label for="endtime" class="col-form-label">End Date and time</label>
					<div class="col-10">
						<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="endtime">
					</div>
				</div>
				<form>
					<textarea type="textarea"></textarea>
				</form>
				<footer>
					<nav class="text-center navbar fixed-bottom d-inline-block bg-inverse">
						<a href="/clients"><h4>Manage Clients</h4></a>
						<a class="pl-5 pr-5" href="#">&copy; 2017 The Oreons</a>
						<a class="pl-5 pr-5">About</a>
						<a class="pl-5 pr-5">Contact</a>
					</nav>
				</footer>
				</div> <!-- container -->
				
				<?php include 'scripts.html' ?>
			</body>
		</html>