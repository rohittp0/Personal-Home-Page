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
    $text = 'Personal Home Page';
    $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
    echo $text;
?>
</h1>
<h2>Hosting Service</h2>
<form action="/" method="post">
        <textarea class="text" cols="86" rows ="20" name="code" placeholder="PHP code"></textarea><br>
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="Host">
</from>

<?php
    if (isset($_POST['code']) && isset($_POST['name'])) {
        $code = $_POST['code'];
        $name = $_POST['name'];
        $file = fopen($name . ".php", "w");
        fwrite($file, $code);
        fclose($file);

        echo "<a href='$name.php'>$name</a> Hosted";
    }
?>

</body>
</html>
