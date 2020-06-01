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
    <table class="center" style="border: 1px solid black;">
    <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Country of Origin</th>
      <th scope="col">Cover</th>
      <th scope="col">Type</th>
      
    </tr>
	<tbody>
	
      
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
		</tr>
      
        @endforeach
	</tbody>
</table>

    </body>
</html>