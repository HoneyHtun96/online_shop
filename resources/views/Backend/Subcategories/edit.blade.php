@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Subcategory</h1>
            <div class="text-right">
              <a href="{{route('subcategories.index')}}" class="mr-5" style="margin-right: 350px !important;"><i class="fas fa-arrow-alt-circle-left fa-2x"></i></a>
            </div>
          </div>

          <!-- Content Row -->
         <div class="container">
         	<div class="row">      		
         		<main role="main" class="col-md-6  col-lg-8 shadow">
         			<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
         				@csrf 
         				@method('PUT')
         				
         				<div class="row form-group my-3">
         					<div class="col-md-12">
         						<label>Name</label>
         						<input type="text" class="form-control" name="name" value="{{$subcategory->name}}">
         					</div>
         				</div>
                        
         				<div class="row my-3 form-group">
                        <div class="col-md-12">
                          <label>Category name</label>
                           <select class="form-control form-control-md" id="inputCategory" name="category">
                           <optgroup label="Choose Category">
                              @foreach($categories as $category)
                                 <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                           </optgroup>
                        </select>
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