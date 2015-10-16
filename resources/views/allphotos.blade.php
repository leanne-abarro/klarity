@extends('template.template')         
@section('content')         
                  <div class="content section" id="content">
                     
                     <div class="blog-posts hfeed">
                        @foreach($photos as $photo)
                        
                          	<img src="{{asset('images/'.$photo->path)}}">
                           
                        @endforeach 
                     </div>
                     @include('template.pager')  
                  </div>
@stop
