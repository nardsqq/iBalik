<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">iBalik</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="{{ url('/about') }}">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Hello, User</a></li>
        <li class="dropdown">
          <a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Actions
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{ url('/actions/post/create') }}">Post Item</a></li>
            <li><a href="{{ url('/actions/post') }}">Item List</a></li>
            <li><a href="#">Your Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>