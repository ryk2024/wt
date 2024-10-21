<?php
$ff=$_POST['f'];
$sf=$_POST['f1'];

if (!file_exists($ff))
{
    echo"file not exist";
    exit();
}

if (!file_exists($sf))
{
    echo"file not exist";
    exit();
}
$ffc=file_get_contents($ff);
if (file_put_contents($sf,$ffc,FILE_APPEND)){
    echo"append successfully :"
}
else
{
    echo "not append"
}
?>