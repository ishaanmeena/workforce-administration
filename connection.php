<?php
$server="localhost"; //server ip
$username="root"; //database username
$password=""; //password for the database
$database="udaan"; //database to be used

$connection=mysqli_connect($server,$username,$password,$database);

if(!$connection)
{
    echo "Unable to establish the connection! Please check the details...";
}
?>
