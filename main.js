var MyLocalStorage = window.localStorage;
var coins = MyLocalStorage.getItem('coins');
var pluscoins = 0;
if(!coins) {
    MyLocalStorage.setItem('coins', 0);
}
document.getElementById('playertag').innerHTML = MyLocalStorage.getItem('gamertag');
document.getElementById('rank').innerHTML = "Rank "+MyLocalStorage.getItem('level');
document.getElementById('coins').innerHTML = MyLocalStorage.getItem('coins');
var levelwork = true;
var elem = document.documentElement;
var htmlbody = document.documentElement;
var mainState = {  
                preload: function() {  
                    
                     /////////////////////
                    ////// preload //////
                   /////////////////////
                    
                    game.load.image('player', 'assets/player.png');
                    game.load.image('level', uitdaging);
                    game.load.image('bg', backgroundimage);
                    game.load.image('wall', 'assets/wall.png');
                    game.load.image('wallgr', 'assets/gras.png');
                    game.load.image('grasr', 'assets/grasr.png');
                    game.load.image('grasl', 'assets/grasl.png');
                    //      game.load.image('wood', 'assets/wood.png');
                    game.load.image('trap', 'assets/trap.png');
                    game.load.image('trapleft', 'assets/trapl.png');
                    game.load.image('home', 'assets/home.png');
                    game.load.image('shop', 'assets/shop.png');
                    game.load.image('bed', 'assets/bed.png');
                    game.load.image('pc', 'assets/computer.png');
                    game.load.image('door', 'assets/door.png');
                    game.load.image('coin', 'assets/coin.png');
                    game.load.image('sl', 'assets/sl.png');
                    game.load.image('sr', 'assets/sr.png');
                    game.load.image('wolk', 'assets/wolken.png');
                    game.load.image('enemy', 'assets/enemy.png');  
                                        
                },
            
                create: function() {
                    
                     /////////////////////
                    ////// create ///////
                   /////////////////////
                    

                    game.stage.backgroundColor = backgroundcolor;
                    game.physics.startSystem(Phaser.Physics.ARCADE);
                    game.world.enableBody = true;
                    this.cursor = game.input.keyboard.createCursorKeys();
                    
                    this.walls = game.add.group();
                    this.homes = game.add.group();
                    this.shop = game.add.group();
                    this.uitdaging = game.add.group();
                    
                    var pic = game.add.image(0, 0, 'bg');
                    
                    if(inlobby === true) {
                        this.player = game.add.sprite(240, 250, 'player');
                    }
                    else {
                        this.player = game.add.sprite(200, 150, 'player');
                    }
                    this.player.width = playerwidth;
                    this.player.height = playerheight;
                    
                    this.player.body.gravity.y = 600;
                    this.player.body.velocity.y = 0;
                    
                    this.gamestuff = game.add.group();
                    this.doors = game.add.group();
                    this.pc = game.add.group();
                    this.coins = game.add.group();
                    this.enemies = game.add.group();
                    
                    game.world.setBounds(0, 0, 1920, 1920);
                    game.camera.follow(this.player);
                                    

                    // Create the level by going through the array
                    for (var i = 0; i < level.length; i++) {
                        for (var j = 0; j < level[i].length; j++) {

                            // Create a wall and add it to the 'walls' group
                            if (level[i][j] == 'x') {
                                var wall = game.add.sprite(30+20*j, 30+20*i, 'wall');
                    //                    wall.width = 25;
                    //                    wall.height = 25;
                                this.walls.add(wall);
                                wall.body.immovable = true;
                            }
                            if (level[i][j] == 'g') {
                                var wallgr = game.add.sprite(30+20*j, 30+20*i, 'wallgr');
                    //                    wall.width = 25;
                    //                    wall.height = 25;
                                this.walls.add(wallgr);
                                wallgr.body.immovable = true;
                            }
                            if (level[i][j] == 'u') {
                                var grasl = game.add.sprite(30+20*j, 30+20*i, 'grasl');
                                grasl.width = 25;
                                grasl.height = 25;
                                this.walls.add(grasl);
                                grasl.body.immovable = true;
                            }
                            if (level[i][j] == 'i') {
                                var grasr = game.add.sprite(30+20*j, 30+20*i, 'grasr');
                                grasr.width = 25;
                                grasr.height = 25;
                                this.walls.add(grasr);
                                grasr.body.immovable = true;
                            }
                            if (level[i][j] == 't') {
                                var trap = game.add.sprite(30+20*j, 30+20*i, 'trap');
                                trap.width = 25;
                                trap.height = 25;
                                this.walls.add(trap);
//                                this.gamestuff.add(trap);
                                trap.body.immovable = true;
                            }
                            if (level[i][j] == 'k') {
                                var trapleft = game.add.sprite(30+20*j, 30+20*i, 'trapleft');
                                trapleft.width = 25;
                                trapleft.height = 25;
                                this.walls.add(trapleft);
//                                this.gamestuff.add(trapleft);
                                trapleft.body.immovable = true;
                            }
                            if (level[i][j] == 'b') {
                                var bed = game.add.sprite(30+20*j, 30+20*i, 'bed');
                                bed.width = 100;
                                bed.height = 40;
                                this.walls.add(bed);
                                this.gamestuff.add(bed);
                                bed.body.immovable = true;
                            }
                            if (level[i][j] == 'c') {
                                var pc = game.add.sprite(30+20*j, 30+20*i, 'pc');
                                pc.width = 140;
                                pc.height = 148;
                                this.gamestuff.add(pc);
                                this.pc.add(pc);
                                pc.body.immovable = true;
                            }
                            if (level[i][j] == 'd') {
                                var door = game.add.sprite(30+20*j, 30+20*i, 'door');
                                door.width = 70;
                                door.height = 148;
                                this.doors.add(door);
                                door.body.immovable = true;
                            }
                            if (level[i][j] == 'h') {
                                var home = game.add.sprite(30+20*j, 30+20*i, 'home'); // 
                                home.height = 130;
                                home.width = 130;
                                this.homes.add(home);
                                home.body.immovable = true;
                            }
                            if (level[i][j] == 's') {
                                var shop = game.add.sprite(30+20*j, 30+20*i, 'shop'); // 
                                shop.height = 130;
                                shop.width = 130;
                                this.shop.add(shop);
                                shop.body.immovable = true;
                            }
                            if (level[i][j] == 'l') {
                                var left = game.add.sprite(30+20*j, 30+20*i, 'sl'); // 
                                left.height = 25;
                                left.width = 25;
                                left.body.immovable = true;
                                this.walls.add(left);
                            }
                            if (level[i][j] == 'r') {
                                var right = game.add.sprite(30+20*j, 30+20*i, 'sr'); // 
                                right.height = 25;
                                right.width = 25;
                                right.body.immovable = true;
                                this.walls.add(right);
                            }
                            if (level[i][j] == 'q') {
                                var wolk = game.add.sprite(30+20*j, 30+20*i, 'wolk'); // 
                                wolk.height = 400;
                                wolk.width = 400;
                                wolk.body.immovable = true;
                            }
                            if (level[i][j] == '(') {
                                var uitdaging = game.add.sprite(30+20*j, 30+20*i, 'level'); // 
                                uitdaging.height = 200;
                                uitdaging.width = 200;
                                uitdaging.body.immovable = true;
                                this.gamestuff.add(uitdaging);
                                this.uitdaging.add(uitdaging);
                            }

                            // Create a coin and add it to the 'coins' group
                            else if (level[i][j] == 'o') {
                                var coin = game.add.sprite(30+20*j, 30+20*i, 'coin');
                                coin.width = 20;
                                coin.height = 20;
                                this.coins.add(coin);
                            }

                            // Create a enemy and add it to the 'enemies' group
                            else if (level[i][j] == '!') {
                                var enemy = game.add.sprite(30+20*j, 30+20*i, 'enemy');
                                enemy.width = 25;
                                enemy.height = 25;
                                this.enemies.add(enemy);
                            }
                        }
                    }                },
            
                update: function() {  
                    
                     /////////////////////
                    ////// update ///////
                   /////////////////////
                                        
                    if (this.cursor.left.isDown) {
                        this.player.body.velocity.x = -200;
                    }   
                    else if (this.cursor.right.isDown) {
                        this.player.body.velocity.x = 200;
                    }
                    else {
                        this.player.body.velocity.x = 0;
                    }
                    var spaceKey = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
                    spaceKey.onDown.add(this.jump, this);           
                    
                    game.physics.arcade.collide(this.player, this.walls);
//                    game.physics.arcade.collide(this.player, this.enemies);
                    game.physics.arcade.collide(this.player, this.trap);
                    game.physics.arcade.overlap(this.player, this.coins, this.takeCoin, null, this);
                    game.physics.arcade.overlap(this.player, this.homes, this.goHome, null, this);
                    game.physics.arcade.overlap(this.player, this.doors, this.goLobby, null, this);
                    game.physics.arcade.overlap(this.player, this.pc, this.goInternet, null, this);
                    game.physics.arcade.overlap(this.player, this.shop, this.goShop, null, this);
                    game.physics.arcade.overlap(this.player, this.enemies, this.restart, null, this);
                    game.physics.arcade.overlap(this.player, this.uitdaging, this.PlayLevel, null, this);

                    if (this.player.y < -10 || this.player.y > 600)
                        this.restart();
                    
                    game.camera.follow(this.player);
                    
                    game.input.onDown.add(this.gofull, this);
                    
                    
                },
    
//                render: function() {
//                
//                    if (game.scale.isFullScreen) {
//                        game.debug.text('ESC to leave fullscreen', 0, 16);
////                    else {
////                        game.debug.text('Click / Tap to go fullscreen', 0, 16);
////                    }
//                },
                
                PlayLevel: function() {
                    
                     /////////////////////
                    ///// PlayLevel /////
                   /////////////////////
            
                    if(inlevel === true) {
                        if(levelwork === true) {
                            levelwork = false;    
                            
                            //Rank&Level
                            var PlayerLevel = localStorage.getItem('level');
                            PlayerLevel = parseInt(PlayerLevel) + 1;
                            console.log(PlayerLevel);
                            localStorage.setItem('level', PlayerLevel);
                            document.getElementById('rank').innerHTML = "Rank "+MyLocalStorage.getItem('level');

                            //Coins
                            var plusCoins = pluscoins;
                            localStorage.setItem('coins', coins);
                            console.log(localStorage.getItem('coins'));
                            document.getElementById('coins').innerHTML = localStorage.getItem('coins');

                            window.location = 'levelcomplete.php?coins='+plusCoins+'&level='+PlayerLevel;
                        }
                    } else {
                        window.location = 'level'+localStorage.getItem('level')+'.php';
                    }
                },
    
                goHome: function() {
                    
                     /////////////////////
                    ////// goHome  //////
                   /////////////////////
            
                    window.location.href = 'home.php';
                
                },
    
                goLobby: function() {
                    
                     /////////////////////
                    ////// goLobby //////
                   /////////////////////
            
                    window.location.href = 'lobby.php';
                
                },
    
                goInternet: function() {
                    
                     /////////////////////
                    ////// goLobby //////
                   /////////////////////
            
                    window.location.href = 'web.html';
                
                },
    
                goShop: function() {
                    
                     /////////////////////
                    ////// goLobby //////
                   /////////////////////
            
                    window.location.href = 'shop.php';
                
                },
                
                takeCoin: function(player, coin) {
                    
                     /////////////////////
                    ////// takeCoin /////
                   /////////////////////
                    
                    coin.kill();
                    coins = parseInt(coins) + 1;
                    pluscoins = pluscoins + 1;
                    console.log(coins);

                },
                
                restart: function() {
                    
                     /////////////////////
                    ////// restart //////
                   /////////////////////
                    
                  window.location.href = 'oeps.php';
//                    game.state.start('main');
                },
            
                jump: function() {

                 /////////////////////
                ////// jump /////////
               /////////////////////

                this.player.body.velocity.y = -250;
                
                },
    
                gofull: function() {
//                    game.scale.startFullScreen();
                    if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                  } else if (elem.mozRequestFullScreen) { /* Firefox */
                    elem.mozRequestFullScreen();
                  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
                    elem.webkitRequestFullscreen();
                  } else if (elem.msRequestFullscreen) { /* IE/Edge */
                    elem.msRequestFullscreen();
                  }
                }
            };
            
                     ////////////////////////////////////////////////////
                    /////////////// The Game start here ////////////////
                   ////////////////////////////////////////////////////
            
//            var game = new Phaser.Game(1050, gameheight); 
            var game = new Phaser.Game(1200, 600); 
            game.state.add('main', mainState);  
            game.state.start('main');