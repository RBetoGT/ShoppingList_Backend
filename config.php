<?php
	/*##########################################################
	# Last Author: beli3ver
	# Last edit: 2015-08-31 03:30pm
	############################################################*/
	
	/*##########################################################
	# Auth Key / Password, to get acces to the database        #
	############################################################*/
	$authKey = '';
	/*##########################################################
	# Branch: stable, testing, experimental                    #
	############################################################*/	
	$branch = "stable";
	/*##########################################################
	# Database: MySQL, SQLite                                  #
	############################################################*/	
	$dataBase = "SQLite";
	/*##########################################################
	# SQLite Config                                            #
	############################################################*/		
	$SQLiteConfig = array('file' => "shoppinglist.sqlite");
	/*##########################################################
	# MySQL Config                                             #
	############################################################*/
	$MySQLConfig = [
        'host' => "localhost",
        'db' => "your_database_name",
        'user' => "your_mysql_user",
        'password' => "your_mysql_password",
	];
?>
