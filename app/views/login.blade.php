@extends('layouts.sessionbase')

@section('content')
	<div class="form-box" id="login-box">
        <div class="header">@Lang('login.signin')</div>
        {{ Form::open(array('route' => 'login.post')) }}
            <div class="body bg-gray">
                <div class="form-group">
                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => Lang::get('login.email'))) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => Lang::get('login.password'))) }}
                </div>          
                <div class="form-group">
                    {{ Form::checkbox('remember_me') }} @Lang('login.rememberme')
                </div>
            </div>
            <div class="footer">
            	{{ Form::submit(Lang::get('login.signmein'), array('class' => 'btn bg-olive btn-block')) }}
                
                <a href="{{ url('/register') }}" class="text-center">@Lang('login.registernew')</a>
            </div>
        {{ Form::close() }}
    </div>
@stop