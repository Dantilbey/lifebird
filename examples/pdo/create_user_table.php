<?php
#define table name
$table = 'users';
try {
	$db = new PDO("mysql:dbname=lifebird;host=localhost", "root", "");
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); #error handling
	$sql = "CREATE TABLE Users 
               (
                id INT(11) NOT NULL auto_increment,
                username VARCHAR(16) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                gender ENUM('m','f') NOT NULL,
                website VARCHAR(255) NULL,
                country VARCHAR(255) NULL,
                replevel ENUM('a','b','c','d') NOT NULL DEFAULT 'a',
                avatar VARCHAR(255) NULL,
                ip VARCHAR(255) NOT NULL,
                signup DATETIME NOT NULL,
                lastlogin DATETIME NOT NULL,
                notescheck DATETIME NOT NULL,
                activated ENUM('0','1') NOT NULL DEFAULT '0',
                PRIMARY KEY (id),
                UNIQUE KEY username (username, email)
                )"; # create users table
	$db->exec($sql);
	print("Created $table Table.\n");
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>