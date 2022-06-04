<?php
$x=10;
echo"Dhruv Madaan";
function myfun()
{
    global$x;
    $y=20;
    echo"$y";
    echo"<br>";
    echo"$x";
}
myfun();

?>
