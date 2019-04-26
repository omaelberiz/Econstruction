<?php

namespace App\Http\Controllers;

use App\Appartement;
use App\Localisation;
use App\Programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localisations = Localisation::all();
        $programmes = Programme::all();
        $appartements = Appartement::all();
        return view('client.index')->with(['appartements'=> $appartements, 'programmes'=> $programmes, 'localisations'=> $localisations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeAppart($id)
    {
        //appartement partipe

        $localisations = Localisation::all();
        $programmes = Programme::all();
        $appartements = Appartement::where('idAppartement','=',$id)->get();
        //dd($appartements);
        return view('client.details.typeMaison')->with(['appartements'=> $appartements, 'programmes'=> $programmes, 'localisations'=> $localisations]);
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
        $details = DB::table('appartements')->join('programmes','programmes.id','=','appartements.idPrograme')
            ->join('type_apparts','type_apparts.id','=','appartements.idAppartement')
            ->join('localisations','programmes.idLocalisation','=','localisations.id')
            ->where('appartements.id','=',$id)->first();

        $appart = Appartement::where('id', $id)->first();
        //$programmes = Programme::all();
        //dd($details);
        return view('client.details.details')->with(['details'=> $details,'appart'=> $appart]);
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
