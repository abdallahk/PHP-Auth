<?php


if(isset($_POST['action']) AND $_POST['action']=='edit_user') {

	$user_id= $_POST['user_id'];

	$stmt = $pdo->query('SELECT * FROM users WHERE id= $user_id');
	
	$user_details = $stmt->fetch();

	print_r($user_details);




?>