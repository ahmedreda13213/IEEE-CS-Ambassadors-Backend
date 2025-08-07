<?php session_start(); ?>
<?php \Core\Session::unflash(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes App</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Notes App</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/notes">Notes</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/notes/create">Add Note</a></li>
        <li class="nav-item"><a class="nav-link" href="/task-list">Task List</a></li>

        <?php if (isset($_SESSION['user'])): ?>
          <li class="nav-item"><a class="nav-link text-danger" href="/logout">Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link text-success" href="/login">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<main class="container mt-4">
    <?= $content ?? '' ?>
</main>

</body>
</html>
