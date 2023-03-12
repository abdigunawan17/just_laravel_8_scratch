<x-app-layout title="All user page">
    <div class="container">
        <h1>All Users</h1>

        @foreach($users as $user)
            <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
        @endforeach
    </div>
</x-app-layout>