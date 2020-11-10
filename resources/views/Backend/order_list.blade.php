@extends('Backend.backendtemplate')


@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order List</h1>
            
          </div>

          <!-- Content Row -->
        <div class="container-fluid">
         	<div class="row">
         		<table class="table table-bordered">
         			<thead class="thead-dark justify-content-center text-center">
         				<th>No</th>
         				<th>VoucherNo</th>
         				<th>Order Date</th>
                        <th>Total</th>
         				<th>User</th>
         				<th>Action</th>
         			</thead>
         			<tbody>

         				@php 
         				$i=1;
         				@endphp

         				@foreach ($orders as $order)
         					<tr>
         						<td>{{$i++}}</td>
         						<td>{{$order->voucherno}}</td>
         						<td>{{$order->orderdate}}</td>
         						<td>{{$order->total}}</td>
                                <td>{{$order->user->name}}</td>
         					
         						<td>
         							<a href="{{route('orders.show',$order->id)}}" class=""><i class="fas fa-info-circle fa-2x"></i></a>
                                    <a href="#" class="text-success order_confirm" data-id="{{$order->id}}"><i class="fas fa-check-circle fa-2x"></i></a>
         							
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
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.order_confirm').click(function(){
            var id = $(this).data('id');
            $.post("{{route('order_confirm')}}",{id:id},function(res){
                alert(res.msg);
                location.reload();

            })
        })
    })
</script>
@endsection