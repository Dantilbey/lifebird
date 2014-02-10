<?php
$con = mysqli_connect('localhost', 'db_user', 'password', 'db_name');

if (mysqli_connect_errno()) 
{
    die('Not connected : ' . mysql_error());
}
else 
{
    echo "Successful connection!\n";
}

/* creating "Users" table */
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
                )";

/* Check if table creation was successful */
if (mysqli_query($con,$sql))
{
  echo "Table Users created successfully!\n";
}
else
{
  echo "Error creating table: " . mysqli_error($con);
}
?>