<div class="form">
        <form>
            <h2>Formulaire</h2>
            <div>
                <label for="nom">Votre nom</label>
                <input type="text" class="form-control validation" id="nom" name="nom" 
                data-required="true" 
                data-type="text"
                data-min="2" data-max="50"
                placeholder="Nom">
                <span class="invalid-feedback"></span>
            </div>
            <div>
                <label for="prenom">Votre prenom</label>
                <input type="text" class="form-control validation" id="prenom" name="prenom" 
                data-required="true" 
                data-type="text"
                data-min="2" data-max="50"
                placeholder="Prenom">
                <span class="invalid-feedback"></span>
            </div>
            <div>
                <label for="tel">Votre téléphone</label>
                <input type="tel" class="form-control validation" id="tel" name="tel" 
                data-required="true" 
                data-type="tel"
                data-min="6" data-max="6"
                placeholder="+000 00/00/00">
                <span class="invalid-feedback"></span>
            </div>
            <div>
                <label for="mail">Votre mail</label>
                <input type="mail" class="form-control validation" id="mail" name="mail" 
                data-required="true" 
                data-type="email"
                placeholder="exemple@gmail.com">
                <span class="invalid-feedback"></span>
            </div>
            <div>
                <label for="destination">Votre adresse de destination</label>
                <input type="text" class="form-control validation" id="destination" name="destination" 
                data-required="true" 
                data-type="text"
                data-min="2" data-max="50">
                <span class="invalid-feedback"></span>
            </div>
            <div>
                <label for="facturation">Votre adresse de facturation</label>
                <input type="text" class="form-control validation" id="facturation" name="facturation" 
                data-required="true" 
                data-type="text"
                data-min="2" data-max="50">
                <span class="invalid-feedback"></span>
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/payers" class="btn vert me-2">Payer étape 2/2</a>
    </div>