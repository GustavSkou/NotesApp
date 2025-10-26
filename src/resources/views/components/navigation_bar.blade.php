@vite('resources\css\navigation_bar.css')
<header>
    <ul class='navigation-bar'>
        <li>
            <a href="{{route('notes.index')}}">Dashboard</a>
        </li>
        <li>
            <a href="{{route('notes.create')}}">Create note</a>
        </li>
    </ul>
</header>