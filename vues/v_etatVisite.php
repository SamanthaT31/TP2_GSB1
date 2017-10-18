<h3>Vistes du praticien n° <?php echo $refPraticien ?> : </h3>
  <div class="encadre">
    
  <table class="listeLegere">
      <caption>Liste des visites</caption>
        <tr>
          <th class="visiteur">Visiteur</th>
          <th class="finVisite">Fin de visite</th>
          <th class='nvInteret'>Nv. Interet</th>                
        </tr>
      <?php      
        foreach ( $lesPraticiens as $unPraticien ) 
        {
        $visiteur = $unPraticien['visiteur'];
        $date = $unPraticien['finVisite'];
        $nvInteret = $unPraticien['nvInteret'];
      ?>
            <tr>
              <td><?php echo $visiteur ?></td>
              <td><?php echo $date ?></td>
              <td><?php echo $nvInteret ?></td>
            </tr>
      <?php 
        }
      ?>
  </table>
</div>
</div>