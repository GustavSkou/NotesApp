<x-html_body>
<x-navigation_bar></x-navigation_bar>


    <form action="" method="post" class="flex flex-col gap-4 max-w-xl mx-auto mt-6">
        <div class="flex flex-col">
            <label for="name">Note name</label>
            <input 
                type="text"
                name="name"
                id="name"
                class="border rounded px-3 py-2 w-full"
            ></input>
        </div>

        <div class="flex flex-col">
            <label for="contents">Contents</label>
            <textarea 
                rows="5"
                name="contents"
                id="contents"
                class="border rounded px-3 py-2 w-full"
            ></textarea>
        </div>

        <div class="flex justify-end">
            <input type="submit" class="btn mt-4" />
        </div>
    </form>
</x-html_body>