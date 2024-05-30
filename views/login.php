<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <style>
        .form-input-block {
            margin-top: 5px;
        }
    </style>
</head>
<body>
<h1>Form login</h1>
<?php if ($message = getMessage('success')) {
    echo '<div style="color: green;">' . $message . '</div>';
} ?>
<?php if ($message = getMessage('error')) {
    echo '<div style="color: red;">' . $message . '</div>';
} ?>
<form action="/login" method="post">
    <div class="form-input-block">
        <input type="email" name="email" placeholder="Your Email">
        <?php showError('email'); ?>
    </div>
    <div class="form-input-block">
        <input type="password" name="password" placeholder="Password">
        <?php showError('password'); ?>
    </div>
    <div class="form-input-block">
        <input type="submit" value="Login">
    </div>
</form>
</body>
</html>