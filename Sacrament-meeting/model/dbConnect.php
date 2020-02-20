<?php
/**********************************************************
* File: dbConnect.php
* Author: Br. Burton
* 
* Description: Shows how to connect using either local
* OR Heroku credentials, depending on whether the code
* is executing at heroku.
***********************************************************/

function get_db() {
	$db = NULL;

	try {
	// 	// default Heroku Postgres configuration URL
	$dbUrl = getenv('DATABASE_URL');

	
	// 	// Get the various parts of the DB Connection from the URL
	$dbopts = parse_url($dbUrl);

	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');

	// Create the PDO connection
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	// 	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
	// 	// If this were in production, you would not want to echo
	// 	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	ie();
	}

	return $db;


try
	/*{
	  $user = 'postgres';
	  $password = 'inlove1982';
	  $db = new PDO('pgsql:host=localhost;dbname=agenda', $user, $password);

	  // this line makes PDO give us an exception when there are problems,
	  // and can be very helpful in debugging! (But you would likely want
	  // to disable it for production environments.)
	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $ex)
	{
	  echo 'Error!: ' . $ex->getMessage();
	  die();
	}
	return $db;*/
}