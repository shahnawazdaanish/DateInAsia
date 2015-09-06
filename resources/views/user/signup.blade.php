@extends('app')


@section('content')



        {!! Form::open(array('url' => 'signup', 'method'=>'post')) !!}
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputName">Enter user name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        {!! Form::close() !!}
    </div>

	<div class="col-md-12">
		<a href="profiles">All Profiles</a>
		<a href="messages">Messages</a>
	</div>

















@endsection