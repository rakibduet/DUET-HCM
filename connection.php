<?php 

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='dhcm';

$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);


if (!$conn) {
	echo "Connection Failed";
}