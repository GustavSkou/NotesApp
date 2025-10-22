@vite('resources\css\note.css')

<div class="note">
    <h1 class="text-3xl md:text-3xl font-bold leading-tight">
        {{$note->name}}
    </h1>
    
    <p>{{$note->contents}}</p>
</div>