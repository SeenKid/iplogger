<?php

function getIP()
{
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
    $ip = getenv("HTTP_CLIENT_IP");
  else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
    $ip = getenv("HTTP_X_FORWARDED_FOR");
  else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
    $ip = getenv("REMOTE_ADDR");
  else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
    $ip = $_SERVER['REMOTE_ADDR'];
  else
    $ip = "unknown";
  return($ip);
}

function logData()
{
  $ipLog="logfile.htm";
  $cookie = $_SERVER['QUERY_STRING'];
  $register_globals = (bool) ini_get('register_globals');
  if ($register_globals)
    $ip = getenv('REMOTE_ADDR');
  else
    $ip = GetIP();

  $rem_port = $_SERVER['REMOTE_PORT'];
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $rqst_method = $_SERVER['METHOD'];
  $rem_host = $_SERVER['REMOTE_HOST'];
  $referer = $_SERVER['HTTP_REFERER'];
  $date=date ("l dS of F Y h:i:s A");
  $log=fopen("$ipLog", "a+");

  if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog))
    fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE{ : } $date | COOKIE: $cookie
");
  else
    fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE: $date | COOKIE: $cookie \n\n");
  fclose($log);
}

logData();

?>



<!-- change this code to your own web page :: -->

<html lang="fr">
<head>
    <!-- dependencies -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- font s-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/all.css">

    <script type="text/javascript" src="js/button.js"></script>
<!-- title -->
    <title> Mon portfolio en ligne </title>
</head>
<body>
<!-- header -->
    <header class="container-fluid header">
<div class="container">
    <a href="#" class="logo">mon portfolio</a>
    <nav class="menu">
        <a href="#"> Accueil </a>
        <a href="#about"> A propos </a>
        <a href="#portfolio"> Portfolio </a>
        <a href="#footer"> Contact </a>
    </nav>
</div>
    </header>
<!-- banner -->
<section class="container-fluid banner">
<div class="ban">
    <img src="img/ban.jpg" alt="website banner"/>
</div>
<div class="inner-banner">
    <h1> Bienvenue sur mon portfolio </h1>
    <a href="#footer"><button class="btn btn-custom" id="btnmain"> Contactez moi ! </button> </a>
</div>
  </section>
</div>
</section>
    
<!-- a propos -->
<section class="container-fluid about">
    <div class="container">
      <div class="row">
       <h2 class="aproposdemoi" id="about"> A Propos de moi </h2>
        <hr class="separator">
    <article class="col-md-4 col-lg-4 col-xd-12 col-sm-12">
        <h2>Études</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
    </article>
    <article class="col-md-4 col-lg-4 col-xd-12 col-sm-12">
        <h2>Expérience</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
    </article>
    <article class="col-md-4 col-lg-4 col-xd-12 col-sm-12">
        <h2>Hobbies</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
    </article>
    <hr class="separator">
    </div>
    </div>
</section>
<!-- portfolio -->
<section class="container-fluid portfolio">
    <div class="container" id="portfolio">
      <div class="row">
            <article class="col-md-6 col-lg-6 col-xd-12 col-sm-12 item-folio">
            <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-6 col-lg-6 col-xd-12 col-sm-12 item-folio">
            <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-4 col-lg-4 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-4 col-lg-4 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-4 col-lg-4 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-2 col-lg-2 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-2 col-lg-2 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-2 col-lg-2 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-2 col-lg-2 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-2 col-lg-2 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <article class="col-md-2 col-lg-2 col-xd-12 col-sm-12 item-folio">
              <h2>Exemple</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quibusdam, magni libero iure impedit, provident animi aliquam sit neque iste nesciunt adipisci veniam doloremque sequi saepe fugit cumque non totam!</p>
            </article>
            <hr class="separator">
    </div>
  </div>
</section>
<!-- footer (contact form taken from bootsnipp)-->
<footer class="container-fluid footer">

<div class="container" id="footer">
	<div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contactez moi</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nom</label>
              <div class="col-md-12">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-12">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">message</label>
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
  <hr class="separator">
</div>
</footer>
</body>
</html>
