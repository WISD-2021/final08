<?php

namespace App\Http\Controllers;

use App\Models\Cart_item;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::orderBy('created_at', 'ASC')->get();
        $data=['orders'=>$orders];
        return view('admin.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $items = Cart_item::where('user_id','=', $user_id)->get();
            $items_count = Cart_item::where('user_id','=', $user_id)->count();
            for($i=0;$i<=$items_count-1;$i++)
            {
                Order::create([
                    'user_id' => $user_id,
                    'product_id' => $items[$i]["product_id"],
                    'quantity' => $items[$i]["quantity"],
                ]);
                Cart_item::destroy($items[$i]["id"]);

                $product = Product::find($items[$i]["product_id"]);
                $invent = Product::where('id','=', $items[$i]["product_id"])->pluck('invent');
                $new_invent = $invent[0]-$items[$i]['quantity'];
                $product->update(['invent' => $new_invent]);
            }
            return redirect()->route('login.index');
        }
        else
        {
            return redirect()->route('login.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('admin.orders.index');
    }
}
