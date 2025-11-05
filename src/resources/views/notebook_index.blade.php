<x-html_body>
    <x-navigation_bar></x-navigation_bar>
    @vite('resources\css\dashboard.css')
    <ul class='note-list'>
        @foreach ($noteBooks as $noteBook)
        <li>
            <div>
                <a href="{{ route( 'chapter.index', $noteBook ) }}">
                    {{$noteBook->name}}
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</x-html_body>