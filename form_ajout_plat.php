<?php
 require_once "db.php";

if(isset($_POST)){
    if (isset($_POST['nom_plat']) AND isset($_POST['desc_plat']) && isset($_POST['prix']) && isset($_POST['type'])) {

    $sql = "INSERT INTO `plat` (`nom_plat`, `desc_plat`, `prix`, `type`) VALUES (:nom, :desc_plat, :prix, :type)";

    $requete = $dbh->prepare($sql);

    $requete->execute(['nom' => $_POST['nom_plat'], 'desc_plat' => $_POST['desc_plat'], 'prix' => $_POST['prix'], 'type' => $_POST['type']]);
    }
}

?>








<h1>Ajouter un plat</h1>

<form method="post" action="">

    <input type="text" name="nom_plat" placeholder="Nom du plat">
    <textarea type="text" name="desc_plat" placeholder="Description du plat"></textarea>
    <input type="text" name="prix" placeholder="Prix du plat">
    <select name="type">
        <option value="principal">Principal</option>
        <option value="dessert">Déssert</option>
    </select>
    <input type="submit" value="AJOUTER LE PLAT">

</form>