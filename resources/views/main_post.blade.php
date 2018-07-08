@extends('welcome')

@section('content')
	<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 sidenav bg-white">		
		  			<h2>Vertical Nav</h2>
					<ul class="nav flex-column">
						<li class="nav-item sidenavlink">
						  <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item sidenavlink">
						  <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item sidenavlink">
						  <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item sidenavlink">
						  <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item sidenavlink">
						  <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item sidenavlink">
						  <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item sidenavlink">
						  <a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-9 mb-5 mt-5">
					<div class="content bg-white">
						<div class="card">
						  <div class="card-body">
						    This is some text within a card body.
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection('content')