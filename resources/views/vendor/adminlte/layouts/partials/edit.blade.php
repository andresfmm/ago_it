@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection




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

					<div class="col-md-12" id="panel" style="display:none">
					<form action="{{url('create_compani')}}" method="POST" style="padding-bottom:20px; ">
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
							<input type="text" class="form-control" name="mission">
						</div>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="vision">Vision:</label>
							<input type="text" class="form-control" name="vision">
						</div>
					</row>
					<row>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="meta_title">Meta Title:</label>
							<input type="text" class="form-control" name="meta_title">
						</div>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="desciption">Description:</label>
							<input type="text" class="form-control" name="description">
						</div>
					</row>
					<row>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="company_Profile">Company Profile:</label>
							<input type="text" class="form-control" name="company_profile">
						</div>
						<div class="form-group col-md-6 col-sm-12" >
							<label for="keywords">Keywords:</label>
							<input type="text" class="form-control" name="keywords">
						</div>
					</row>
						<button type="submit" class="btn btn-primary">create</button>
					</form>
						
					</div>

						<div class="col-md-12">    
							<table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

								<thead>
								<button type="button" class="btn btn-primary pull-right" id="flip">New</button>
									<tr>
									    <th>id</th>
										<th>title</th>
										<th>slug</th>               
										<th>company_Profile</th>
										<th>mision</th>
										<th>vision</th>
										<th>actions</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>        
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<!--
<script src="../../../../../public/js/bootstrap.min.js"></script>
-->

@endsection
