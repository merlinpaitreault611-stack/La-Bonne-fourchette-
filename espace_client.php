<?php
session_start();
require_once "db.php";

// 🔐 Protection de la page
if (!isset($_SESSION['id_client'])) {
    header("Location: connexion_client.php");
    exit;
}

// 🔎 Récupérer les infos du client connecté
$sql = "SELECT * FROM client WHERE id_client = :id";
$stmt = $dbh->prepare($sql);

$stmt->execute([
    'id' => $_SESSION['id_client']
]);

$client = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Client</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="text-center mb-4">👤 Mon espace client</h2>

        <!-- Infos client -->
        <div class="mb-3">
            <strong>Nom :</strong>
            <?= htmlspecialchars($client['nom_client']) ?>
        </div>

        <div class="mb-3">
            <strong>Prénom :</strong>
            <?= htmlspecialchars($client['prenom_client']) ?>
        </div>

        <div class="mb-3">
            <strong>Email :</strong>
            <?= htmlspecialchars($client['mail_client']) ?>
        </div>

        <div class="mb-3">
            <strong>Téléphone :</strong>
            <?= htmlspecialchars($client['tel_client']) ?>
        </div>

        <hr>

        <!-- Actions -->
        <div class="d-flex justify-content-between">

            <a href="deconnexion.php" class="btn btn-danger">
                Déconnexion
            </a>

            <a href="modifier_profil.php" class="btn btn-primary">
                Modifier mon profil
            </a>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>