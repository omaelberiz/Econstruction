<?php

namespace App\Http\Controllers;

use App\Localisation;
use App\Programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgrammesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programmes = Programme::all();
        $localisation = Localisation::all();
        return view('admin.localisation.programmes')->with(['programmes'=> $programmes,'localisation'=> $localisation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view();
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
        $validate = Validator::make($request->all(),[
                'idLocalisation'=>'required',
            'libellePro'=>'required'
        ]);
        if ($validate->fails())
        {
            return response()->json(['errors'=> $validate->errors()]);
        }
        else
        {
            $programme = new Programme($request->all());

            if ($programme->save())
            {
                $pro = Programme::orderBy('created_at','desc')->first();
                return response()->json(['isSuccess'=> $pro]);
            }
        }
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
