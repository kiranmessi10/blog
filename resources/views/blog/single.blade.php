@extends('main')

@section('title', "| Read More")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                    <img src="{{ asset('/images/' . $post->image) }}" height="100" width="100"/>
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
                        <hr>
                        <p>Category Posted In: {{ $post->category->name }} <a href="/" style="float: right;"><u>Go back to home page</u></a></p>
                        
		</div>
            
	</div>
        
        <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('d-M-Y h:i:s A' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>
<br>





        <div class="row">
            <div id="comment-form" class="col-md-8 col-md-offset-2">
                {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name', 'Name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                        
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-12"><br>
                        {{ Form::label('comment', 'Comment:') }}
                        {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
                        
                        
                    </div>
                    
                </div><br>
                {{ Form::submit('Add Comment',['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
        </div>

@stop
