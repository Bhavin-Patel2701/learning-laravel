<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function implicitindex()
    {
        $word = "implicitindex";
        echo $word;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function implicitcreate()
    {
        $word = "implicitcreate";
        echo $word;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function implicitstore(Request $request)
    {
        $word = "implicitstore";
        echo $word;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function implicitshow($id)
    {
        $word = "implicitshow";
        echo $word;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function implicitedit($id)
    {
        $word = "implicitedit";
        echo $word;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function implicitupdate(Request $request, $id)
    {
        $word = "implicitupdate";
        echo $word;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function implicitdestroy($id)
    {
        $word = "implicitdestroy";
        echo $word;
    }
}
