<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Fewtr.</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="main.css" rel="stylesheet">
        <link href="player.css" rel="stylesheet">
        <link href="nav.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
        <script src="sketch.js"></script>

    </head>
    <body>        
        <div class="top-bar">
            <span class="left" id="channel-a">
                A
            </span>
            <span class="text-logo">
                FEWTR RADIO
            </span>
            <span class="right" id="channel-b">
                B
            </span>
        </div>
        <div class="news-bar">
            <span class="left-news"></span>
            <span class="right-news"></span>
        </div>

        <div class="main">
            <div class="main-wrap" id="display">
            </div>
        </div>

        <div class="player">
            <div class="player-meta-wrap">
                <span class="artist">Artist</span>
                <span class="hyphen"> - </span>
                <span class="track">Track Title</span>
                <span class="hyphen"> - </span>
                <span class="live-status">RECORDED</span>
            </div>
            <div class="player-wrap">
            
                <span class="player-controls play-pause"><i class="material-icons">play_arrow</i></span>

                <input type="range" class="player-scrub" value="0" min="0" max="">

                <span class="timeline">00:00</span>

                <span class="player-controls repeat-once"><i class="material-icons">repeat_one</i></span>

                <span class="player-controls volume-toggle"><i class="material-icons">volume_off</i></span>

            </div>

        </div>
    </body>
</html>