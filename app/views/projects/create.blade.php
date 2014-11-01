@extends('layouts.base')

@section('title')
@Lang('projects.createnew')
@stop

@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                {{ Form::open(array('route' => 'projects.store')) }}
                    <div class="box-body">
                        <div class="form-group">
                        	{{ Form::label('name', Lang::get('projects.namelabel')) }}
                        	{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => Lang::get('projects.addname'))) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', Lang::get('projects.descriptionlabel')) }}
                        	{{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => Lang::get('projects.adddescription'))) }}
                        </div>
                        <div class="form-group">
                        	{{ Form::label('daystodeadline', Lang::get('projects.daystodeadlinelabel')) }}
                        	{{ Form::text('daystodeadline', null, array('class' => 'form-control', 'placeholder' => Lang::get('projects.adddaystodeadline'))) }}
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        {{ Form::submit(Lang::get('projects.createnew', array('class' => 'btn btn-primary'))) }}
                    </div>
                {{ Form::close() }}
            </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->
    </div>
@stop