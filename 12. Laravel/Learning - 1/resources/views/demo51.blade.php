<body>

    <h1>This is demo 51</h1>

    <ol>
        @foreach ($billGates as $person)
            <li>
                User name is = {{ $person['firstName'] }} and age is = {{ $person['age'] }}
            </li>
        @endforeach
    </ol>

</body>
