<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
        <style>
            body {
                overflow: hidden;
                font-family: 'Zilla Slab', serif;
                letter-spacing: 1px;
            }

            .main {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 200px;
                background-image: url(field_blur_with_logo.jpg);
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .main .content {
                position: absolute;
                bottom: 40px;
                left: 0;
                right: 0;
                padding: 20px;
                color: #fff;
                text-align: center;
            }

            .circle {
                display: inline-block;
                height: 6px;
                width: 6px;
                background: #fff;
                margin: 15px 8px;
                background: #fff;
                border-radius: 3px;
                opacity: 0.5;
            }

            .footer {
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                height: 200px;
                background: #292126;
            }

            .footer__content {
                position: absolute;
                top: 40px;
                left: 0;
                right: 0;
                text-align: center;
                color: #fff;
            }

            @media(max-width: 600px) {
                .main .content {
                    bottom: 5px;
                    font-size: 0.6em;
                }

                .footer__content {
                    font-size: 0.6em;
                }
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="content">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div><br />

                TOMORROW'S TECHNOLOGY IS OUR RESOURCE
            </div>
        </div>

        <footer class="footer">
            <div class="footer__content">
                WE'RE LAUNCHING SOON

                <br />
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div><br />

                For more information email or call us:<br>
                snewman@royalhelium.com / 306.291.2461
            </div>
        </footer>
    </body>
</html>