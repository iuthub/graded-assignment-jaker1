<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->

    </head>
    <body>
        

      @include('contents.messages')

<div class="container p-5">
    <form action="/tasks/{{$task->id}}" method="post">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Task body</label>
          <input type="text" class="form-control" name="body" value="{{$task->body}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


    </body>
</html>
