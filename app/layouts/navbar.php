<?php
  require_once dirname(__DIR__, 2)."/config/initialize.php";
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><?= APPNAME; ?></a>
  <?php
    if (Guard::authenticated()) {
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= ($pageconfig["navactive"] == "dashboard") ? "active" : "" ?>">
        <a class="nav-link" href="/">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= ($pageconfig["navactive"] == "clients") ? "active" : "" ?>">
        <a class="nav-link" href="/clients">Klanten <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= ($pageconfig["navactive"] == "timeregistration") ? "active" : "" ?>">
        <a class="nav-link" href="/timeregistrations">Tijd registratie <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <div class="dropdown">
      <a class="dropdown-toggle text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-lg text-secondary"></i>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
        <a href="/handlers/authentication/logout.php" class="dropdown-item">Logout</a>
    </div>
  </div>
  <?php
    }
  ?>
</nav>