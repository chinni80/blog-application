@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts 
                            <a href="{{url('posts')}}" class="btn btn-primary btn-sm float-right">All Posts</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                         <table class="table">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Body</th>
                              <th>Created By</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>{{$post->title}}</td>
                              <td>{{$post->body}}</td>
                              <td>{{$post->author}}</td>
                              <td><a href="{{url('posts/'.$post->id.'/edit')}}" class="btn btn-info">Edit</a>
                              &nbsp;
                                <form id="delete-form-{{$post->id}}" action="{{Route('posts.destroy', $post->id)}}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
