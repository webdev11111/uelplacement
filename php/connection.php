<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbemail = "";
$dbname = "uelloginnew1";

if(! $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbemail,$dbname))
{
  die("failed to connect!");
}
