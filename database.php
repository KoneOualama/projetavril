<?php

/*   Classe connexion      */

class Database
{
    /* variable de la classe private static $nom_variavle = valeur */

    private static $dbHost = "localhost";
    private static $dbName = "projetavril";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";

    private static $connection = null;

    /*Fonction connexion  */

    public static function connect()
    {

        /* UTILISATION DE VARIABLE D'UNE CLASSE : selt::$nom_variable */

        if(self::$connection == null)
        {
            /*CONNEXION */
            try
            {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
