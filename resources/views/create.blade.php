@extends ('layouts.admin_header')

@section('content')

<hr/>
<div class="container">
<div class="row">
<div class="col-md-6">

<form class="form-horizontal" method="POST" action="{{url('/insert')}}">
{{(csrf_field())}}

<fieldset>
<legend style="color: green">Administrator Dashboard (Create Project) </legend>
<!-- displayig the error for the validated fields of the form defined in the controller-->
@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif

<div class="form-group">
<label for="title" clas="col-lg-2 control-label"> Title of Research / Task</label>  
<div class="col-lg-10">
<input type="text" id="title" name="title" placeholder="Title of Research / Task" class="form-control" size="70">
</div>
</div>

<div class="form-group">
<label for="specification" clas="col-lg-2 control-label"> Specifications</label>  
<div class="col-md-8">
<textarea id="specification" name="specification" placeholder="Specifications" class="form-control" rows="4" cols="70">
</textarea>
</div>
</div>

<div class="form-group">
<label for="Results" clas="col-lg-2 control-label"> Results</label>  
<div class="col-md-8">
<textarea id="result" name="result" placeholder="Results" class="form-control" rows="4" cols="70">
</textarea>
</div>
</div>

<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">

<button class="btn btn-primary"><a href="{{( 'admin' )}}"> Back </a> </button>
<button type="reset" class="btn btn-danger"> Cancel </button>
<button type="submit" class="btn btn-success"> Submit </button>
</div>
</div>
</fieldset>
</form>

</div>
</div>
</div>
<hr/>

@include('inc.footer')

@endsection
