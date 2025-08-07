

<h1>Login</h1>

<?php if ($error = \Core\Session::flash('error')) : ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<form method="POST" action="/login">
    <input type="email" name="email" placeholder="Email" value="<?= \Core\Session::get('old')['email'] ?? '' ?>">
    <?php if ($err = \Core\Session::get('errors')['email'] ?? false) : ?>
        <p style="color:red"><?= $err ?></p>
    <?php endif; ?>

    <input type="password" name="password" placeholder="Password">
    <?php if ($err = \Core\Session::get('errors')['password'] ?? false) : ?>
        <p style="color:red"><?= $err ?></p>
    <?php endif; ?>

    <button type="submit">Login</button>
</form>