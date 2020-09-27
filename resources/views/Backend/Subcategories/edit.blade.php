@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">SubCategory Edit Form</h1>
          </div>

          <!-- Content Row -->
         <div class="container">
         	<div class="row">      		
         		<main role="main" class="col-md-6  col-lg-10 ">
         			<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
         				@csrf {{-- inpute type hidden torgen ပါကိုပါရမယ် မရပါရင် data မယူသွား--}}
         				@method('PUT')
         				
         				<div class="row">
         					<div class="col-md-12">
         						<label>Name</label>
         						<input type="text" class="form-control" name="name" value="{{$subcategory->name}}">
         					</div>
         				</div>
                        
         				<div class="row my-3">
                        <div class="col-md-12">
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
         						<input type="submit" value="Update" class="btn btn-success" name="btnsubmit">
         					</div>
         				</div> 
         			</form>
         		</main>
         	</div>
         </div>
        <!-- /.container-fluid -->
</div>
@endsection