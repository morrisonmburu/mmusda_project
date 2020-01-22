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
			@foreach($posts as $post)
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

							<a href="{{ route('blog.readmore', $post->id) }}" class="btn btn-info btn-flat" >Read More</a>
						</div>
					</div>
				</div>
			</div>
			</div>
			
			@endforeach
		</div>


		<div class="row">
			<div class="col-md-12" >
				<div class="text-center">
					{!! $posts->links() !!}
				</div>
			</div>
		</div>

	</div>

</main>

@endsection