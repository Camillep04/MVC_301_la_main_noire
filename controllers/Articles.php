<?php
namespace controllers;
class Articles extends \app\Controller{
    /**  @return void */
    public function index(){
        
        $this->loadModel('Articles');
        $articles = $this->Articles->getAll();
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
}
?>