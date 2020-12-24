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
            var typed = new Typed('.dialoog', {
                strings: ["Hai, welkom bij je eerste uitdaging!", "Met uitdagingen verdien je Coins.", "Je kunt zien hoeveel Coins je hebt, door rechtsonderin het scherm,","naast je naam te kijken.", "Die gele muntjes zijn Coins.", "In uitdagingen zitten ook vijanden: de bommen.", "De rode TNT-blokjes zijn bommen, omtwijk die.", "Als je ze toch aanraakt, moet je opnieuw beginnen", "Klaar voor de start?", "3", "2", "1", "GO!!"],
                typeSpeed: 30
            });
            var inlevel = true;
            var backgroundcolor = '#3598db';
            var backgroundimage = "assets/transparent.png";
            uitdaging = "assets/transparent.png";
            var gameheight = 550;
            var playerwidth = 25;
            var playerheight = 50;
            var level = [
                'xxxxxx!xxxxxxxxxxxxx!!xxxxxxxxxxxxx!xxxxxxxx',
                'xxxxxxxxx!!!xxxxxxxxxxxx!xxx!!xxxxxxxx!xxxxx',
                'xxxxxxxxxxxx!!!!!!!!!xxxxxxx!!!!!!!!!!!!!!xx',
                'x xxxxxxxxxx  ooo      xxx         oo  o  (x',
                'x      xxx                                (x',
                'x                              o         o(x',
                'xo                          xxxx         xxx',
                'x                       o         o     x  x',
                'x   o        o      o   x         xxxx     x',
                'x!!xx!!xxx!x!x!xx!!xxx!!!!!!!!!!!!!!!!!!!!xx',
                'xxx!xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'xxxxx!xxxxxxxxxxxx!xxxxxxxxxxxxxxx!!!!xxxxxx',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx!xxxx',
            ];
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  
