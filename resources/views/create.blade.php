<form action="{{ route('store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>
    <br>
    <label for="long_description">long_description</label>
    <textarea name="long_description" id="long_description" rows="5"></textarea>
    <br>
    <button type="submit">Create Task</button>
</form>
