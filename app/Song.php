<?php

namespace app;
use \kalii8\MVC\db\db;
use PDO;

/**
 * represents one row in table `product`
 */

class Song
{
    public $id = null;
    public $name = null;
    public $code = null;
    public $author = null;
    
    public function insert()
    {
        $query = "
            INSERT
            INTO `song`
            (`name`, `code`,`author`)
            VALUES
            (?, ?, ?)
        ";

        $values = [
            $this->name,
            $this->code,
            $this->author,
 
        ];

        db::query($query, $values);

        //find last inserted id and update this object property
        $this->id= db::getConnection()->lastInsertId();
    }

    public function update()
    {
        $query = "
            UPDATE `song`
            SET `name` = ?,
                 `code` = ?,
                 `author` = ?
                
            WHERE `id` = ? 
        ";

        $values = [
            $this->name,
            $this->code,
            $this->author,
            $this->id
        ];

        db::query($query, $values);

    }

    public function delete()
    {
        $query = "
            DELETE
            FROM `song` 
            WHERE `id` = ?      
        ";

        $values = [
            $this->id
        ];

        db::query($query, $values);
    }

    public function save()
    {
        
        if ($this->id)
        {
            $this->update();
        } else {
            $this->insert();
        } 
    }

    public static function find($id)
    {
        $query = "
            SELECT *
            FROM `song`
            WHERE `id` = ?
        ";

        $statement = db::query($query, [
            $id
        ]);

        //set statement to fetch objects of this class
        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);

        //fetch and return first result
        return $statement->fetch();
    }

    public static function select($query, $values = [])
    {
        $statement = db::query($query, $values);

        //set statement to fetch objects of this class
        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);
        
        //fetch and return all of results
        return $statement->fetchAll();
    }

  

}