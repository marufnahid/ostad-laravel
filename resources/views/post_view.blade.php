@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post') }}</div>

                    <div class="card-body">
                        <h3 class="card-title">
                            {{ $post->title }}
                        </h3>
                        <p class="description">
                            {{$post->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
