<?php
// list_tasks.php
require_once "bootstrap.php";

$taskRepository = $entityManager->getRepository('Task');
$tasks = $taskRepository->findAll();

foreach ($tasks as $task) {
    echo sprintf("-%s\n", $task->getName());
}