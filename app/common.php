<?php
	$status_message = array(
		'text' => '',
		'style' => 'alert-info'
	);

	$active_client;

 	function getDb() {
   		$db = pg_connect("host=localhost port=5432 dbname=trackr user=josh password=newpassword");
		return $db;
  }
?>