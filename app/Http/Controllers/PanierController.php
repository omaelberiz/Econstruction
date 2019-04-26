<?php

namespace App\Http\Controllers;

use App\Appartement;
use App\Cart;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $currentCart = session()->has('Cart')? session()->get('Cart') : null;
        $cart = new Cart($currentCart);

        return view('client.panier.panier');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $appartement = Appartement::where('id',$id)->first();
        $currentCart = session()->has('Cart')? session()->get('Cart') : null;

        $cart = new Cart($currentCart);
        $resultat = $cart->add($appartement->id, $appartement);
        //dd($cart);
        session()->put('Cart', $cart);
        session()->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $current = session()->has('Cart')? session()->get('Cart'): null;
        $cart = new Cart($current);
        $cart->delete($id);

        session()->put('Cart', $cart);
        session()->save();
        if (count($cart->items )<= 0)
        {
            session()->forget('Cart');
        }
        return redirect()->back();
    }
}
