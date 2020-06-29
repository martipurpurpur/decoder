@extends('layouts.app')
@yield('nav-menu')
@section('content')
    <form method="POST" action="{{ route('uue') }}">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                {{ csrf_field() }}
                <div class="form-group marti-forms">
                    <input type="text" class="form-control" id="text" name="text" placeholder="Enter text">
                </div>

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Result (encode)">{{ $uueAnswer ?? '' }}</textarea>

                <span>
       <button type="submit" class="badge-pill pills submit-pills">Submit</button>
           </span>

            </div>
            <div class="col-4">
                <div class="form-group marti-forms">
                    <input type="text" class="form-control" id="uue" name="uue" placeholder="Enter UUE">
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Result (decode)">{{ $textAnswer ?? '' }}</textarea>



            </div>
        </div>
        <div class="col-2"></div>
    </form>

@endsection
