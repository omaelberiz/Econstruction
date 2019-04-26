<?php

namespace App\Http\Controllers;

use App\Appartement;
use App\Programme;
use App\TypeAppart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $typeAppart = TypeAppart::all();
        $programmes = Programme::all();
        $appartements = Appartement::all();

        return view('admin.appartement.appartement')->with(['typeAppart'=> $typeAppart,'programmes'=>$programmes,'appartements'=>$appartements]);
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

        $validate = Validator::make($request->all(),[
            'libelle'=>'required',
            'superficie'=>'required',
            'piece'=>'required',
            'idPrograme'=>'required',
            'idAppartement'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'prix'=>'required'
        ]);
        if ($validate->fails())
        {
            return response()->json(['errors'=> $validate->errors()]);
        }
        else
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $appartement = new  Appartement();

            $appartement->libelle= $request->libelle;
            $appartement->superficie = $request->superficie;
            $appartement->piece = $request->piece;
            $appartement->idPrograme = $request->idPrograme;
            $appartement->idAppartement = $request->idAppartement;
            $appartement->image = $imageName;
            $appartement->prix= $request->prix;

            if ($appartement->save())
            {
                $appartement = Appartement::orderBy('created_at','desc')->first();
                return response()->json(['isSuccess'=> $appartement]);
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
