@extends('template.template')         
@section('content')         
                  <div class="content section" id="content">
                     
                     <div class="blog-posts hfeed">
                        @foreach($posts as $post)
  
                           <!-- Individual post -->
                           <div class="post hentry">
                              <div class="post-wrapper left col1">
                                 <div class="post-info">
                                    <div class="date">
                                       <span class="month">Jul</span>
                                       <span class="day">31</span>
                                       <span class="year"> 2014</span>
                                    </div>
                                    <a class="comment-number" href="">
                                    <span class="comment-num">1</span>
                                    <span>Comments</span>
                                    </a>
                                 </div>
                              </div>
                              <div class="post-wrapper right col2">
                                 <div class="post-body">
                                    <div class="featimg left" style="position:relative;">
                                       <div class="item-label">
                                          <span>
                                             <a href="label/Minimal" rel="tag">
                                                {{$post -> labels{0} -> name}}
                                             </a>
                                          </span>
                                       </div>
                                       <div class="item-thumb entry-image" style="position:relative;">
                                          <a href="">
                                             <img src="{{asset('images/'.$post -> image)}}" style="max-width:100%;" alt="Commodo omittam copiosae ">
                                          </a>
                                       </div>
                                       <div class="entry-feat-overlay">
                                       </div>
                                    </div>
                                    <div class="clr"></div>
                                    <div class="post-meta">
                                       <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">{{$post -> user ->firstname}} {{$post -> user ->lastname}}</a> in 
                                          <span class="post-categories">
                                          @foreach($post -> labels as $label)
                                          <a href="Minimal" rel="tag">{{$label -> name}},</a>
                                          </span>
                                          @endforeach
                                       </div>
                                    </div>
                                    <div class="post-title">
                                       <h2><a href="{{url('posts/'.$post -> id)}}" title="{{$post -> title}}">{{$post -> title}}</a></h2>
                                    </div>
                                    <div class="item-content">
                                       <p style="margin:0;">
                                          {{$post -> content}}
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach 
                     </div>
                     @include('template.pager')  
                  </div>
@stop
