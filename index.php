<?php
require_once('functions/functions.php');

?>
<html>
  <head>
    <meta charset="utf-8"/>
    <html lang="en">
    <title>Startseite | Woltex.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Woltex, Woltex.net, Minecraft, Server, Minigames, The Witch, starwars, netzwerk, forum, startseite">
    <meta name="description" content="Willkommen bei Woltex.net">
    <link rel="shortcut icon" href="libs/img/favicon.png">
    <meta name="robots" content="noindex,nofollow">
    <!-- Bootstrap minified -->
    <link href="libs/css/bootstrap-lumen.min.css" rel="stylesheet">
    <!-- Costume style -->
    <link href="libs/css/style.css" rel="stylesheet">
    <!-- Google Fonts - Palanquin -->
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  </head>
  <body>

  <div id="preloader">
  	<div id="status">&nbsp;</div>
  </div>

    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="libs/img/logo3.png" alt="Woltex Logo"/></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="https://forum.woltex.net"><i class="fa fa-globe" aria-hidden="true"></i>  Forum</a></li>
            <li><a href="stats"><i class="fa fa-table" aria-hidden="true"></i>  Statistics</a></li>
            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Shop</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <?php
            $data = getServerInfo('woltex.net');
            if($data->status == true):
              if($data->players->online !== 0):
          ?>
                <button type="button" class="btn btn-success"><?php echo $data->players->online; ?> players online</button>
              <?php else: ?>
                <button type="button" class="btn btn-warning">No players</button>
              <?php endif; ?>

          <?php else: ?>
            <button type="button" class="btn btn-danger">Server offline</button>
          <?php endif; ?>
      </ul>
      </div>
    </div>
  </nav>

  <div id="header" class="carousel slide" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
          <li data-target="#header" data-slide-to="0" class="active"></li>
          <li data-target="#header" data-slide-to="1" class=""></li>
          <li data-target="#header" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active" data-interval="500">
            <img class="first-slide" src="libs/img/header3.jpg" style="filter: blur(5px);">
              <div class="carousel-caption">
                <div id="header-text">
                  <h1 style="">Welcome to </br>Woltex.net</h1>
                  <p>IP: Woltex.net</p>
                </div>
              </div>
          </div>
          <div class="item">
            <img class="first-slide" src="libs/img/starwars.png" style="filter: blur(5px);">
              <div class="carousel-caption">
                <div id="header-text">
                  <h1 style="">Star Wars</br>Minigame</h1>
                  <p>Fight as Jedi or Sith through the Star Wars world</p>
                </div>
              </div>
          </div>
          <div class="item">
            <img class="first-slide" src="libs/img/themine.png" style="filter: blur(5px);">
              <div class="carousel-caption">
                <div id="header-text">
                  <h1 style="">The Mine</br>Minigame</h1>
                  <p>Browse the cave for equipment and fight against other players</p>
                </div>
              </div>
          </div>
        </div>

  <a class="left carousel-control" href="#header" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Zurück</span>
    </a>
    <a class="right carousel-control" href="#header" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Vorwärts</span>
      </a>
    </div>

    <section class="video">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="side-text">
              <h1 id="h">Watch our new waiting lobby!</h1>
              <p>Our buildteam built a new awesome waiting lobby, check it out!</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="responsive-video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/UG2FfFzqzjM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--
    <section class="call-to-action">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 id="h" style="color: #ffffff; text-transform: uppercase;"></h1>
          <p style="color: #ffffff;"</p>
        </div>
      </div>
    </section>
  -->
    <section class="games">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="libs/img/themine.png" class="img-responsive"></div>
              <div class="panel-body">
              <h2 id="g">The Mine</h2><p>Collect equipment in crates and be the last player alive, but be carefull to not get lost in the mine!</p>
              <!--
            </br></br>
                <div class="row">
                  <a href="#" class="btn btn-primary">Mehr...</a>
                </div>
              -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="libs/img/starwars.png" class="img-responsive"></div>
              <div class="panel-body">
              <h2 id="g">Star Wars</h2><p> Jedi or Sith? Which side do you choose? Upgrade your powers and take part in the adventure in the StarWars world.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="libs/img/dropper.png" class="img-responsive"></div>
              <div class="panel-body">
              <h2 id="g">Dropper Race</h2><p>It’s every man for himself in this fight to be the first to reach the bottom. Evade the obstacles while hitting the enemies straight back up to secure your victory!</p>

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="libs/img/thewitch.png" class="img-responsive"></div>
              <div class="panel-body">
              <h2 id="g">The Witch</h2><p>You must fight and confuse the evil Witch to get your group’s Anti-Witch device to her hut and destroy her!</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="libs/img/1vs1.png" class="img-responsive"></div>
              <div class="panel-body">
              <h2 id="g">1 vs 1</h2><p>Fight with dozens of kits styles and abilities. Soup, Potions, and epic 1v1's.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="libs/img/zombie.png" class="img-responsive"></div>
              <div class="panel-body">
              <h2 id="g">Zombies</h2><p>Fight against the Apocalypse and protect humanity, or become a Zombie!</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="container" style="padding-bottom: 2%;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
              <h1><i class="fa fa-info" aria-hidden="true"></i>  About us</h1>
                <hr>
              <p class="footer-p">Woltex.net is a Network bla... bla... bla...</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12" id="quick-navigation">
              <h1><i class="fa fa-fighter-jet" aria-hidden="true"></i>  Quick Navigation</h1>
              <hr>
                <a href="index">Home</a></br>
                <a href="stats">Statistics</a></br>
                <a href="#">Shop</a></br>
                <a href="https://woltex.net">Forum</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
              <h1><i class="fa fa-life-ring" aria-hidden="true"></i>  Support us</h1>
                <hr>
              <p class="footer-p">Help support the server! Enjoying your time on Woltex.net? Want to help contribute to hosting costs? All contributions go towards improving the server and maintaining a stable host. Click below to get more information about contributing today!</p></br>
              <a href="#" style="padding: 12px 40px 10px;" class="btn btn-primary">Voten</a>
              <a href="#" style="padding: 12px 40px 10px;" class="btn btn-success">Donate</a>
            </div>
        </div>
      </div>
      <div class="row copyright" style="margin-right: 0;">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p>Designd by <a href="https://technikclou.com">Johannes</a></p>
            </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

              <a style="font-size: 40px; color: #db4437;" href="https://plus.google.com/u/0/106985240311451279468"><i class="fa fa-google-plus" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
              <a style="font-size: 40px; color: #1da1f2;" href="https://twitter.com/AverionMC"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
              <a style="font-size: 40px; color: #cc181e;" href="https://www.youtube.com/channel/UCvfwYlUpRR2NZg-LV56PpsQ"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p><a href="http://woltex.net/index.php?pages/Impressum/">Impressum</a> | © 2017 Woltex.net</p>
            </div>

        </div>
    </section>


    <!-- JavaScript minified -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
        //<![CDATA[
            $(window).on('load', function() {
                  $('#status').fadeOut();
                  $('#preloader').delay(350).fadeOut('slow');
                  $('body').delay(350).css({'overflow':'visible'});
              })
        //]]>
    </script>
  </body>
</html>
