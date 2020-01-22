@extends('admin.includes.main')

@section('title', '| Edit announcement')

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-8 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
				   @include('partials._messages')
				  </div>
				<div class="card-header">
					<h3>Edit Announcement #idNo {{ $announce->id }}</h3>
				</div>
				<div class="card-body">
					{!! Form::model($announce, ['route' => ['announces.update', $announce->id], 'method' => 'PUT']) !!}

					<div class="form-group">
						{{ Form::label('title', 'Announcement Title:') }}
						{{ Form::text('title', $announce->ance_title, ["class" => 'form-control input-lg']) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('desc', 'Announcement Description:', [ "class" => 'form-spacing-top']) }}
						{{ Form::textarea('desc', $announce->ance_desc, ["class" => 'form-control']) }}
					</div>
					

					<div class="form-group">
						<label for="d-date"><i class="ni ni-calendar-grid-58"></i> Announcement Date </label>
						<input type='text' name="ance_date" value="{{ $announce->ance_date }}" readonly id="d-date" class='form-control' data-language='en' />
					</div>

				</div>
			</div>

		</div>
		<div class="col-xl-4 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="card-body">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y h:i A', strtotime($announce->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date( 'M j, Y h:i A', strtotime($announce->updated_at)) }}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('announces.show', 'cancel', array($announce->id), array('class' => 'btn btn-danger btn-block')) !!}
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