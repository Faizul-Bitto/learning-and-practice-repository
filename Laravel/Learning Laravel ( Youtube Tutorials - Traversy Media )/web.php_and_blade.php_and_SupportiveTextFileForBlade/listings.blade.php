<!-- Watch support.txt file for explaination -->

<h1>{{ $heading }}</h1>

@foreach ($listings as $listing)

    <h2>
        {{ $listing['title'] }}
    </h2>

    <p>
        {{ $listing['description'] }}
    </p>

@endforeach



<!-- A lot of different directives are here. We can do something like this: -->
{{-- <h1>{{ $heading }}</h1>

@foreach ($listings as $listing)

    <h2>
        {{ $listing['title'] }}
    </h2>

    <p>
        {{ $listing['description'] }}
    </p>

@endforeach

@php

    $test = 1

@endphp
{{ $test }} --}}







<!-- We can also do something like this using if-else statement: -->

{{-- <h1>{{ $heading }}</h1>

@foreach ($listings as $listing)

    <h2>
        {{ $listing['title'] }}
    </h2>

    <p>
        {{ $listing['description'] }}
    </p>

@endforeach

@if (count($listings) == 0)

    <p>
        No Listings Found. <!-- If we dont't set anything in 'title' in web.php file. Then it will say : No Listing Found. -->
    </p>

@endif --}}







<!-- We can also do this if-else statement using this unless: -->

{{-- <h1>{{ $heading }}</h1>


@unless (count($listings) == 0)

@foreach ($listings as $listing)

    <h2>
        {{ $listing['title'] }}
    </h2>

    <p>
        {{ $listing['description'] }}
    </p>

@endforeach

@else

    <p>
        No Listing Found. <!-- If we dont't set anything in 'title' in web.php file. Then it will say : No Listing Found. -->
    </p>

@endunless --}}
