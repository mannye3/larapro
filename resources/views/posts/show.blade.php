@extends('layouts.app')


@section('content')
 <a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1>
<img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" >



<div>
	{{$post->body}}
</div>


<small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
<hr>
@if(!Auth::guest())
	@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit </a>

<form action="{{ route('posts.destroy',$post->id) }}" method="POST" style="align: float-right;">
		<input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
<button class="btn btn-danger" type="submit"> Delete </button>
</form>
	@endif
@endif

		

	

@endsection