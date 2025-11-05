@vite('resources\css\note.css')

<div class="note">
    <!--pass the note into the notes route-->
    <a class="text-3xl md:text-3xl font-bold leading-tight" href="{{route('notes.show', [$notebook, $chapter, $note]) }}">
        {{$note->name}}
    </a>

    <p>{{$note->contents}}</p>
</div>