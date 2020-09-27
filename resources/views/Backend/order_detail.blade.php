@extends('Backend.backendtemplate')


@section('content')
<div class="container-fluid">
    <h1 class="">Voucherno : {{$order->voucherno}}</h1>
     <h1 class="">Orderdate : {{$order->orderdate}}</h1>

  </div>
  <!-- Content Row -->
<div class="container-fluid">
 	<div class="row">
 		<table class="table table-bordered">
 			<thead class="thead-dark justify-content-center text-center">
 				<th>No</th>
 				<th>Item Name</th>
 				<th>Price</th>
                <th>Quantity</th>
 				<th>Subtotal</th>
 				
 			</thead>
 			<tbody>

 				@php 
 				$i=1; 
                $total =0;
 				@endphp

 				@foreach ($order->items as $item)
                @php
                $subtotal = $item->price * $item->pivot->qty;
                $total+= $subtotal;
                @endphp
 					<tr>
 						<td>{{$i++}}</td>
 						<td>{{$item->name}}</td>
 						<td>{{$item->price}}</td>
 						<td>{{$item->pivot->qty}}</td>
                        <td>{{$subtotal}}</td>
 					</tr>

 				@endforeach
                <tr class="bg-dark text-white">
                    <td colspan="4">Total</td>
                    <td>{{$total}}</td>
                </tr>
 				
 			</tbody>

 		</table>

 	</div>
</div>
      
@endsection