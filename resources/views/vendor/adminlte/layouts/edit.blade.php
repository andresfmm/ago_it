@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@foreach($companis as $compani)



@endforeach

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Form Companies</h3><br>

						

						

						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if (session('message'))
						<div class="alert alert-dismissible alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>{{ session('message') }}</strong>
						</div>
						@endif
                         
						
					</div>
					<div class="box-body">

					<div class="col-md-12" id="panel">
					<form action="{{url('edit', [$compani->id])}}" method="POST">
					{{csrf_field()}}
					<row>
						<div class="form-group col-md-12 col-sm-12" >
							<label for="title">title:</label>
							<input type="text" class="form-control" name="title" id="title" value="{{$compani->title}}">
						</div>
					</row>	
					<row>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="mission">Mission:</label>
							<input type="text" class="form-control" name="mission" value="{{$compani->mission}}">
						</div>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="vision">Vision:</label>
							<input type="text" class="form-control" name="vision" value="{{$compani->vision}}">
						</div>
					</row>
					<row>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="meta_title">Meta Title:</label>
							<input type="text" class="form-control" name="meta_title" value="{{$compani->meta_title}}">
						</div>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="desciption">Description:</label>
							<input type="text" class="form-control" name="description" value="{{$compani->meta_description}}">
						</div>
					</row>
					<row>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="company_Profile">Company Profile:</label>
							<input type="text" class="form-control" name="company_profile" value="{{$compani->company_profile}}">
						</div>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="keywords">Keywords:</label>
							<input type="text" class="form-control" name="keywords" value="{{$compani->meta_keywords}}">
						</div>
					</row>
						<button type="submit" class="btn btn-primary">update</button>
						<a href="{{url('/home')}}"  class="btn btn-primary pull-right">
                       <span class="glyphicon glyphicon-arrow-left"></span> Back
                       </a>
					</form>
						
					</div>

						<span ></span>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!--
<script src="../../../../../public/js/bootstrap.min.js"></script>
-->

@endsection
