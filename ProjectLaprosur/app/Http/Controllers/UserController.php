<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
    public function Password($id){

        $user   = User::find($id);
        return view('auth.NewPasswordAvatar', compact('user'));
    }
    public function updatepassword(Request $request,$id){
        $user = User::findOrFail($id);
        if($request->newpasw == $request->confirnpasw){
        $user->fill([
            'password' => Hash::make($request->confirnpasw)
          ])->save();
        return redirect('/home')->with('updatepass', 'ok');
        }else{
            return redirect('/home')->with('error', 'over');
        }
        //$user->password = $request->input('newpasW');
        //$user->save();
        
        //return redirect('/home')->with(compact('user'));
            //$user->password = $request->input('newpasW');
        //$user->save();
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
