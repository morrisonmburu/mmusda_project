@extends('main')

@section('title','| MMUSDA Timeline of Events')

@section('content')

<main>

	<div class="position-relative">

		<div class="container" style="margin-top:100px;">
			<div class="row">
				<div class="col-xl-12 mb-5 mb-xl-0">

					<div class="card shadow">
						<div class="container" style="padding-top: 30px;">
							@include('partials._messages')
						</div>
						<div class="card-header">
							<div class="row">
								<div class="col-md-8">
									<h1>MMUSDA Timeline</h1>
								</div>
							</div>

						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 container">

									{{-- {!! $calendar->calendar() !!} --}}
									<div id='calendar'></div>


									<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
										<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h6 class="modal-title" id="event_title"></h6>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-8">
															<p id="event_desc"></p>
														</div>
														<div class="col-md-4">
															<dl class="dl-horizontal">
																<label>Start Date:</label>
																<p id="start_date" ></p>
															</dl>

															<dl class="dl-horizontal">
																<label>End date:</label>
																<p id="end_date"></p>
															</dl>
														</div>
													</div>

													<p style="display: none;" id="event_id"></p>

												</div>
												<div class="modal-footer">

													<button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</main>

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
	$(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            // defaultView: 'agendaWeek',
            header: {
            	left: 'prev,next today',
            	center: 'title',
            	right: 'month,agendaWeek,agendaDay'
            },
            events : [
            @foreach($event as $events)
            {
            	id : '{{ $events->id }}',
            	title : '{{ $events->title }}',
            	desc : '{{ $events->event_desc }}',
            	start : '{{ $events->start_date }}',
            	end: '{{ $events->end_date }}',

            	color : '#5e72e4',
            	textColor : '#fff',
            },
            @endforeach
            ],
            eventClick: function(calEvent, jsEvent, view) {
            	$('#event_id').text(calEvent.id);
            	$('#event_title').text(calEvent.title);
            	$('#event_desc').text(calEvent.desc);
            	$('#start_date').text(moment(calEvent.start).format('YYYY-MM-DD HH:mm:ss'));
            	$('#end_date').text(moment(calEvent.end).format('YYYY-MM-DD HH:mm:ss'));
            	$('#editModal').modal();
            }
        });
    });
</script>

@endsection
