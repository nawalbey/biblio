<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/biblio/models/database.php";
class book
{
    public static function addBook($title, $author, $publication)
    {
        //se connecter a la database
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare("INSERT INTO books (title, author, publication) VALUES (?,?,?)");
        //execution de la requete 
        try {
            $request->execute(array($title, $author, $publication));
            header("location: http://localhost/biblio/list_book");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    //methode pour recuperer la liste des livres
    public static function listBook()
    {
        //se connecter a la database
        $db = Database::dbConnect();
        //preparer la requete
        $request = $db->prepare("SELECT * FROM books");
        //executer la requete
        try {
            $request->execute();
            //recuperer le resultat de la requete dabns un tableau listBook
            $listBook = $request->fetchAll();
            return $listBook;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}