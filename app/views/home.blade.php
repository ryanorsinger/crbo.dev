@extends('layouts.master')

@section('title')
<title>Panel</title>

@stop

@section('style')
<style type="text/css">
#crbo {
	font-size: 1.65em;
	color: rgb(85,85,85);
	text-align: center;
}

#buyback {
	margin-top: 19px;

}

</style>

@stop

@section('content')
<br>
<br>
<br>
<div class="container-fluid"; id="crbo">
	<div class="row">
		<div class="col-md-3 col-md-offset-3" id="buyback">
			<a href="{{{ action('DevicesController@create') }}}"><img src="/img/desktop.png"><br>Buy / Sell</a>
			
		</div>
		
		<div class="col-md-3" id="refurbish">
			<a href="{{{ action('DevicesController@index') }}}"><img src="/img/refurb.png"><br>Refurbish</a>
			
		</div>
	</div>
</div>


@stop