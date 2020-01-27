@extends('admin.includes.main')

@section('title','| Departments Admin')

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
					<h2>Create A Department</h2>
					<div class="card-body">

					{!! Form::open(array('route' => 'depart.store', 'data-parsley-validate' => '')) !!}
					<div class="form-group">
						{{ Form::label('title', 'Department Title:') }}
						{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('desc', "Department Description:") }}
						{{ Form::textarea('desc', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '500')) }}
					</div>
					

					<div class="form-group">
						<label for="d_type"> Department Type </label>
						<select type="text" class="form-control" name="d_type" required >
							<option></option>
							<option>Internal Activities</option>
							<option>Members Welfare</option>
							<option>Church Affairs</option>
							<option>Ministries & Outreach</option>
						</select>
					</div>


					{{ Form::submit('Create A Department', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
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