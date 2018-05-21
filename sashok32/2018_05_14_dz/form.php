<?php
if (!empty($_SESSION['name'])) {
	echo "<br>Привет ".$_SESSION['name'];
	$_SESSION['countSes']++;
	if (isset($_POST['logout'])) {
		unset($_SESSION['name']);
		session_destroy();
		header('Location: index.php');
	}
?>
		<form action="" method="POST">
		<br/>Выйти: <input type="submit" name="logout" value="Logout"><br/>
		</form>
<?php
} else {?>
	<form action="" method="POST">
	<br/>Авторизуйтесь:<br/><input type="text" name="name"><br/>
	<input type="submit" value="Login"><br/>
	</form>
<?php
	if (!empty($_POST['name'])) {
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['countSes'] = 1;
		$_SESSION['countPage1'] = 0;
		$_SESSION['countPage2'] = 0;
		$_SESSION['countFile'] = 0;
		header('Location: index.php');
	}
}
?>