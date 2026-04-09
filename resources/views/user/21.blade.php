
    <ul>
        @foreach ($numbers as $num)
            <li>√{{ $num }} = {{ sqrt($num) }}</li>
        @endforeach
    </ul>
