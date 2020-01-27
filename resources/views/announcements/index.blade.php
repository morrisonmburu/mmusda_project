@extends('main')

@section('title | MMUSDA announcements')

@section('content')

<main>

	<div class="position-relative">

		<div class="container" style="padding-top: 75px;">
			<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1>Announcements</h1>
						</div>
					</div>
			@foreach($announce as $announces)
			<div style="padding: 30px;">
				<div class="card shadow">
				<div class="card-header">
					<h2>{{ $announces->ance_title }}</h2>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 col-md-offset-2"> 
							<h5>Announced On: {{ date('M j, Y', strtotime($announces->created_at)) }}</h5>

							<p>{{ $announces->ance_desc }}</p>

							{{-- <a href="{{ route('blog.readmore', $post->id) }}" class="btn btn-info btn-flat" >Read More</a> --}}
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
					{!! $announce->links() !!}
				</div>
			</div>
		</div>

	</div>

</main>

@endsection