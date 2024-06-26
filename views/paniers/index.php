<main>
    <table class="table product" id="panier">
        <thead>
            <tr class="titre">
                <th scope="col">Article</th>
                <th scope="col">Prix</th>
                <th class="qnt" scope="col">Quantité</th>
                <th scope="col">Prix total</th>
                <th></th>
            </tr>
        </thead>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <th scope="row" class="text-end">Total panier TTC</th>
                    <td class="text-end" id="PrixTotal"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <th scope="row" class="text-end">Extra</th>
                    <td class="text-end" id="reduction"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <th scope="row" class="text-end">Total panier</th>
                    <td class="text-end" id="totalPayer"></td>
                    <td></td>
                </tr>
            </tfoot>
    </table>
        <div class="d-flex justify-content-end">
            <a  id="supprpanier" class="btn vert me-2 btn-supprimer-panier">Vider le panier</a>
            <a href="/formulaires" class="btn vert me-2">Payer étape 1/2</a>
        </div>
</main>