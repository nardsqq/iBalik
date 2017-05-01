@extends('main')
@section('title', '- Manage Posts')
@include('pages.posts.index.nav')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1>Manage Posts</h1>
			</div>
			<div class="col-md-2">
				<a href="{{ route('post.create') }}" class="btn btn-success btn-block btn-h1-spacing">Create New Post</a>
			</div>
			<hr>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<table id="dataTable" class="table table-bordered">
					<thead>
						<th class="text-center">#</th>
						<th>Title</th>
						<th>Description</th>
						<th class="text-center">Posted At</th>
						<th class="text-center">Actions</th>
					</thead>
					<tbody>
						@foreach($post as $posts)
							<tr>
								<td class="text-center">{{ $posts->id }}</td>
								<td>{{ $posts->title }}</td>
								<td>{{str_limit($posts->body, $limit = 50, $end = '...') }}</td>
								<td class="text-center">{{$posts->created_at->format('F d, Y')}}</td>
								<td class="text-center"><a href="{{ route('post.show', $posts->id) }}" class="btn btn-info btn-sm">View</a> <a href="{{ route('post.edit', $posts->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<script>
		$(document).ready(function(){
		    $('#dataTable').DataTable();
		    $('body .dropdown-toggle').dropdown();
		});
	</script>
@endsection