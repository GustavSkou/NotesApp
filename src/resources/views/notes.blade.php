<x-html_body>

    <x-navigation_bar></x-navigation_bar>

    <!--pass $note into the route, so we can ->update the model-->
    <form action="{{ route('notes.update', $note) }}" method="POST" class="flex flex-col gap-4 max-w-xl mx-auto mt-6">
        @csrf
        @method("PATCH")
        <div class="flex flex-col">
            <textarea
                name="name"
                id="name"
                class="px-3 text-xl"
                rows="1"
                required="required"
            >{{ $note->name }}</textarea>
        </div>
        <label>Chapter: {{ $note->chapter->name }} </label>
        <label>Notebook: {{ $note->chapter->noteBook->name }} </label>

        <div class="flex flex-col">
            <textarea 
                rows="5"
                name="contents"
                id="contents"
                class="border-0 px-3 py-2 w-full" 
            >{{ $note->contents }}</textarea>
        </div><!--border-b-1-->

        <div class="flex justify-end">
            <input type="submit" class="btn mt-4" />
        </div>
    </form>

</x-html_body>