<?PHP
include "../entities/reclamationservice.php";
include "../core/reclamationserviceC.php";
$reclamationservice=new Reclamationservice(757,'BEN Ahmed','Salah',50,'kk','lll',20,'ff',2);
$reclamationserviceC=new ReclamationserviceC();
$reclamationserviceC->afficherReclamationservice($reclamationservice);
echo "****************";
echo "<br>";
echo "cin:".$reclamationservice->getcin();
echo "<br>";
echo "nomS:".$reclamationservice->getNomS();
echo "<br>";
echo "prenomS:".$reclamationservice->getPrenomS();
echo "<br>";
echo "<br>";
echo "emailS:".$reclamationservice->getemailS();
echo "<br>";
echo "telephoneS:".$reclamationservice->getTelephoneS();
echo "<br>";
echo "typeS:".$reclamationservice->getTypeS();
echo "<br>";
echo "categorieS:".$reclamationservice->getCategorieS();
echo "<br>";
echo "numeroS:".$reclamationservice->getNumeroS();
echo "<br>";
echo "descriptionS:".$reclamationservice->getDescriptionS();
/*echo "le salaire est : ";
$reclamationproduitC->calculerSalaire($reclamationservice); 
echo "<br>";*/


?>