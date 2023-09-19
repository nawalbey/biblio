<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/biblio/models/database.php";
class User
{
    // methode pour s'inscrire
    public static function inscription($name, $email, $password)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        // executer la requete
        try {
            $request->execute(array($name, $email, $password));
            // rediriger vers la page login.php
            header("Location: http://localhost/biblio/login");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour se connecter
    public static function connexion($email, $password)
    {
        // se connecter a la bd
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM users WHERE email = ?");
        // executer la requete
        try {
            $request->execute(array($email));
            // recuperer le resultat de la requete dans un tableau
            $user = $request->fetch();
            // verifier si le mot de passe est correct
            if (empty($user)) {
                // header("Location: http://biblio.com/views/login");
                header("location:" . $_SERVER['HTTP_REFERER']);
                $_SESSION["error_message"] = "cet email n'existe pas";
            } else if (password_verify($password, $user['password'])) {
                // il a taper le bon mail et le bon mot de passe
                setcookie("id_user", $user['id'], time() + 86400, "/", "localhost", false, true);
                setcookie("user_role", $user['role'], time() + 86400, "/", "localhost", false, true);

                header("location: http://localhost/biblio/list_book");
            } else {
                $_SESSION["error_message"] = "Mot de passe incorrect";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // methode pour se deconnecter
    public static function logout()
    {

    }
    // methode pour emprunter un livre
    public static function borrow()
    {

    }
    // methode pour se desinscrire
    public static function deleteAccount()
    {

    }
}