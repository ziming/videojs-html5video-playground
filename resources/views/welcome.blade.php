<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        <link href="http://vjs.zencdn.net/5.10.8/video-js.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <video id="my-video" class="video-js vjs-big-play-centered" controls poster="//vjs.zencdn.net/v/oceans.png" preload="metadata" data-setup="{}">
                    <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">

                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="http://vjs.zencdn.net/5.10.8/video.js"></script>
        <script src="http://cdn.sc.gl/videojs-hotkeys/latest/videojs.hotkeys.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
