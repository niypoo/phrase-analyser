<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>phrase-analyser</title>

  <!-- Bootstrap core CSS -->
  <link href="/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Page Content -->
  <div class="container">
      <br />
    <div class="jumbotron">
        <h3>"{{$title}}" Analyse</h3>
        <br />

        <table class="table table-bordered">
        <thead>
            <tr>
            <th>Symbol</th>
            <th>Duplicate</th>
            <th>Before</th>
            <th>After</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($analyse as $key=>$value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$value['repeat']}}</td>
                    <td>{{$value['before']}}</td>
                    <td>{{$value['after']}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
       <div style="text-align: right"> <a href="{{route('home')}}" class="btn btn-success">Try Again</a></div>
      </div>

  </div>

</body>

</html>