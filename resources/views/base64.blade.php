@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('base64') }}">
        <div class="row">
            <div class="col-2"></div>
        <div class="col-4">
        {{ csrf_field() }}
        <div class="form-group marti-forms">

            <input type="text" class="form-control" id="text" name="text" placeholder="Enter text">
        </div>

            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Result (encode)">{{ $baseAnswer ?? '' }}</textarea>

           <span>
       <button type="submit" class="badge-pill pills submit-pills">Submit</button>
           </span>

        </div>
        <div class="col-4">
        <div class="form-group marti-forms">
            <input type="text" class="form-control" id="base" name="base" placeholder="Enter base64">
        </div>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Result (decode)">{{ $textAnswer ?? '' }}</textarea>



        </div>
    </div>
        <div class="col-2"></div>
    </form>
<nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link marti-links" href="{{ route('index') }}">Home</a>
        </li>
        <a class="nav-link marti-links" href="{{ route('index_uue') }}">Uue</a>
        </li>
        <li class="nav-item">
            <a class="nav-link marti-links" href="{{ route('index_rot') }}">rotN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled badge-pill pills" href="{{ route('index_base64') }}">Base64</a>
        </li>
    </ul>
</nav>

@endsection


