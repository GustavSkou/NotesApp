<x-html_body>
    <x-navigation_bar></x-navigation_bar>
    @vite('resources\css\dashboard.css')
    <ul class='note-list'>
        @foreach ($notebooks as $notebook)
        <li>
            <div>
                <a href="{{ route( 'chapter.index', $notebook ) }}">
                    {{$notebook->name}}
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</x-html_body>