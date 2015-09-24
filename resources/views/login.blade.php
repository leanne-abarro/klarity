@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                    <div class="main-heading">
                        <h2>Login</h2>
                    </div>
                    <div class="login-form">
                        {!! Form::open(['url' => 'login']) !!}
                            <fieldset>
                                {!! Form::label('username', 'Username') !!}
                                {!! Form::text('username') !!}
                                {!! $errors -> first('username','<p>:message</p>')!!}

                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password') !!}
                                {!! $errors -> first('password','<p>:message</p>')!!}
                                
                                
                                {!! Form::submit('Login', array('class' => 'pure-button pure-button-primary'))!!}
                                {{-- <input type="submit" value="Send"> --}}
                            </fieldset>
                        {!! Form::close() !!}
                        {{Session::get('message')}}
                    </div>
                  </div>
@stop
