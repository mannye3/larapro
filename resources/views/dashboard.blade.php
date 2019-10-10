@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                   <h3> Your Blog Post</h3>
                   @if(count($posts)>0)
                   <table class="table table-striped">
                    <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                    </tr>
                    <tr>
                        @foreach($posts as $post)

                <th>{{$post->title}}</th>
                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </th>
                    <th><form action="{{ route('posts.destroy',$post->id) }}" method="POST" style="align: float-right;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" type="submit"> Delete </button>
                </form></th>

                    </tr>


                        
                    @endforeach

                   </table>
                   @else
                   <p>You have no post</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
