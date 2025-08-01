<?php

function formatTask($task) {
    $status = $task['completed']
        ? "<span class='status done'> Done</span>"
        : "<span class='status pending'> Pending</span>";
    return "<li>{$task['title']} {$status}</li>";
}
function abort($message = 'Page not found') {
    http_response_code(404);
    echo "<h1>404</h1><p>$message</p>";
    exit();
}