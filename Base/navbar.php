
<!-- NAVBAR -->
<nav class="bg_black navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container-fluid">
    <img src="../Image/logo.png" alt="logo" class="img_logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav_ul" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="color_white nav-link" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="color_white nav-link" aria-current="page" href="presentation.php">Presentation</a>
        </li>
        <li class="nav-item dropdown">
          <a class="color_white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu bg_black" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item color_white" href="categoriePage.php?catItem=Hybride">Hybride</a></li>
            <li><a class="dropdown-item color_white" href="categoriePage.php?catItem=Electrique">Electrique</a></li>
            <li><a class="dropdown-item color_white" href="promotion.php">Promotion</a></li>
            <li><a class="dropdown-item color_white" href="categorie.php">Tout</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="color_white nav-link" aria-current="page" href="promotion.php">Promotion</a>
        </li> -->
        <li class="nav-item">
          <a class="color_white nav-link" aria-current="page" href="#avis_redirection">Avis</a>
        </li>
        <li class="nav-item" >
            <a href="connexion.php"><i class="color_white bi bi-person-fill h2" id="icone_con"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
