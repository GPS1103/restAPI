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
                table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
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
       
    <table class="center">
	<tbody>
		<tr>
			<td> Title</td>
			<td> Description</td>
			<td> Country of Origin</td>
			<td> Cover</td>
			<td> Type</td>
		</tr>
            
        @foreach($movies as $key=>$data)
       <tr> 
			<td> {{$data->title}}</td>
			<td> {{$data->description}}</td>
			<td> {{$data->country}}</td>
			<td> <img src="/storage/{{$data->cover}}"></td>
            
			<td> 
            @foreach($data->movietypes as $key2=>$types)
            {{$types->type}}<br>
            @endforeach</td>
            <td>      
                       
                    <form action="/movies/{{$data->id}}/edit"  method="get">
                        @csrf                                          
                        <div class="form-group row" style="padding-top: 3vh; text-align: center">
                        <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$data->id}}" >
                        <button class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                        </td>
                        
		</tr>
      
        @endforeach
	</tbody>
</table>

    </body>
</html>