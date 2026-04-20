<h1>Main page of My application</h1>

@foreach ($tasks as $task)
    <div>
        <a href="">
            {{ $task->title }}
        </a>
    </div>
@endforeach
