<?php
  $abonnements = $db->query("
    SELECT lecteur.nom nom,lecteur.prenom prenom, type_abonnement.titre_abonnement typeAbonnement, abonnement.date_abonnement dateAbonnement,abonnement.date_expiration dateExpiration,abonnement.statut statut 
    FROM abonnement
      INNER JOIN lecteur
        ON lecteur.id=abonnement.id_lecteur
      INNER JOIN type_abonnement
        ON abonnement.id_type_abonnement=type_abonnement.id
   ")->fetchAll();
   
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Lecteurs</th>
      <th scope="col">Type d'abonnement</th>
      <th scope="col">Date d'abonnement</th>
      <th scope="col">Date d'expiration</th>
      <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($abonnements as $abonnement):?>
        <tr>
          <th scope="row">
            <?= $abonnement->nom. ' '.$abonnement->prenom  ?>
          </th>
          <td><?= $abonnement->typeAbonnement?></td>
          <td><?= $abonnement->dateAbonnement?></td>
          <td><?= $abonnement->dateExpiration?></td>
          <td><?= $abonnement->statut?></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>