<?php

namespace App\Http\Controllers;

use App\TypeAppart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeAppartController extends Controller
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
        return view('admin.appartement.typeappart')->with(['typeAppart'=> $typeAppart]);
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
        //dd($request->file('representation'),$_FILES);

        $validate = Validator::make($request->all(),[
            'libelle'=>'required',
            'representation'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validate->fails())
        {
            return response()->json(['errors'=> $validate->errors()]);
        }
        else
        {
            $imageName = time().'.'.$request->representation->getClientOriginalExtension();
            $request->representation->move(public_path('images'), $imageName);
            //$request->representation = $imageName;
            $typeAppart = new TypeAppart();

            $typeAppart->libelle = $request->libelle;
            $typeAppart->representation = $imageName;

            if ($typeAppart->save())
            {
                $typeAppart = TypeAppart::orderBy('created_at','desc')->first();
                return response()->json(['isSuccess'=> $typeAppart]);
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
