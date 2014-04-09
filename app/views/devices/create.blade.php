@extends('layouts.master')

@section('title')
<title>Acquisition Procedure Form</title>
@stop

@section('style')

<!-- css to center the header
css to add styling to other stuff -->
@stop


@section('content')
<div class="container">
<h1 class="page-header">210Geeks.com &nbsp; Buy Back Procedure</h1>
<div>
<row>
	{{ Form::open(array('action' => 'DevicesController@store', 'class' => 'form-inline')) }}
<div class="col-lg-6">	
<h2>Device Information</h2>
<div class=well>
	<div class="form-inline">
		<label class="acquisition_type" id="acquisition_type">Acquisition Type &nbsp;</label>
		<label class="radio">
			<input type="radio" name="acquisition_type" value="refurbish"/>
			Buy Back&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="acquisition_type" value="recycle"/>
			Recycle&nbsp;
		 </label>
	</div>

	<div class="form-inline">
		<label class="hardware_type" id="hardware_type">Hardware Type &nbsp;</label>
		<label class="radio">
			<input type="radio" name="hardware_type" value="laptop"/>
			Laptop&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="hardware_type" value="desktop"/>
			Desktop&nbsp;
		 </label>
	</div>
</div>

<div class="well">
	<div class="form-inline">
		<label class="acquisition_type" id="manufacturer">Manufacturer &nbsp;</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="dell"/>
			Dell&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="acer"/>
			Acer&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="hp"/>
			HP&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="sony"/>
			Sony&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="toshiba"/>
			Toshiba&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="asus"/>
			ASUS&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="lenovo"/>
			Lenovo&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="manufacturer" value="e-machine"/>
			e-machine&nbsp;
		 </label>
		 <label class="radio">
			<input type="radio" name="manufacturer" value="custom"/>
			Custom&nbsp;
		 </label>
		 <label class="radio">
			<input type="radio" name="manufacturer" value="other"/>
			Other&nbsp;
		 </label>
	</div>
</div>
<div class="well">
	 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Model</label>
 	  	<div class="col-sm-4">
      <input type="model" name="model" class="form-control" id="model" placeholder="model">
    </div>
  </div>
</div>


<div class="dropdown">
  <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
	Dropdown
	<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
	<li role="presentation" class="divider"></li>
	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>

<select multiple class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
	

<div class="form-group">
	<label class="sr-only" for="exampleInputEmail2">Email address</label>
	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
  </div>
  <div class="form-group">
	<label class="sr-only" for="exampleInputPassword2">Password</label>
	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="checkbox">
	<label>
	  <input type="checkbox"> Remember me
	</label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
	

	{{ Form::label('manufacturer', 'Manufacturer', array('class' => '')) }}
	{{ Form::text('title', null, array('class' => 'form-control', 'placeholder'=>'Manufacturer')) }}

</div>
<div class="col-lg-6">

<h3>Checks</h3>
	<div class="well">
	
	

</div>

<!-- <div class="col-lg-2">
<h3>Comments</h3>
	{{ $errors->first('title', '<p><span class="help-block">:message</span><p>') }}
	{{ Form::label('body', 'Body') }}
	{{ $errors->first('body', '<p><span class="help-block">:message</span><p>') }}
</div> -->


	<button type="submit" class="btn btn-default">Add </button>	
	{{ Form::close() }}


@stop


