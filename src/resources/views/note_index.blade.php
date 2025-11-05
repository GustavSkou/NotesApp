<x-html_body>
    <x-navigation_bar></x-navigation_bar>
    @vite('resources\css\dashboard.css')

    <ul class='note-list'>
        @foreach($notes as $note)
        <li>
            <x-note
                :note="$note"
                :notebook="$notebook"
                :chapter="$chapter"
            />
        </li>
        @endforeach
    </ul>

</x-html_body>