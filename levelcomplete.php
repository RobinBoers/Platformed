<?php
$coins = $_GET['coins'];
$level = $_GET['level'];
?>
<title>Level <?php echo $level ?> voltooid!</title>
<style>
    body {
        margin: 0;
        height: 100% !important;
        background-color: darkblue;
        color: white;
        font-family: 'Luckiest Guy', cursive;
        padding-left:25%;
        padding-right:25%;
        padding-top:100px;
        font-size: 25px;
    }
    audio {
        display: none !important;
    }
    iframe {
        border: none;
        width: 99.7%;
    }
    #gamertag{
        border: 3px solid orange;
        border-radius: 50px;
        padding:10px;
        margin:10px;
        outline: none;
    }
    button, input[type=button] {
        background-color: deeppink;
        border-radius: 50px;
        height: 40px;
        color: white;
        border: 3px solid purple;
        font-size: 25px;
        width: 30%;
        outline: none;
        cursor: pointer;
    }
    .coins {
        list-style-image: url(assets/coinsmall.png);
    }
</style>
<h2>Goed zo!</h2>
<p>Je bent nu Rank <?php echo $level ?></p>
<ul>
    <li class="coins">+<?php echo $coins ?></li>
</ul>
<button onclick="window.location = 'lobby.php'">
    Terug naar Lobby
</button>