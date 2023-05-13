@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                       <tr>
                           <th>ID</th>
                           <th>Username</th>
                           <th>Title</th>
                           <th>Description</th>
                           <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                       @foreach($posts as $post)
                           <tr>
                               <td>{{ $post->id }}</td>
                               <td>{{ $post->user->name }}</td>
                               <td>{{ $post->title }}</td>
                               <td>{{ $post->description }}</td>
                               <td>
                                   @can('view', $post)
                                   <a href="{{route('posts.edit', $post->id)}}">Edit</a> ||
                                   <a href="{{route('post.show', $post->id)}}">View</a></td>
                                   @endcan

                           </tr>
                       @endforeach
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
