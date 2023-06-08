<?php
    namespace models;
    class Articles extends \app\Model{
        public function __construct(){
        // Nous définissons la table par défaut de ce modèle
        $this->table = "articles";
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
        }
    /**
    * Retourne un article en fonction de son slug
    *
    * @param string $slug
    * @return void
    */

    /*********Les functions sélectionnent les éléments de la table  qui vont dans les pages respectivent. Cela permet de trier les elements selon les catégories. */
    public function categorie($id_categorie){
        $stmt = $this->_connexion->stmt_init();
        $stmt->prepare("select * from ".$this->table." where categorie_id= ?");
        $stmt->bind_param("i", $id_categorie);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        return $stmt_result;
    }
    public function extra($extra){
        $stmt = $this->_connexion->stmt_init();
        $stmt->prepare("select * from ".$this->table." where extra= ?");
        $stmt->bind_param("i", $extra);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        return $stmt_result;
    }
    public function acc($acc){
        $stmt = $this->_connexion->stmt_init();
        $stmt->prepare("select * from ".$this->table." where acc= ?");
        $stmt->bind_param("i", $acc);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        return $stmt_result;
    }
        public function findBySlug(string $slug){
            /* $sql = "SELECT * FROM `".$this->table."` WHERE `slug`='".$slug."'";
            $query = $this->_connexion->query($sql);
            return $query->fetch_assoc();*/
            $stmt = $this->_connexion->stmt_init();
            $stmt->prepare("select * from ".$this->table." where slug= ?");
            $stmt->bind_param("s", $slug);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            $result = $stmt_result->fetch_assoc();
            return $result;
        }

// ***** Dans les fonctions qui suivent, je définis les éléments qui permettent de remplir le backoffice ****

        public function delete($id){
            $stmt = $this->_connexion->stmt_init();
            $stmt->prepare("delete from ".$this->table." where id= ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            return $stmt_result;
        }
        public function new($titre, $contenu, $slug, $image, $alt, $prix){
            $stmt = $this->_connexion->stmt_init();
            $stmt->prepare("insert into ".$this->table." (titre,contenu,slug,image,alt,prix) values (?,?,?,?,?,?)");
            $stmt->bind_param("sssssi", $titre, $contenu, $slug, $image, $alt, $prix);
            //($_FILES["userfile"]["name"]);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            return $stmt_result;
        }
        public function update($id, $titre, $contenu, $slug, $image, $alt, $prix){
            $stmt = $this->_connexion->stmt_init();
            $stmt->prepare("UPDATE ".$this->table." SET titre=?, contenu=?, slug=?, image=?, alt=?, prix=? WHERE id=?");
            $stmt->bind_param("sssssii", $titre, $contenu, $slug, $image, $alt, $prix, $id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            return $stmt_result;
        }
        public function updateNext($id, $titre, $contenu, $slug, $alt, $prix){
            $stmt = $this->_connexion->stmt_init();
            $stmt->prepare("UPDATE ".$this->table." SET titre=?, contenu=?, slug=?, alt=?, prix=? WHERE id=?");
            $stmt->bind_param("ssssii", $titre, $contenu, $slug, $alt, $prix, $id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            return $stmt_result;
        }
    }
?>