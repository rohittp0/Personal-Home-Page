<?php
    $text = 'My Personal Home Page';
    $text = preg_replace('/(\b[a-z])/i', '<span style="color:blue;">\1</span>', $text);
    echo $text;
?>