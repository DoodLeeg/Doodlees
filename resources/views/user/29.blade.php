
    @forelse ($users as $user)
        <p>{{ $user }}</p>
    @empty
        <p>Нет пользователей</p>
    @endforelse
