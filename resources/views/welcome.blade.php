@extends('layouts.app')

@section('styles')
<style type="text/css">
	/*Main page style by message*/
	@import url(http://fonts.googleapis.com/css?family=Open+Sans);

	:root {
		--primary-color: #091429;
		--secondary-color: #0ABAB5;
		--dark-color: #262626;
		--light-color: #B1B1B1;
	}

	/****************************/
	/*------- main styles ------*/
	/****************************/
	html {
		scroll-behavior: smooth;
	}

	body {
		font-family: 'Open Sans', sans-serif !important;
		font-size: calc(14px + (26 - 14) * ((100vw - 300px) / (1600 - 300))) !important;
	}
    
    .sub-msg{
        text-align: center !important;
        color: #fff !important;
    }   

	h1,
	.h1 {
		font-weight: 600 !important;
		font-size: 3.5rem;
		font-size: calc(38px + 4 * (100vw - 767px) / 700);
		line-height: 120% !important;
		vertical-align: top !important;
	}

	h2,
	.h2 {
		font-size: 3.2rem;
		font-size: calc(28px + 4 * (100vw - 767px) / 700);
		font-weight: 700;
	}

	h3,
	.h3 {
		font-size: 2rem !important;
		font-size: calc(24px + 4 * (100vw - 767px) / 700) !important;
		font-weight: 600 !important;
		line-height: 150% !important;
	}

	h4,
	.h4 {
		font-size: 1.6rem;
	}

	h5,
	.h5 {
		font-size: 1.2rem;
		font-weight: 700 !important;
		line-height: 150% !important;
	}

	h6,
	.h6 {
		font-size: 1.4rem;
	}

	p {
		font-size: 16px !important;
		font-weight: normal;
		line-height: 32px;
	}

	p.bold {
		font-size: 18px !important;
		font-weight: 700;
		line-height: 32px;
	}

	.text-primary {
		color: var(--primary-color) !important;
	}

	.text-secondary {
		color: var(--secondary-color) !important;
	}

	.text-dark {
		color: var(--dark-color) !important;
	}

	.text-light {
		color: var(--light-color) !important;
	}

	.bg-primary {
		background-color: var(--primary-color) !important;
	}

	.bg-secondary {
		background-color: var(--secondary-color) !important;
	}

	.bg-light {
		background-color: var(--light-color) !important;
	}

	.bg-dark {
		background-color: var(--dark-color) !important;
	}

	.btn {
		border: none !important;
		display: inline-block;
		position: relative;
		overflow: hidden;
		transition: all ease-in-out .5s;
	}

	.btn::after {
		content: "";
		display: block;
		position: absolute;
		top: 0;
		left: 25%;
		height: 100%;
		width: 40%;
		background-color: #000;
		border-radius: 50%;
		opacity: 0;
		pointer-events: none;
		transition: all ease-in-out 1s;
		transform: scale(5, 5);
	}

	.btn:active::after {
		padding: 0;
		margin: 0;
		opacity: .2;
		transition: 0s;
		transform: scale(0, 0);
	}

	.btn-primary {
		background-color: var(--primary-color) !important;
	}

	.btn-secondary {
		background-color: var(--secondary-color) !important;
	}

	.btn-primary-outline {
		background-color: transparent !important;
		color: var(--primary-color) !important;
		border: 1px solid var(--primary-color) !important;
	}

	.btn-secondary-outline {
		background-color: transparent !important;
		color: var(--secondary-color) !important;
		border: 2px solid var(--secondary-color) !important;
	}

	.btn-primary:hover,
	.btn-secondary:hover,
	.btn-primary-outline:hover,
	.btn-secondary-secondary:hover {
		border-color: inherit !important;
		opacity: 0.8 !important;
	}

	.fas {
		font-size: xx-large;
		color: var(--secondary-color) !important;
	}


	/****************************/
	/*-----Landing Page---------*/
	/****************************/

	/*------Navbar------------*/

	.navbar-main {
		background-color: var(--primary-color);
	}

	.navbar-main .navbar-brand,
	.navbar-main .navbar-text {
		color: rgba(255, 255, 255, 0.9);
	}

	.navbar-main .navbar-nav .nav-link {
		font-size: 1rem;
		color: rgba(255, 255, 255, 0.8);
	}

	.navbar-main .nav-item.active .nav-link,
	.navbar-main .nav-item:hover .nav-link {
		color: #ffffff;
	}

	/* for navbar toggler design */
	.icon-bar {
		width: 22px;
		height: 2px;
		background-color: #B6B6B6;
		display: block;
		transition: all 0.2s;
		margin-top: 4px
	}

	.navbar-toggler {
		border: none;
		background: transparent !important;
	}

	.navbar-toggler:focus {
		outline: none !important;
	}

	/* navbar toggler animation*/

	.navbar-toggler .top-bar {
		transform: rotate(45deg);
		transform-origin: 10% 10%;
	}

	.navbar-toggler .middle-bar {
		opacity: 0;
	}

	.navbar-toggler .bottom-bar {
		transform: rotate(-45deg);
		transform-origin: 10% 90%;
	}

	.navbar-toggler.collapsed .top-bar {
		transform: rotate(0);
	}

	.navbar-toggler.collapsed .middle-bar {
		opacity: 1;
	}

	.navbar-toggler.collapsed .bottom-bar {
		transform: rotate(0);
	}

	/*-----------footer list--------*/

	.list-unstyled li a {
		font-size: 17px !important;
		transition: 0.25s !important;
		font-style: normal;
		font-weight: normal;
	}

	.list-unstyled li a:hover {
		color: gray !important;
		text-decoration: none;
	}
</style>
@endsection

@section('header')
<header>
	<nav class="navbar navbar-expand-lg navbar-main">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('images/svg/logo-white.svg') }}" class="img img-responsive" height="30" width="auto">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
				<!-- <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg py-1 text-white"></i></span> -->
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
					</li>
					@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Sign in</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">Sign up</a>
					</li>
					@endauth
					@auth
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}">Logout</a>
					</li>
					@endauth
				</ul>
			</div>
		</div>
	</nav>
