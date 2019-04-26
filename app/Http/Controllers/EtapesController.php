<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppartClient;
use App\Appartement;
use App\Localisation;
use App\Programme;
use App\User;

class EtapesController extends Controller
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
        return view('admin.client.etape')->with(['users'=>$user,'appartements'=>$appartements,'commandes'=>$commandes,'programmes'=> $programmes,'villes'=> $villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = session()->has('User') ? session()->get('User') : null;
        $commades = AppartClient::where('IdClient',$user->id)->get();

        return view('client.commande.liste')->with(['user'=> $user, 'commandes'=> $commades]);
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
