<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("nhosting.index");
    }
    public function about()
    {
        return view("nhosting.about");
    }
    public function contact()
    {
        return view("nhosting.contact");
    }public function pricing()
    {
        return view("nhosting.pricing");
    }public function hosting()
    {
        return view("nhosting.hosting");
    }public function main()
    {
        return view("nhosting.main");
    }public function blog_details()
    {
        return view("nhosting.blog-details");
    }public function blog()
    {
        return view("nhosting.blog");
    }public function file404()
    {
        return view("nhosting.404");
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
