<?php

$dbhost='locahost';
$dbname='loginandregistrationform';
$dbusername='root';
$dbpass='';

$mysqli=mysqli_connect('localhost','root','','loginandregistrationform');

if ($mysqli)
{
   //echo"connection ok";

}
else{
    echo"connection failed".mysqli_connect_error();
}
?>