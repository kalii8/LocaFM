<?php
namespace kalii8\MVC\db;

use PDO;
use PDOException;

class db
{
    protected static $connection = null;

    public static function getConnection()
    {
        if (static::$connection === null) {
            try {
                static::$connection = new PDO(
                    'mysql:dbname='. DB_NAME. ';host=' . DB_HOST . ';charset=utf8', 
                    DB_USER,
                    DB_PASS
                );
         
                static::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
         
        return static::$connection;
    }
    /**
     * runsa a query
     * @param string $query - the SQL query to be run
     */

    public static function query($query, $values = [])
    {   
        //get connection to database
        $connection = static::getConnection();
        $statement = $connection->prepare($query);

        //executing query; boolean
        $success = $statement->execute($values);
        if($success === false){
            static::exitWithError();
        }

        return $statement;
    }

    /**
     * selects fow of queries 
     * returns array of fetched rows
     */

    public static function select($query, $values = [])
    {
        //run the query and get the statement
        $statement  = static::query($query, $values);

        //set format of returned rows (associative array)
        $statement->setFetchMode(PDO::FETCH_ASSOC); // set the type of results

        //fetch all rows r once as an array
        $all_results = $statement->fetchAll(); // get all results as an array

        return $all_results;
    }

    /**
     * returns FIRST fetched result
     */

    public static function find($query, $values = [])
    {
        $statement  = static::query($query, $values);

        //set format of returned rows OBJECT
        $statement->setFetchMode(PDO::FETCH_OBJ); 

        //fetches first result as OBJECT not array as in select
        $result = $statement->fetch(); 

        return $result;

    }

    public static function exitWithError()
{
    // print a <h1>
    echo '<h1>MySQL error:</h1>';
 
    // dump information about the error
    var_dump(static::getConnection()->errorInfo());
 
    // end execution
    exit();
}
}