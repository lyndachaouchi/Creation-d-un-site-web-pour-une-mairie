<?php

function str_random ($length){
	$alphabet="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
     return substr(str_shuffle(str_repeat($alphabet,$length)), 0, $length);
	
	}
	
	function connctetoi (){
		if(!session_status() == PHP_SESSION_NONE){
session_start();}

if(!isset($_SESSION['auth']))
{
	
	header('Location: login.php');
	
	exit();
	}}?>
	