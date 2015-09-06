@extends('app')


@section('content')
 

<div class="row">
    <div class="col-sm-9 col-md-10">
        <div class="pull-right">
            <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-sm-3 col-md-2">
        <a href="#" class="btn btn-danger btn-sm btn-block" role="button">COMPOSE</a>
        <hr />
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><span class="badge pull-right">42</span> Inbox </a>
            </li>
            <li><a href="http://www.jquery2dotnet.com">Sent</a></li>
        </ul>
    </div>
    <div class="col-sm-9 col-md-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#inbox" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
            </span>Inbox</a></li>
            <li><a href="#sent" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                Sent</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                            </label>
                        </div>
                        <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                            display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                        <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                            class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                            </span></span></a><a href="#" class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                </div>
                                <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                    display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                                <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                                    class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                    </span></span></a><a href="#" class="list-group-item read">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                        <span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px;
                                            display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                                        <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                                            class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                            </span></span></a>
                </div>
            </div>
            <div class="tab-pane fade in" id="profile">
                <div class="list-group">
                    <div class="list-group-item">
                        <span class="text-center">This tab is empty.</span>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in" id="messages">
                ...</div>
            <div class="tab-pane fade in" id="settings">
                This tab is empty.</div>
        </div>
        <!-- Ad -->
        <div class="row-md-12">
            <div class="ad">
                <a href="http://www.jquery2dotnet.com" class="title">jQuery2DotNet</a>
                <div>
                    Cool jQuery, CSS3, HTML5, Bootstrap, and MVC tutorial</div>
                <a href="http://www.jquery2dotnet.com" class="url">www.jquery2dotnet.com</a>
            </div>
        </div>
    </div>
</div>

@endsection