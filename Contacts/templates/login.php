<?php $title = 'Login'; ?>
<?php ob_start() ?>
    <h2><?=htmlspecialchars($title)?></h2>
    <form method="post">
        <p>
            Username : <input name="username" />
        </p>
        <p>
            Password : <input name="password" />
        </p>
        <p>
            <button>Login</button>
        </p>
    </form>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>