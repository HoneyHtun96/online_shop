@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Categories</h1>
            <div class="text-right">
              <a href="{{route('categories.index')}}" class="mr-5" style="margin-right: 250px !important;"><i class="fas fa-arrow-alt-circle-left fa-2x"></i></a>
            </div>
          </div>

          <!-- Content Row -->
         <div class="container">
         	<div class="row">      		
         		<main role="main" class="col-md-6  col-lg-10 ">
         			<form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
         				@csrf 
         				@method('PUT')
         				
         				<div class="row form-group my-3">
         					<div class="col-md-12">
         						<label>Name</label>
         						<input type="text" class="form-control" name="name" value="{{$category->name}}">
         					</div>
         				</div>
         				<div class="row form-group my-3">
         					<div class="col-md-12">
         						<label>Photo </label>

         						<input type="file" class="form-control-file" name="photo">
         						<img src="{{asset($category->photo)}}" class="img-fluid w-25 my-3">
         						<input type="hidden" name="oldphoto" value="{{$category->photo}}">

         					</div>
         					
         				</div>
         				
         				<div class="row my-3">
         					<div class="col-md-12"> 
         						<input type="submit" value="Update" class="btn btn-primary" name="btnsubmit">
         					</div>
         				</div>
         			</form>
         		</main>
         	</div>
         </div>
        <!-- /.container-fluid -->
</div>
@endsection