<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGE Games</title>

    <link rel="stylesheet" href="../CSS/PageLayout.css"/>
    <link rel="stylesheet" href="../CSS/Games.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"/>

</head>
<body>
    
<header>
    <div class="icon-bar">
        <a href="../HTML/Homepage.php"><img src="../Media/MainLogo.jpeg" alt="Logo" width="110px" /></a>

            <ul>
                <li><a href="../HTML/Homepage.php">Home</a></li>
                <li><a class="active" href="../HTML/Games.php">Games</a></li>
                <li><a href="../HTML/Events.php">Events</a></li>
                <li><a href="../HTML/Community.php">Community</a></li>
                <li><a href="../HTML/AboutUs.php">AboutUS</a></li>
            </ul>

    <div class="nav_action">
        <i class="ri-user-line nav__login" id="login-btn"></i>

    </div>
    </div>
</header>

<div class="login" id="login">
    <form action="" class="login__form">
        <h2 class="login__title">Log In</h2>

        <div class="login__group">
            <div>
                <label for="email" class="login__label">Email</label>
                <input type="email" placeholder="Write your email" id="email" class="login__input">
            </div>

            <div>
                <label for="password" class="login__label">Password</label>
                <input type="password" placeholder="Enter your password" id="password" class="login__input" required>
            </div>
        </div>

        <div>
            <p class="login__signup">
                You do not have an account ? <a href="#">Register</a>
            </p>

            <a href="#" class="login__forgot">
                Forgot Password ?
            </a>

            <button type="submit" class="login__button">Log In</button>
        </div>
    </form>

    <i class="ri-close-line login__close" id="login-close"></i>
</div>

<script src="../JAVAs/Login.js"></script>

<h1 class="gamesHeading"> Your Games , Your Choice </h1>

<div class="border">
<div class="pcGames">
    
    <div class="category">
        <h2 class="category-title">PC<br/>GAMES</h2>
    </div>

    <img src="../Media/CSGO.jpg" alt="CSGO" id="csgo" class="PC" onmouseover="showText('csgoText')" onmouseout="hideText('csgoText')">
    <br/>
    <span class="pcContent" id="csgoText">Counter-Strike : Global Offensive</span>

    <img src="../Media/LeagueOfLegends.jpg" alt="LOL" id="lol" class="PC" onmouseover="showText('lolText')" onmouseout="hideText('lolText')">
    <br/>
    <span class="pcContent" id="lolText">League of Legends</span>

    <img src="../Media/ApexLegends.jpg" alt="APEX" id="apex" class="PC" onmouseover="showText('apexText')" onmouseout="hideText('apexText')">
    <br/>
    <span class="pcContent" id="apexText">Apex Legends</span>
</div>
</div>


<div class="border">
<div class="mbGames">
    
    <div class="category">
        <h2 class="category-title">MOBILE<br/>GAMES</h2>
    </div>

    <img src="../Media/penguin.jpg" alt="Penguin" id="penguin" class="mbG" onmouseover="showText('penguinText')" onmouseout="hideText('penguinText')">
    <br/>
    <span class="mbContent" id="penguinText">TeamFight Tactics</span>

    <img src="../Media/pubgM.jpg" alt="PubgM" id="pubg" class="mbG" onmouseover="showText('pubgText')" onmouseout="hideText('pubgText')">
    <br/>
    <span class="mbContent" id="pubgText">PUBG: Mobile</span>

    <img src="../Media/wangZ.jpg" alt="wangze" id="wangZ" class="mbG" onmouseover="showText('wangText')" onmouseout="hideText('wangText')">
    <br/>
    <span class="mbContent" id="wangText">Honor of Kings</span>
</div>
</div>

<script src="../JAVAs/Games.js"></script>

