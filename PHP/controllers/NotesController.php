<?php

namespace Controllers;

use Core\Validator;
use Core\Session;

if (!Session::has('user')) {
    redirect('/login');
}

class NotesController
{
    public function index()
    {
        $file = base_path('database/notes.json');
        if (!file_exists($file)) {
            file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
        }

        $notes = json_decode(file_get_contents($file), true) ?? [];

        view('notes', ['notes' => $notes]);
    }

    public function create()
    {
        view('add-note', ['errors' => [], 'old' => []]);
    }

   public function store()
{
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');

    $errors = [];

    if ($title === '') {
        $errors['title'] = 'Title is required.';
    }

    if ($content === '') {
        $errors['content'] = 'Content is required.';
    }

    if (!empty($errors)) {
        return view('add-note', [
            'errors' => $errors,
            'old' => ['title' => $title, 'content' => $content]
        ]);
    }

    $dir = base_path('database');

    if (!is_dir($dir)) {
        mkdir($dir, recursive: true);
    }

    $file = $dir . DIRECTORY_SEPARATOR . 'notes.json';

    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
    }

    $notes = json_decode(file_get_contents($file), true) ?? [];

    $notes[] = ['title' => $title, 'content' => $content];

    file_put_contents($file, json_encode($notes, JSON_PRETTY_PRINT));

    return redirect('/notes');
}

}
