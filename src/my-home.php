<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body style="text-align: center;">
<h1>
<?php
    $text = 'My Personal Home Page';
    $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
    echo $text;
?>