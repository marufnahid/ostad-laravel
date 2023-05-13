@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h3>
                        @can('isAdmin')
                            You are Admin
                        @endcan

                            @can('isEmployee')
                                You are Employee
                            @endcan

                            @can('isManager')
                                You are Manager
                            @endcan
                            @can('isHRD')
                                You are HRD
                            @endcan

                           <h3>Posts</h3>
                            <a href="{{route('posts.index')}}" class="btn btn-secondary">Posts</a>

                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
