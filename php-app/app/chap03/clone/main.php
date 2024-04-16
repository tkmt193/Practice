<!-- 
オブジェクト型の変数はリファレンスである（リファレンス引数と同じような挙動）
clone演算子を使うと、オブジェクトのコピーを作成できる
-->
<?php declare(strict_types=1); ?>
<?php 
class Task{
    public $name;
}
function changeTask(Task $task):void{
    $task->name = '散歩';
}

$task1 = new Task();
$task1->name = 'パスポートの更新';
$task2 = clone $task1;
$task2->name = '買い物';

echo $task1->name, PHP_EOL;
echo $task2->name, PHP_EOL;
changeTask($task2);
echo $task1->name, PHP_EOL;
echo $task2->name, PHP_EOL;