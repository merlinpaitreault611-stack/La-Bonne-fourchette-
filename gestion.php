<?php

require_once "db.php";

$sql = "SELECT * FROM plat WHERE type = :type";
$requete = $dbh->prepare($sql);
$requete->execute(['type' => 'principal']);

$result = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des plats</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des plats</h1>

    <table class="table table-striped table-bordered table-hover shadow">
        <thead class="table-dark">
            <tr>
                <th>Nom du plat</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Détail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $plat): ?>
                <tr>
                    <td><?= $plat['nom_plat']; ?></td>
                    <td><?= $plat['type']; ?></td>
                    <td><?= $plat['prix']; ?> €</td>
                    <td>
                        <a href="detail_plat.php?id=<?= $plat['id_plat']; ?>" class="btn btn-primary btn-sm">
                            Consulter
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
