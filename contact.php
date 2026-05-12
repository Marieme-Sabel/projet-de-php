<?php
require_once 'fonctions.php';

$erreurs = [];
$succes  = false;

$nom = $email = $type = $budget = $description = $delai = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération + nettoyage
    $nom         = nettoyer($_POST['nom'] ?? '');
    $email       = nettoyer($_POST['email'] ?? '');
    $type        = nettoyer($_POST['type'] ?? '');
    $budget      = nettoyer($_POST['budget'] ?? '');
    $description = nettoyer($_POST['description'] ?? '');
    $delai       = nettoyer($_POST['delai'] ?? '');


    // Validation
    if (!champ_requis($nom)) {
        $erreurs['nom'] = 'Le nom est obligatoire.';
    }

    if (!champ_requis($email)) {
        $erreurs['email'] = 'L\'email est obligatoire.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email'] = 'Email invalide.';
    }

    if (!champ_requis($type)) {
        $erreurs['type'] = 'Veuillez choisir un type de projet.';
    }

    if (!champ_requis($description)) {
        $erreurs['description'] = 'La description est obligatoire.';
    }

    if (empty($erreurs)) {
        $succes = true;

    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mon Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>

<body>

<?php require 'composants/navigation.php'; ?>

<main>
<section class="project-request">

<h2>Demande de projet</h2>

<!-- SUCCÈS -->
<?php if ($succes): ?>
    <p style="color:lightgreen; text-align:center;">
        Votre demande a été envoyée avec succès !
    </p>
    <br>
    <div class="resume">

    <h3>Récapitulatif de votre demande</h3>

    <p><strong>Nom :</strong> <?= $nom ?></p>

    <p><strong>Email :</strong> <?= $email ?></p>

    <p><strong>Type de projet :</strong> <?= $type ?></p>

    <p><strong>Budget :</strong> <?= $budget ?></p>

    <p><strong>Description :</strong> <?= $description ?></p>

    <p><strong>Délai :</strong> <?= $delai ?></p>

</div>
<?php endif; ?>

<!-- ERREURS -->
<?php if (!empty($erreurs)): ?>
    <ul style="color:red; text-align:center; list-style:none;">
        <?php foreach ($erreurs as $erreur): ?>
            <li><?= $erreur ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<br>

<form class="form" method="POST" action="">

<label>Nom complet</label>
<input type="text" name="nom" value="<?= $nom ?>" placeholder="Votre nom">
<span style="color:red"><?= $erreurs['nom'] ?? '' ?></span>

<label>Email</label>
<input type="email" name="email" value="<?= $email ?>" placeholder="Votre email">
<span style="color:red"><?= $erreurs['email'] ?? '' ?></span>

<label>Type de projet</label>
<select name="type">
<option value="">-- Choisir --</option>
<option <?= $type == "Site vitrine" ? "selected" : "" ?>>Site vitrine</option>
<option <?= $type == "Blog" ? "selected" : "" ?>>Blog</option>
<option <?= $type == "E-commerce" ? "selected" : "" ?>>E-commerce</option>
<option <?= $type == "Application web" ? "selected" : "" ?>>Application web</option>
</select>
<span style="color:red"><?= $erreurs['type'] ?? '' ?></span>

<label>Budget estimé</label>
<input type="text" name="budget" value="<?= $budget ?>" placeholder="Ex: 50 000 FCFA">

<label>Description du projet</label>
<textarea name="description" placeholder="Explique ton projet..."><?= $description ?></textarea>
<span style="color:red"><?= $erreurs['description'] ?? '' ?></span>

<label>Délai souhaité</label>
<input type="text" name="delai" value="<?= $delai ?>" placeholder="Ex: 2 semaines">

<button type="submit">Envoyer la demande</button>

</form>

</section>
<br>
    <br>
    <section class="projects">

    <h2>Mes projets</h2>
  <br>
    <!-- FORMULAIRE RECHERCHE -->
    <form class="search-form">
        <input type="text" placeholder="Rechercher un projet (HTML, CSS...)" required>
        <button type="submit">Rechercher</button>
    </form>

    <!-- LISTE DES PROJETS -->
    <div class="project-container">

       <div class="project-card">
            <h3>Site Restaurant</h3>
            <p>Technologies : HTML, CSS</p>
        </div>

        <div class="project-card">
            <h3>Portfolio</h3>
            <p>Technologies : HTML, CSS, JavaScript</p>
        </div>

        <div class="project-card">
            <h3>Blog</h3>
            <p>Technologies : HTML, CSS</p>
        </div>

    </div>

</section>

</main>

<br>

<?php require 'composants/footer.php'; ?>

</body>
</html>