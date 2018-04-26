
   	<div class="container">
   	<div class="navbar-header">
   		<a class="navbar-brand" href="{{ action('pagesController@index') }}">myPROFILE</a>
   	</div>
   	<ul class="nav navbar-nav">
   		<li><a href=" {{ route('pages.index') }} ">Home</a></li>
   		<li><a href="{{ route('pages.create') }}">Publish</a></li>
   		<li><a href="{{route('pages.Blog')}}">Blog</a></li>
   	</ul>
   		<ul class="nav navbar-nav navbar-right">
   		@if(Auth::check())
   			<li>{{Auth::user()->name}}</li>
   			<li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-out"></span>Log-out</a></li>
   			@else
   			<li><a href="{{route('login')}}">Login</a></li>
   			<li><a href="{{route('register')}}">Register</a></li>
   			@endif
   		</ul>
   	</div>
