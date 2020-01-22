@extends('admin.includes.main')

@section('title', '| Create New Announcement')

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
					<h1>Create a new Annuncement</h1>
				</div>

				<div class="card-body">

					{!! Form::open(array('route' => 'announces.store', 'data-parsley-validate' => '')) !!}
					<div class="form-group">
						{{ Form::label('title', 'Announcement Title:') }}
						{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('desc', "Announcement Description:") }}
						{{ Form::textarea('desc', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '500')) }}
					</div>
					

					<div class="form-group">
						<label for="d-date"><i class="ni ni-calendar-grid-58"></i> Announcement Date </label>
						<input type='text' name="ance_date" readonly id="d-date" class='form-control' data-language='en' />
					</div>


					{{ Form::submit('Create Announcement', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
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