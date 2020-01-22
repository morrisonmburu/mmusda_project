@extends('admin.includes.main')

@section('title', '| Edit blogpost')

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-8 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
				   @include('partials._messages')
				  </div>
				<div class="card-header">
					<h3>Edit Post #idNo {{ $post->id }}</h3>
				</div>
				<div class="card-body">
					{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

					{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
					{{ Form::text('slug', null, ['class' => 'form-control']) }}

					{{ Form::label('body', 'Post Body:', [ "class" => 'form-spacing-top']) }}
					{{ Form::textarea('body', null, ["class" => 'form-control']) }}
				</div>
			</div>

		</div>
		<div class="col-xl-4 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="card-body">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y h:i A', strtotime($post->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date( 'M j, Y h:i A', strtotime($post->updated_at)) }}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
						</div>
						<div class="col-sm-6">
							{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
						</div>
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection