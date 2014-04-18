@extends('layouts.master')

@section('title')
<title>Admin Panel</title>

@stop

@section('style')
<style type="text/css">
#crbo1 {
	font-size: 1.65em;
	color: rgb(85,85,85);
	text-align: center;
}

#memory {
	margin-top: 25px;

}

#cpu {
	margin-top: 11px;
}

#manufacturer {
	margin-right: 32px;
}

#client {
	margin-top: 5px;
}

</style>

@stop

@section('content')
<br>
<br>
<br>
<div class="container-fluid" id="crbo1">
	<div class="row">
		<div class="col-md-2 col-md-offset-1" id="client">
			<a href="{{{ action('UsersController@index') }}}"><img src="/img/client.png">Users</a>
			
		</div>
		<div class="col-md-2" id="manufacturer">
			<a href="{{{ action('ManufacturersController@index') }}}"><img src="/img/manufacturer.png">Manufacturers</a>
			
		</div>
		<div class="col-md-2" id="cpu">
			<a href="{{{ action('CpusController@index') }}}"><img src="/img/cpu.png">Processors</a>
		</div>
		<div class="col-md-2" id="memory">
			<a href="{{{ action('RamsController@index') }}}"><img src="/img/ram.png">Memory</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('HddsController@index') }}}"><img src="/img/hdd.png">Hard Drives</a>
		</div>
	</div>
</div>


@stop