<div class="test text-center header">
    <h1>BIEN MIEUX SEUL, QU'ACCOMPAGNÉ</h1>
</div>
<div class="pt-4 pb-4 bg-dark text-light">
    <h2 class="">Meilleures ventes</h2>

        <main class="d-flex grid gap-5 flex-wrap mt-3" style="margin: 0;">
    <?php foreach($main as $article): ?>
        <div>
            <p><?= $article['description']?></p>
        </div>
            <div class="card card-angled" style="width: 25rem;">
                <img src="<?= $article['image']?>" class="card-img-top" alt="<?= $article['alt']?>">
                <div class="card-body  text-dark" style="background-color: #b5ead6;">
                    <h5 class="card-title"><?= $article['titre']?></h5>
                    <p class="card-text"><?=substr($article['contenu'],0,100)."..." ?></p>
                    <h2 class="price" data-price="<?= $article['prix']?>"><?= $article['prix']?> XPF</h2>
                        <div class="d-flex justify-content-between">
                            <a href="/autres" class="btn" style="background-color: #2b9469;">Voir +</a>
                            <a href="#" class="btn rounded-5 col-6" style="background-color: #2b9469;" data-id="<?= $article['id']?>">Ajouter au panier</a>
                        </div>
                </div>
            </div>
    <?php endforeach ?>
        </main>

<div class="rouge_fonce pb-1">
    <div class="telecommande">
        <h2>Télécommande (bientôt disponible)</h2>
        <p>Prochaine innovation de l’entreprise, nous sommes fiers de vous présenter en avant-première notre télécommande de fidélité. Vous n'aurez bientôt plus besoin de passer par notre site pour profiter de nos services, il vous suffira d’utiliser la télécommande correspondante à une solution pour la commander d’une simple pression sur le bouton.
            Plus simple, tu meurs… Bientôt, les relous disparaitront de la surface de la Terre !</p>
            <div class="row">
                <div class="col ">
                    <div class="card" style="width: 18rem;">
                        <img src="image/lamainnoire_bouton.jpg" class="card-img-top" alt="Télécommande">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title">Télécommande</h5>
                            <p class="card-text">Télécommande de fidélité</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="bg-dark pt-4 pb-4">
    <h2 class="text-light">Avis utilisateurs</h2>
        <div class="avis">

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 28rem;">
                        <img src="../../image/Alohe.jpg" class="card-img-top" alt="Femme heureuse">
                        <div class="card-body d-flex flex-column align-items-center">
                        <p>★★★★☆</p>
                        <h5 class="card-title">Alohe</h5>
                            <p class="card-text">“Vraiment efficace ! Je recommande vraiment à tous ! (sauf au boloss XD) Tellement utile, j’ai plus besoin de mon gel poivre au cas où un gars est chiant, La main noire s’occupe de tout. Vous êtes vraiment des bg les gars 👌. <b>Mon préféré c’est le renversement par un véhicule</b>”</p>
                            <a href="/sanglantes" class="btn rounded-5 col-8" style="background-color: #e8b4ae; color:#ffffff;">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 28rem;">
                        <img src="../../image/Pierrick.png" class="card-img-top" alt="Homme qui boit un café">
                        <div class="card-body d-flex flex-column align-items-center">
                            <p>★★★★★</p>
                            <h5 class="card-title">Pierrick</h5>
                            <p class="card-text">“Bravo ! Quel travail impressionnant ! Grâce à La main noire, je n’ai plus à m’encombrer des relous du quotidien. Leurs services sont vraiment un "must have" au quotidien. Une fois qu’on y a goûté on ne peut plus s’en passer, c’est TROP utile 😋. <b>Je recommande personnellement l’explosion.</b>”</p>
                            <a href="/sanglantes" class="btn rounded-5 col-8" style="background-color: #e8b4ae; color:#ffffff;">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 28rem;">
                        <img src="../../image/Paul.jpg" class="card-img-top" alt="Homme heureux">
                        <div class="card-body d-flex flex-column align-items-center">
                            <p>★★★☆☆</p>
                            <h5 class="card-title">Paul-Raphaël</h5>
                            <p class="card-text">“À chaque fois que je me trouve en présence d’une personne délaissée par le destin, je me répète intérieurement le verset 1 Corinthiens 15:33 “Ne vous y trompez pas: les mauvaises compagnies corrompent les bonnes moeurs.” et j'appelle la main noire pour aider cette brebis égarée à regagner le chemin de la paix éternelle. <b>Le meurtre au couteau est la solution la plus efficace pour cette tâche.</b>”</p>
                            <a href="/sanglantes" class="btn rounded-5 col-8" style="background-color: #e8b4ae; color:#ffffff;">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="pt-4 pb-4">
    <div class="container text-center">
        <h3>A propos de nous</h3><br/>
        <p>Vous souhaitez sortir au plus vite d’une situation inconfortable ? Qu’il s'agisse d’un rendez-vous amoureux virant au cauchemar, un changement d’avis de dernière minute lors d’un mariage ou même d’un entretien d’embauche tournant au vinaigre. <br/>
        La main noire a pour but de satisfaire le client en éliminant la source de l’inconfort le plus rapidement et efficacement possible.<br/>
        Réservation en ligne de nos services avec une possibilité de définir un jour précis pour l'exécution de nos solutions.</p>
    </div>
</div>
<a href="#" class="btn" style="color:#b5ead6;">Remonter</a>