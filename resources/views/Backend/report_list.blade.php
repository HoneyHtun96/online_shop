@extends('Backend.backendtemplate')


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
				<label>Start Date:</label>
				<input type="date" name="start_date" class="form-control" id="start_date">
			</div>
		</div>

		<div class="col-md-5">
			<div class="form-group">
				<label>End Date:</label>
				<input type="date" name="end_date" class="form-control" id="end_date">
			</div>
		</div>	

		<div class="col-md-2">
			
				<button class="btn btn-outline-primary search mt-4">Search</button>
			
		</div>
	</div>

	   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Report List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
             		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             			<thead class="justify-content-center text-center">
             				<th>No</th>
             				<th>Voucher No</th>
             				<th>Name</th>
             				<th>Phone</th>
             				<th>Address</th>
             				<th>Price</th>		
             				
             			</thead>
             			<tbody id="data_show">
             				
             			</tbody>
             			<tfoot class="justify-content-center text-center">
             				<th>No</th>
             				<th>Voucher No</th>
             				<th>Name</th>
             				<th>Phone</th>
             				<th>Address</th>
             				<th>Price</th>		
             				
             			</tfoot>
             		</table>
                </div>

         	</div>
        </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.card').hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.search').click(function(){
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            console.log(start_date,end_date);
            $.post("{{route('report')}}",{start_date:start_date,end_date:end_date},function(res){
            	var total=0; var data=""; var i=1;
            	$.each(res.orders,function(i,v){
            		total += v.total;
            		data +=`<tr>
            					<td>${i++}</td>
            					<td>${v.voucherno}</td>
            					<td>${v.user.name}</td>
            					<td>${v.phone}</td>
            					<td>${v.address}</td>
            					<td>${v.total}</td>
            					

            				</tr>`;

            	})
            	data+= `<tr>
            				<td colspan="5">Total Price</td>
            				<td>${total}</td>

            			</tr>`;
            			
               $('#data_show').html(data);
		      $('.card').show();


            })
        })
    })
</script>
@endsection