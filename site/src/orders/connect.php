<?php 
	$mysql = new mysqli('db:3306','root','123','USERS');
	$mysql->query('INSERT INTO `users` (email, password) VALUES($)');
	
 ?>