<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        @if ($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>   
        @endif
        <form action="{{ route('task.store') }}" method="post">
            @csrf
            <input class="form-control @error('list') is-invalid @enderror mb-2" type="text" name="list" placeholder="The list">
            <input class="form-control @error('list') is-invalid @enderror mb-2" type="text" name="nama" placeholder="Namanya">
            @error('list')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            <button class="btn btn-primary" type="submit">Add</button>
            
        </form>
    </div>
</div>