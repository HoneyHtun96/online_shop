@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Brand List</h1>
            <div class="text-right">
            	<a href="{{route('brands.create')}}"  class="btn btn-outline-primary">
            		Add New 
            	</a>
            </div>
          </div>


          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Brands List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead class=" justify-content-center text-center">
                        <th>No</th>
                        <th>Name</th>
                        <th>Photo</th>      
                        <th>Action</th>
                    </thead>
                    <tbody>

                        @php 
                        $i=1;
                        @endphp

                        @foreach ($brands as $brand) 

                            <tr>
                                <td>{{$i++}}</td>
                                
                                <td class="w-25">{{$brand->name}}</td>
                                <td class="w-25">
                                    <img src="{{asset($brand->photo)}}" class="img-fluid">                 
                                </td>
                            
                                <td class="text-center">
                                    <a href="" class=""><i class="fas fa-info-circle fa-2x"></i></a>
                                    <a href="{{route('brands.edit',$brand->id)}}" class="text-warning"><i class="far fa-edit fa-2x"></i></a>
                                    <form action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        
                    </tbody>
                </table>
              </div>
            </div>
          </div>


        
	</div>
@endsection