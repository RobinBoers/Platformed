<title> Platformed - Settings</title>
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
<h2>Instellingen</h2>

<!-- Muziek -->
<p>Muziek: <button onclick="unMuteMusic()">AAN</button> / <button onclick="muteMusic()">UIT</button></p>

<!-- Gamertag -->
<p><span><label for="gamertag">Gamertag</label>: <input id="gamertag" name="gamertag" placeholder="Enter your Gamertag..."></span><button onclick="setName(document.getElementById('gamertag').value)">Ok&eacute;</button></p>

<p>Delete account: <button onclick="resetAccount()">Delete</button></p>

<script>
    MyLocalStorage = window.localStorage;
    function setName(name) {
        console.log(name);
        MyLocalStorage.setItem('gamertag', name);
    }
    function muteMusic() {
        MyLocalStorage.setItem('music', 'mute');
    }
    function unMuteMusic() {
        MyLocalStorage.setItem('music', 'unmute');
    }
    function resetAccount() {
        console.log("OK");
        MyLocalStorage.clear();
    }
</script>

<button onclick="window.location = 'lobby.php'">
    Terug
</button>