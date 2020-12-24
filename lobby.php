<!DOCTYPE html>  
<html>
    <head>  
        <meta charset="utf-8" />
        <title> Platformed </title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="phaser.min.js"></script>
        <style>
            html {
                background-color: #3598db;
            }
        </style>
    </head>
    <body>
        <?php
            include "ui.php";
        ?>
        <script type="text/javascript" src="buttons.js"></script>
        <script>
            var newToLobby = localStorage.getItem('newToLobby');
            if(newToLobby === true || newToLobby === "true") {
                var typed = new Typed('.dialoog', {
                    strings: ["Hallo, welkom in <b>Platformed World</b>.", "Dit is de lobby.", "Dit is het centrum van het spel.", "Van hieruit kun je nieuwe steden, mensen en zelfs werelden ontdekken.", "En natuurlijk je eigen huis.", "Het staat daaronder!", "Wil je het mooi inrichten?", "Dat kan, koop mooie spullen bij de shop, die staat daar verderop!", "Coins verdien je door uitdagingen aan te gaan.", "Je beweegt met de pijltjes toetsen.", "Springen doe je met spatiebalk.", "Probeer het maar eens!", "Veel spelplezier!"],
                    typeSpeed: 30
                });
                localStorage.setItem('newToLobby', false);

            } else {
                var typed = new Typed('.dialoog', {
                    strings: ["Hallo, "+localStorage.getItem('gamertag'), "Welkom terug!", "Er zijn vele nieuwe werelden om ontgrendeld te worden.", "Veel spelplezier!"],
                    typeSpeed: 30
                });
            }
            inlobby = true;
            var backgroundcolor = '#3598db';
            var backgroundimage = "assets/transparent.png";
            uitdaging = "assets/uitdaging.png";
            var gameheight = 550;
            var playerwidth = 25;
            var playerheight = 50;
            var level = [
                '                                                                                    ',
                '                                                                                    ',
                '               (                                                                    ',
                '  lxxxxxxr                                               lxxxxxxxxxr                ',
                '                                                                                    ',
                '                            ugggggggggi                                             ',
                '                                                                          ugggggi   ',
                '                                                  lxxxxxxxxxxxxk                    ',
                '                                                               xk                   ',
                '                                    txxxxxxxxxr                 xk                  ',
                '                                  lxxx                           xk                 ',
                '                                                                  xk                ',
                '       txxxxxxxxxxxxxxxxxxxxr                                      xk               ',
                '      tx                                                 s          xk              ',
                '     txx                                                             xk             ',
                '    txxx                                                              xk            ',
                '                                                                      xxk           ',
                '                           uggggggggi                                 xxxk          ',
                '          uggggggggggggi                                              xxxxk         ',
                'lxk                                            txgggggggggggggggggggggxxxxxxxxxxxxr ',
                '  xk                                          tx                                    ',
                '   xk                      h                 tx                                     ',
                '    xk                                      tx                                      ',
                '     xk                                    tx                                       ',
                '      xk                                  tx                                        ',
                '       xk                                tx                                         ',
                '        xk                              tx                                          ',
                '         xgggggggggggggggggggggggggggggxx                                           ',
                ' q   q    q        q     q             q        q         q          q         q    ',
            ];
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  