<!DOCTYPE html>
<html lang="fr">
<!-- Head -->

<head>
  <title>Développeur Back-End, Rhône, Savoie, Devops, DevSecOps, Lyon, 69, Chambéry, Annecy</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Développeur Back-End basé sur Lyon spécialisé en Node.js et PHP Symfony. Création de solutions backend performantes et sécurisées dans les régions Rhône et Savoie.">
  <meta name="author" content="Taguine Tarek">
  <meta name="keywords" content="Taguine Tarek, Développeur Back-End, DevOps, DevSecOps, Node.js, PHP Symfony, Rhône, Savoie, Lyon, Chambéry, Annecy, 69 France, 73 France, 74 France, Développement web, Sécurité informatique">
  <meta name="google-site-verification" content="puEyUWPXIZDB1jr8YMNu99xhJFw10rOUpPADVcjn2s4">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/picture.css">
</head>

<body class="w3-light-grey">
  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">

    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
      <h1 class="w3-xxlarge">Taguine Tarek</h1>
      <img class="img" loading="lazy" src="./assets/images/tarek_taguine.webp" alt="Taguine Tarek Nordine">
    </div>
  </header>

  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <a href="#home" class="w3-bar-item w3-button">Taguine Tarek</a>
      <div class="w3-right w3-hide-large w3-hide-medium">
        <a href="#" class="w3-bar-item w3-button w3-padding-large" title="Toggle Navigation Menu" onclick="myFunction(); return false;">
          <i class="fa fa-bars"></i>
          <span class="w3-hide-large w3-hide-medium">Menu</span>

        </a>
      </div>

      <div id="menuLinks" class="w3-hide-small">
        <a href="#one" class="w3-bar-item w3-button">Mes projets</a>
        <a href="./cv.php" class="w3-bar-item w3-button">CV</a>
        <a href="./cyber.php" class="w3-bar-item w3-button">Cyber securité</a>
        <a href="#three" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="#one" onclick="myFunction()" class="w3-bar-item w3-button">Mes projets</a>
    <a href="./cv.php" onclick="myFunction()" class="w3-bar-item w3-button">CV</a>
    <a href="./cyber.php" onclick="myFunction()" class="w3-bar-item w3-button">Cyber securité</a>
    <a href="#three" onclick="myFunction()" class="w3-bar-item w3-button">Contact</a>
  </nav>


  <div id="intro" class="w3-container w3-padding-64 w3-center w3-animate-opacity">
    <div class="w3-container">
      <img class="w3-image" loading="lazy" src="./assets/images/tarek_taguine.webp" alt="Taguine Tarek">
      <h1>DevSecOps</h1>
      <p>
        TAGUINE Tarek<br>
        Lyon, Auvergne-Rhône-Alpes, France
      </p>
      <p>
        Passionné par le développement informatique, je me suis spécialisé
        dans le développement Back-End.
      </p>

      <h2>En cours de migration vers une nouvelle technologie</h2>
      <a href="#one" class="w3-button w3-black w3-round-xlarge">Mes projets</a>
    </div>
  </div>

    
  <div id="three" class="w3-row-padding w3-padding-32">
    <div class="w3-half w3-margin-auto"></div>
    <div class="w3-container">
      <h2 class="w3-center">Contactez-moi</h2>
      <p>Vous avez un projet ou une question ? N'hésitez pas à me contacter en remplissant le formulaire ci-dessous.
        Je vous répondrai dans les plus brefs délais. Merci !</p>
      <form method="post" action="message.php" class="w3-container">
        <div class="w3-row-padding">
          <div class="w3-half">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="w3-input" required>
          </div>
          <div class="w3-half">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="w3-input" required>
          </div>
        </div>
        <div class="w3-container w3-center">
          <label for="message">Message</label>
          <textarea name="message" id="message" class="w3-input" rows="5" required></textarea>
        </div>
        <div class="w3-row-padding">
          <div class="w3-col w3-center">
            <button type="submit" class="w3-button w3-black w3-section">Envoie du message</button>
          </div>
        </div>
      </form>
    </div>
  </div>



  <footer class="w3-center w3-light-grey w3-padding-32">
    <div class="w3-container">
      <ul class="menu">
        <li style="list-style-type: none">&copy; TAGUINE Tarek.</li>
      </ul>
    </div>
  </footer>

  <script defer src="./assets/js/script.js"></script>


</body>

</html>