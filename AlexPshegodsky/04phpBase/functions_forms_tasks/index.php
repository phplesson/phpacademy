<?php
$baseTasksPath = "tasks/";
$includedTasks = array();
$taskKey = 0;
$taskDirFiles = scandir($baseTasksPath);
if (!empty($_POST['action'])) {
	echo "<div class='home'><a href='#' class='task_link' name='$task'>Home</a><br></div>>";
	$includedTasks = include $baseTasksPath.$_POST['action'];
	ob_start();
	$formGenerator = include 'C:\Users\alex\PhpstormProjects\homework\phpacademy\allStudent\controllers\formController.php';
	ob_end_clean();
	call_user_func($formGenerator['generateForm'],$includedTasks['inputType']);
	include $includedTasks['view'];
	//$exec = call_user_func_array($includedTasks['func'], $_POST);
} else {
	;
foreach ($taskDirFiles as $task) {
	if (substr($task, 0, 1) == '.') {
		continue;
	}
	
	echo "<a href='#' class='task_link' name='$task'>$task</a><br>";
	$taskKey++;
}

}
?>


