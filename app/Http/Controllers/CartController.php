<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartpage(){
        return view('cart');
    }

    public function addcart(Request $request){

        $duplicates = Cart::search(function($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart')->with('error_message','Item is already in your cart!');
        }


        Cart::add($request->id, $request->name, 1, $request->advance, ['artist'=>$request->artist]);
        return redirect()->route('cart')->with('success_message','Item was added to your cart!');
    }

    public function remove($id){
        Cart::remove($id);

        return back()->with('success_message','Item was deleted from your cart!');
    }


}
