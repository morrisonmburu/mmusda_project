@extends('admin.includes.main')

@section('title', '| All Posts')

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
							<h1>All posts</h1>
						</div>
						<div class="col-md-4">
							<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-spacing"> Create New Post</a>
						</div>
					</div>

				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table">
								<thead>
									<th>#</th>
									<th>Title</th>
									<th>Body</th>
									<th>Created At</th>
									<th></th>
								</thead>

								<tbody>
									<?php $i=1; ?>
									@foreach ($posts as $post)

									<tr>
										<th>{{ $i }}</th>
										<td>{{ $post->title }}</td>
										<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "...": "" }}</td>
										<td>{{ date('M j, Y',strtotime($post->created_at)) }}</td>
										<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a></td>
									</tr>
									<?php $i++; ?>
									@endforeach
								</tbody>
							</table>

							<div class="text-center">
								{!! $posts->links(); !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection