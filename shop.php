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
            var newToShop = localStorage.getItem('newToShop');
            if(newToShop === true || newToShop === "true") {
                var typed = new Typed('.dialoog', {
                    strings: ["Hallo, dit is de shop.", "Je kunt hier dingen kopen van de munten die je hebt verdient.", "Om munten te verdienen speel kun je uitdagingen aangaan."],
                    typeSpeed: 30
                });
                localStorage.setItem('newToShop', false);

            } else {
                var typed = new Typed('.dialoog', {
                    strings: ["Hallo, "+localStorage.getItem('gamertag'), "Welkom in de shop.", "Wat wil je kopen?"],
                    typeSpeed: 30
                });
            }
            var backgroundcolor = '#cda456';
            var backgroundimage = "assets/transparent.png";
            var gameheight = 550;
            var playerwidth = 40;
            var playerheight = 83;
            var level = [
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'x                                            d    x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'x                                                 x',
                'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
            ];
        </script>
        <script type="text/javascript" src="main.js"></script>
    </body>  
</html>  