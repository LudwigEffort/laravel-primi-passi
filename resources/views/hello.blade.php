<?php

$title = 'Hello everyone';
$condition = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @if ($condition)
        <p>I'm True</p>
    @else
        <p>I'm not True</p>
    @endif

    <a href="http://127.0.0.1:8000">Home</a>
</body>
</html>
