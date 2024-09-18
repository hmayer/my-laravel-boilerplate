<ul>
    @forelse($users as $user)
        <li>{{$user->name}}</li>
    @empty
        <li>No data</li>
    @endforelse
</ul>
