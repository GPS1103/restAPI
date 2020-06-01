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
                 <div class="links">
                    <a href="/">Home</a>
                    <a href="/movies">List Database</a>
                    <a href="/movies/create">Add Record</a>
                    <a href="/movies/delete/list">Delete Record</a>
                    <a href="/movies/edit/search">Update Record</a>
                    <a href="/movies/search">Search Database</a>
                    <a href="https://github.com/GPS1103">GitHub</a>
                </div>
                <div class="container">

                    <form action="/movies" enctype="multipart/form-data" method="post">
                        @csrf
                            <div class="form-group row" style="padding-top:10vh; text-align: center">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value='' autocomplete="off" required autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="form-group row" style="text-align: center">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value='' autocomplete="off" autofocus>

                            
                            </div>
                        </div>
                        <div class="form-group row" style="text-align: center">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country of Origin') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value='' autocomplete="off"  autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group row" style="text-align: center">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type"value='' autocomplete="off"  autofocus>

                                @error('type')
                                    <div class="form-group row" role="alert" style="padding-top: 1vh">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" style="padding-top: 3vh; text-align: center">
                            <label for="cover" class="col-md-4 col-form-label text-md-right">{{ __('Cover') }}</label>

                            <div class="col-md-6">
                                <input id="cover" type="file" class="form-control-file " name="cover" value='' required autocomplete="off" >
                                @error('cover')
                                    <div class="form-group row" role="alert" style="padding-top: 1vh">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" style="padding-top: 3vh; text-align: center">
                        <button class="btn btn-primary">Add New Record</button>
                        </div>
                        </form>
                         </div>

    </body>
</html>