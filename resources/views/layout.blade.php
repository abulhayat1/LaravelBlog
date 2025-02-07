<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hayat's Blog</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="/css/theme-1.css">


</head>

<body>

	<header class="header text-center">
		<h1 class="blog-name pt-lg-4 mb-0"><a href="/">Hayat's Blog</a></h1>

		<nav class="navbar navbar-expand-lg navbar-dark">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column">
				<div class="profile-section pt-3 pt-lg-0">
					<img class="profile-image mb-3 rounded-circle mx-auto" src="/images/profile.png" alt="image">

					<div class="bio mb-3">Hi, my name is Abul Hayat. This is a mini-blog app built using laravel<br></div>
					<!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
						<!--<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>-->
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
						<!--<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>-->
						<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li> -->
					</ul>
					<!--//social-list-->
					<hr>
				</div>
				<!--//profile-section-->

				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
						<a class="nav-link" href="/"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fab fa-github fa-fw mr-2"></i>Github</a>
					</li>
				</ul>

				@guest
				<div class="my-2 my-md-3">
					<a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
				</div>
				@if (Route::has('register'))
				<div class="my-2 my-md-3">
					<a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
				</div>
				@endif
				@else
				<div class="my-2 my-md-3">
					<a class="btn btn-primary" href="{{ route('home') }}">Admin Panel</a>
					<a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
				@endguest
			</div>
		</nav>
	</header>

	<div class="main-wrapper">
		@yield('content')
		<footer class="footer text-center py-2 theme-bg-dark ">

			<!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
			<small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

		</footer>
	</div>
	<!--//main-wrapper-->








	<!-- Javascript -->
	<script src="/plugins/jquery-3.3.1.min.js"></script>
	<script src="/plugins/popper.min.js"></script>
	<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
	@yield('head')
</body>

</html>