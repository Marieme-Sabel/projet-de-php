
<?php
$page_courante = basename($_SERVER['PHP_SELF']);
?>
  
<nav class="navbar">
    <h1 class="logo">Mon Portfolio</h1>

    <ul class="nav-links">
        <li>
            <a href="index.php"
            <?php if ($page_courante === 'index.php') echo 'class="actif"'; ?>>
            Accueil
            </a>
        </li>

        <li>
            <a href="projets.php"
            <?php if ($page_courante === 'projets.php') echo 'class="actif"'; ?>>
            Projets
            </a>
        </li>

        <li>
            <a href="contact.php"
            <?php if ($page_courante === 'contact.php') echo 'class="actif"'; ?>>
            Contact
            </a>
        </li>
    </ul>
<input type="checkbox" id="theme-toggle" hidden>
    <label for="theme-toggle" class="toggle-btn">🌙 / ☀️</label>
</nav>