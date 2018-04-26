 <nav class="navbar navbar-default navbar-fixed-top>
	<div class="container">
 	  <div class="navbar-header">
 	  <a class="navbar-brand" href="{{ action('pagesController@index') }}">myProfile</a>
 	  </div>
	  <div class="collapse navbar-collapse">

	  <ul class="nav navbar-nav">
		<li><a href="{{ route('pages.index') }}">ur'profile</a></li>
		<li><a href="{{ route('pages.create') }}">Create</a></li>
		<li><a href="{{ route('pages.Blog') }}">Blog</a></li>
	   </ul>

	<ul class="nav navbar-nav navbar-right">
	@if(Auth::check())
	<li>{{ Auth::user()->name }}</li>
	<li><a href="{{ route('logout') }}">logout</a></li>
	@else
	<li><a href="{{ route('register') }}">Sign up</a></li>
	<li><a href="{{ route('login') }}">Login</a></li>
	@endif
	</ul>
	</div>
    </div>
</nav>