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
                background-color: #c16aff;
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
                strings: ["Oeps!", "Je bent dood", "Om terug naar de lobby te gaan, ga je door de deur rechts van je."],
                typeSpeed: 30
            });
            var backgroundcolor = '#c16aff';
            var backgroundimage = "assets/transparent.png";
            var gameheight = 550;
            var playerwidth = 60;
            var playerheight = 120;
            var level = [

                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                 d                                                 ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '      xxxxxxxxxx xxxxxxxxxxr xxxxxxxxx xxxxxxxxxxxr                                ',
                '      x        x x           x       x x                                           ',
                '      x        x x           x       x x                                           ',
                '      x        x xxxxxxxxr   xxxxxxxxx x                                           ',
                '      x        x x           x         xxxxxxxxxxxx                                ',
                '      x        x x           x                    x                                ',
                '      x        x x           x                    x                                ',
                '      xxxxxxxxxx xxxxxxxxxxr x         lxxxxxxxxxxx                                ',
                '                                                                                   ',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx                          ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                '                                                                                   ',
                'q   q    q        q     q             q        q         q          q         q    ',
            ];
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  