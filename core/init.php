<?php
#Starting the users session
session_start();
require 'connect/database.php';
require 'classes/users.php';
require 'classes/general.php';
require 'classes/bcrypt.php';

$users  	= new Users($db);
$general 	= new General();
$bcrypt 	= new Bcrypt();

if($general->logged_in() === true) { //check if the user is logged in
	$user_id = $_SESSION['id']; //getting the user's id from the session.
	$user = $users->userdata($user_id); // getting all the data about the user
}


$errors = array();

ob_start();
?>