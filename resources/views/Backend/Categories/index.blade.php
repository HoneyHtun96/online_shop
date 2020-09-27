@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories List</h1>
            <div class="text-right">
            	<a href="{{route('categories.create')}}"  class="btn btn-success">
            		Add New Categories
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

         				@foreach ($categories as $category) {{-- itemsက itemcontroller ကနေပို့လာတဲ့name --}}

         					<tr>
         						<td>{{$i++}}</td>
         						
         						<td>{{$category->name}}</td>
         						<td>
                                    <img src="{{asset($category->photo)}}" class="img-fluid w-25">                 
                                </td>
         					
         						<td>
         							<a href="" class="btn btn-primary">Detail</a>
         							<a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a>
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