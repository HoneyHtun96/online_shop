@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Add new Brand</h1>
    </div>

    <div class="container">
      <div class="row">          
         <main role="main" class="col-md-6  col-lg-10 shadow">
            <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
               @csrf 
               <div class="form-group row my-3">
                  <div class="col-md-12">
                     <label>Name</label>
                     <input type="text" class="form-control" name="name">
                     @error('name')
                     <label class="text-danger">Please input Name</label>
                     @enderror
                  </div>
               </div>
               <div class="form-group row my-3">
                  <div class="col-md-12">
                     <label>Photo </label>
                     <input type="file" class="form-control-file" name="photo">
                  </div>
               </div>
               <div class="row my-3">
                  <div class="col-md-12"> 
                     <input type="submit" value="Create" class="btn btn-primary" name="btnsubmit">
                  </div>
               </div>
            </form>
         </main>
      </div>

    </div>
  </div>
@endsection