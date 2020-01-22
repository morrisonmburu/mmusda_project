@extends('admin.includes.main')

@section('title', '| All Announcements')

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
							<h1>All Announcements</h1>
						</div>
						<div class="col-md-4">
							<a href="{{ route('announces.create') }}" class="btn btn-lg btn-block btn-primary btn-spacing"> Create New Announcement</a>
						</div>
					</div>

				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table align-items-center table-flush">
									<thead>
										<th>#</th>
										<th>Title</th>
										<th>Description</th>
										<th>Announcement Date</th>
										<th>Created At</th>
										<th></th>
									</thead>

									<tbody>
										<?php $i=1; ?>
										@foreach ($announces as $announce)

										<tr>
											<th>{{ $i }}</th>
											<td>{{ $announce->ance_title }}</td>
											<td>{{ substr($announce->ance_desc, 0, 50) }}{{ strlen($announce->body) > 50 ? "...": "" }}</td>
											<td>{{ date('M j, Y',strtotime($announce->ance_date)) }}</td>
											<td>{{ date('M j, Y',strtotime($announce->created_at)) }}</td>
											<td><a href="{{ route('announces.show', $announce->id) }}" class="btn btn-info btn-sm">View</a> <a href="{{ route('announces.edit', $announce->id) }}" class="btn btn-success btn-sm">Edit</a></td>
										</tr>
										<?php $i++; ?>
										@endforeach
									</tbody>
								</table>
							</div>

							<div class="text-center">
								{!! $announces->links(); !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection