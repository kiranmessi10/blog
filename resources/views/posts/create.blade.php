@extends('main')
@section('title','| New post')




@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
        <!--        {!! Form::open(['url' => 'posts.store']) !!}-->
        {!! Form::open(['action' => 'PostController@store','files' => 'true']) !!}




        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title',null,array('class' => 'form-control')) }}<br>

        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug',null,array('class' => 'form-control')) }}<br>

        {{ Form::label('category_id', 'Catgories:')}}
        <select class="form-control" name="category_id">
            <option>----select Category----</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }} 
            </option>
            @endforeach
        </select><br>

        {{ Form::label('tags', 'Tags:') }}
        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
            @foreach($tags as $tag)
            <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
            @endforeach

        </select><br><br>
        {{ Form::label('image', 'Image Upload:') }}
        {{ Form::file('image') }}<br>
        
        {{ Form::label('body', 'Post Body:') }}
        {{ Form::textarea('body',null, array('class' => 'form-control')) }}

        {{ Form::submit('Create Post:', array('class'=> 'btn btn-success btn-lg btn-block','style' => 'margin-top: 30px;')) }}
        {!! Form::close() !!}

    </div>
</div>
<script type="text/javascript">
    $(".select2-multi").select2();
</script>


@endsection
