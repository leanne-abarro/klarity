@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Create a Post</h2>
                     </div>
                     
                     <div class="create-form">
                        {!! Form::open(array('url' => 'posts', 'files' => true)) !!}
                            <fieldset>
                                <div class="form-group">
                                    {!! Form::label('title', 'Post Title') !!}
                                    {!! Form::text('title') !!}
                                    {!! $errors -> first('title','<p>:message</p>')!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('content', 'Content') !!}
                                    {!! Form::textarea('content') !!}
                                    {!! $errors -> first('content','<p>:message</p>')!!} 
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::label('image', 'Image Upload') !!}
                                    {!! Form::file('image') !!}
                                </div>
                                {!! Form::hidden("user_id", Auth::user() -> id)!!}

                              {{--   {!! Form::hidden("label_id", '1')!!} --}}

                                {!! Form::submit('Submit Post',array('class' => 'pure-button pure-button-primary'))!!}
                            </fieldset>
                        {!! Form::close() !!} 
                     </div>

                     
                  </div>
@stop
