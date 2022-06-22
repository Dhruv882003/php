<?php
$myfile = fopen("dhruv.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("dhruv.txt"));
fclose($myfile);
?>