@vite('resources\css\navigation_bar.css')
<header>
    <ul class='navigation-bar'>
        <li>
            <a href="{{route('notebook.index')}}">Dashboard</a>
        </li>
        <li>
            <a href="{{route('notes.create')}}">Create note</a>
        </li>
        <li>
            <form action="{{route('logout')}}" method="POST" class="m-0">
                @csrf
                <button class="btn">LogOut</button>
            </form>
        </li>

    </ul>
</header>