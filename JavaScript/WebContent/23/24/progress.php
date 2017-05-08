<?php
$file = "./count.txt";
$fp = fopen($file, "r");
$txt = fread($fp, filesize($file));
echo $txt;

$fp1 = fopen($file, "w");
if($txt<100){
    $txt++;
    fwrite($fp1, $txt);
}else{
    fwrite($fp1, 1);
}

fclose($fp1);
fclose($fp);
?>