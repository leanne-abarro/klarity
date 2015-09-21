@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Login</h2>
                     </div>

                     <form class="pure-form pure-form-stacked">
                         <fieldset>
                             <label for="email">Email</label>
                             <input id="email" type="email" placeholder="Email">

                             <label for="password">Password</label>
                             <input id="password" type="password" placeholder="Password">

                             <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                         </fieldset>
                     </form>

                  </div>
@stop
