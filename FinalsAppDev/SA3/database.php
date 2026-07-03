<?php

$conn = mysqli_connect("localhost","root","","userdb");

if(!$conn)
{
    die("Connection Failed : ".mysqli_connect_error());
}

?>