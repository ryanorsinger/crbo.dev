@extends('layouts.master')

@section('title')
<title>Panel</title>

@stop

@section('style')
<style type="text/css">
#buyback {
	font-size: 13em;
	color: rgb(85,85,85);
}
#refurb {
	font-size: 13em;
	color: rgb(85,85,85);
}

</style>

@stop

@section('content')
<br>
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-md-offset-2">
			<a href="{{{ action('DevicesController@create') }}}"><img src="/img/desktop.png"></a>
			<p>Buy / Sell</p>
		</div>
		<div class="col-md-3">
			<a href="{{{ action('DevicesController@create') }}}"><img src="/img/recycling.png"></a>
			<p>Recycle</p>
		</div>
		<div class="col-md-3">
			<a href="{{{ action('DevicesController@index') }}}"><img src="/img/refurb.png"></a>
			<p>Refurbish</p>
		</div>
	</div>
</div>


@stop