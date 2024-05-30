<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello <?= Auth::getUser()->name; ?></h1>
<p>Your info:</p>
<p>Name: <?= Auth::getUser()->name; ?></p>
<p>Email: <?= Auth::getUser()->email; ?></p>
<p>Registration date: <?= Auth::getUser()->created_at; ?></p>
<p>Last update: <?= Auth::getUser()->updated_at; ?></p>
<a href="/logout">Logout</a>
</body>
</html>