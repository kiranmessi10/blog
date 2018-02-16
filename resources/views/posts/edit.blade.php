@extends('main')

@section('title','| Edit post')


@section('content')
<div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true'])  !!}
    <div class="col-md-8">
        {{ Form::label('title','Title:') }}
        {{ Form::text('title',null ,["class" => "form-control input-lg"]) }}<br>
        {{ Form::label('slug','Slug:') }}
        {{ Form::text('slug',null ,["class" => "form-control input-lg"]) }}<br>
        {{ Form::label('category_id', 'Category:') }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control select2-multi']) }}<br><br>
        
        {{ Form::label('tags', 'Tags:') }}
        {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}<br><br>
        
        {{ Form::label('image','Update Image:') }}
        {{ Form::file('image') }}<br>
        
        {{ Form::label('body','Body:') }}
        {{ Form::textarea('body',null, ["class" => "form-control"]) }}
    </div>
    <div class="col-md-4">
        
        <div class="well">
            
            <dl class="dl-horizontal">
                <dt>Created At:</dt>
                <dd>{{ date('M j, Y h:ia', strtotime($post-> created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Updated At:</dt>
                <dd>{{ date('M j, Y h:ia', strtotime($post-> updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::submit('Save',['class' => 'btn btn-success btn-block']) }}
                    
                </div>

                <div class="col-sm-6">
                    
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                </div>
            </div>
        </div>
        
    </div>
    {!! Form::close() !!}
</div>
<script type="text/javascript">
    $(".select2-multi").select2();
</script>
@stop


