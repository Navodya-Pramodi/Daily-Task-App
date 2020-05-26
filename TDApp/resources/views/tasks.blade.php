<html >
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class ="container">
        <div class ="text center">
            <h1>Daily task</h1>
        <div class ="row">
            <div class ="col-md-12">
                @foreach($errors->all() as $error)
            <div class='alert alert-danger' role="alert">
                {{$error}}
            </div>
                @endforeach
        <form method="post" action="/saveTask">
        {{csrf_field()}}
            <input type = "text" class="form-controle" name="task" placeholder="Enter your task here"></br></br>
            <input type="submit" class="btn btn-primary" value="save">
            <input type="button" class="btn btn-warning" value="clear">
        </form>
            <table class="table table-dark">
                <th>ID</th>
                <th>TASK</th>
                <th>COMPLETED</th>
                <th>Action</th>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task}}</td>
                    <td>
                    @if($task->iscompleted)
                    <button class="btn btn-success">Completed</button>
                    @else
                    <button class="btn btn-warning">Not Completed</button>
                    @endif
                    </td>
                    <td>
                    @if(!$task->iscompleted)
                    <a href="/markascompleted/{{$task->id}}" class='btn btn-primary'>Mark As Completed</a>
                    @else
                    <a href="/markasnotcompleted/{{$task->id}}" class='btn btn-danger'>Mark As Not Completed</a>
                    @endif
                    <a href="/deletetask/{{$task->id}}" class='btn btn-warning'>Delete</a>
                    <a href="/
                    /{{$task->id}}" class='btn btn-success'>Update</a>
                    </td>
                </tr>
                @endforeach
            </table>    
        </div>
        </div>
        </div>
    </div>
</body>
</html>