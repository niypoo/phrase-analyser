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
        <h1>Phrase Analyser</h1>
 
  
        <form action="{{route('analyse')}}" method="POST">
            @csrf
            <p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Write phrase for analyser" name="phrase" required minlength="3" maxlength="255">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default" type="button">Analyse!</button>
                    </span>
                </div><!-- /input-group -->
            </p>
        </form>


      </div>
  </div>
  <div style="text-align: center">
      "Phrase Analyser" script is an assessment for AWStreams.
      <br /><small>Coding by Mahmoud Nabhan</small>
  </div>
</body>

</html>