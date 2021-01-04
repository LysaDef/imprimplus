
<nav>
    <p><?php echo $_SESSION['prenom']." ".strtoupper($_SESSION['nom']) ?></p>
    <ul>
        <li><a href="?route=dashboard">Tableau de bord</a></li>
        <li><a href="?route=authenticate&action=logout" class="badge badge-danger">Déconnexion</a></li>
    </ul>
</nav>