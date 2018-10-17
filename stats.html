<?php
//error_reporting(-1);
//ini_set('display_errors', true);

require_once('classes/db.class.php');
require_once('classes/stats.class.php');
require_once('functions/functions.php');

  $stats = new Stats();

  if(isset($_GET['name']))
    {
      if(!empty($_GET['name']))
        {
          $name = $_GET['name'];
          $uuid = $stats->getPlayerByName($name);

          /* Wenn die UUID gefunden wurde */
          if($uuid !== NULL)
            {
              /* Habe irgendwie noch nicht ganz begriffen warum ich  hierbei immer wider das Objekt neu aufrufen muss. Liegt an dbConnect */
              /* Nach Stats von Star Wars und The Mine suchen */

              $stats = new Stats();
              $gameStats = $stats->getStats($uuid);

              $kd = array('starwars' => $gameStats['starwars']['Kills'] / $gameStats['starwars']['Deaths'] , 'tm' => $gameStats['tm']['Kills'] / $gameStats['tm']['Deaths']);

              $stats = new Stats();
              $playedGames = $stats->getPlayedGames($uuid);

            } else {
              $errorMessage = '<p id="danger">Der Spieler wurde nicht gefunden.</p>';
            }
        }
    }


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
    <!-- Moris js style -->
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
        <a class="navbar-brand" href="index"><img src="libs/img/logo3.png" alt="Woltex Logo"/></a>
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

    <section class="video">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


                <?php
                if(isset($name))
                  {
                    if($uuid !== NULL)
                      {
                        echo '<h1 id="h">'.$name.'</h1><img src="https://visage.surgeplay.com/full/300/'.$name.'">';
                      } else {
                        echo '<h1 id="h">Global statistics</h1>';
                      }
                  } else {
                    echo '<h1 id="h">Global statistics</h1>';
                  }
                 ?>


          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Player statistics & profile</div>
              <div class="panel-body">
                <?php
                  if(isset($errorMessage))
                    {
                      echo $errorMessage;
                    }
                  ?>
                <form role="form" method="get">
                  <div class="form-group">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                      <input class="form-control" type="text" name="name" placeHolder="Player search" required="">
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                      <button type="submit" class="btn btn-success">Search</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <?php if(isset($name) && $uuid !== NULL ):
      // Player Stats
    ?>
    <section class="games">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Credits</div>
              <div class="panel-body">
                <p><?php
                /* Kotzt mich an die scheiße! Muss noch gefixt werden, bin zu unmotiviert. */
                $stats = new Stats();
                echo roundInt($stats->getCredits($uuid));




                ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Language</div>
              <div class="panel-body">
                <p><?php
                $stats = new Stats();
                echo $stats->getLanguage($uuid);
                ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Dabei seit</div>
              <div class="panel-body">
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading" id="starwars"><h3 style="color: #ffffff;">Star Wars</h3></div>
              <div class="panel-body">
                <p><font id="success">K</font>/<font id="danger">D</font>:  <?php echo number_format($kd['starwars'], 2, ',', '.'); ?>
                </br></br>
                Played games: <font id="success"><?php echo $playedGames['starwars']; ?></font>


                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading" id="themine"><h3 style="color: #ffffff;">The Mine</h3></div>
              <div class="panel-body">
                <p><font id="success">K</font>/<font id="danger">D</font>:  <?php echo number_format($kd['tm'], 2, ',', '.'); ?>
                </br></br>
                Played games: <font id="success"><?php echo $playedGames['tm']; ?></font>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <a href="stats" class="btn btn-primary">Zurück</a>
        </div>
      </div>
    </section>
  <?php else:
    // Globale Stats
    ?>
    <section class="games">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Credits paid out</div>
              <div class="panel-body">
                <p><?php
                $stats = new Stats();
                  echo roundInt($stats->getAllCredits());
                  ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Global players</div>
              <div class="panel-body">
                <p><?php
                  $stats = new Stats();
                    echo roundInt($stats->countPlayers());

                 ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Kills in all minigames</div>
              <div class="panel-body">
                <p><?php


                      $stats = new Stats(); // Problem ----------------------
                      echo roundInt($stats->getAllKills());
                      $stats = new Stats();
                      // Für Stats unten
                      $globalStats = array('tm' => $stats->getBestStats('tm',10), 'starwars' => $stats->getBestStats('starwars',10));

                 ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading" id="starwars"><h3 style="color: #ffffff;">Top 10 of Star Wars (<font id="success">K</font>/<font id="danger">D</font>)</h3></div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Spieler</th>
                      <th>K/D</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                        $b = 1;
                        foreach($globalStats['starwars'] AS $row):
                        ?>
                        <tr>
                          <td><?php echo $b++; ?></td>
                          <td>
                            <?php if(!empty($stats->getNameByUUID($row['UUID']))): ?>


                                    <a id="an" href="stats?name=<?php echo $stats->getNameByUUID($row['UUID']); ?>">
                                    <?php echo $stats->getNameByUUID($row['UUID']); ?>
                                    </a>
                                  <?php else: ?>
                                      <?php // Wenn Spieler unbekannt ist (name nicht vorhanden) ?>
                                    Unknown player
                                  <?php endif; ?>
                                </td>
                          <td><?php echo number_format($row['KD'], 2, ',', '.'); ?></td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading" id="themine"><h3 style="color: #ffffff;">Top 10 of The Mine (<font id="success">K</font>/<font id="danger">D</font>)</h3></div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Spieler</th>
                      <th>K/D</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                        $b = 1;
                        foreach($globalStats['tm'] AS $row):
                        ?>
                        <?php
                          {

                          }?>
                        <tr>
                          <td><?php echo $b++; ?></td>
                          <td>

                    <?php if(!empty($stats->getNameByUUID($row['UUID']))): ?>


                            <a id="an" href="stats?name=<?php echo $stats->getNameByUUID($row['UUID']); ?>">
                            <?php echo $stats->getNameByUUID($row['UUID']); ?>
                            </a>
                          <?php else: ?>
                              <?php // Wenn Spieler unbekannt ist (name nicht vorhanden) ?>
                            Unknown player
                          <?php endif; ?>

                          </td>
                          <td><?php echo number_format($row['KD'], 2, ',', '.'); ?></td>
                        </tr>

                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">Player languages</div>
                <div class="panel-body">
                  <canvas id="language" width="400" height="400"></canvas>
                </div>
              </div>
            </div>
            <?php /*
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">Global Top 10 (<font id="success">K</font>/<font id="danger">D</font>)</div>
                  <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Spieler</th>
                          <th>K/D</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                            $b = 1;

                            $test = array_merge($globalStats['tm'], $globalStats['starwars']);

                            foreach($test AS $row):
                            ?>
                            <?php
                              {

                              }?>
                            <tr>
                              <td><?php echo $b++; ?></td>
                              <td>

                        <?php if(!empty($stats->getNameByUUID($row['UUID']))): ?>


                                <a id="an" href="stats?name=<?php echo $stats->getNameByUUID($row['UUID']); ?>">
                                <?php echo $stats->getNameByUUID($row['UUID']); ?>
                                </a>
                              <?php else: ?>
                                  <?php // Wenn Spieler unbekannt ist (name nicht vorhanden) ?>
                                Unknown player
                              <?php endif; ?>

                              </td>
                              <td><?php echo number_format($row['KD'], 2, ',', '.'); ?></td>
                            </tr>

                          <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            */  ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="footer">
    <div class="container" style="padding-bottom: 2%;">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <h1><i class="fa fa-info" aria-hidden="true"></i>  About us</h1>
              <hr>
            <p class="footer-p">Woltex.net is a Network bla... bla... bla...</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <?php if($uuid == NULL): ?>
      <?php
      $stats = new Stats(); // Muss sein, sonst error
      $data_lang = $stats->countLanguages();
      ?>
    <script>
    var ctx = document.getElementById('language').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [<?php
        foreach($data_lang AS $row)
          {
            echo '"'.$row['Lang'].'",';
          }


         ?>],

        datasets: [{
          label: 'Language',
          backgroundColor: [
            "#2ecc71",
            "#3498db"
          ],
          data: [<?php
          foreach($data_lang AS $row)
            {
              echo $row['counLang'].',';
            }


           ?>],

        }]
      }
    });


    </script>
  <?php endif; ?>
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
