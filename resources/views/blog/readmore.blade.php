@extends('main')

@section('title', '| Blog')

@section('content')

<main>

	<div class="position-relative">

		<div class="container" style="padding-top: 75px;">
			<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1>Blog</h1>
						</div>
					</div>
			
			<div style="padding: 30px;">
				<div class="card shadow">
				<div class="card-header">
					<h2>{{ $post->title }}</h2>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 col-md-offset-2"> 
							<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

							<p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...':'' }}</p>

						
						</div>
					</div>
				</div>
			</div>
			</div>
			
		
		</div>

	</div>

</main>

@endsection