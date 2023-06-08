<style>
.insert{
    display:flex;
    flex-direction: column;
    width: 50%;
}
div{
    display: flex;
    justify-content: center;
}
.maj{
    background-color: rgb(177, 228, 177);
    padding: 7px;
}
.button-38 {
  background-color: #e8b4ae;
  border: 0;
  border-radius: .5rem;
  box-sizing: border-box;
  color: #111827;
  font-size: .875rem;
  font-weight: 600;
  line-height: 1.25rem;
  padding: .75rem 1rem;
  text-align: center;
  text-decoration: none #e8b4ae solid;
  text-decoration-thickness: auto;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
  cursor: pointer;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
.button-38:hover {
  background-color: #e8b4ae;
}
.button-38:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}
.button-38:focus-visible {
  box-shadow: none;
}
</style>
<h2>Mettre à jour une donnée &#128195;</h2><br>
    <div>
        <form class="maj" enctype="multipart/form-data" action="/backoffice/updatesave/<?= $article['id'] ?>" method="post">
            <p>Titre<input type="text" id="titre" name="titre" value="<?= $article['titre'] ?>" /></p>
            
            <p>Contenu<input type="text" id="contenu" name="contenu" value="<?= $article['contenu'] ?>" /></p>
            
            <p>Slug<input type="text" id="slug" name="slug" value="<?= $article['slug'] ?>" /></p>

            <img src="../../<?= $article['image'] ?>" alt="<?= $article['alt'] ?>" style="width:20%;">
            <input type="hidden" name="MAX_FILES_SIZE" value="3000000"/>
            
            <label for="idfile">Modifier le fichier</label>
            <input id="idfile" name="userfile" type="file"/><br>
            
            <label for="alt">Alt</label>
            <input type="text" id="alt" name="alt" value="<?= $article['alt'] ?>"><br>

            <label for="prix">Prix</label>
            <input type="text" id="prix" name="prix" value="<?= $article['prix'] ?>"><br>

            <p><input class="button-38" type="submit" value="ENVOYER"></p>
        </form>
    </div>