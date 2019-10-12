<nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper">
		<a class="navbar-brand brand-logo" href="{{ route('home') }}">SMS</a>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-center">
		<button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
		<span class="navbar-toggler-icon"></span>
		</button>

		<form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
			<div class="input-group solid">
				<span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
				<input type="text" class="form-control">
			</div>
		</form>
		<ul class="navbar-nav ml-lg-auto">
			
			
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->name }} <span class="caret"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
			
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
		<span class="navbar-toggler-icon"></span>
		</button>
	</div>
</nav>