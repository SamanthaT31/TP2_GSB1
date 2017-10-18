<?php
echo"

<h3>Ajouter un nouveau compte rendu de visite.</h3>

	<form method='POST' action='index.php?uc=gererCompterendu&action=saisirCompterendu'>
		<table class='tabNonQuadrille'>
		<tr>
			<td>Référence du praticien</td>
			<td>
				<input type='text' name=refPraticien size='50' maxlength='100' />
			</td>
		</tr>
		<tr>
			<td>Date Visite (jj/mm/aaaa)</td>
			<td>
				<input type='text' name=FinDeVisite size='30' maxlength='50' />
			</td>
		</tr>
		<tr>
			<td>Niveau d'intérêt</td>
			<td>
				<input type='text' name=niveauinteret size='50' maxlength='100' />
			</td>
		</tr>
		</table>
				<input type='submit' value='Valider' name='valider' />
				<input type='reset' value='Annuler' name='annuler' />
	</form>
";
?>