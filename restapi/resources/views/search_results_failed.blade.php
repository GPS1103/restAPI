<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            table.center {
             margin-left: auto;
              margin-right: auto;
                }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="content">
                <div class="title m-b-md">
             Unfortunately we didn't find anything to show here :(<br>
                        Please try again.
                </div>

              <div class="links">
              <a href="/">Home</a>
              <a href="/list">List Database</a>
                    <a href="/add/create">Add Record</a>
                    <a href="/delete">Delete Record</a>
                    <a href="/update">Update Record</a>
                    <a href="/search">Search Database</a>
                    <a href="https://github.com/GPS1103">GitHub</a>
            </div>
        </div>
    
        
       
    </body>
</html>