<p>Category list goes here!</p>

<?php include('new_category_form.php') ?>

<?php foreach ($categories as $category) { ?>

<form class="form-inline pb-3 mx-auto text-center">
	<input type="hidden" name="id" value="<?=$category['client_id'];?>">

	<label class="sr-only" for="clientName">Name</label>
	<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="clientName" name="name" value="<?=$category['name'];?>" >
	
	<label class="sr-only" for="clientName">Rate</label>
	<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="clientRate" name="name" value="<?=$category['rate'];?>" >


	<button type="submit" class="btn btn-outline-primary mr-2"  name="submit" value="save"><i class="fa fa-save" aria-hidden="true"></i></button>
	<button type="submit" class="btn btn-outline-danger mr-2"  name="submit" value="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

</form>

<?php } ?>