<?php
  $emprunts = $db->query("
    SELECT lecteur.nom nom,lecteur.prenom prenom, livre.titre titre, emprunt.date_emprunt dateEmprunt, emprunt.date_retour_prevue dateRetourPrevue, emprunt.date_retour dateRetour, emprunt.statut statut 
    FROM emprunt
      INNER JOIN abonnement 
        ON abonnement.id=emprunt.id_abonnement
      INNER JOIN lecteur
        ON lecteur.id=abonnement.id_lecteur
      INNER JOIN livre
        ON livre.id=emprunt.id_livre
  ")->fetchAll();
 ?> 
<table class="table">

<thead>
    <tr>
      <th scope="col">Lecteurs</th>
      <th scope="col">Livres</th>
      <th scope="col">Date d'emprunt</th>
      <th scope="col">Date de retour prevue</th>
      <th scope="col">Date de retour</th>
      <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($emprunts as $emprunt): ?>
        <tr>
          <th scope="row"><?=$emprunt->nom. ' '.$emprunt->prenom ?></th>
          <td><?=$emprunt->titre?></td>
          <td><?=$emprunt->dateEmprunt?></td>
          <td><?=$emprunt->dateRetourPrevue?></td>
          <td><?=$emprunt->dateRetour?></td>
          <td><?=$emprunt->statut?></td>
        </tr>
    <?php endforeach; ?>
  </tbody>

</table>