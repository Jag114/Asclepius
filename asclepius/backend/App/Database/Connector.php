<?php namespace App\Database;

use PDO;

class Connector {

    //TODO Consider to move it to configuration file.
	// mhm tak czeba zrobic yes
    const DSN = "mysql:host=localhost;dbname=asclepius";
    const DATABASE_USERNAME = "root";
    const DATABASE_PASSWORD = "";

    private static $databaseConnection;

    private function __construct() {
    }

    /**
     * @return PDO
     */
    public static function getInstance() {

        if (!self::$databaseConnection) {
            self::$databaseConnection = new PDO(
                self::DSN,
                self::DATABASE_USERNAME,
                self::DATABASE_PASSWORD
            );
        }

        return self::$databaseConnection;
    }
}
?>