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
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx!!xxxxxxxxxxxxxxxxxxx',
                'xxx!!!xxxxxxxxxxxxxx     xxxxxxxxxxxxxxxxxxxxx!!!xxx!!!xxx!!!xxxxxxxxxxo               !!!!!!!',
                'xo         !!xx                xxoo      xx       o     o                                  !!!',
                'x             xx               xx        !x                                                  (',
                'x  o            xxo            !!       o!x                                     txxxxxko     (',
                'xxxxx             xxx!!xx                !x             txxxk            txxxxxxx!!!!!xko    (',
                'x                 xx                   xxx!            tx!!!xk     xx!!!xx             xxxxxxx',
                'x                 xx                                  tx!!!!!xk      xxxx              xxoooox',
                'xo    txxx o xxxxxx        txxxk                     tx!!!!!!!xk                       xx    (',
                'xx!!xxx         xx        txo  xk                   tx         xk            txxxxxx   xx    (',
                'x  o            o     txxxx                                    oxk          tx!!!!!x         (',
                'x                    txo               txxx                     oxk        tx!!!!!!x         (',
                'x   o               tx                tx!xx                      oxk      tx!!!!!!!x         (',
                'xxxxxxxx!!!xxxxxxxxxx!!!     xxxxx!xxxx!!xx    xxxxx!x!x!x!xxxxxxxxxxxx!!xx!!!!!!!!xxxxxxxxxxx',
                '!!!!!!!!!!!!!!!!!!!!!!!!!xx!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                
            ];
/////////////////////////////////////////
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  
