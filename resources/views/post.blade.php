@extends('template.template')         
@section('content')         
                  <div class="content section single-post-page" id="content">   
                     <div class="post-outer">
                        <div class="post hentry uncustomized-post-template">
                           <h1 class="the-main-title single-post-title">Commodo omittam copiosae</h1>
                           <div class="post-meta">
                              <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">Sora Templates</a> in 
                                 <span class="post-categories">
                                 <a href="" rel="tag">Minimal</a>,
                                 <a href="" rel="tag">Photography</a>,
                                 <a href="" rel="tag">Taste</a>,
                                 <a href="" rel="tag">Web design</a>
                                 </span>
                              </div>
                           </div>
                           <div class="post-body">        
                              <a href="images/main01.jpg" class="main-image"><img src="images/main01.jpg"></a>
                              
                              <p>
                                 Id mea dolorum lobortis, vix eu quas officiis. Cu quod ludus disputando vix. Vero nihil ullamcorper in nec. Sed everti voluptatum ad, tantas audiam tractatos at duo. Mel inani option sadipscing ea, senserit ocurreret disputationi has ne.<br><br>Ad vel cetero iuvaret incorrupte, no alia fierent eam. Te altera deserunt oportere cum, facer movet quaestio eum ad. Commodo omittam copiosae id nec, odio iusto expetendis vim ea. Eu per nisl dicunt lobortis, eam ut suas noluisse. Agam ancillae ne has, ea quo dolorum fierent. Eu dolor ignota has, cu sed sint iuvaret qualisque. Ex qui tantas albucius, tation antiopam cum at.  
                              </p>
                                 
                           </div>
                           <div id="related-posts">
                              <h5>Related Posts</h5>
                              <ul>
                                 <li>
                                    <a href="" title="Make your personal website" rel="nofollow"><img alt="Make your personal website" src="images/related01.jpg"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Make your personal website</a>
                                 </li>
                                 <li>
                                    <a href="" title="Commodo omittam copiosae " rel="nofollow"><img alt="Commodo omittam copiosae " src="images/related02.jpg"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Commodo omittam copiosae </a>
                                 </li>
                                 <li>
                                    <a href="" title="Mea labores feugait temporibus" rel="nofollow"><img alt="Mea labores feugait temporibus" src="images/related03.jpg"></a>
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
                                 <li class="comment">
                                    <div class="avatar-image-container"><img src="images/avatar01.png"></div>
                                    <div  class="comment-block">
                                       <div class="comment-header">
                                          <cite class="user"><a  href="">kin cheong tong</a></cite>
                                          <span class="icon user"></span>
                                          <span class="datetime secondary-text">
                                          <a rel="nofollow" href="">March 23, 2015 at 11:50 PM</a></span>
                                       </div>
                                       <p class="comment-content">hi hi</p>
                                       <div class="comment-actions">
                                          <a class="pure-button pure-button-primary">Reply</a>
                                          <a class="pure-button pure-button-primary" href="">Delete</a>
                                       </div>
                                    </div>
                                 </li>

                                 <li class="comment">
                                    <div class="avatar-image-container"><img src="images/avatar01.png"></div>
                                    <div  class="comment-block">
                                       <div class="comment-header">
                                          <cite class="user"><a  href="">kin cheong tong</a></cite>
                                          <span class="icon user"></span>
                                          <span class="datetime secondary-text">
                                          <a rel="nofollow" href="">March 23, 2015 at 11:50 PM</a></span>
                                       </div>
                                       <p class="comment-content">hi hi</p>
                                       <div class="comment-actions">
                                          <a class="pure-button pure-button-primary">Reply</a>
                                          <a class="pure-button pure-button-primary" href="">Delete</a>
                                       </div>
                                    </div>
                                 </li>
                              </ol>
                              <h4><a href="">Add comment</a></h4>
                              <div class="comment-replybox-thread">
                                 <form class="pure-form pure-form-stacked">
                                    <fieldset>
                                      <label for="comment">Comment</label>
                                      <textarea id="comment" class="pure-input-1" placeholder=""></textarea>
                                      <button type="submit" class="pure-button pure-button-primary">Publish</button>
                                    </fieldset>
                              </form>
                              </div>
                                               
                           </div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     @include('template.pager')
                  </div>
@stop
