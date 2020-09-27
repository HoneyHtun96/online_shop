$(document).ready(function(){

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	show_data();

	$('.addtocartBtn').click(function(){
		var id = $(this).data('id');
		var name = $(this).data('name');
		var price = $(this).data('price');
		var photo = $(this).data('photo');
		// console.log(id,name,price,photo);
		var item = {id:id,name:name,price:price,photo:photo,qty:1};

		var item_string = localStorage.getItem('itemlists');
		console.log(item_string);
		if(item_string == null){
			var item_obj = [];
			// console.log(item_obj);

		}else{
			var item_obj = JSON.parse(item_string);

		}

		var hasid = false;
		$.each(item_obj,function(i,v){
			if(id == v.id){
				hasid = true;
				v.qty++
			}
		})
		if(!hasid){
		item_obj.push(item);

		}

		localStorage.setItem('itemlists',JSON.stringify(item_obj));
		show_data();
	})

	function show_data(){
		var item_string = localStorage.getItem('itemlists');
		if(item_string){
			var item_obj = JSON.parse(item_string);

			var total=0; var data ='';
			$.each(item_obj,function(i,v){
				var subtotal = v.qty * v.price;
				total += subtotal;
				data+=`<tr>
							<td>
								<button class="btn btn-outline-danger remove btn-sm" style="border-radius: 50%"> 
									<i class="icofont-close-line"></i> 
								</button> 
							</td>
							<td> 
								<img src="${v.photo}" class="cartImg">						
							</td>
							<td> 
								<p>${v.name}</p>
								
							</td>
							<td>
								<button class="btn btn-outline-secondary plus_btn" data-id="${v.id}"> 
									<i class="icofont-plus"></i> 
								</button>
							</td>
							<td>
								<p> ${v.qty} </p>
							</td>
							<td>
								<button class="btn btn-outline-secondary minus_btn" data-id="${i}"> 
									<i class="icofont-minus"></i>
								</button>
							</td>
							<td>
								<p class="text-danger"> 
									${v.price} Ks
								</p>
								
							</td>
							<td>
								${subtotal}Ks
							</td>
						</tr>`;
			})
			data +=`<tr>
							<td colspan="8">
								<h3 class="text-right"> Total : ${total} Ks </h3>
							</td>
						</tr>`;
			$('#shoppingcart_table').html(data);
		
		}else{
			var data_empty = `<h4 class="text-center py-5"> There are no items in this cart </h4>
							`;
			$('#shoppingcart_table').html(data_empty);

		}

	}

	$('#shoppingcart_table').on('click','.plus_btn',function(){
		var id = $(this).data('id');
		var data_string = localStorage.getItem('itemlists');
		var data_obj = JSON.parse(data_string);
		$.each(data_obj,function(i,v){
			if(v.id == id){
				v.qty ++;
			}
		})
		localStorage.setItem('itemlists',JSON.stringify(data_obj));
		show_data();
	})

	$('#shoppingcart_table').on('click','.minus_btn',function(){
		var id = $(this).data('id');
		var data_string = localStorage.getItem('itemlists');
		var data_obj = JSON.parse(data_string);
		$.each(data_obj,function(i,v){
			if(id == i){
				v.qty --;
				if(v.qty == 0){
					data_obj.splice(id,1);
				}
			}
			
		})
		localStorage.setItem('itemlists',JSON.stringify(data_obj));
		show_data();
	})

	$('#shoppingcart_tfoot').on('click','.checkout_btn',function(){
		var note = $('#notes').val();
		var data_string = localStorage.getItem('itemlists');
		
		$.post('orders',{data_string:data_string,note:note},function(data){
			if (data) {
				alert(data);
				localStorage.clear();
				location.href = "/";
			}
		})


	})

})