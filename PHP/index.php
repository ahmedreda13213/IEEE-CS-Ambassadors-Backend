<?php
require 'functions.php';
session_start();

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        $pageTitle = "Tasks Page";
        require 'data.php';
        $viewFile = 'views/task-list.php';
        break;

    case 'about':
        $pageTitle = "About Page";
        $viewFile = 'views/about-content.php';
        break;
          case 'notes':
        $pageTitle = "Notes";
        $notes = $_SESSION['notes'] ?? [];
        $viewFile = 'views/notes-list.php';
        break;

    case 'add-note':
        $pageTitle = "Add Note";
        $viewFile = 'views/add-note.php';
        break;

    case 'note':
        $id = $_GET['id'] ?? null;
        $notes = $_SESSION['notes'] ?? [];
        if ($id === null || !isset($notes[$id])) {
            http_response_code(404);
            echo "Note not found!";
            exit;
        }
        $note = $notes[$id];
        $pageTitle = "Note Details";
        $viewFile = 'views/note-details.php';
        break;

    case 'store-note':
        $title = $_POST['title'] ?? '';
        $body = $_POST['body'] ?? '';
        if (!isset($_SESSION['notes'])) {
            $_SESSION['notes'] = [];
        }
        $_SESSION['notes'][] = [
            'title' => $title,
            'body' => $body
        ];
        header('Location: ?page=notes');
        exit;


    default:
        abort("Page '{$page}' not found.");
}

require 'views/layout.php';

