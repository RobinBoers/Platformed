<section id="placecontroll">
    <button onclick="goLobbyButton()" id="lobby">Lobby</button>
    <button onclick="goHomeButton()" id="home">Home</button>
    <button onclick="goShopButton()" id="shop">Shop</button>
</section>
<section id="dialoog">
    <span class="dialoog"></span>
</section>
<section id="player">
    <h2>
        <span id="playertag"></span>
        <span id="rank"></span>
    </h2>
</section>
<section dir="rtl" id="status">
    <ul>
        <li class="coins"><span id="coins"></span></li>
        <li class="settings"><span id="settings"><a href="settings.php">Settings</a></span></li>
    </ul>
</section>
<script>
var uitdaging = "assets/transparent.png";
var inlevel = false;
var inlobby = false;
</script>