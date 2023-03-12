<x-app-layout>
    <div class="container">
        <h1>Tasks</h1>

        <div style="margin-bottom: 16px;">
            <form action="/task/{{ $task->id }}" method="post">
                @method('put')
                @csrf
                <div class="mb-2">
                    <input class="form-control" type="text" value="{{ $task->list }}" name="list" placeholder="The list">
                </div>
                <div class="mb-2">
                    <input class="form-control" type="text" value="{{ $task->nama }}" name="nama" placeholder="Namanya">
                </div>
                
                <button class="btn btn-primary" type="submit">Edit</button>
            </form>
        </div>
    </div>
</x-app-layout>
