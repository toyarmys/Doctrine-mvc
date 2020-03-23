<?php
// create_task.php <name>
require_once "bootstrap.php";

$newTaskName = $argv[1];

$task = new Task();
$task->setName($newTaskName);

$entityManager->persist($task);
$entityManager->flush();

echo "Created Task with ID " . $task->getId() . "\n";