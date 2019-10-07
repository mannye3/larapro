@extends('layouts.app')


@section('content')

<h1>Edit Post</h1>


<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
                            <div class="modern-title"><h3>Please fill the form below, We will response soon.</h3> </div>
                            
                            <form action="{{ route('posts.update',$post->id) }}" method="POST">

                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                            <div class="form-group">
                                <label for="emtitleail">Tile:</label>
                                <input required="" type="text" value="{{$post->title}}" class="form-control" name="title">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <!-- <input name="_method" type="" value="{{ csrf_token() }}"> -->
                            </div>
                            <div class="form-group">
                                <label for="pwd">Body:</label>
                                <textarea required="" class="form-control" name="body" >{{$post->body}}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Submit</button>
                            </form> 
                            </div>									
						</div>
						
					</div>
				</div>				
			</div>
		</section>


		
       
	

@endsection