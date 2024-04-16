<?php
require_once dirname(__FILE__) . '/Task.php';
require_once dirname(__FILE__) . '/TaskSheet.php';
require_once dirname(__FILE__) . '/Schedule.php';
$taskSheet = new TaskSheet();
$task = new Task();
$task->name = 'パスポートの更新';
$taskSheet->addTask($task);

$schedule = new Schedule();
$schedule->name = '今週の金曜打ち合わせ';
$taskSheet->addTask($schedule);
?>
