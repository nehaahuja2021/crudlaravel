<?php

namespace App\Http\Controllers;

use App\Models\trial;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('post_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res= new trial;
        $res->Post=$request->input('yourpost');
        
        $res->save();
    $request->session()->flash('msg','Post submitted');
    return redirect('post_create');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function show(trial $trial)
    {
        return view ('post_create')->with('postArr',trial::all());
        // as i want to show search results on same page as create
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function edit(trial $trial,$id)
    {
        
        return view ('post_edit')->with('postArr',trial::where("id", $id)->get());

              
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trial $trial)
    {
       $res1= new trial;
        $res1->Post=$request->input('yourpost1');
        
        $res1->save();
    $request->session()->flash('msg','Post submitted');
    return redirect('post_create');
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trial  $trial
     * @return \Illuminate\Http\Response
     */
}
    public function destroy(trial $trial,$id)
    {
        //echo '<pre>';
        //print_r($id);(pass the id received in url and using that id delete the record)

        trial::destroy(array('id',$id));
        return redirect('post_create');
    }
}
