@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Response;
    $currentPath= Route::getFacadeRoot()->current()->uri();
$response = new Response('Hello World');
$rememberToken = 'example_token';
$expiration = 60; // in minutes
$response->cookie('remember_token', $rememberToken, $expiration);
$cookieValue = request()->cookie('remember_token');
@endphp

@extends('layouts.app')


@section('content')

        <div class="container">
            <div class="row">
                @if('input' == $currentPath)
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('input') }}" method="post">
                    @csrf
                        @method('GET')

                        <div class="form-group">
                            <label for="input">Input Text</label>
                            <input type="text" name="input" id="input" class="form-control"/>
                            <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </div>


                    </form>
                </div>

                    <div class="col-md-8 offset-md-2">
                        <form action="{{ route('input') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            <div class="form-group">
                                <label for="file">File Handing</label>
                                <input type="file" name="image" id="image" class="form-control"/>
                                <button type="submit" class="btn btn-success mt-2">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 offset-md-2">
                    <form action="{{ route('submit') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email..."/>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                    </div>
                <div class="col-md-8 offset-md-2 mt-3">
                    Your inputted Text is
                    <strong>{{ $name }}</strong>
                </div>
                <div class="col-md-8 offset-md-2 mt-3">
                    Your header agent is
                    <strong>{{ $userAgent }}</strong>
                </div>
                <div class="col-md-8 offset-md-2 mt-3">
                    Your ipAddress is
                    <strong>{{ $ipAddress }}</strong>
                </div>
                <div class="col-md-8 offset-md-2 mt-3">
                    Your query is
                    <strong>{{ $query }}</strong>
                </div>

                    <div class="col-md-8 offset-md-2 mt-3">
                        Your uploaded file path is
                        <strong>{{ $filePath }}</strong>
                    </div>

                    <div class="col-md-8 offset-md-2 mt-3">
                        Your Cookie Remember token is

                        <strong>{{ $cookieValue }}</strong>
                    </div>
                @elseif('api/api' == $currentPath)

                <div class="col-md-8 offset-md-2 mt-3">
                    Your json response from api is

                    Your send message is <strong>{{ $responseData['message'] }}</strong>
                    Your data 1 is <strong>{{ $responseData['data']['key1'] }}</strong>
                    Your data 2 is <strong>{{ $responseData['data']['key2'] }}</strong>
                </div>


                @endif
            </div>
        </div>
@endsection
