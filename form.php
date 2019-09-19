<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Reservation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="form.css">
  <script type="text/javascript">
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
                  <li><a href="index.php#presentation" class="navbutton">Presentation</a></li>
                  <li><a href="index.php#reservation" class="navbutton">Reservation</a></li>
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
      

  <section class="bannière_resa">
    <img class="bannière" src="https://zupimages.net/up/19/38/6set.jpeg" alt="Some beer on a table">
    <h1 class="resa_confirmed"> Votre réservation a bien été prise en compte</h1>
  </section>
    
<section class="bonjour">
  <div class ="text_form">
<?php $newDate = date("d-m-Y", strtotime($_GET['date']));?>

    Bonjour <strong> <?php echo $_GET['prenom'];?> </strong>, <br> votre réservation a bien été transmise. <br> Nous vous attendons avec grand plaisir le <strong> <?php echo $newDate;?> </strong>. <br>
    Une table pour <strong> <?php echo $_GET['NombreDePersonnes'];?></strong> personnes sera prête pour vous à <strong> <?php echo $_GET['horaire'];?>.</strong> <br>
    A bientôt !
</div>

</section>
  <footer>
    <a href="index.php#nav"><img alt="logo" src="logo.png" class="logofooter"></a>
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


  </footer>
</body>

</html>