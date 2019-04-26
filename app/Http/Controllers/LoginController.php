<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('client.login.login');
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
        //dd($request);

        $validate = Validator::make($request->all(),[
           'login' => 'required',
           'login_pass' => 'required'
        ]);
        if ($validate->fails())
        {
            return response()->json(['errors'=> $validate->errors()]);
        }
        else
        {
            $request->login_pass = md5($request->login_pass);
            //dump($request->login_pass);
           $user = User::where('email',$request->login)->where('password',$request->login_pass)->first();
           // dd($user);
           if (isset($user) && !empty($user))
           {
               session()->put('User',$user);
               session()->save();
               return response()->json(['isSuccess'=> 'success']);
           }
           else
           {
               $validate->errors()->add('userpass','mot de passe ou email incorrect');
               return response()->json(['errors'=> $validate->errors()]);
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
    public function destroy()
    {
        if (! session()->has('User'))
        {
            return abort('404');
        }
        session()->forget('User');
        session()->save();
        return redirect('/');
    }
}
