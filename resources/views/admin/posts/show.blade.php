@extends('admin.includes.main')

@section('title', '| view Post')

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-8 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
				   @include('partials._messages')
				  </div>
				<div class="card-header">
					<h1>{{ $post->title }}</h1>
				</div>
				<div class="class-body">
					<div class="row">
						<div class="col-xl-2"></div>
						<div class="col-xl-10 mb-5 mb-xl-0">
							<p class="lead">{{ $post->body }}</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-xl-4 mb-5 mb-xl-0">
			<div class="card">
				<div class="card-body">
					<dl class="dl-horizontal">
						<label>Url:</label>
						<p><a href="{{ url('blog/'.$post->slug)  }}">{{ url('blog/'.$post->slug) }}</a></p>
					</dl>

					<dl class="dl-horizontal">
						<label>Created At:</label>
						<p>{{ date('M j, Y h:i A', strtotime($post->created_at)) }}</p>
					</dl>

					<dl class="dl-horizontal">
						<label>Last Updated:</label>
						<p>{{ date( 'M j, Y h:i A', strtotime($post->updated_at)) }}</p>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info btn-block')) !!}
						</div>
						<div class="col-sm-6">
							{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

							{!! Form::close() !!}


						</div>
						<div class="col-sm-12" style="padding-top: 30px;">
							<a href="{{ route('posts.index') }}" class="btn btn-default btn-block top"> << see all posts</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


@endsection