<?php
namespace controllers;
class Payers extends \app\Controller{
    /**  @return void */
    public function index(){
        
        $this->loadModel('Articles');
        $articles = $this->Articles->categorie(4);
        $lien['js'][]='/js/catalogue.js';
        $this->render('index', compact('articles'), $lien);
    }
    /**  @param string $slug
     * @return void
     */
    public function lire(string $slug){
        $this->loadModel('Articles');
        $articles = $this->Articles->findBySlug($slug);
        $this->render('lire', compact('articles'));
    }
}
?>