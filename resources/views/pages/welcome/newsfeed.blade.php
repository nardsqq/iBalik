<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-center"><strong>Submit a Post</strong></h3>
			</div>
			<div class="panel-body">
	          <div class="alert alert-danger alert-white rounded">
	            <strong>An item of yours is <i>missing</i>?</strong>
	            <br>
	            <small>Submit a <i>lost post</i> and describe the missing item.</small>
	            <hr>
	            <a href="#" class="btn btn-block btn-danger">Read More</a>
	          </div> 
	          <div class="alert alert-success alert-white rounded">
	            <strong>You found an <i>item</i>?</strong>
	            <br>
	            <small>Post the <i>found item</i> and describe it.</small>
	            <hr>
	            <a href="#" class="btn btn-block btn-success">Read More</a>
	          </div>
	          <hr>
	          <a href="{{ url('/actions/post/create') }}" class="btn btn-block btn-primary">Submit a Post</a>
			</div>
		</div>
		{{-- <h3>Submit a Post</h3> --}}
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
		  <div class="panel-body">
			<div class="post">
				<h3>Post Title</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn btn-info btn-block">Read More</a>
			</div>

			<hr>

			<div class="post">
				<h3>Post Title</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn btn-info btn-block">Read More</a>
			</div>

			<hr>

			<div class="post">
				<h3>Post Title</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn btn-info btn-block">Read More</a>
			</div>

			<hr>
		  </div>
		</div>
	</div>
</div>
