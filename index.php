<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Selamat Datang di WebProII");
fclose($file);
?>