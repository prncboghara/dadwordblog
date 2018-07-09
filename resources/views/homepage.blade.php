@extends('welcome')
@section('content')
<div class="container-fluid bg-primary">
	 <div class="main_content text-white">
	 	<p>This Is Blog help to developer and student to improve they skill !</p>
	 </div>
</div>
<div class="container">
	<div class="row">
		@foreach($posts as $post)
		<div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2 mb-2">
			<div class="card">
			  <div class="card-body">
			    {{$post->title}}
			    <div class="discription mt-3 mb-3">
			    	{{$post->slug}}
			    </div>
			  </div>
			  <p><small class="text-muted">Last updated 2 min ago by prnc<span class="ml-5"><a href="{{$post->slug}}">Read More</a></span> </small></p>
			</div>	
		</div>
		@endforeach
	</div>
</div>
@endsection('content')