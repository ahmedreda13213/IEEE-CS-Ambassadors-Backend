<!DOCTYPE html>
<html>
<head>
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php
$current = $_GET['page'] ?? 'home';
?>

<nav>
    <ul>
        <li><a href="?page=home" class="<?= $current == 'home' ? 'active' : '' ?>">Tasks</a></li>
        <li><a href="?page=about" class="<?= $current == 'about' ? 'active' : '' ?>">About</a></li>
        <li><a href="?page=notes" class="<?= $current == 'notes' ? 'active' : '' ?>">Notes</a></li>
        <li><a href="?page=add-note" class="<?= $current == 'add-note' ? 'active' : '' ?>">+ New Note</a></li>
    </ul>
</nav>

<main>
    <?php include $viewFile; ?>
</main>

</body>
</html>
