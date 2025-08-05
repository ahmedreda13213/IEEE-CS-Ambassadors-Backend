<h1>Login</h1>

<?php if (!empty($errors)): ?>
    <ul style="color: red;">
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="POST" action="/login">
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>

    <button type="submit">Log In</button>
</form>
