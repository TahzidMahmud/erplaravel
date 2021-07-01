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
