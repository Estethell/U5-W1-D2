<?php
include_once __DIR__ . '/traduzioni.php';

define('SITE_URL', 'http://localhost:8080/U5-W1-D2/');

// variabile per settare il ciclo di vita del cookie
$cookie_expiration = time() + 60 * 60 * 24 * 365 * 10;

// codice per impostare il cookie al cambio lingua
if (!isset($_COOKIE['language'])) {
    setcookie('language', 'it', $cookie_expiration, "/");
    $language = 'it';
} else {
    $language = $_COOKIE['language'];
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cambia lingua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
    defer></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
      <a class="navbar-brand" href="#">Personalizza la tua esperienza qui</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <form action="<?= SITE_URL . '/cambiaLingua.php' ?>" method="get">
                        <select name="language">
                            <option value="it"<?= $language === 'it' ? ' selected' : '' ?>>IT</option>
                            <option value="en"<?= $language === 'en' ? ' selected' : '' ?>>EN</option>
                            <option value="fr"<?= $language === 'fr' ? ' selected' : '' ?>>FR</option>
                            <option value="es"<?= $language === 'es' ? ' selected' : '' ?>>ES</option>
                            <option value="ru"<?= $language === 'ru' ? ' selected' : '' ?>>RU</option>
                            <option value="la"<?= $language === 'la' ? ' selected' : '' ?>>LA</option>
                        </select>
                        <button class="btn border mx-2 bg-info">Change</button>
                    </form>
                </div>
            </div>
        </nav>





</body>