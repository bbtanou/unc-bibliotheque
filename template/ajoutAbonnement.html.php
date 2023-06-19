
<form class=" d-flex flex-column justify-content-center" action="controllers/ajoutAbonnement.php">
    <div class="form-group marge ctr-emprunter">
        <label >Lecteurs</label>
        <select  class="form-control" name="lecteur">
        <option>Diallo Abdoulaye</option>
        <option>Bah Amadou</option>
        <option>Aimé cesair</option>
        </select>
    </div>
    <div class="form-group marge ctr-emprunter">
        <label>Type d'abonnement</label>
        <select  class="form-control" name="typeAbonnement">
        <option>Hebdomadaire</option>
        <option>Mensuel</option>
        <option>Trimestriel</option>
        <option>Annuel</option>
        </select>
    </div>
    
   <button type="submit" class="btn btn-primary marge ctr-emprunter" name="reabonner">Réabonner</button>
</form>