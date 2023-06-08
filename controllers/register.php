<?php
namespace controllers;
class Register extends \app\Controller{
    /**  @return void */
    public function index(){
        $this->render('index');
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