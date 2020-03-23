<?php
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$task = $entityManager->find('Task', $id);

if ($task === null) {
    echo "No task found.\n";
    exit(1);
}

echo sprintf("-%s\n", $task->getName());