@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Subcategory List</h1>
            <div class="text-right">
            	<a href="{{route('subcategories.create')}}"  class="btn btn-success">
            		Add New SubCategory
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row">
         		<table class="table table-bordered">
         			<thead class="thead-dark justify-content-center text-center">
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
         							<a href="" class="btn btn-primary">Detail</a>
         							<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-info">Edit</a>
         							<a href="" class="btn btn-danger">Delete</a>
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