@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Subcategory List</h1>
            <div class="text-right">
            	<a href="{{route('subcategories.create')}}"  class="btn btn-outline-primary">
            		Add New
            	</a>
            </div>
          </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Subcategory List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
             		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             			<thead class="justify-content-center text-center">
             				<th>No</th>	
                            <th>SubcategoryName</th>
                            <th>Category Name</th>
             				<th>Action</th>
             			</thead>
             			<tbody>

             				@php 
             				$i=1;
             				@endphp

             				@foreach ($subcategories as $subcategory) 
             					<tr>
             						<td>{{$i++}}</td>
             						<td>{{$subcategory->name}}</td>
                                    <td>{{$subcategory->category->name}}</td>

             						<td>
             							
             							<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
             							<form action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block" method="POST">
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
        <!-- /.container-fluid -->
	</div>
@endsection