<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Central Pub</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <script>
    function myFunction() {
  
      var x = document.getElementById("menuderoulant");
  if (x.style.display === "flex") {
    x.style.display = "";
  } else {
    x.style.display = "flex";
  }
} 

  </script>
</head>

<body>
    <nav id="nav">
        <div class="smallnav">
          <div class="logonav"><a href="index.php#nav"><img alt="logo" src="logo.png"></a></div>
          <div class="icon"><a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-bars"></i></a></div>
        </div>
          <div id="menuderoulant">
              <ul class="fullnavbutton">
                  <li><a href="#presentation" class="navbutton">Présentation</a></li>
                  <li><a href="#reservation" class="navbutton">Réservation</a></li>
                  <li><a href="menu.html" class="navbutton">Notre carte</a></li>
                  <li><a href="recrutement.html" class="navbutton">Jobs</a></li>
              </ul>
              <div class="reseaux">
                  <a href="https://www.ubereats.com/fr-FR/bordeaux/food-delivery/the-central-pub/fPlAg-XORlmrThcJgSzsaw/" target="_blank"><img
                      alt="logoubereat" src="logo-uber.png" class="fork"></a>
                  <a href="https://www.facebook.com/The-Central-Pub-Bastide-137306483008593/" target="_blank"><img alt="logofacebook"
                      src="logo-facebook.png"></a>
                  <a href="https://www.instagram.com/thecentralpubbastide/?hl=fr" target="_blank"><img alt="logoinsta" src="logo-insta.png"></a>
              </div>
          </div> 
      </nav>
      

  <section class="text_bannière">
    <img class="bannière" src="https://zupimages.net/up/19/38/ilzq.jpg" alt="Central Pub vue extérieur">
    <h1>WELCOME</h1>
  </section>
    
  <section id="presentation">
    <h2 class="titreShadow responsive_titre"> &#x2022; PRESENTATION &#x2022; </h2>
    <div class="presentationEtMap">
      <div class="text-presentation">
        The <strong>Central Pub</strong>  a été créé en 2004 à l'intérieur de l'ancienne gare
        d'Orléans, bâtiment classé Monument de France. Situé sur la rive
        droite de la célèbre ville de Bordeaux et classée au patrimoine
        mondial de l'Unesco, The Central Pub s'élève dans une tour
        majestueuse, face au pont de Pierre et surplombant la Garonne. The
        Central Pub se situe au coeur du quartier de la Bastide à Bordeaux,
        Rive Droite.
        Notre pub-brasserie-restaurant vous accueille tous les jours de
        l'année, de 9h à 2h. Côté cuisine, nous vous servons toute la journée,
        en continu de 12h à 0h30. Nous vous proposons des plats typiques
        anglais, des spécialités bordelaises, ainsi qu'une carte de brasserie
        comprenant des salades, des burgers maison, des welshes, des grillades... Côté pub, nos
        serveurs vous renseignerons sur nos bières, nos cocktails et apèros.
        L'happy hour est également une tradition du Central Pub de Bordeaux
        Bastide. Retrouvez par exemple la pinte de bière au prix du demi !
        Nous vous proposons un large choix de bières, blondes, brunes,
        ambrées, anglaises, fortes ou légères. Amateurs de bières, vous serez
        comblés !
      </div>


      <div>
        <iframe  class="google_map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.0234407742737!2d-0.5641040489496623!3d44.84145597899594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55262d11d441a9%3A0x8842c84d71381dcf!2sThe%20Central%20Pub!5e0!3m2!1sfr!2sfr!4v1568624381652!5m2!1sfr!2sfr"
           frameborder="0" style="border:0; " allowfullscreen=""></iframe>
      </div>
    </div>
    <div id="bouton-NousRecrutons">
      <a class="bouton" href="recrutement.html"> Nous recrutons </a>
    </div>
  </section>


  <section id="reservation">
    <h2 id="titre-reservation" class="responsive_titre">&#x2022; RESERVATION &#x2022;</h2>
    <form class="formreservation" method="get" action="form.php" >
      <label for="prenom">Prénom :</label>
      <input name="prenom" placeholder="Prénom" type="text" required id="prenom" />
      <label for="nom">Nom :</label>
      <input name="nom" placeholder="Nom" type="text" required id="nom" />
      <label for="telephone">Téléphone :</label>
      <input name="telephone" placeholder="Téléphone" type="tel" required id="telephone" />
      <label for="NombreDePersonnes">Nombre de personnes :</label>
      <input name="NombreDePersonnes" placeholder="Nombre de personnes" type="number" min="1" max="50" required
        id="NombreDePersonnes" />
      <label for="date">Date :</label>
      <input type="date" name="date" min="2019-01-01"  required
        id="date" />
      <label for="horaire">horaire :</label>
      <input type="time" name="horaire" required id="horaire" />
      <input type="submit" value="Réserver">
    </form>
  </section>


  <section class="Notrecarte">
    <h2 class="titreShadow responsive_titre" >&#x2022; NOTRE CARTE &#x2022;</h2>
    <div class="imgNotreCarte">
      <div class="boissonsuper">
        <span class="titrecarte"><a href="menu.html#boissons">Nos boissons</a></span>
        <a href="menu.html#boissons"><img src="https://zupimages.net/up/19/38/zwd8.jpg" alt="Nos Boissons" /></a>
      </div>
      <div class="platssuper">
        <span class="titrecarte"><a href="menu.html#plats">Nos plats</a></span>
        <a href="menu.html#plats"><img src="https://zupimages.net/up/19/38/uhuh.jpg" alt="Nos Plats" /></a>
      </div>
    </div>
  </section>


  <footer>
    <a href="#nav"><img alt="logo" src="logo.png" class="logofooter"></a>
    <div id="cartevisite">

      <p>7 Quai de Queyries 33100 BORDEAUX<br>
        <a href="tel:+33557803800">05.57.80.38.00</a><br>
        Service continu de 11h30 - 0h30<br> Ouvert tous les jours de 9h - 2h </p>
    </div>
    <div class="sousfooter">
      <div class="reseaux reseauxFooter">
        <a href="https://www.ubereats.com/fr-FR/bordeaux/food-delivery/the-central-pub/fPlAg-XORlmrThcJgSzsaw/" target="_blank"><img
            alt="logoubereat" src="logo-uber.png" class="fork"></a>
        <a href="https://www.facebook.com/The-Central-Pub-Bastide-137306483008593/" target="_blank"><img alt="logofacebook"
            src="logo-facebook.png"></a>
        <a href="https://www.instagram.com/thecentralpubbastide/?hl=fr" target="_blank"><img alt="logoinsta" src="logo-insta.png"></a>
      </div>
      <div>
        <ul>
          <li>Mentions Legales</li>
          <li>Plan du site</li>
        </ul>
      </div>
      </div>
  </footer>
</body>

</html>