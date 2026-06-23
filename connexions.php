<?php
require_once "db.php";
session_start();

$message = "";

if (isset($_POST['mail_client']) && isset($_POST['mdp_client'])) {

    $mail = $_POST['mail_client'];
    $mdp = $_POST['mdp_client'];

    // Chercher l'utilisateur
    $sql = "SELECT * FROM client WHERE mail_client = :mail";
    $stmt = $dbh->prepare($sql);

    $stmt->execute([
        'mail' => $mail
    ]);

    $client = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier existence + mot de passe
    if ($client) {

        if (password_verify($mdp, $client['mdp_client'])) {

            $_SESSION['id_client'] = $client['id_client'];
            $_SESSION['nom_client'] = $client['nom_client'];

            header("Location: espace_client.php");
            exit;

        } else {
            $message = "Mot de passe incorrect";
        }

    } else {
        $message = "Aucun compte trouvé avec cet email";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - La Sale Fourchette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="connexions.css">
</head>

<body>

<div class="container">
    <div class="login-box">

        <h2 class="text-center mb-4 fw-bold">Connexion</h2>

        <!-- MESSAGE ERREUR -->
        <?php if ($message != ""): ?>
            <div class="alert alert-danger text-center">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <!-- Onglets -->
        <ul class="nav nav-pills justify-content-center mb-4">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#client">
                    Client
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#employe">
                    Employé
                </button>
            </li>
        </ul>

        <div class="tab-content">

            <!-- CLIENT -->
            <div class="tab-pane fade show active" id="client">

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Adresse mail</label>
                        <input type="email" class="form-control" name="mail_client" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp_client" required>
                    </div>

                    <button type="submit" class="btn btn-custom w-100">
                        Connexion Client
                    </button>

                </form>

            </div>

            <!-- EMPLOYÉ -->
            <div class="tab-pane fade" id="employe">

                <form action="connexion_employe.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Identifiant employé</label>
                        <input type="text" class="form-control" name="id_employe" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp_employe" required>
                    </div>

                    <button type="submit" class="btn btn-custom w-100">
                        Connexion Employé
                    </button>

                </form>

            </div>

        </div>

        <div class="text-center mt-3">
            <a href="inscription.php">Créer un compte</a>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>