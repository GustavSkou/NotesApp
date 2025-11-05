<x-html_body>
<x-navigation_bar></x-navigation_bar>

    <form action="{{ route('notes.store') }}" method="POST" class="flex flex-col gap-4 max-w-xl mx-auto mt-6">
        @csrf
        <div class="flex flex-col">
            <label name="name" id="name" for="name">Note name</label>
            <input 
                type="text"
                name="name"
                id="name"
                required="required"
                class="border rounded px-3 py-2 w-full"
            />
        </div>

        <div class="flex flex-col">
            <label name="contents" id="contents" for="contents">Contents</label>
            <textarea 
                rows="5"
                name="contents"
                id="contents"
                class="border rounded px-3 py-2 w-full"
            ></textarea>
        </div>

        <div>
            <label for="chapter_id">Chapter</label>
            <select name="chapter_id" id="chapter_id">
                @foreach ($chapters as $chapter)
                    <option value="{{$chapter->id}}">
                        {{$chapter->name}}
                    </option>    
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <input type="submit" class="btn mt-4" />
        </div>
    </form>
</x-html_body>