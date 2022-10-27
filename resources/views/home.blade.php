@php
    $friends = ['Froxy', 'Sumi', 'Matte', 'Edo', 'Mike', 'Xado'];
@endphp

<h1>Hello World!</h1>

<div class="list-container">
    <h4>My Friends:</h4>
    <ul>
        @foreach ($friends as $friend)
            <li>{{ $friend }}</li>
        @endforeach
    </ul>
</div>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
    }

    li {
        list-style-type: none;
    }

    .list-container {
        padding: 2rem
    }
</style>
