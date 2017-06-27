<?php


   if (isset($_GET['submit'])) {

    $safeSubmit = htmlentities($_GET['submit']);
    $safeClientId = '';
    if (isset($_GET['client_id'])) {
        global $active_client;
      	$safeClientId = htmlentities($_GET['client_id']);
        $active_client = $safeClientId;
    }
    $safeNewName = htmlentities($_GET['name'], ENT_QUOTES);
    $safeNewRate = '';
    if (isset($_GET['rate'])) {
      $safeNewRate = htmlentities($_GET['rate']);
    }

    if (isset($_GET['id'])) {
      $safeCategoryId = htmlentities($_GET['id']);
    }



    switch ($safeSubmit) {
      case 'save_category':
        if (strlen($safeNewName) > 0) {
          saveCategory($safeCategoryId, $safeNewName, $safeNewRate);
        }
        else {
          global $status_message;
          $status_message['text'] = "Name must be at least one character.";
          $status_message['style'] = 'alert-danger';
        }
        break;
      // case 'edit_categories':
             
      //   break;
      case 'delete_category':
        deleteCategory($safeCategoryId);
        break;
      case 'add_category':
        // if (strlen($safeNewName) > 0) {

          	addCategory($safeClientId, $safeNewName, $safeNewRate);

        // }
        // else {
        //   global $status_message;
        //   $status_message['text'] = "Name must be at least one character.";
        //   $status_message['style'] = 'alert-danger';
        // }
        break;
    }

  }


 function getCategories($id) {
    $stmt = "SELECT * FROM categories WHERE client_id=$id ORDER BY name ASC";
    $request = pg_query(getDb(), $stmt);
    return pg_fetch_all($request);
  };  

  function addCategory($client_id, $name, $rate) {
  	global $status_message;
    $stmt = "INSERT INTO categories (client_id, name, rate) VALUES ('$client_id', '$name', $rate)";
    pg_query(getDb(), $stmt);
    $status_message['text'] = "Category added!";

  }
  function deleteCategory($id) {
  	global $status_message;
    $stmt = "DELETE FROM categories WHERE id = '$id'";
    pg_query(getDb(), $stmt);
    $status_message['text'] = "Category deleted!";
  }

  function saveCategory($id, $new_category_name, $new_rate) {
  	global $status_message;
    $stmt = "UPDATE categories SET name='$new_category_name', rate='$new_rate', last_update=now() WHERE id= $id";
    pg_query(getDb(), $stmt);
    $status_message['text'] = "Category changed!";
  }



?>