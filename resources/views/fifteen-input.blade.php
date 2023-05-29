@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Response;
    $currentPath= Route::getFacadeRoot()->current()->uri();
//$response = new Response('Hello World');
//$rememberToken = 'example_token';
//$expiration = 60; // in minutes
//$response->cookie('remember_token', $rememberToken, $expiration);
//$cookieValue = request()->cookie('remember_token');
@endphp

@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            @if('fifteen/input' == $currentPath)
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('fifteen.submit') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="input">Name</label>
                            <input type="text" name="name" id="input" class="form-control"/>
                            <label for="input">Email</label>
                            <input type="email" name="email" id="input" class="form-control"/>
                            <label for="input">Password</label>
                            <input type="password" name="password" id="input" class="form-control"/>
                            <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </div>


                    </form>
                </div>

            @endif
        </div>
    </div>
@endsection