<div class="description-container">
    <div class="description-row">
      <img src="../Media/CSGO.jpg" alt="" id="desc-media1">
        <aside class="title-row">
            <h3>Counter-Strike : Global Offensive</h3>
            <blockquote id="desc-csgo">
            Counter-Strike: Global Offensive (CS:GO) is a highly popular FPS game developed by Valve Corporation and Hidden Path Entertainment in 2012. 
            It revolves around two teams, Terrorists and Counter-Terrorists, competing in various objectives like bomb planting or defusal. 
            The game's focus on team strategy, skill, and weapon mechanics, alongside its diverse game modes, including Competitive Matchmaking, has contributed to its enduring popularity and prominence in the esports scene.
            </blockquote>

        <button class="btn-go">Interested ?</button>

        </aside>
    </div>

    <div class="description-row-reverse">
      <img src="../Media/LeagueOfLegends.jpg" alt="" id="desc-media2">
        <aside class="title-row-reverse">
    <h3>League of Legends</h3>
    <blockquote id="desc-lol">
    League of Legends (LoL) is a popular multiplayer online battle arena (MOBA) game developed by Riot Games. 
    Players select unique champions and compete in teams to destroy the opposing Nexus. 
    With strategic depth, a diverse champion roster, and a thriving esports scene, LoL has remained a dominant force in gaming since its release in 2009.
    </blockquote>
    <button class="btn-go">Interested ?</button>

    </aside>
    </div>

    <div class="description-row">
      <img src="../Media/ApexLegends.jpg" alt="" id="desc-media3">
        <aside class="title-row">
            <h3>Apex Legends</h3>
            <blockquote id="desc-apex">
            Apex Legends is a fast-paced battle royale game developed by Respawn Entertainment. 
            Players form squads, choose unique characters called "Legends," and battle it out on a shrinking map to be the last team standing. 
            With its fluid gameplay, diverse roster of Legends, and intense gunplay, Apex Legends has become a major player in the battle royale genre since its launch in 2019.
            </blockquote>

        <button class="btn-go">Interested ?</button>

        </aside>
    </div>

    <div class="description-row-reverse">
      <img src="../Media/penguin.jpg" alt="" id="desc-media4">
        <aside class="title-row-reverse">
    <h3>TeamFight Tactics</h3>
    <blockquote id="desc-penguin">
    Teamfight Tactics (TFT) is an auto-battler strategy game developed by Riot Games. 
    Players build teams of champions, place them on a grid-based battlefield, and watch them automatically fight opponents' teams. 
    With its blend of strategic depth, fast-paced gameplay, and constantly evolving meta, TFT has become a popular choice for players seeking a competitive and dynamic gaming experience.
    </blockquote>
    <button class="btn-go">Interested ?</button>

    </aside>
    </div>

    <div class="description-row">
      <img src="../Media/pubgM.jpg" alt="" id="desc-media5">
        <aside class="title-row">
            <h3>Pubg : Mobile</h3>
            <blockquote id="desc-pubg">
            PUBG Mobile is a popular battle royale game developed by PUBG Corporation. 
            Players parachute onto an island, scavenge for weapons and gear, and compete to be the last one standing as the play area shrinks. 
            Known for its intense gameplay, realistic graphics, and large-scale multiplayer matches, PUBG Mobile has captivated millions of players worldwide since its release.
            </blockquote>

        <button class="btn-go">Interested ?</button>

        </aside>
    </div>

    <div class="description-row-reverse">
      <img src="../Media/wangZ.jpg" alt="" id="desc-media6">
        <aside class="title-row-reverse">
    <h3>Honor of Kings</h3>
    <blockquote id="desc-wang">
    Honor of Kings, also known as Wangzhe Rongyao, is a highly popular multiplayer online battle arena (MOBA) game developed by Tencent Games. 
    Players select powerful heroes and engage in fast-paced team battles to destroy the enemy's base. 
    With its vibrant graphics, diverse hero roster, and competitive gameplay, Honor of Kings has become a dominant force in the mobile gaming market, particularly in China, since its release.
    </blockquote>
    <button class="btn-go">Interested ?</button>

    </aside>
    </div>
</div>

<script src="../JAVAs/Login.js"></script>

<footer>
    <div class="main-content">
        <div class="left box">
            <h2>Navigation</h2>
            <div class="content">
                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Games</li></a>
                    <a href=""><li>Events</li></a>
                    <a href=""><li>Community</li></a>
                    <a href=""><li>About Us</li></a>
                </ul>
                <div class="social">
                    <a href=""><i class="ri-facebook-circle-line"></i></a>
                    <a href=""><i class="ri-twitter-x-fill"></i></a>
                    <a href=""><i class="ri-instagram-line"></i></a>
                    <a href=""><i class="ri-youtube-line"></i></a>
                </div>
            </div>
        </div>

        <div class="center box">
            <h2>Address</h2>
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">TARUMT</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+6012-345-6789</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">abc@example.com</span>
                </div>
            </div>
        </div>

        <div class="right box">
            <h2>Contact Us</h2>
            <div class="content">
                <form action="">
                    <div class="email">
                        <div class="text">Email *</div>
                        <input type="email" required>
                    </div>
                    <div class="msg">
                        <div class="text">Message *</div>
                        <textarea cols="25" rows="2" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

</body>
</html>