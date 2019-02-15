<!DOCTYPE <!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="mobile.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="tablet.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
      <title>David Yan | CV</title>
      <script src="script.js"></script>
   </head>
   <body>
        <div id="go-top"></div>
            <header id="header">
                <i class="fas fa-bars menu-button" onclick="menuButtonClicked()"></i>
                <a href="index.html">
                    <h3 class="title">David Yan</h3>
                </a>
                <ul>
                    <li>
                        <a href="index.html">
                            <h3>Portfolio</h3>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="memoryGame.php">
                            <h3>Memory Game</h3>
                        </a>
                    </li>
                    <li>
                        <a href="ommig.html">
                            <h3>Om mig</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#kontakt">
                            <h3>Kontakt</h3>
                        </a>
                    </li>
                </ul>
            </header>

        <?php
            require "class.php";

            $nallebjorn = new Nallebjorn();
            $fisk = new Fisk();
            $svampbob = new Svampbob();
            $kanin = new Kanin();
            $anka = new Anka();

            $nalle = serialize($nallebjorn);
            $printNalle = unserialize($nallebjorn);
            echo $printNalle;
        ?>

        <footer>
            <div id="kontakt" class="footer-links">
                <h3>Kontakta mig</h3>
                <p><span class="far fa-envelope"></span> &nbsp;david.yan@medieinstitutet.se</p>
                <p><span class="fas fa-phone"></span> &nbsp;073-876 90 98</p>
            </div>
            <div class="copyright">
                <p><a onclick="scrollToTop()" class="fas fa-angle-up"></a></p>
                <p>All rights reserved &copy; David Yan</p>
            </div>
        </footer>
    </body>
    </html>
