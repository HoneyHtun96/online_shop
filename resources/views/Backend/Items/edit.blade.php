@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
          </div>

          <!-- Content Row -->
         <div class="container">
         	<div class="row">      		
         		<main role="main" class="col-md-6  col-lg-10 ">
         			<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
         				@csrf 
                     {{-- inpute type hidden torgen ပါကိုပါရမယ် မရပါရင် data မယူသွား--}}
         				@method('PUT')
         				<div class="row ">
         					<div class="col-md-12">
         						<label>Code No</label>
         						<input class="form-control" type="text" name="codeno" value="{{$item->codeno}}" readonly="readonly">
         					</div>
         				</div>
         				<div class="row">
         					<div class="col-md-12">
         						<label>Name</label>
         						<input type="text" class="form-control" name="name" value="{{$item->name}}">
         					</div>
         				</div>
         				<div class="row">
         					<div class="col-md-12">
         						<label>Photo </label>

         						<input type="file" class="form-control-file" name="photo">
         						<img src="{{asset($item->photo)}}" class="img-fluid w-25">
         						<input type="hidden" name="oldphoto" value="{{$item->photo}}">{{-- မူလပုံကိုယူလာ --}}

         					</div>
         					
         				</div>
         				<div class="row">
         					<div class="col-md-12">
         						<label>Price </label>
         						<input type="number" name="price" class="form-control price" value="{{$item->price}}">
         					</div>
         				</div>
         				<div class="form-group row my-3 {{$errors->has('brand')? 'has-error':''}}">
         					<label>Brands</label>
         					<select class="form-control form-control-md" id="inputBrand" name="brand">
         						<optgroup label="Choose Brand">
         							@foreach($brands as $brand)
         								<option value="{{$brand->id}}">{{$brand->name}}</option>
         							@endforeach
         						</optgroup>
         					</select>
         					<span class="text-danger">{{$errors->first('brand')}}</span>
         				</div>
         				<div class="form-group row my-3 {{$errors->has('category')? 'has-error':''}}">
         					<label>SubCategories</label>
         					<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
         						<optgroup label="Choose Subcategories">
         							@foreach($subcategories as $subcategory)
         								<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
         							@endforeach
         						</optgroup>
         					</select>
         				</div>


         				<div class="row ">
         					<div class="col-md-12 ">
         						<label>Discount</label>
         						<input type="text" class="form-control" name="discount" value="{{$item->discount}}">
         					</div>
         				</div>
         				<div class="row ">

         					<div class="col-md-12 ">
         						<label>Description</label>
         						<textarea class="form-control" name="description">{{$item->description}}</textarea>
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