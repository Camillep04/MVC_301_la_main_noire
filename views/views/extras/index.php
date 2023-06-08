<style>
  body{
    background-color: #b5ead6;
  }
</style>
<main class="d-flex grid gap-5 flex-wrap p-3 mb-0" style="margin: 0;"> 
    <p class="description">Dans la catégorie "Extra" vous trouverez des extensions de nos solutions, faisant augmenter le prix des produits mais permettant de faire varier les plaisirs en vous donnant l'opportunité d'être un peu plus acteur dans l'élimination de votre cible. De quoi encore plus s'amuser !</p>
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

                  <strong><p>Choisir l'extra de la solution : </p></strong>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Possibilité de conduire</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Possibilité de piloter le drone</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Choix du tiers</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Choisir l’empoisonnement</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">Combinaison anti-feu</label>
                    </div>

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
<h2>Toujours pas convincu par nos extra ?</h2>
  <div class="extra">
    <p><u>Possibilité de conduire :</u> Laissez libre cours à vos pulsions meurtrières en conduisant le véhicule qui renversera votre cible. (La société n’est pas responsable des suites judiciaires possibles suite à l’achat de cette option.)</p>

    <p><u>Possibilité de piloter le drone :</u> Avec cette option vous multipliez par 10 le fun de votre soirée ! Attendez… 0 fois 10, ça fait toujours zéro…(Attention le niveau de fun étant à zéro, vous risquez d’être identifié comme relou et immédiatement éliminé)</p>

    <p><u>Choix du tiers :</u> Ayez le choix parmi plusieurs genres de personnes avec qui passer le reste de la soirée, plutôt qu’avec le relou de service.</p>

    <p><u>Choisir l’empoisonnement :</u> Choisissez l’empoisonnement que subira votre victime, et les effets secondaires (vomissement, diarrhée, mort…)</p>

    <p><u>Combinaison anti-feu :</u> Ne craignez pas le feu avec cette combinaison certifiée ignifugée afin de pouvoir immoler les relous de votre vie sans risquer de vous brûler.</p>
  </div>
<a href="#" class="btn ">Remonter</a>