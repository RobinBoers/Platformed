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
                strings: ["Klaar voor de start?", "3", "2", "1", "GO!!"],
                typeSpeed: 30
            });
            var inlevel = true;
            var backgroundcolor = '#3598db';
            var backgroundimage = "assets/transparent.png";
            uitdaging = "assets/transparent.png";
            var gameheight = 550;
            var playerwidth = 25;
            var playerheight = 50;
//////////////////////////////////////////////////////////////////////////// x=muur o=munt !=vijand (=einde
            var level = [
                'xxxxxx!xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ',
                'xxxxxxxxxx!!!!!xxxxxxxxxxxxxxx!!!!!xxxxxxxxxx',
                '                oxx                        (x',
                '                 xxo                       (x',
                '                 xxxx!x                   o(x',
                '                 xx                   xxxxxxx',
                ' xxxxxxx xxx!xxxxxx                  x       ',
                '   x                               ox        ',
                '   x                               x         ',
                '   xxxxxxxxxx                     x          ',
                '              xxx              xxx           ',
                '                        xxx                  ',
                '   o                 o                   o   ',
                ' xxxx               xxx                  xxxx',
                '       xxx                                 (x',
                '                                           (x',
                '            xxxxxxxxxx                  o  (x',
                '                           o               (x',
                'o                o                         (x',
                'xx    xxxxxxxxxxxxxxxxxxx     xxxxxxxxxxxxxxx',
                '                         !!!!!              x',
                '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!x',
                'xxxxxxx!!!xxxxxxxxxx!xxxxxx!!!xxxxxxxxxxxxxxx',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
            ];
/////////////////////////////////////////
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  
