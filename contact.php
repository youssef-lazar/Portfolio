<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Youssef Lazar - Développeur Web</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Static navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">YOUSSEF LAZAR</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Accueil</a></li>
          <li><a href="about.html">À Propos de moi</a></li>
          <li class="active"><a href="contact.php" class="smoothscroll">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>


  <div id="contactwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 titre">
          <h4>UNE IDÉE? UN PROJET WEB?</h4>
          <h1>CONTACTEZ MOI</h1>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>

  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="centered">Me contacter</h2>
          <?php include('contactform.php'); ?>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Nom et Prénom"
                data-rule="minlen:4" data-msg="Vos Nom et Prénom s'il vous plaît">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Adresse Mail"
                data-rule="email" data-msg="Entrez une adresse mail valide s'il vous plaît">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Sujet"
                data-rule="minlen:4" data-msg="Entrez au moins 8 caractères au sujet de votre projet s'il vous plaît">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Votre Message" rows="5"
                data-rule="required" data-msg="Décrivez moi votre projet en détails s'il vous plaît."></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a bien été envoyé. Merci Beaucoup!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Envoyer un message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <div id="social">
    <div class="container">
      <div class="row centered">
        <div class="col-xs-4 col-sm-4 col-md-4">
          <a href="https://www.facebook.com/youssef.lazar" title="Lien Facebook" /><i class="fa fa-facebook"></i></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
          <a href="https://www.linkedin.com/in/youssef-lazar-5b60b8156/" title="Lien linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
          <a href="https://www.instagram.com/yousseflazr/?hl=fr" title="Lien Instagram"><i class="fa fa-instagram"></i></a>
        </div>

      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>