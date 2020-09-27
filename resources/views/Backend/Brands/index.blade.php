@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Brand List</h1>
            <div class="text-right">
            	<a href="{{route('brands.create')}}"  class="btn btn-success">
            		Add New Brands
            	</a>
            </div>
          </div>

          <!-- Content Row -->
       <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead class="thead-dark justify-content-center text-center">
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
                                
                                <td>{{$brand->name}}</td>
                                <td>
                                    <img src="{{asset($brand->photo)}}" class="img-fluid w-25">                 
                                </td>
                            
                                <td>
                                    <a href="" class="btn btn-primary">Detail</a>
                                    <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-info">Edit</a>
                                    <form action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        
                    </tbody>
                </table>

            </div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection