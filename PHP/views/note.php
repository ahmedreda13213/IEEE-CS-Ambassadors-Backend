<?php ob_start(); ?>
    <h1>Add Note</h1>
    <form action="/notes" method="POST">
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="<?= $old['title'] ?? '' ?>">
            <p style="color:red;"><?= $errors['title'] ?? '' ?></p>
        </div>
        <div>
            <label>Content:</label><br>
            <textarea name="content"><?= $old['content'] ?? '' ?></textarea>
            <p style="color:red;"><?= $errors['content'] ?? '' ?></p>
        </div>
        <button type="submit">Add</button>
    </form>
<?php $content = ob_get_clean(); include 'layout.php'; ?>
