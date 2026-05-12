<?php
require_once 'fonctions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Open+Sans&display=swap" rel="stylesheet">
    
</head>
<body>
   <?php require 'composants/navigation.php'; ?>
<section class="hero">
    <div class="accueil">
    <img src="./image/ms.jpeg" alt="Photo de Marieme" width="300px" class="photo">
      <h2>Bonjour, je suis <span class="highlight">Marieme Sabel Gomis</span></h2>
      <h3>Développeuse PHP & MySQL</h3>
      <p>Bienvenue sur mon portfolio. Découvrez mes projets et mes compétences.</p>
      <br>
        <a href="./projets.php" class="gomis">Projets</a>

    </div>

           </section>
<section class="stats">
    <div>
        <h3>5+</h3>
        <p>Projets</p>
    </div>
    <div>
        <h3>4</h3>
        <p>Technologies</p>
    </div>
    <div>
        <h3>1+</h3>
        <p>Année d'apprentissage</p>
    </div>
     <div>
        <h3>1+</h3>
        <p>Langages maîtrisés</p>
    </div>
</section>
    <br>        

<section class="timeline">
    <h2>Mon parcours</h2>

    <div class="timeline-container">

        <div class="timeline-item">
            <div class="timeline-content">
                <p>Début du développement web</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <p>Apprentissage de language c</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <p>Création de mes premiers projets</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content">
                <p>Apprentissage PHP & MySQL</p>
            </div>
        </div>

    </div>
</section>


<!-- FONT AWESOME (icônes) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="tech">
    <h2>Technologies</h2>

    <div class="tech-container">

        <div class="tech-card">
            <i class="fab fa-html5"></i>
            <p>HTML</p>
        </div>

        <div class="tech-card">
            <i class="fab fa-css3-alt"></i>
            <p>CSS</p>
        </div>

        <div class="tech-card">
            <i class="fab fa-js"></i>
            <p>JavaScript</p>
        </div>

        <div class="tech-card">
            <i class="fab fa-php"></i>
            <p>PHP</p>
        </div>

    </div>
</section>

 <br>
  
<section class="about">
  <h3>Compétences techniques :</h3>
  <br>
  <ul>
    <li>HTML / CSS / JavaScript</li>
    <li>Arduino / ESP32</li>
    <li>PHP / SQL</li>
    <li>Réseaux et administration système</li>
  </ul>
  <br>
  <h2>À propos de moi</h2>
  <br>
  <p>
    Je suis <strong>Marieme Sabel Gomis</strong>, étudiante en Génie Logiciel et Administration Reseau en deuxieme année, passionnée par le web et les bases de données.  
     J’aime concevoir des applications robustes en PHP et MySQL, et je m’intéresse aussi à l’intégration avec d’autres langages comme C et Python.
     J'aime travailler sur les systèmes embarqués, les applications webet le développement logiciel.
  </p>
  <br>
</section>

 <?php require 'composants/footer.php'; ?>
</body>
</html>