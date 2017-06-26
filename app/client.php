
<?php

	
	if (isset($_GET['submit'])) {
		$safeSubmit = htmlentities($_GET['submit']);
		if (isset ($GET['id'])) {
		$safeid = htmlentities($_GET['id']);
		}
		$safeNewName = htmlentities($_GET['name'], ENT_QUOTES);

		switch ($safeSubmit) {
			case 'save':
				if (strlen($safeNewName) > 0) {
				saveClient($safeid, $safeNewName);
				}
				else {
					global $status_message;
					$status_message['text'] = "Name must be at least one character.";
				}
				break;
			case 'edit_categories':
				

				
				break;
			case 'delete':
				deleteClient($safeid);
				break;
			case 'addNew':
				if (strlen($safeNewName) > 0) {
				addClient($safeNewName);

				}
				else {
					global $status_message;
					$status_message['text'] = "Name must be at least one character.";
					$status_message['style'] = 'alert-danger';
				}
				 break;
		}
	}

  function getClients() {
    $stmt = 'SELECT * FROM clients ORDER BY name ASC';
    $request = pg_query(getDb(), $stmt);
    return pg_fetch_all($request);
  };


  function saveClient($id, $new_name){
  	global $status_message;
  	$stmt = "UPDATE clients SET name = '$new_name', last_update=now() WHERE id= '$id'";
  	pg_query(getDb(), $stmt);
  	$status_message['text'] = "Client name changed!";

  };

  function deleteClient($id) {
  	global $status_message;
  	$stmt = "DELETE from clients WHERE id = '$id'";
  	pg_query(getDb(), $stmt);
  	$status_message['text'] = "Client deleted!";

  };

  function addClient($name) {
  	global $status_message;
  	$stmt = "INSERT INTO clients (name) VALUES ('$name')";
  	pg_query(getDb(), $stmt);
  	$status_message['text'] = "Client added!";
  }



?>