<?php
namespace controllers;
class Login extends \app\Controller{
    /**  @param string $slug
     * @return void
     */

    public function index(){
        $this->render('index');
    }
    public function connexion(){
        //die(ca marche);
        //var_dump($login)
        //var_dump($password)
        //die();
        $login = $_POST['login'];
        $password = $_POST['password'];
    
        //on charge le model utilisateur
        $this->loadModel('Utilisateurs');
    
        //récupère utilisateur en fonction de son login
        $user = $this->Utilisateurs->findByLogin($login);
       

        if ($user !== null){
            if(password_verify($password,$user['password'])){
                // mot de passe ok
                $_SESSION['LOGIN'] = $user['login'];
                header('Location: /Backoffice');
            } else{
                //Erreur de mot de passe
                header('Location: /login?message="erreur de mot passe"');
            }
        }
        else{
            //pas d'utilisateur trouvé...
            header('Location: /login?message="Utilisateur inconnu"');
        }
    }
    public function deconnexion(){
        session_destroy();
        header('Location: /');
    }
}

?>