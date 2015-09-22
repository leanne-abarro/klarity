@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Create an Account</h2>
                     </div>
                     
                     <div class="create-form">
                        {!! Form::open(array('url' => 'users')) !!}
                            <fieldset>
                                <div class="form-group">
                                    {!! Form::label('username', 'Username') !!}
                                    {!! Form::text('username') !!}
                                    {!! $errors -> first('username','<p>:message</p>')!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::text('email') !!}
                                    {!! $errors -> first('email','<p>:message</p>')!!} 
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::label('firstname', 'First Name') !!}
                                    {!! Form::text('firstname') !!}
                                    {!! $errors -> first('firstname','<p>:message</p>')!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('lastname', 'Last Name') !!}
                                    {!! Form::text('lastname') !!}
                                    {!! $errors -> first('lastname','<p>:message</p>')!!}
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::label('password', 'Password') !!}
                                    {!! Form::password('password') !!}
                                    {!! $errors -> first('password','<p>:message</p>')!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password_confirmation', 'Confirm Password') !!}
                                    {!! Form::password('password_confirmation') !!}
                                    {!! $errors -> first('password_confirmation','<p>:message</p>')!!}
                                </div>
                                {!! Form::submit('Create')!!}
                            </fieldset>
                        {!! Form::close() !!} 
                     </div>

                     
                  </div>
@stop
