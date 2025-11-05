<x-html_body>
    <x-navigation_bar></x-navigation_bar>
    @vite('resources\css\dashboard.css')

    <ul class='note-list'>
        @foreach($notes as $note)
        <li>
            <x-note :note="$note"></x-note>
        </li>
        @endforeach
    </ul>

</x-html_body>