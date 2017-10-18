 <div id="contenu">
  <h2>Mes visites</h2>
  <h3>Sélectionner praticien :</h3>
    <form action="index.php?uc=etatVisite&action=voirEtatVisite" method="post">
      <div class="corpsForm">
        <p>
          
          <label for="lstPraticien" accesskey="n">Praticien : </label>
          <select id="lstPraticien" name="lstPraticien">
          
          <?php
            foreach ($lesPraticiens as $unPraticien)
            {
              $pratcien = $lePraticien['nom'];
              if($lePratcien == $praticienASelectionner)
              {
          ?>
          <option selected value="<?php echo $praticien ?>"> </option>
          <?php 
              }
              else
              { 
          ?>
          <option value="<?php echo $praticien ?>"></option>
          <?php 
              }
            }
          ?>    
        
          </select>
        </p>
      </div>
      <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
          <input id="annuler" type="reset" value="Effacer" size="20" />
        </p> 
      </div>
    </form>