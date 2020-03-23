<?php
// update_task.php <id> <new-name>
require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];
$des = $argv[3];
$task = $entityManager->find('Task', $id);

if ($task === null) {
    echo "Task $id does not exist.\n";
    exit(1);
}

$task->setName($newName);
$task->getDescription($des);
$entityManager->flush();
echo "Update task " . $id . " with " .$des;