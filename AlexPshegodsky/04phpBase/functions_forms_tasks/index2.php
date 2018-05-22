<?php
$baseTasksPath = "tasks/";
$includedTasks = array();
$taskKey = 0;
$taskDirFiles = scandir($baseTasksPath);

if (isset($_POST['action'])) {
	$includedTasks = include $_POST['action'];
	var_dump($includedTasks);
	include $includedTasks['view'];
	$exec = call_user_func_array($includedTasks['func'], $_POST);
} else {

foreach ($taskDirFiles as $task) {
	if (substr($task, 0, 1) == '.') {
		continue;
	}
	
	$includedTasks[$taskKey] = include $baseTasksPath . $task;
	$includedTasks[$taskKey]['link'] = $baseTasksPath . $task;
	$includedTasks[$taskKey]['key'] = $taskKey;
	$taskKey++;
}

foreach ($includedTasks as $includedTask) {
	$jsonData = json_encode($includedTask);
	$taskName = $includedTask['name'];
	echo "<a href='#' class='task_link' data='=$jsonData'>$taskName</a><br>";
}
}

?>


