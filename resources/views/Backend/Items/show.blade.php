@extends('Backend.backendtemplate')


@section('content')
<div class="container-fluid">
		<h3>Detail Information of items</h3>

	<div class="row mt-5">
		<div class="col-md-4">
			<img src="{{asset($item->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<h5>Name: {{$item->name}}</h5>
			<h5>Codeno : {{$item->codeno}}</h5>
			<h5>Price : {{$item->price}} Ks</h5>
			<h5>Discount: {{$item->discount}}</h5>
			<h5>Brand name: {{$item->brand->name}}</h5>
			<h5>Subcategory name: {{$item->subcategory->name}}</h5>
			<p>Discription: {{$item->description}}</p>


		</div>
	</div>
</div>
@endsection