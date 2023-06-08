<style>
table {
    border : collapse;
    background-color: #e8b4ae;
    width : 100%;
}
th{
    background-color: #db6954;
    color: white;
}
h2{
    display: flex;
    justify-content: center;
    color: #db6954;
}
.insert{
    display:flex;
    flex-direction: column;
    width: 50%;
}
div{
    display: flex;
    justify-content: center;
}
.img{
width: 20%;
}
</style>
<table>
  <tr>
      <th>Id</th>
      <th>Titre</th>
      <th>Contenu</th>
      <th>Slug</th>
      <th>Image</th>
      <th>Prix</th>
  </tr>
<?php foreach($articles as $article): ?>
<tr>
    <td><?=$article['id'] ?></td>
    <td><?=$article['titre'] ?></td>
    <td><?=$article['contenu'] ?></td>
    <td><?=$article['slug'] ?></td>
    <td><img src="<?=$article['image'] ?>" class="img" alt="<?=$article['alt'] ?>"><p><?=$article['alt'] ?></p></td>
    <td><?=$article['prix'] ?></td>
    <td>
    <form action="/backoffice/delete/<?= $article['id'] ?>" method="post"><br>
            <input class="button-38" type="submit" value="delete">
    </form><br/>
    <form action="/backoffice/update/<?= $article['id'] ?> "method="post">
        <input class="button-38" type="submit" value="update" name="envoi">
    </form><br/>
    </td>
</tr>
<?php endforeach ?>    
</table>
    <h2 class="ML">Insérer une nouvelle donnée</h2><br>
        <div>
            <form enctype="multipart/form-data" class="insert" action="/backoffice/new" method="post">
              <label for="titre">Titre</label><br>
              <input type="text" id="titre" name="titre"><br>

              <label for="contenu">Contenu</label><br>
              <textarea type="text" id="contenu" name="contenu"></textarea><br>
              
              <label for="slug">Slug</label><br>
              <input type="text" id="slug" name="slug"><br>
            
              <input type="hidden" name="MAX_FILES_SIZE" value="3000000"/>
              <label for="idfile">Envoyer ce fichier</label>
              <input id="idfile" name="userfile" type="file"/><br>

              <label for="alt">Alt</label>
              <input type="text" id="alt" name="alt"><br>

              <label for="prix">Prix</label>
              <input type="text" id="prix" name="prix"><br>

              <input type="submit" class="button-38" value="new">
            </form>
        </div>