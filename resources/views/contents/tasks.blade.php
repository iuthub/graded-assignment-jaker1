<ul id="myUL">
  @if(count($tasks) > 0)

    @foreach($tasks as $task)
      <li>
        <div class="task">{{$task->body}}</div>
        <div class="action">
            <a href="/tasks/{{$task->id}}/edit"><i class="fa fa-edit"></i></a>
        </div>
        <div class="action">
          <form action="/tasks/{{$task->id}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button> 
          </form>
            
        </div>
      </li>
    @endforeach
  @else
      <div class="alert alert-warning m-4" role="alert">There are no tasks yet!</div>
  @endif
</ul>