</header>
@stop

@section('sidebar')

@endsection


@section('content')
<div class="sub-msg">
    @if(session()->has('subMessageGood'))
        <p class="btn btn-success sub-msg">
            {{ session('subMessageGood') }}
            @php
                session()->forget('subMessageGood');
            @endphp
        </p>
    @endif
    @if(session()->has('subMessageBad'))
        <p class="btn btn-danger sub-msg">
            {{ session('subMessageBad') }}
            @php
                session()->forget('subMessageBad');
            @endphp
        </p>
    @endif
</div>
<main>
	<section class="jumbotron p-0 text-left rounded-0 bg-white">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 col-lg-6">
					<h1 class="jumbotron-heading text-dark my-5">Let us do the work for you</h1>
					<p class="text-dark bold text-bold my-5">Generate estimates, invoices, contacts and much more<br> for your project</p>
					<p class="text-dark my-5">
						<a href="{{ url('/guest/create/step1') }}" class="btn btn-secondary btn-lg py-2">Generate an Estimate</a>
					</p>
				</div>
				<div class="col-12 col-md-7 col-lg-6 order-2 aos-init aos-animate">
					<div class="text-center">
						<img src="{{ asset('images/svg/coding.svg') }}" class="img img-responsive" height="auto" width="80%">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="text-left">
						<h3 class="text-dark">Estimate your project’s cost for free</h3>
						<p class="text-dark small">
							Use our handy cost estimator to find out how much it will take you to deliver on your project.
						</p>
						<p class="text-dark small">
							We take into consideration your work hours, subcontractors, among other things, to make sure you always have a healthy profit at the end of the day
						</p>
						<p class="text-dark my-4">
							<a href="{{ url('/guest/create/step1') }}" class="btn btn-secondary btn-lg py-2">Generate an Estimate</a>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="text-center">
						<img src="{{ asset('images/svg/undraw_calculator.svg') }}" class="img img-responsive" height="auto" width="80%">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-primary">
		<div class="container mt-4 py-4">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-white py-4 mb-4 text-center">Manage your Projects <br> for free</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="text-center text-white">
						<img src="{{ asset('images/svg/project-plan.svg') }}" class="img img-responsive" height="auto" width="100%">
						<p class="text-white text-bold mt-4">Plan</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center text-white">
						<img src="{{ asset('images/svg/project-collaborate.svg') }}" class="img img-responsive" height="auto" width="100%">
						<p class="text-white text-bold mt-4">Collaborate</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center text-white">
						<img src="{{ asset('images/svg/project-communicate.svg') }}" class="img img-responsive" height="auto" width="100%">
						<p class="text-white text-bold mt-4">Communicate</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-center">
						<a class="btn btn-secondary-outline btn-lg" href="{{ url('/guest/create/step1') }}">Create Invoice</a>
					</p>
				</div>
			</div>
		</div>
	</section>
</main>
@stop



@section('footer')
<footer class="bg-white pt-4">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-2">
				<img src="{{ asset('images/svg/logo-dark.svg') }}" alt="" class="img img-responsive mb-2" height="30" width="auto">
				<ul class="list-unstyled">
					<li><a class="text-dark" href="{{ url('/pricing') }}">Pricing</a></li>
					<li><a class="text-dark" href="{{ url('/login') }}">Sign in</a></li>
					<li><a class="text-dark" href="{{ url('/register') }}">Sign up</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-2">
				<h5>Features</h5>
				<ul class="list-unstyled">
					<li><a class="text-dark" href="{{ url('/dashboard') }}">Dashboard</a></li>
					<li><a class="text-dark" href="{{ url('/projects') }}">Projects</a></li>
					<li><a class="text-dark" href="{{ url('/invoices') }}">Invoices</a></li>
					<li><a class="text-dark" href="{{ url('/guest/create/step1') }}">Create a Project</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<h5>Reach us</h5>
				<p class="text-dark small">
					3 Birrel Avenue, Sabo.
					Yaba, Lagos State,
					Nigeria
				</p>
				<h5>
					<a href="http://facebook.com" class="text-dark mr-2"><i class="fab fa-facebook-square"></i></a>
					<a href="http://twitter.com" class="text-dark"><i class="fab fa-twitter-square"></i></a>
				</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<h5>Stay up to date</h5>
				<p class="text-dark small">
					Get emails about our newest features and events you can visit. We promise not to spam.
				</p>
				<form class="form-inline" method="post" action="/submailinglist">
                    @csrf
					<div class="form-group mb-2 mr-2">
						<label for="subEmail" class="sr-only">Email</label>
						<input type="email" class="form-control" id="subEmail" name="subEmail" placeholder="Email Address" required>
					</div>
					<input type="submit" class="btn btn-secondary mb-2" id="btn-sub" name="btn-sub" value="Subscribe"/>
				</form>
			</div>
		</div>
	</div>
	<div class="bg-white text-left py-2 mt-0">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>&copy; Lancer 2019.</p>
		</div>
	</div>
</footer>
@stop