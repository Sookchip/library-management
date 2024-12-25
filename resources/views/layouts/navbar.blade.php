<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('books.index') }}">Library</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Books</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('readers.index') }}">Readers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('borrows.index') }}">Borrows</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
