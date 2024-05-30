<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
    <style>
        .form-input-block {
            margin-top: 5px;
        }
    </style>
</head>
<body>
<h1>Form register</h1>
<form action="/register" method="post">
    <div class="form-input-block">
        <input type="text" name="name" placeholder="Your Name">
        <?php showError('name'); ?>
    </div>
    <div class="form-input-block">
        <input type="email" name="email" placeholder="Your Email">
        <?php showError('email'); ?>
    </div>
    <div class="form-input-block">
        <input type="number" name="age" min="1" max="120" step="1" placeholder="Your Age">
        <?php showError('age'); ?>
    </div>
    <div class="form-input-block">
        <input type="password" name="password" placeholder="Password">
        <?php showError('password'); ?>
    </div>
    <div class="form-input-block">
        <input type="password" name="password_confirm" placeholder="Password Confirmation">
    </div>
    <div class="form-input-block">
        <input type="submit" value="Register">
    </div>
</form>
</body>
</html>