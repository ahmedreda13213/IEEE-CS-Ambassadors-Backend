<?php

use Core\Session;

test('login fails with wrong credentials', function () {
    $_POST = ['email' => 'wrong@email.com', 'password' => 'wrongpass'];
    $_SESSION = [];

    $auth = new \Core\Authenticator();

    expect($auth->attempt($_POST['email'], $_POST['password']))->toBeFalse();
});