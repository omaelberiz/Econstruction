<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComptesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //dd($request);

        $validate = Validator::make($request->all(),[
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'adresse' => 'required',
            'email' => 'required',
            'password' => 'required',
            'passwordC' => 'required'
        ]);

        if ($validate->fails())
        {
            return response()->json(['errors'=> $validate->errors()]);
        }
        elseif ($request->password != $request->passwordC)
        {
            $validate->errors()->add('passwordC','mot de passe incorrect');
            return response()->json(['errors'=> $validate->errors()]);
        }
        else
        {
            $request->password = md5($request->password);
            $user = new User();

            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->contact = $request->contact;
            $user->email = $request->email;
            $user->adresse = $request->adresse;
            $user->password = $request->password;
            $user->typeProfile = 2;

            if ($user->save())
            {
                return response()->json(['isSuccess'=>$request->all()]);
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
