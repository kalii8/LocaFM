<?php

namespace app;
use \kalii8\MVC\db\db;
use PDO;

/**
 * represents one row in table `author`
 */

class Author
{
    public $id = null;
    public $name = null;
    public $yob = null;
    public $bio = null;
    public $photo = null;
    
    public function insert()
    {
        $query = "
            INSERT
            INTO `author`
            (`name`, `yob`,`bio`, `photo`)
            VALUES
            (?, ?, ?, ?)
        ";

        $values = [
            $this->name,
            $this->yob,
            $this->bio,
            $this->photo,
        ];

        db::query($query, $values);

        //find last inserted id and update this object property
        $this->id= db::getConnection()->lastInsertId();
    }

    public function update()
    {
        $query = "
            UPDATE `author`
            SET `name` = ?,
                 `yob` = ?,
                 `bio` = ?,
                 `photo` = ?
                
            WHERE `id` = ? 
        ";

        $values = [
            $this->name,
            $this->yob,
            $this->bio,
            $this->photo,
            $this->id
        ];

        db::query($query, $values);

    }

    public function delete()
    {
        $query = "
            DELETE
            FROM `author` 
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
            FROM `author`
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