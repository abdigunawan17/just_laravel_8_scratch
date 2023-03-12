<x-app-layout>
    <div class="container">
        
        <div class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    @include('tasks._create')
                </div>
            </div>
        </div>

        

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-item-center justify-content-between">
                    {{ $index + 1 }} - {{ $task->nama }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="/task/{{ $task->id }}/edit">edit</a>
                        <form action="/task/{{ $task->id }}" method="post">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>











































































