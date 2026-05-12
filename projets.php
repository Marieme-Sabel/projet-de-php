<?php require_once 'fonctions.php'; ?>

<?php

/* =========================
   TABLEAU DES PROJETS
========================= */
$projets = [
    [
        'titre' => 'Poubelle Intelligente',
        'description' => 'Projet de groupe sur une poubelle connectée avec ESP32, capteur ultrason et interface web.',
        'technologies' => ['ESP32', 'Capteur ultrason'],
        'image' => './image/poubelle.jpeg'
    ],
    [
        'titre' => 'Création de flyer',
        'description' => 'Design d’un flyer pour la plateforme Orient’Avenir pour l’orientation scolaire.',
        'technologies' => ['Photoshop', 'Illustrator'],
        'image' => './image/FLYER.jpeg'
    ],
    [
        'titre' => 'Projet en langage C',
        'description' => 'Gestion d’un répertoire téléphonique avec ajout, modification et suppression de contacts.',
        'technologies' => ['Codeblocks', 'Langage C'],
        'image' => './image/lc.png'
    ]
];

/* =========================
   RECHERCHE
========================= */
$recherche = nettoyer($_GET['q'] ?? '');
$resultats = [];

if ($recherche !== '') {

    foreach ($projets as $projet) {

        if (
            stripos($projet['titre'], $recherche) !== false ||
            stripos($projet['description'], $recherche) !== false
        ) {
            $resultats[] = $projet;
        }
    }

} else {
    $resultats = $projets;
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

<?php include 'composants/navigation.php'; ?>

<main>

    <!-- SECTION PROJETS -->
    <section class="projets">

        <!-- FORMULAIRE DE RECHERCHE -->
        <form class="search-form" method="GET" action="">
            <input 
                type="text" 
                name="q" 
                placeholder="Rechercher un projet..."
                value="<?= htmlspecialchars($recherche) ?>"
            >
            <button type="submit">Rechercher</button>
        </form>

        <br><br>

        <h2>Mes réalisations</h2>

        <br><br>

        <div class="projet-container">

            <?php if (!empty($resultats)): ?>

                <?php foreach ($resultats as $projet): ?>

                    <div class="projet-card">

                        <a href="<?= htmlspecialchars($projet['image']) ?>">
                            <img src="<?= htmlspecialchars($projet['image']) ?>" 
                                 alt="<?= htmlspecialchars($projet['titre']) ?>">
                        </a>

                        <h3><?= htmlspecialchars($projet['titre']) ?></h3>

                        <p><?= htmlspecialchars($projet['description']) ?></p>

                        <?php if (!empty($projet['technologies'])): ?>
                            <div class="technologies">
                                <?php foreach ($projet['technologies'] as $tech): ?>
                                    <span class="badge">
                                        <?= htmlspecialchars($tech) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <p>
                    Aucun projet ne correspond à votre recherche :
                    <strong><?= htmlspecialchars($recherche) ?></strong>
                </p>

            <?php endif; ?>

        </div>

    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials">

        <h2>Témoignages</h2>

        <div class="testimonials-container">

            <div class="testimonial-card">
                <p>“Très sérieux et motivé. Il apprend vite et fait de beaux projets.”</p>
                <h4>— Professeur Diouf</h4>
            </div>

            <div class="testimonial-card">
                <p>“Toujours prêt à aider et à travailler en équipe.”</p>
                <h4>— Fatima</h4>
            </div>

            <div class="testimonial-card">
                <p>“Son travail est propre et bien organisé.”</p>
                <h4>— Encadrant</h4>
            </div>

        </div>

    </section>

</main>

<?php require 'composants/footer.php'; ?>

</body>
</html>