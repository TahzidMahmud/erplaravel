<?php

namespace App\Http\Controllers;

use App\MainAccount;
use Illuminate\Http\Request;

class MainAccountController extends Controller
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
    public function lastacc($type)
    {
        $res=MainAccount::where('acc_type',$type)->latest()->first();

        return response(["last"=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("MainAccount.Create");
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res=MainAccount::create([
            'acc'=>$request->acc,
            'acc_desc'=>$request->acc_desc,
            'acc_type'=>$request->acc_type,
            'acc_use'=>$request->acc_use,
            'acc_source'=>$request->acc_source,
            'level1'=>$request->level1,
            'level2'=>$request->level2,
            'level3'=>$request->level3
        ]);
        if($res){
            return response(["message"=>"Created Successfully","type"=>"success"]);
        }else{
            return response(["message"=>"Can't create","type"=>"error"]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function show(MainAccount $mainAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(MainAccount $mainAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainAccount $mainAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainAccount $mainAccount)
    {
        //
    }
}
