<?php

namespace App\Http\Controllers;

use App\Models\Cart_item;
use App\Http\Requests\StoreCart_itemRequest;
use App\Http\Requests\UpdateCart_itemRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $items = Cart_item::where('user_id','=', $user_id)->get();
            $items_count = Cart_item::where('user_id','=', $user_id)->count();
            $sumtotal = 0;
            for($i=0;$i<=$items_count-1;$i++)
            {
                $product_name = Product::where('id','=',$items[$i]["product_id"])->pluck('name');
                $items[$i][6] = $product_name;
                $product_name = Product::where('id','=',$items[$i]["product_id"])->pluck('price');
                $items[$i][7] = $product_name;
                $price = $items[$i][7];
                $qty = $items[$i]['quantity'];
                $total[$i] = $price[0]*$qty;
                $sumtotal = $sumtotal+$total[$i];
                $items[$i][8] = $total[$i];
            }
            $user_name = Auth::user()->name;
            $data = ['items' => $items, 'user_name' => $user_name, 'sumtotal' => $sumtotal];
            return view('products.cart_item',$data);
        }
        else
        {
            return redirect()->route('login.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $cart_item_user_id=Cart_item::where('user_id','=',$user_id)->count();
            $cart_item_product_id=Cart_item::where('product_id','=', $product_id)->count();
            $id = Cart_item::where('user_id','=',$user_id)->where('product_id','=', $product_id)->pluck('id');
            if($cart_item_user_id > 0 && $cart_item_product_id >0)
            {
                $add_id = Cart_item::find($id[0]);
                $quantity = Cart_item::where('user_id','=',$user_id)->where('product_id','=', $product_id)->pluck('quantity');
                $value = $quantity[0]+1;
                $add_id->update(['quantity'=> $value]);
                return redirect()->route('cart_items.index');

            }
            else
            {
                Cart_item::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'quantity' =>  1,
                ]);
                return redirect()->route('cart_items.index');
            }
        }
        else
        {
            return redirect()->route('login.index');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCart_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_item $cart_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCart_itemRequest  $request
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item = Cart_item::find($id);

        $quantity = $request->quantity;

        $item->update(['quantity' => $quantity]);

        return redirect()->route('cart_items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart_item  $cart_item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart_item::destroy($id);
        return redirect()->route('cart_items.index');
    }
}
