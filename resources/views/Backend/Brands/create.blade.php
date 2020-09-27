@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1>
          </div>

          <!-- Content Row -->
         <div class="container">
            <div class="row">          
               <main role="main" class="col-md-6  col-lg-10 ">
                  <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                     @csrf {{-- inpute type hidden torgen ပါကိုပါရမယ် မရပါရင် data မယူသွား--}}
                     
                     <div class="row">
                        <div class="col-md-12">
                           <label>Name</label>
                           <input type="text" class="form-control" name="name">
                           @error('name')
                           <label class="text-danger">Please input Name</label>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <label>Photo </label>
                           <input type="file" class="form-control-file" name="photo">
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
        <!-- /.container-fluid -->
</div>
@endsection