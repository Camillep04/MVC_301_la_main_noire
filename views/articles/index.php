<?php foreach($articles as $article): ?>
    <div>
        <p><?= $article['description']?></p>
    </div>
    <div class="catalogue">
        <div class="row">
            <div class="col ">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $article['image']?>" class="card-img-top" alt="<?= $article['alt']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article['titre']?></h5>
                        <p class="card-text"><?=$article['contenu'] ?></p>
                        <h2 class="price"><?= $article['prix']?></h2>
                        <a href="#" class="btn btn-primary add-to-card" data-id="7">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach ?>