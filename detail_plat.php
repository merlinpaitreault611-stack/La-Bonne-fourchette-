<?php
require_once "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM plat WHERE id_plat = :id";
$requete = $dbh->prepare($sql);
$requete->execute(['id' => $id]);

$plat = $requete->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du plat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h1 class="mb-4"><?= $plat['nom_plat'] ?></h1>

        <p><strong>Type :</strong> <?= $plat['type'] ?></p>
        <p><strong>Prix :</strong> <?= $plat['prix'] ?> €</p>
        <p><strong>Description :</strong> <?= $plat['desc_plat'] ?></p>

        <a href="index.php" class="btn btn-secondary mt-3">
            Retour
        </a>
    </div>
</div>

</body>
</html>