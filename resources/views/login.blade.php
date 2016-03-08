@extends('app')

<<<<<<< HEAD
@section('text')

  <strong>Configure Your Server </strong>

@endsection

=======
>>>>>>> 63feba90a73bcbb8b07940cb900cc72dadeea6e7
@section('content')

	<div class="container">
		<div class="wrapper">
    		<form class="form-signin" method="POST" action="{{url('/login')}}" >       
      			<h2 class="form-signin-heading">Please login</h2>
      			<input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      			<input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      			<label class="checkbox">
        			<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      			</label>
      			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    		</form>
  		</div>
  	</div>


@endsection