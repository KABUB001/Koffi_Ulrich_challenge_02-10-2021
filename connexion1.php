<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=coordonnes;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO donnees(nom, prenom, date_de_naissance, sexe, groupe, specialite, numero_aej, tel, mail, pseudo, pass) VALUES(:nom, :prenom, :date_de_naissance, :sexe, :groupe, :specialite, :numero_aej, :tel, :mail, :pseudo, :pass)');
$req->execute(array(
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'date_de_naissance' => $_POST['date_de_naissance'],
	'sexe' => $_POST['sexe'],
	'groupe' => $_POST['groupe'],
    'specialite' => $_POST['specialite'],
    'numero_aej' => $_POST['numero_aej'],
    'tel' => $_POST['tel'],
    'mail' => $_POST['mail'],
    'pseudo' => $_POST['pseudo'],
    'pass' => $_POST['pass']
	));

echo 'Etudiant enregistré !<br/>';

?>
