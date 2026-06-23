<?php
require_once "db.php";

$message = "";

if (
    isset($_POST['nom_client']) &&
    isset($_POST['prenom_client']) &&
    isset($_POST['tel_client']) &&
    isset($_POST['mail_client']) &&
    isset($_POST['mdp_client'])
) {

    
    $mdp_hash = password_hash($_POST['mdp_client'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO client 
            (nom_client, prenom_client, tel_client, mail_client, mdp_client)
            VALUES 
            (:nom_client, :prenom_client, :tel_client, :mail_client, :mdp_client)";

    $requete = $dbh->prepare($sql);

    $requete->execute([
        'nom_client' => $_POST['nom_client'],
        'prenom_client' => $_POST['prenom_client'],
        'tel_client' => $_POST['tel_client'],
        'mail_client' => $_POST['mail_client'],
        'mdp_client' => $mdp_hash   
    ]);

    $message = "Client ajouté avec succès !";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Client - La Sale Fourchette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="connexions.css">
</head>

<body>

<div class="container">

    <div class="login-box">

        <h2 class="text-center mb-4 fw-bold">
            Créer un compte
        </h2>

        <?php if($message != "") : ?>

            <div class="alert alert-success text-center">
                <?= $message ?>
            </div>

        <?php endif; ?>

        <form method="post" action="">

            <div class="mb-3">
                <label class="form-label">
                    Nom
                </label>

                <input type="text"
                       class="form-control"
                       name="nom_client"
                       placeholder="Entrez votre nom"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Prénom
                </label>

                <input type="text"
                       class="form-control"
                       name="prenom_client"
                       placeholder="Entrez votre prénom"
                       required>
            </div>
            <div class="mb-3">
    <label class="form-label">
        Adresse mail
    </label>

    <input type="email"
           class="form-control"
           name="mail_client"
           placeholder="exemple@mail.com"
           required>
</div>

            <div class="mb-3">
                <label class="form-label">
                    Numéro de téléphone
                </label>

                <input type="text"
                       class="form-control"
                       name="tel_client"
                       placeholder="06XXXXXXXX"
                       required>
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Mot de passe
                </label>

                <input type="password"
                       class="form-control"
                       name="mdp_client"
                       placeholder="Créer un mot de passe"
                       required>
            </div>

            <button type="submit" class="btn btn-custom w-100">
                Créer le compte
            </button>

        </form>

        <div class="text-center mt-4">

            <a href="connexions.php"
               class="text-primary text-decoration-none">

                Déjà un compte ? Se connecter

            </a>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>