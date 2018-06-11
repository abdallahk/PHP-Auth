<?php



/*********************************
*	 Get Saved Password by User
* -----------------------------
*
*	 @param: email -> string
**********************************/

function getStoredPassword($email){

	require "database.php";

	$stmt = $pdo->prepare("SELECT password FROM users WHERE email=:email");
	$stmt->execute(['email' => $email]);
	$result = $stmt->fetch();

	return $result;


}


/*****************************
* Registration Function
* ---------------------
*
* @param: $entered_email -> string, $entered_username -> string, $entered_password -> string
*****************************/

function registerUser($entered_username, $entered_email, $hashed_password, $user_role){

	require "database.php";

			$stmt = $pdo->prepare("INSERT INTO users (username, email, password, user_role) VALUES(:username, :email, :password, :user_role)");
			$stmt->bindParam('username', $entered_username, PDO::PARAM_STR);
			$stmt->bindParam('email', $entered_email, PDO::PARAM_STR);
			$stmt->bindParam('password', $hashed_password, PDO::PARAM_STR);
			$stmt->bindParam('user_role', $user_role, PDO::PARAM_STR);
			$stmt->execute();

}



/*****************
* Get All Users
* -------------
*
*****************/

function getAllUsers(){

	require "database.php";

	$stmt = $pdo->query("SELECT * FROM users");
	$result = $stmt->fetch();

	return $result;

}


/******************
* Add Role
* ---------
*
* @param: $role_name, $permissions, $user_type
*******************/

function addRole($role_name, $permissions, $user_type){

	require "database.php";

			$stmt = $pdo->prepare("INSERT INTO user_roles (role_name, permissions, user_type) VALUES(:role_name, :permissions, :user_type)");
			$stmt->bindParam('role_name', $role_name, PDO::PARAM_STR);
			$stmt->bindParam('permissions', $permissions, PDO::PARAM_STR);
			$stmt->bindParam('user_type', $user_type, PDO::PARAM_STR);
			$stmt->execute();

}



/*************************************
* Update Password
* ---------------
*
* @param: $email, $new_password_hashed
**************************************/

function updatePassword($email, $new_password_hashed){


	require "database.php";

	$sql = "UPDATE users SET password = ? WHERE email = ?";
	$pdo->prepare($sql)->execute([$new_password_hashed, $email]);

}

/*************************************
* Delete User
* ---------------
*
* @param: $id
**************************************/

function deleteUser($id){

	require "database.php";

	$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
	$stmt->execute([$id]);
	echo "Deleted!";

}

/*****************
* Get All Roles
* -------------
*
*****************/

function getAllRoles(){

	require "database.php";

	$stmt = $pdo->query("SELECT * FROM user_roles");
	$result = $stmt->fetch();
	return $result;

}
