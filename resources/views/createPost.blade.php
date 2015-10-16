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
                                  {!! $errors -> first('image','<p>:message</p>')!!} 
                                </div>

                                <div class="form-group2">
                                  @foreach(\App\Models\Label::all() as $label)

                                    {!! Form::checkbox('labels[]',$label->id)!!}
                                    {!! Form::label('',$label->name)!!}

                                  @endforeach
                                </div>
                                {!! Form::hidden("user_id", Auth::user() -> id)!!}

                                {!! Form::submit('Submit Post',array('class' => 'pure-button pure-button-primary'))!!}
                            </fieldset>
                        {!! Form::close() !!} 
                     </div>
                     {!! Form::open(array('url' => 'photos', 'files' => true, 'class' => 'dropzone')) !!}
                            <fieldset>
                               
                                {!! Form::hidden("user_id", Auth::user() -> id)!!}

                            </fieldset>
                      {!! Form::close() !!} 
                     
                  </div>
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
<script src="{{asset('js/jquery.editable.js')}}"></script>
@stop