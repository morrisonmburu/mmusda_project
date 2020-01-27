@extends('admin.includes.main')

@section('title','| Events Admin')

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
					<h2>Create An Event</h2>
					<div class="card-body">

					{!! Form::open(array('route' => 'events.store', 'data-parsley-validate' => '')) !!}
					<div class="form-group">
						{{ Form::label('title', 'Events Title:') }}
						{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('desc', "Events Description:") }}
						{{ Form::textarea('desc', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '500')) }}
					</div>
					

					<div class="form-group">
						<label for="s_date"><i class="ni ni-calendar-grid-58"></i> Event Start Date </label>
						<input type='text' name="s_date" data-timepicker="true" readonly id="s_date" class='form-control' data-language='en' data-date-format="yyyy-mm-dd" />
					</div>

					<div class="form-group">
						<label for="e_date"><i class="ni ni-calendar-grid-58"></i> Event End Date </label>
						<input type='text' name="e_date" data-timepicker="true" readonly id="e_date" class='form-control' data-language='en' data-date-format="yyyy-mm-dd" />
					</div>


					{{ Form::submit('Create An Event', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
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