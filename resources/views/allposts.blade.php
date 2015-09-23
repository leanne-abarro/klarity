@extends('template.template')         
@section('content')         
                  <div class="content section" id="content">
                     
                     <div class="blog-posts hfeed">
                        @foreach($posts as $post)
                        
                           @include("template.singlepost",["post" => $post])
                           
                        @endforeach 
                     </div>
                     @include('template.pager')  
                  </div>
@stop
