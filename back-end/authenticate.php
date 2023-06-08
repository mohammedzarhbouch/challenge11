<?php
session_start();

include('conn.php');

if ( !isset($_POST['username'], $_POST['password']) ) {
	
	exit('Please fill both the username and password fields!');
}


if ($statement = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	
	$statement->bind_param('s', $_POST['username']);
	$statement->execute();
	$statement->store_result();

	if ($statement->num_rows > 0) {
		$statement->bind_result($id, $password);
		$statement->fetch();
		
	
		if ($_POST['password'] === $password) {
			
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['id'] = $id;
			header('Location: ../home/index.php');
		} else {
			
			echo 'Incorrect username and/or password!';
		}
	} else {
		
		echo 'Incorrect username and/or password!';
	}

	$statement->close();

	
	
	
}





?>












