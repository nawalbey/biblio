<?php
class Database
    //une methode static est une methode qu'on peut executer sans instancier la class dans laquelle elle est implementee
{
    public static function dbConnect()
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=biblio", "root", "");

        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }
        return $conn;
    }
}
