<?php
	session_start();
	require("db_connect.php");
	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = $mysqli->prepare("SELECT hashed_password FROM admins WHERE username = ?");
	$query->bind_param("s", $username);
	$query->execute();
	$query->store_result();
	if($query->num_rows > 0) {
		$query->bind_result($hashed_password);
		$query->fetch();
		$query->close();
		if(password_verify($password, $hashed_password)){
			$_SESSION["authorised"] = true;

			//Change hash if php has updated defaults
			if(password_needs_rehash($hashed_password, PASSWORD_DEFAULT)){
				$new_hash = password_hash($password, PASSWORD_DEFAULT);
				$query = $mysqli->prepare("UPDATE admins SET hashed_password=? where username=?");
				$query->bind_param("ss", $new_hash, $username);
				$query->execute();
				$query->close();
			}
			header("Location: /admin/");
			exit();
		}
	}
	header("Location: /login_page.php");
	exit();
?>
