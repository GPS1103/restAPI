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
                font-size: 5vh;
                text-align: center;
                padding-top: 10vh;
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
    <div class="links">
                    <a href="/">Home</a>
                    <a href="/movies">List Database</a>
                    <a href="/movies/create">Add Record</a>
                    <a href="/movies/delete/list">Delete Record</a>
                    <a href="/movies/edit/search">Update Record</a>
                    <a href="/movies/search">Search Database</a>
                    <a href="https://github.com/GPS1103">GitHub</a>
</div>
            <div class="title m-b-md">
            Are you sure you want to delete "{{$title}}" from your database
            </div>
            <div class="container">
                <form action="/movies/{{$id}}"  method="post">
                        @csrf 
                        @method('DELETE')                                         
                        <div class="form-group row" style="padding-top: 3vh; text-align: center">
                        <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$id}}" >
                        <button class="btn btn-primary">Yes</button>
                        </div>         
                        </form>
                        <div class="form-group row" style="padding-top: 3vh; text-align: center">
                        <a href="/movies/delete/list"> <button class="btn btn-primary">No</button></a>
                        </div>
             </div>
    </body>
</html>