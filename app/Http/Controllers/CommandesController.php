<?php

namespace App\Http\Controllers;

use App\AppartClient;
use App\Appartement;
use App\Localisation;
use App\Programme;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;


class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $appartements = Appartement::all();
        $commandes = AppartClient::all();
        $programmes = Programme::all();
        $villes = Localisation::all();
        return view('admin.client.commande')->with(['users'=>$user,'appartements'=>$appartements,'commandes'=>$commandes,'programmes'=> $programmes,'villes'=> $villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (!session()->has('User') || !session()->has('Cart'))
        {
            return redirect()->route('accueil');
        }
        else
        {
            $cart = session()->get('Cart');
            $user = session()->get('User');

            //dd($cart, $user);

            $appartClient = new AppartClient();
            foreach ($cart->items as $item){

                $appartClient->etapes = 0;
                $appartClient->idAppartement = $item['item']->id;
                $appartClient->IdClient = $user->id;
                $appartClient->save();
            }

            $commande = AppartClient::orderBy('created_at','desc')->first();
            $pdf = PDF::loadView('client.recu.recu', compact(['cart','user', 'commande']))->setPaper('a4', 'landscape');
            $name = "commandeNo-".$commande->id.".pdf";
            session()->forget('Cart');
            session()->save();
            return $pdf->download($name);
            //return view('client.recu.recu')->with(['cart'=> $cart,'user'=> $user, 'commande'=> $commande]);

        }

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
    }
}
