@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
          </div>

          <!-- Content Row -->
         <div class="container">
         	<div class="row">      		
         		<main role="main" class="col-md-6  col-lg-10 ">
         			<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
         				@csrf {{-- inpute type hidden torgen ပါကိုပါရမယ် မရပါရင် data မယူသွား--}}
         				<div class="row my-3">
         					<div class="col-md-12">
         						<label>Code No</label>
         						<input class="form-control" type="text" name="codeno">
                           @error('codeno')
                              <label class="text-danger">Please input Code Number must 4 number</label>
                           @enderror

         					</div>
         				</div>
         				<div class="row my-3">
         					<div class="col-md-12">
         						<label>Name</label>
         						<input type="text" class="form-control" name="name">
                           @error('name')
                              <label class="text-danger">Please input Name</label>
                           @enderror
         					</div>
         				</div>
         				<div class="row my-3">
         					<div class="col-md-12">
         						<label>Photo </label>

         						<input type="file" class="form-control-file" name="photo">
                           @error('photo')
                              <label class="text-danger">Please input Photo</label>
                           @enderror

         					</div>
         					
         				</div>

         				<div class="row my-3">
         					<div class="col-md-12">
         						<label>Price </label>
         						<input type="number" name="price" class="form-control price">
                           @error('price')
                              <label class="text-danger">Please input Price</label>
                           @enderror
         					</div>
         				</div>
         				<div class="row my-3">
         					<div class="col-md-12">
                           <label>Brands</label>
                           <select class="form-control form-control-md" id="inputBrand" name="brand">
                              <optgroup label="Choose Brand">
                                 @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                 @endforeach
                              </optgroup>
                           </select>
                        </div>
         					
         				</div>
         				
         				<div class="row my-3">
                        <div class="col-md-12">
                           <label>SubCategories</label>
                           <select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
                              <optgroup label="Choose Subcategories">
                                 @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                 @endforeach
                              </optgroup>
                           </select>
                        </div>
                     </div>        				


         				<div class="row my-3">
         					<div class="col-md-12 ">
         						<label>Discount</label>
         						<input type="text" class="form-control" name="discount" value="0">
                           @error('discount')
                              <label class="text-danger">Please input Discount</label>
                           @enderror
         					</div>
         				</div>
         				<div class="row my-3">

         					<div class="col-md-12 ">
         						<label>Description</label>
         						<textarea class="form-control" name="description"></textarea>
                           @error('codeno')
                              <label class="text-danger">Please input Description</label>
                           @enderror
         					</div>
         				</div>
         				<div class="row my-3">
         					<div class="col-md-12"> 
         						<input type="submit" value="Create" class="btn btn-success" name="btnsubmit">
         					</div>
         				</div>
         			</form>
         		</main>
         	</div>
         </div>
        <!-- /.container-fluid -->
</div>
@endsection