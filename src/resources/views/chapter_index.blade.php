<x-html_body>
    <x-navigation_bar></x-navigation_bar>
    @vite('resources\css\dashboard.css')
    <ul class='note-list'>
        @foreach ($chapters as $chapter)
        <li>
            <div>
                <a href="{{ route('note.index', [$notebook, $chapter]) }}">{{$chapter->name}}</a>
            </div>
        </li>
        @endforeach
    </ul>
</x-html_body>