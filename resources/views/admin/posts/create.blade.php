@extends('admin.includes.main')

@section('title', '| Create New Post')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-12 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
				   @include('partials._messages')
				  </div>
				<div class="card-header">
					<h1>Create new post</h1>
				</div>

				<div class="card-body">

					{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}

					{{ Form::label('slug', 'Slug:') }}
					{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

					{{ Form::label('body', "Post Body:") }}
					{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '500')) }}

					{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
					{!! FORM::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}

@endsection