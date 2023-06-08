<style>
  body{
    background-color: #b5ead6;
  }
</style>
<main class="d-flex grid gap-5 flex-wrap p-3 mb-0" style="margin: 0;"> 
    <p class="description">La catégorie “Autre” correspond aux solutions extravagantes pour les personnes qui en veulent toujours plus, qui ne se limite pas à la norme. Dans cette catégorie vous trouverez des moyens fou pour toujours plus vous époustoufler lors de l'exécution de nos services.</p>  
<?php foreach($articles as $article): ?>
    <?php
      $idBoutonModal = 'boutonModal' . $article['id'];
      $idContenuModal = 'contenuModal' . $article['id'];
    ?>
    <div>
    </div>
    <div class="card ml-1" style="width: 25rem;">
      <img src="<?= $article['image']?>" class="card-img-top" alt="<?= $article['alt']?>">
      <div class="card-body rouge_fonce">
          <h5 class="card-title carte"><?= $article['titre']?></h5>
          <p class="card-text carte"><?=substr($article['contenu'],0,100)."..." ?></p>
          <h2 class="price" data-price="<?= $article['prix']?>"><?= $article['prix']?> XPF</h2>
          
         <!-- Bouton pop up voir + qui donne plus d'informations -->
        <div class="d-flex justify-content-between">
          <button type="button" class="btn" data-bs-toggle="modal" style="background-color: #e8b4ae; color:#ffffff;" data-bs-target="#<?= $idBoutonModal ?>">Voir +</button>
          <a href="#" class="btn add-to-card rounded-5 col-6" style="background-color: #e8b4ae; color:#ffffff;" data-id="<?= $article['id']?>">Ajouter au panier</a>
        </div>

        <div class="modal fade rouge_fonce" id="<?= $idBoutonModal ?>" tabindex="-1" aria-labelledby="<?= $idBoutonModal ?>Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><?= $article['titre']?></h5>
              </div>
                <div class="modal-body carte-popup">
                  <img src="<?= $article['image']?>" alt="<?= $article['alt']?>" class="card-img-top" style="width: 70%;"><br/>
                  <p><?= $article['contenu'] ?></p>
                  <h2 class="price" data-price="<?= $article['prix']?>"><?= $article['prix']?> XPF</h2>
                  <a href="#" class="btn add-to-card rounded-5 col-6" style="background-color: #35755e; color:#ffffff;" data-id="<?= $article['id']?>">Ajouter au panier</a>
                </div>
            </div>
          </div>
        </div>
          </div>
        </div>
  <?php endforeach ?>
</main>
<a href="#" class="btn ">Remonter</a>