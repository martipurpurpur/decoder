@section('nav-menu')
<nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link marti-links" href="{{ route('index') }}">Home</a>
        </li>
        <a class="nav-link disabled badge-pill pills" href="{{ route('index_uue') }}">Uue</a>
        </li>
        <li class="nav-item">
            <a class="nav-link marti-links" href="{{ route('index_rot') }}">rotN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link marti-links" href="{{ route('index_base64') }}">Base64</a>
        </li>
    </ul>
</nav>
@endsection
