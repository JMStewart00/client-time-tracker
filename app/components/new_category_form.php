
				<form method="get" class="form-inline pb-3 mx-auto text-center">
	<?php global $active_client; ?>
				<input type="hidden" name="client_id" value="<=?$active_client;?>">
				  <label class="sr-only" for="categoryName">Name</label>
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="categoryName" name="name" value="" placeholder="New Category Name..." >

				  <label class="sr-only" for="categoryRate">Rate</label>
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="categoryRate" name="rate" value="" placeholder="$$$">

				  <button type="submit" class="btn btn-info mr-2"  name="submit" value="addCategory"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
				</form>

