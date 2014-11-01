@extends('layouts.sessionbase')

@section('content')
	<div class="form-box" id="login-box">
        <div class="header">@Lang('register.registerme')</div>

        {{ Form::open(array('route' => 'register.post')) }}
            <div class="body bg-gray">
                <div class="form-group">
                    {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => Lang::get('register.firstname'), 'required')) }}
                </div>
                <div class="form-group">
                    {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => Lang::get('register.lastname'), 'required')) }}
                </div>
                <div class="form-group">
                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => Lang::get('register.email'), 'required')) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => Lang::get('register.password'))) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => Lang::get('register.passwordconfirmation'))) }}
                </div>
            </div>
            <div class="footer">                                                               
                {{ Form::submit(Lang::get('register.register'), array('class' => 'btn bg-olive btn-block')) }}
                
                <a href="{{ url('/login') }}" class="text-center">@Lang('register.registered')</a>
            </div>
        {{ Form::close() }}
    </div>
@stop