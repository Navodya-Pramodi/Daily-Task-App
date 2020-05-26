<html >
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Update Task</title>
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

      <div class="container">
        <form action="/updatetasks" method="post">
        {{csrf_field()}}
        <input type ="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
        <input type="hidden" name="id" value="{{$taskdata->id}}"/>
            <input type="submit" class="btn btn-success" value="Update">
            &nbsp;&nbsp;
            <input type="button" class="btn btn-danger" value="Cancel">
        </form>
      </div>
</body>
</html>
