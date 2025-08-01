<h1>Task List</h1>
<ul>
    <?php foreach ($tasks as $task): ?>
        <?= formatTask($task) ?>
    <?php endforeach; ?>
</ul>
