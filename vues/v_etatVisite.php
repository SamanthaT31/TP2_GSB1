<h3>Visites du praticien n° <?php echo $unPraticien ?> : </h3>
  <div class="encadre">
    
  <table class="listeLegere">
      <caption>Liste des visites</caption>
        <tr>
      <?php      
        foreach ( $lesPraticiens as $unPraticien ) 
        {
          $libelle = $unPraticien['nom'];
          $dateV = $unPraticien['finDeVisite'];
          $nivI = $unPraticien['niveauInteret'];
      ?>           
          <th> <?php echo $unPraticien ?></th>
        
        </tr>
        <tr>
            <th class="date">Date Visite</th>
            <th class="nivI">Niveau Interêt</th>
        </tr>
        <tr>
            <td><?php echo $libelle ?></td>
            <td><?php echo $laDate ?></td>
        </tr>
      <?php 
        }
      ?>   
  </table>
</div> 
</div>
