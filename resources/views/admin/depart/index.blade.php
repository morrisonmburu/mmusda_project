@extends('admin.includes.main')

@section('title', '| All Departments')

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
							<h1>All Departments</h1>
						</div>
						<div class="col-md-4">
							<a href="{{ route('depart.create') }}" class="btn btn-lg btn-block btn-primary btn-spacing"> Create New Department</a>
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
										<th>Department Type</th>
										<th>Created At</th>
										<th></th>
									</thead>

									<tbody>
										<?php $i=1; ?>
										@foreach ($depart as $departs)

										<tr>
											<th>{{ $i }}</th>
											<td>{{ $departs->d_title }}</td>
											<td>{{ substr($departs->d_desc, 0, 50) }}{{ strlen($departs->d_desc) > 50 ? "...": "" }}</td>
											<td>{{ $departs->d_type }}</td>
											<td>{{ date('M j, Y',strtotime($departs->created_at)) }}</td>
											<td><a href="{{ route('depart.show', $departs->id) }}" class="btn btn-info btn-sm">View</a> <a href="{{ route('depart.edit', $departs->id) }}" class="btn btn-success btn-sm">Edit</a></td>
										</tr>
										<?php $i++; ?>
										@endforeach
									</tbody>
								</table>
							</div>

							<div class="text-center">
								{!! $depart->links(); !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection