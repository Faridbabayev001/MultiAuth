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
<form action="{{route('postRegisterUser')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter a name">
    <input type="email" name="email" placeholder="Enter a email">
    <input type="password" name="password" placeholder="Enter a password">
    <input type="submit" value="Register">
</form>
</body>
</html>
