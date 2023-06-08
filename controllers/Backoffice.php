<?php
namespace controllers;
class Backoffice  extends \app\Controller{
    /**  @return void */
    public function index(){
        $this->isGranted();
        $this->loadModel('Articles');
        $articles = $this->Articles->getAll();
        $lien['css'][]='/css/style_main_noire.css';
        $this->render('index', compact('articles'));
    }
    /**  @param string $slug
     * @return void
     */
    public function lire(string $slug){
        $this->loadModel('Articles');
        $articles = $this->Articles->findBySlug($slug);
        $this->render('lire', compact('articles'));
    }

    // ****** Supprimer un élément dans le backoffice *****
    public function delete($id){
        $this->loadModel('Articles');
        $this->Articles->id = $id;
        $article = $this->Articles->getOne();
        //var_dump($article['image']);
        if($article["image"]!=="/image/"){
            $lien=str_replace('/image/','image/',$article['image']);
            //var_dump($lien);
            unlink($lien);
        }
        $articles = $this->Articles->delete($id);
        $this->render('delete', compact('articles'));
    }

    // ********Pour remplir le backoffice avec des nouveaux articles, ces articles s'ajouterons automatiquement dans la base de donnée********
    public function new(){
        $this->loadModel('Articles');
        //var_dump($_FILES['userfile']);
        $path=pathinfo('Backoffice.php');
        //var_dump($path);
        $res = move_uploaded_file($_FILES['userfile']['tmp_name'],ROOT."image/".$_FILES["userfile"]["name"]);
        //echo dirname(__FILE__);
        //echo(ROOT."/image/".$_FILES["userfile"]["name"]);
        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];
        $slug=$_POST['slug'];
        $image="/image/".$_FILES["userfile"]["name"];
        $alt=$_POST['alt'];
        $prix=$_POST['prix'];
        $articles = $this->Articles->new($titre, $contenu, $slug, $image, $alt, $prix);
        //die("-".$res."-");
        $this->render('new', compact('articles'));
    }

//Aide de Cyan pour update
// affiche les données deja présent dans la ligne selectionnée
    public function update($id){
        $this->loadModel('Articles');
        $this->Articles->id = $id;
        $article = $this->Articles->getOne();
        $this->render('update', compact('article'));
    }

// maj de la bbd quand on est sur la page "mettre a jour une donnée"
    public function updatesave($id){
        // On instancie le modèle "Article"
        $this->loadModel('Articles');
        //var_dump(UPLOAD_ERR_OK);
        $this->Articles->id = $id;
        //permet de récupérer les données de la base de données de la ligne sélectionner. 
        $article = $this->Articles->getOne();
        //var_dump($_FILES['userfile']);
        if($_FILES['userfile']['error']==UPLOAD_ERR_OK){
            //var_dump($_FILES['userfile']);
            //Permet de supprimer les parties du lien en trop
            $lien=str_replace('image/','image/',$article['image']);
            //var_dump($lien);
            unlink($lien);
            move_uploaded_file($_FILES['userfile']['tmp_name'],"image/".$_FILES["userfile"]["name"]);
            $article = $this->Articles->update($id, $_POST['titre'],  $_POST['contenu'],  $_POST['slug'], "image/".$_FILES["userfile"]["name"], $_POST['alt'], $_POST['prix']);
        }
        else {
            //var_dump($_FILES['userfile']);
            // On stocke l'article dans $article
            $article = $this->Articles->updateNext($id, $_POST['titre'],  $_POST['contenu'], $_POST['slug'], $_POST['alt'], $_POST['prix']);
        }
    $this->render('save', compact('article'));
    } 
}
?>