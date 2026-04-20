@foreach ($tasks as $task)
    <div>
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <p>{{ $task->long_description }}</p>
    </div>
@endforeach
