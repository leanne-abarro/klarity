@extends('template.template')         
@section('content')         
                  <div class="content section" id="content">
                     <div class="main-heading">
                        <h2>{{$label -> name}}</h2>
                     </div>

                     <div class="blog-posts hfeed">
  
                        @foreach($label -> posts as $post)
                        
                           @include("template.singlepost",["post" => $post])
                           
                        @endforeach 
               
                     </div>
                     @include('template.pager')  
                  </div>
@stop
