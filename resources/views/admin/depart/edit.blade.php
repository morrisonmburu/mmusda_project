@extends('admin.includes.main')

@section('title', '| Edit Department')

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-8 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
				   @include('partials._messages')
				  </div>
				<div class="card-header">
					<h3>Edit Department #idNo {{ $depart->id }}</h3>
				</div>
				<div class="card-body">
					{!! Form::model($depart, ['route' => ['depart.update', $depart->id], 'method' => 'PUT']) !!}

					<div class="form-group">
						{{ Form::label('title', 'Department Title:') }}
						{{ Form::text('title', $depart->d_title, ["class" => 'form-control input-lg']) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('desc', 'Department Description:', [ "class" => 'form-spacing-top']) }}
						{{ Form::textarea('desc', $depart->d_desc, ["class" => 'form-control']) }}
					</div>
					

					<div class="form-group">
						<label for="d_type"> Department Type </label>
						<select class="form-control" name="d_type" required >
							<option>{{ $depart->d_type }}</option>
							<option>Internal Activities</option>
							<option>Members Welfare</option>
							<option>Church Affairs</option>
							<option>Ministries & Outreach</option>
						</select>
					</div>

				</div>
			</div>

		</div>
		<div class="col-xl-4 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="card-body">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y h:i A', strtotime($depart->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date( 'M j, Y h:i A', strtotime($depart->updated_at)) }}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('depart.show', 'cancel', array($depart->id), array('class' => 'btn btn-danger btn-block')) !!}
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