<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        html,body {
            width : 500px;
            margin : 0 auto
        }
        li {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h2>Count Array {{count($data)}}</h2>
    {{ $data[$id] }}
</body>
</html>