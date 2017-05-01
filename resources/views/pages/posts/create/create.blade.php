@extends('main')
@section('title', '- Submit Post')
@include('pages.posts.create.nav')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Create a Post</h3>
	        <hr>
	        <div class="panel panel-default">
	        	<div class="panel-body">
					{!! Form::open(array('route' => 'post.store')) !!}

					{{-- <div class="form-group">
						{{ Form::label('posttype', 'Post Type: ') }}
				        {{ Form::select('posttype', $posttype, null, ['class' => 'form-control']) }}
					</div> --}}

				    <div class="form-group">
						{{ Form::label('title', 'Title:') }}
						{{ Form::text('title', null, array('class' => 'form-control')) }}		    	
				    </div>
				    
				    <div class="form-group">
						{{ Form::label('body', 'Description:') }}
						{{ Form::textarea('body', null, array('class' => 'form-control')) }}   	
				    </div>

						{{ Form::submit('Post Item', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 15px;')) }}

					{!! Form::close() !!}
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