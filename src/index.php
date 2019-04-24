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

    </head>
    <body>
        <div class="top-bar">
            <span class="left">
                A
            </span>
            <span class="text-logo">
                FEWTR RADIO
            </span>
            <span class="right">
                B
            </span>
        </div>
        <div class="news-bar">
            <span class="left-news"></span>
            <span class="right-news"></span>
        </div>
        <div class="main">
            
        </div>
        <div class="player">
            <div class="player-meta-wrap">
                <span class="artist">Artist</span>
                <span class="hyphen"> - </span>
                <span class="track">Track Title</span>
                <span class="hyphen"> - </span>
                <span class="live-status">LIVE</span>
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