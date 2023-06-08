<?php
namespace models;
class Utilisateurs extends \app\Model
{
    /***** Les fonctions s'occupent de gérer le login */
    public function __construct(){
        $this->table = "utilisateur";
        $this->getConnection();
    }
    public function findByLogin($login){
        $sql = "SELECT * FROM ".$this->table." WHERE `login`='".$login."'";
        $query = $this->_connexion->query($sql);
        return $query->fetch_assoc();
    }
    public function create($login, $passwordCrypt){
        $sql = "INSERT INTO utilisateur (login, password, email) VALUE ('".$login."','".$passwordCrypt."')";
        $this->_connexion->query($sql);
    }
}
?>