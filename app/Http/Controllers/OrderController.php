<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    public function __construct($value=''){
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('status',0)->get();
        return view('Backend.order_list',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data_array = json_decode($request->data_string);
        $total = 0;

        foreach ($data_array as $data) {
            $total += $data->price * $data->qty;
        }

        $order = new Order;
        $order->voucherno = uniqid();
        $order->orderdate = date('Y-m-d');
        $order->note = $request->note;
        $order->total = $total;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->user_id = Auth::id();
        $order->save();

        foreach ($data_array as $data) {
            $order->items()->attach($data->id,['qty' => $data->qty]);
        }

        return 'Order Successfully!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        
        return view('Backend.order_detail',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function dashboard(){
        $order_confirms = Order::where('status',1)->get();
        $order_pendings = Order::where('status',0)->get();

        return view('Backend.dashboard',compact('order_confirms','order_pendings'));

    }

    public function order_confirm(Request $request)
    {
        $id = request('id');
        $order = Order::find($id);
        $order->status =1;
        $order->save();
        return response()->json(['msg'=>'Order Confirmed Successfully!']);
    }

    public function report(Request $request)
    {
        $start_date = request('start_date');
        $end_date = request('end_date');
        $orders = Order::whereBetween('orderdate',[$start_date,$end_date])->with('user')->orderBy('created_at','desc')->get();
     
        return response()->json(['orders' => $orders]);
    }
}
