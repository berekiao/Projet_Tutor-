<?php include("actions/utilisateur/securityAction.php"); ?>
<?php include("header.php"); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="autocars.php"><h5> <span style="color: blue;">Auto</span>Cars</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <nav>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="showUsers.php">Administrateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showClient.php">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showVoiture.php">Voitures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showCategorie.php">Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showChauffeur.php">Chauffeurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showLocations.php">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Consulter les statistiques</a>
        </li>
      </ul>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="actions/utilisateur/logoutAction.php"  class="btn btn-primary me-md-2">Se déconnecter</a>

    </div>
  </div>
</nav>
