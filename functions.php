<?php

function check_login($conn) {
    if (isset($_SESSION['usersUid'])) {
        $id = $_SESSION['usersUid'];
        $query = "select * from users where usersUid = '$id' limit 1"; 
        
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header("Location: ../login.php")
    die;
}

function random_num($length) {
    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}
/*function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidUid($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if ($pwd !== $pwdRepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = myqsqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}
*/
function createUser($conn, $name, $email, $username, $pwd) {
	/*$serverName = "localhost";
	$dBUserName = "arvidbxr_phptest";
	$dBPassword = "php.test";
	$dBName = "arvidbxr_wp750";
	

	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$sql = "INSERT INTO `users` (`usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES ('$name', '$email', '$username', '$pwd');";
		if ($conn->multi_query($sql) === TRUE) {
			echo "New user created successfully";
		  } else {
			echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	mysqli_close($conn);*/


	/*$sql = "INSERT INTO 'users' (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	  
	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	
	
	header("location: ../signup.php?error=none");
	exit();*/
}

/*function loginUser($conn, $username, $pwd) {
	
}

function emptyInputSignup($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}*/
?>