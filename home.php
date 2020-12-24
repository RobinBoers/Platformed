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
                background-color: #cda456;
            }
        </style>
    </head>
    <body>
        <?php
            include "ui.php";
        ?>
        <script type="text/javascript" src="buttons.js"></script>
        <script>
            var newToHome = localStorage.getItem('newToHome');
            if(newToHome === true || newToHome === "true") {
                var typed = new Typed('.dialoog', {
                    strings: ["Welkom in je niewe huis.", "Het is nu nog een saaie boel, maar, je kunt het later opknappen!"],
                    typeSpeed: 30
                });
                localStorage.setItem('newToHome', false);

            } else {
                var typed = new Typed('.dialoog', {
                    strings: ["Welkom thuis!"],
                    typeSpeed: 30
                });
            }
            var backgroundcolor = '#cda456';
            var backgroundimage = 'assets/homebg.png';
            var gameheight = 550;
            var playerwidth = 40;
            var playerheight = 83;
            var level = [
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'x                                                 x',
                'x                                          c      x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'xb                                                x',
                'x                                                 x',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxr        txxxxxxxxx',
                'x                                       txxxxxxxxxx',
                'x                                      txxxxxxxxxxx',
                'x                                     txxxxxxxxxxxx',
                'x                                    txxxxxxxxxxxxx',
                'x                                   txxxxxxxxxxxxxx',
                'xk        lxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'xxk                                               x',
                'xxxk                                        d     x',
                'xxxxk                                             x',
                'xxxxxk                                            x',
                'xxxxxxk                                           x',
                'xxxxxxxk                                          x',
                'xxxxxxxxk                                         x',
                'xxxxxxxxxk                                        x',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
            ];
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  