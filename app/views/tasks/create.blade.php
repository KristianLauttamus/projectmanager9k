@extends('layouts.base')

@section('title')
@Lang('tasks.createnew')
@stop

@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            		<div class="box-header">	
            			@Lang('task.taskfor') {{ $project->name }}
            		</div>
                <!-- form start -->
                {{ Form::open(array('route' => 'tasks.store')) }}
                    <div class="box-body">
                        <div class="form-group">
                        	{{ Form::label('name', Lang::get('tasks.namelabel')) }}
                        	{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => Lang::get('tasks.addname'))) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', Lang::get('tasks.descriptionlabel')) }}
                        	{{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => Lang::get('tasks.adddescription'))) }}
                        </div>
                        <div class="form-group">
                        	{{ Form::label('daystodeadline', Lang::get('tasks.daystodeadlinelabel')) }}
                        	{{ Form::text('daystodeadline', null, array('class' => 'form-control', 'placeholder' => Lang::get('tasks.adddaystodeadline'))) }}
                        </div>
                        <div class="form-group">
                        	{{ Form::label('progress', Lang::get('tasks.progresslabel')) }}
                        	{{ Form::text('progress', null, array('class' => 'form-control', 'placeholder' => Lang::get('tasks.addprogress'))) }}
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        {{ Form::submit(Lang::get('tasks.createnew', array('class' => 'btn btn-primary'))) }}
                    </div>
                {{ Form::close() }}
            </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->
    </div>
@stop