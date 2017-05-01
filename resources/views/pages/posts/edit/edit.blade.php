@extends('main')
@section('title', '- Edit Post')
@include('pages.posts.edit.nav')
@section('content')
	<div class="container">
		{!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}

			{{ Form::label('body', 'Description:',['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
				  <dt>Created at: </dt>
				  <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl>
				  <dt>Last Update: </dt>
				  <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('post.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>
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