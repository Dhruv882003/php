<?php
$myfile = fopen("dhruv.txt", "w") or die("Unable to open file!");
$txt = "dhruv madaan\n";
fwrite($myfile, $txt);
$txt ="Dhruv Madaan\n";
fwrite($myfile, $txt);
fclose($myfile);
?>