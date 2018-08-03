<?php
namespace Models;

require_once("config.php");
require $_SERVER['DOCUMENT_ROOT']  . "/zmvc/vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
 
class Database {
 
	    function __construct() {
	    $capsule = new Capsule;
	    $capsule->addConnection([
		     'driver' => DBDRIVER,
		     'host' => DBHOST,
		     'database' => DBNAME,
		     'username' => DBUSER,
		     'password' => DBPASS,
		     'charset' => 'utf8',
		     'collation' => 'utf8_unicode_ci',
		     'prefix' => '',
	    ]);
	    // Setup the Eloquent ORM… 
	    $capsule->bootEloquent();
	} 
}
?>