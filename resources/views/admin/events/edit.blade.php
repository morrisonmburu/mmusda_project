@extends('admin.includes.main')

@section('title', '| Edit Event')

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-8 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
				   @include('partials._messages')
				  </div>
				<div class="card-header">
					<h3>Edit Event #idNo {{ $event->id }}</h3>
				</div>
				<div class="card-body">
					{!! Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'PUT']) !!}

					<div class="form-group">
						{{ Form::label('title', 'Event Title:') }}
						{{ Form::text('title', $event->title, ["class" => 'form-control input-lg']) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('desc', 'Event Description:', [ "class" => 'form-spacing-top']) }}
						{{ Form::textarea('desc', $event->event_desc, ["class" => 'form-control']) }}
					</div>
					

					
					<div class="form-group">
						<label for="s_date"><i class="ni ni-calendar-grid-58"></i> Event Start Date </label>
						<input type='text' name="s_date" data-timepicker="true" readonly id="s_date" class='form-control' data-language='en' data-date-format="yyyy-mm-dd" value="{{ $event->start_date }}" />
					</div>

					<div class="form-group">
						<label for="e_date"><i class="ni ni-calendar-grid-58"></i> Event End Date </label>
						<input type='text' name="e_date" data-timepicker="true" readonly id="e_date" class='form-control' data-language='en' data-date-format="yyyy-mm-dd" value="{{ $event->end_date }}" />
					</div>

				</div>
			</div>

		</div>
		<div class="col-xl-4 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="card-body">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y h:i A', strtotime($event->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date( 'M j, Y h:i A', strtotime($event->updated_at)) }}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('events.index', 'cancel', array($event->id), array('class' => 'btn btn-danger btn-block')) !!}
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