<?PHP
include "../core/ReclamationserviceC.php";
$reclamationservice1C=new ReclamationserviceC();
$listeReclamationservices=$reclamationservice1C->afficherReclamationservices();

//var_dump($listeReclamtionproduits->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>NomS</td>
<td>PrenomS</td>
<td>emailS</td>
<td>TelephoneS</td>
<td>TypeS</td>
<td>CategorieS</td>
<td>NumeroS</td>
<td>DescriptionS</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReclamationservices as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nomS']; ?></td>
	<td><?PHP echo $row['prenomS']; ?></td>
	<td><?PHP echo $row['emailS']; ?></td>
	<td><?PHP echo $row['telephoneS']; ?></td>
	<td><?PHP echo $row['typeS']; ?></td>
	<td><?PHP echo $row['categorieS']; ?></td>
	<td><?PHP echo $row['numeroS']; ?></td>
	<td><?PHP echo $row['descriptionS']; ?></td>
	<td><form method="POST" action="supprimerReclamationservice.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierReclamationservice.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


