@extends('template.template')         
@section('content')         
                  <div class="content section single-post-page" id="content">   
                     <div class="post-outer">
                        <div class="post hentry uncustomized-post-template">
                           <h1 class="the-main-title single-post-title">{{$post -> title}}</h1>
                           <div class="post-meta">
                              <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">{{$post -> user ->firstname}} {{$post -> user ->lastname}}</a> in 
                                 <span class="post-categories">
                                 <a href="" rel="tag">Minimal</a>,
                                 <a href="" rel="tag">Photography</a>,
                                 <a href="" rel="tag">Taste</a>,
                                 <a href="" rel="tag">Web design</a>
                                 </span>
                              </div>
                           </div>
                           <div class="post-body">        
                              <a href="{{asset('images/'.$post -> image)}}" class="main-image"><img src="{{asset('images/'.$post -> image)}}" style="max-width:100%;" alt="Commodo omittam copiosae "></a>
                              
                              <p>
                                 {{$post -> content}}  
                              </p>
                                 
                           </div>
                           <div id="related-posts">
                              <h5>Related Posts</h5>
                              <ul>
                                 <li>
                                    <a href="" title="Make your personal website" rel="nofollow"><img alt="Make your personal website" src="{{asset('images/related01.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Make your personal website</a>
                                 </li>
                                 <li>
                                    <a href="" title="Commodo omittam copiosae " rel="nofollow"><img alt="Commodo omittam copiosae " src="{{asset('images/related02.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Commodo omittam copiosae </a>
                                 </li>
                                 <li>
                                    <a href="" title="Mea labores feugait temporibus" rel="nofollow"><img alt="Mea labores feugait temporibus" src="{{asset('images/related03.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Mea labores feugait temporibus</a>
                                 </li>
                              </ul>
                           </div>
                        </div>

                        <div class="comments" id="comments">
                           <h4>2 comments:</h4>
                           <div class="comments-content">
                              <ol>
                                 @foreach($post -> comments as $comment)
                                 <li class="comment">
                                    <div class="avatar-image-container">
                                       <img src="{{asset('images/'.Auth::user() -> avatar)}}">
                                    </div>
                                    <div  class="comment-block">
                                       <div class="comment-header">
                                          <cite class="user"><a  href="">{{$comment -> user -> firstname}} {{$comment -> user -> lastname}}</a></cite>
                                          <span class="icon user"></span>
                                          <span class="datetime secondary-text">
                                          <a rel="nofollow" href="">{{$post -> created_at -> format('M d Y')}} at {{$post -> created_at -> format('H:i')}}</a></span>
                                       </div>
                                       <p class="comment-content">{{$comment -> comment}}</p>
                                       <div class="comment-actions">
                                          <a class="pure-button pure-button-primary">Reply</a>
                                          <a class="pure-button pure-button-primary" href="">Delete</a>
                                       </div>
                                    </div>
                                 </li>
                                 @endforeach
                              </ol>
                              
                              @if(Auth::check())
                              <h4><a href="">Add comment</a></h4>
                              <div class="comment-replybox-thread">
                                
                                 {!! Form::open(['url' => 'comments']) !!}
                                     <fieldset>
                                         {!! Form::label('comment', 'Comment') !!}
                                         {!! Form::textarea('comment') !!}

                                         {!! Form::hidden("user_id", Auth::user() -> id)!!}
                                         {!! Form::hidden("post_id", $post -> id)!!}
                                         
                                         {!! Form::submit('Publish', array('class' => 'pure-button pure-button-primary'))!!}
                                     </fieldset>
                                 {!! Form::close() !!} 
                              </div>
                              @else 
                                 <h4><a href="{{url('login')}}">Add comment</a></h4>
                            @endif
                                               
                           </div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     @include('template.pager')
                  </div>
@stop
