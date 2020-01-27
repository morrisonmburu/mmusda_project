@extends('admin.includes.main')

@section('title', '| Events')

@section('content')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-xl-12 mb-5 mb-xl-0">

			<div class="card shadow">
				<div class="container" style="padding-top: 30px;">
					@include('partials._messages')
				</div>
				<div class="card-header">
					<div class="row">
						<div class="col-md-8">
							<h1>Events</h1>
						</div>
						<div class="col-md-4">
							<a href="{{ route('events.create') }}" class="btn btn-lg btn-block btn-primary btn-spacing"> Create New Event</a>
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
											<button type="button" onclick="edit_event()" class="btn btn-primary">Edit Event</button>
											<button type="button" onclick="deleteevent()" class="btn btn-danger pull-right">
												Delete Event
											</button>
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

<script type="text/javascript">
	function edit_event(){

				var id = $('#event_id').text();
				window.location = "http://127.0.0.1:8000/events/edit/"+id;
		}

		function deleteevent(){
		var id = $('#event_id').text();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this event!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				jQuery.ajax({
					url:'{{ route('events.destroy') }}',
					method:"POST",
					data:{id: id, _token: '{{csrf_token()}}'},
					success:function(result)
					{
						swal(result, "has been deleted!", {
							icon: "success",
						}).then(function(){ 
							location.reload();
						}
						);
					},
					error : function(){alert("Something Went Wrong.");},
				});
			} else {
				swal("Event is safe!").then(function(){ 
					location.reload();
				}
				);
			}
		});
	}

</script>

@endsection